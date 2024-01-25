<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth()->user()->warga_id;
        $data = Warga::find($id);

        return view('page.index', ["title" => 'beranda', "data" => $data]);
    }

    /**youts.main
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
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
    public function show($id)
    {
        $detail = Warga::where('id', $id)->get();
        return view('page.ronda.detail-warga', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Warga::where('id', $id)->get();
        $ttl = explode('/', $data[0]->ttl);
        $tanggal_explode = explode('-', $ttl[1]);
        if ($tanggal_explode[0] < 10) {
            $day = 0 . $tanggal_explode[0];
        } else {
            $day = $tanggal_explode[0];
        }
        $tanggal = $tanggal_explode[2] . '-' . $tanggal_explode[1] . '-' . $day;
        // dd($tanggal);
        return view('page.ronda.update-warga', compact('data', 'ttl', 'tanggal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warga $warga)
    {
        $data = $request->validate([
            'nama' => 'string',
            'tempat' => 'string',
            'tanggal_lahir' => 'date',
            'jenis_kelamin' => 'string',
            'alamat' => 'string',
            'rt' => 'integer|max:3',
            'rw' => 'integer|max:3',
            'desa' => 'string',
            'kecamatan' => 'string',
            'agama' => 'string',
            'status' => 'string',
            'pekerjaan' => 'string',
            'kewarganegaraan' => 'string',
            'telepon' => 'min:8|max:15|integer',
            'foto' => 'size:2048|image'
        ]);

        
        // $warga->nama = $request->input('nama');
        // $warga->ttl = $request->input('tempat') . '-' . $request->input('tanggal_lahir');
        // $warga->jenis_kelamin = $request->input('jenis_kelamin');
        // $warga->alamat = $request->input('alamat');
        // $warga->rt = $request->input('rt');
        // $warga->rw = $request->input('rw');
        // $warga->desa = $request->input('desa');
        // $warga->kecamatan = $request->input('kecamatan');
        // $warga->agama = $request->input('agama');
        // $warga->status = $request->input('status');
        // $warga->pekerjaan = $request->input('pekerjaan');
        // $warga->kewarganegaraan = $request->input('kewarganegaraan');
        // $warga->telepon = $request->input('telepon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warga $warga)
    {
        //
    }
}
