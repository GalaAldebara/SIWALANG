<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            } else if ($user->level_id == '2') {
                return redirect()->intended('RW');
            } else if ($user->level_id == '3') {
                return redirect()->intended('RT');
            } else if ($user->level_id == '4') {
                return redirect()->intended('warga');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('nik', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            } else if ($user->level_id == '2') {
                return redirect()->intended('RW');
            } else if ($user->level_id == '3') {
                return redirect()->intended('RT');
            } else if ($user->level_id == '4') {
                return redirect()->intended('warga');
            }
            return redirect()->intended('/');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Username dan Password salah']);
    }

    public function ubah_password()
    {
        return view('warga.DataDiri.formPassword');
    }

    public function prosesChangePassword(Request $request)
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Data Diri']
        ];

        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->oldPassword, $user->password)) {
            return redirect()->back()->withErrors(['oldPassword' => 'Password lama tidak cocok.']);
        }

        UserModel::where('user_id', $user->user_id)->update([
            'password' => Hash::make($request->newPassword)
        ]);

        // Perbarui password langsung di dalam database
        // DB::table('m_user')
        //     ->where('user_id', $user->user_id)
        //     ->update(['password' => Hash::make($request->newPassword)]);

        return view('warga.DataDiri.formDataDiri', ['header' => $header]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
