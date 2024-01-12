<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Akun();
        $data->nik = $request->input('nik');
        $data->email = $request->input('email');
        $data->password = bcrypt($request->input('password'));
        if ($request->input('confirmPassword') != $request->input('password')) {
            return redirect()->back()->with('error', 'invalid konfirmasi password');
        } else {
            $data->save();
            return redirect()->back()->with('success', 'Pembuatan akun sukses');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun $akun)
    {
        //
    }
}
