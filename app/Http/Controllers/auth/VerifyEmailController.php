<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function verifyView()
    {
        return view('auth.verify-email');
    }

    public function verifyProcess(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return redirect()->back()->with('success', 'Verirification email was send into your account');
    }

    public function verifySuccess(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/home');
    }
}
