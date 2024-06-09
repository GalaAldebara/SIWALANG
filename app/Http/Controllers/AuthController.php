<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'login' => 'required',
            'password' => 'required'
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        $credentialsNik = ['nik' => $login, 'password' => $password];
        $credentialsUsername = ['username' => $login, 'password' => $password];

        if (Auth::attempt($credentialsNik) || Auth::attempt($credentialsUsername)) {
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
            ->withErrors(['login_gagal' => 'NIK atau password salah.']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
