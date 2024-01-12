<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Warga::all();
        return view('dashboard', ["data" => $data]);
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
        $data = new Warga();
        $data->nik = $request->input('nik');
        $data->nama = $request->input('nama');
        $dataTTL = $request->input('tempat') . '/' . $request->input('tanggalLahir');
        $data->ttl = $dataTTL;
        $data->jenis_kelamin = $request->input('jenisKelamin');
        $data->alamat = $request->input('alamat');
        $data->rt =  $request->input('rt');
        $data->rw = $request->input('rw');
        $data->desa = $request->input('desa');
        $data->kecamatan = $request->input('kecamatan');
        $data->agama = $request->input('agama');
        $data->status = $request->input('status');
        $data->pekerjaan = $request->input('pekerjaan');
        $data->kewarganegaraan = $request->input('kewarganegaraan');
        $data->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warga $warga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warga $warga)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warga $warga)
    {
        //
    }
}
