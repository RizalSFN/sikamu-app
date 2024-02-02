<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Warga;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth()->user()->warga_id;
        $data = Warga::find($id);
        return view('home.index', ["title" => 'beranda', "data" => $data]);
    }

    /**youts.main
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('#masukkanNamaViewCreateWarga-admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = $request->validate([
            'nik' => 'required|integer|size:16',
            'no_kk' => 'required|integer|size:16',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'telepon' => 'required|integer'
        ]);

        $extanggal = explode('-', $request->input('tanggal'));
        $tanggal = $extanggal[2] . '-' . $extanggal[1] . '-' . $extanggal[0];

        $data = new Warga();
        $data->nik = $request->input('nik');
        $data->nama = $request->input('nama');
        $data->ttl = $request->input('tempat') . '/' . $tanggal;
        $data->jenis_kelamin = $request->input('jenisKelamin');
        $data->alamat = $request->input('alamat');
        $data->rt =  $request->input('rt');
        $data->rw = $request->input('rw');
        $data->desa = $request->input('desa');
        $data->kecamatan = $request->input('kecamatan');
        $data->telepon = $request->input('telepon');
        $data->keterangan = $request->input('keterangan');
        $data->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detail = Warga::find($id);
        // return view('#MasukkanNamaViewYangSesuai');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $warga = Warga::find($id);
        $ttl = explode('/', $warga->ttl);
        $tempat = $ttl[0];
        $tgl = explode('-', $ttl[1]);
        $tanggal = $tgl[2] . '-' . $tgl[1] . '-' . $tgl[0];

        return view('home.profil.form_profil', compact('warga', 'tempat', 'tanggal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Warga::findOrFail(1);

        // $data = $request->validate([
        //     'foto' => 'image|mimes:png,jpg,jpeg,',
        //     'tempat' => 'required',
        //     'tanggal' => 'required'
        // ]); //y-m-d

        $ex = explode('-', $request->input('date'));
        $tanggal = implode('-', array_reverse($ex));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $request->image->move(public_path('img'), $imageName);

            $user->update([
                'foto' => $image->hashName(),
                'nama' => $request->input('nama'),
                'ttl' => $request->input('tempat') . '/' . $tanggal,
                'jenis_kelamin' => $request->input('jenisKelamin'),
                'alamat' => $request->input('alamat'),
                'rt' => $request->input('rt'),
                'rw' => $request->input('rw'),
                'desa' => $request->input('desa'),
                'kecamatan' => $request->input('kecamatan'),
            ]);

            // return ke route sebelumnya

        } else {
            $user->update([
                'nama' => $request->input('nama'),
                'ttl' => $request->input('tempat') . '/' . $tanggal,
                'jenis_kelamin' => $request->input('jenisKelamin'),
                'alamat' => $request->input('alamat'),
                'rt' => $request->input('rt'),
                'rw' => $request->input('rw'),
                'desa' => $request->input('desa'),
                'kecamatan' => $request->input('kecamatan'),
            ]);

            // return ke route sebelumnya

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $user = Warga::findOrFail(1);

        Storage::delete('public/img' . $user->foto);

        $user->delete();

        // return ke route sebelumnya
    }
}
