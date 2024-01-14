<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
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

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            Session::flash('error', 'login failed, please try again!');
            return redirect('/');
        }
    }

    public function register()
    {
        return view('auth.register', ["title" => 'register']);
    }

    public function registerProcess(Request $request)
    {
        $cek = Warga::findOrFail($request->input('nik'));
        // if ($cek){
        // TODO BESOK
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
