<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/home');
        } else {
            return view('auth.login', ["title" => 'login']);
        }
    }

    public function loginProcess(Request $request)
    {
        $data = [
            "email" => $request->input('email'),
            "password" => $request->input('password')
        ];

        if (Auth::attempt($data, $request->remember)) {
            return redirect()->route('verification.notice')->with('success', 'please verification your email to access this website');
        } else {
            return redirect()->back()->with('error', 'login failed, please try again!');
        }
    }

    public function register()
    {
        return view('auth.register', ["title" => 'register']);
    }

    public function registerProcess(Request $request)
    {
        $data = $request->validate([
            'nik' => 'min:16|required|integer',
            'email' => 'required|email',
            'password' => 'required|min:8|alpha_num',
            'confirm-password' => 'required|min:8|alpha_num'
        ]);

        $cek = Warga::all()->firstWhere('nik', null, $request->input('nik'));

        if ($cek != null) {
            // do query for insert to database
            $exist = User::all()->firstWhere('warga_id', null, $cek->id);
            if ($exist == null) {
                $data = new User();
                $data->warga_id = $cek->id;
                $data->name = $cek->nama;
                $data->email = $request->input('email');
                $data->password = Hash::make($request->input('password'));
                $data->save();

                return redirect()->route('login')->with('success', 'registering success, please login!');
            } else {
                return redirect()->back()->withInput()->with('error', 'Anda sudah memiliki akun, segera login');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Anda belum terdaftar sebagai warga');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}