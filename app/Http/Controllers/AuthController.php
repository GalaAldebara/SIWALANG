<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Hash;
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
            } else if ($user->level == '2') {
                return redirect()->intended('RW');
            } else if ($user->level == '3') {
                return redirect()->intended('RT');
            } else if ($user->level == '4') {
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
            ->withErrors(['login_gagal' => 'Pastikan kembali NIK dan password yang dimasukkan sudah benar']);
    }

    public function ubah_password()
    {
        return view('warga.DataDiri.formPassword');
    }

    public function prosesChangePassword(Request $request)
    {

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'Password Lama Salah');
        }

        if ($request->newPassword != $request->repeatPassword) {
            return back()->with('error', 'Password Baru Tidak Sesuai');
        }

        auth()->user()->update([
            'password' => Hash::make($request->newPassword)
        ]);
    }

    // public function prosesChangePassword(Request $request)
    // {
    //     $request->validate([
    //         'oldPassword' => 'required',
    //         'newPassword' => 'required|string|min:8|confirmed',
    //     ]);

    //     $user = Auth::user();

    //     if (!Hash::check($request->oldPassword, $user->password)) {
    //         return redirect()->back()->withErrors(['oldPassword' => 'Password lama tidak cocok.']);
    //     }

    //     // Perbarui password langsung di dalam database
    //     DB::table('m_user')
    //         ->where('user_id', $user->user_id)
    //         ->update(['password' => Hash::make($request->newPassword)]);

    //     return redirect()->back()->with('success', 'Password berhasil diubah.');
    // }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
