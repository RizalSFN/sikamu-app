<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordNotification;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        
        return view('auth.forgot-password-link');
    }

    public function sendLink(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email'
        ]);

        $uuid = Uuid::uuid4();
        $exTime = explode(' ', now());
        $token_forgot = $uuid->toString() . '_' . $exTime[0] . '_' . $exTime[1];

        $tokenDB = new ResetPassword();
        $tokenDB->email = $request->email;
        $tokenDB->token = $token_forgot;
        $tokenDB->save();
        // dd($tokenDB);

        Mail::to($request->email)->send(new ForgotPasswordNotification($token_forgot));

        return redirect()->back()->with('success', 'Forgot password link has been sent to your email');
    }

    public function create(Request $request)
    {
        if (!$request->query('token_forgot') || $request->query('token_forgot') == '') {
            return redirect()->route('forgot-password')->with('error', 'invalid token, please try again!');
        }

        $tokenD = ResetPassword::where('token', '=', $request->query('token_forgot'))->get();

        if ($tokenD->isEmpty()) {
            return redirect()->route('forgot-password')->with('error', 'invalid token, please try again!');
        }

        $userId = User::where('email', '=', $tokenD[0]->email)->get('id');
        $id = $userId[0]->id;
        $tokenId = $tokenD[0]->id;

        if ($request->query('token_forgot') !== $tokenD[0]->token) {
            return redirect()->route('admin.warga.create')->with('error', 'invalid token, please try again');
        } else {
            return view('auth.forgot-password', compact('tokenD', 'id', 'tokenId'));
        }
    }

    public function update(Request $request)
    {
        $password = $request->validate([
            'password' => 'required|alpha_num|min:8',
            'confirm-password' => 'required|alpha_num|min:8'
        ]);

        if ($request->input('confirm-password') !== $request->password) {
            return redirect()->back()->with('error', 'invalid confirm password');
        }

        $user = User::findOrFail($request->input('id'));
        $prt = ResetPassword::findOrFail($request->input('token_id'));

        $prt->delete();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Reset password success, please login!');
    }
}
