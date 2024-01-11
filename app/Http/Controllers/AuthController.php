<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $data = [
            "email" => $request->input('email'),
            "password" => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            return redirect('home');
        } else {
            Session::flash('error', 'login failed, please try again!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
