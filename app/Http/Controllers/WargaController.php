<?php

namespace App\Http\Controllers;

use App\Models\LaporBencana;
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

    public function adminIndex()
    {
        $warga = Warga::where('keterangan', '=', 'kepala keluarga')->get();
        $data = Warga::paginate(10);
        $kejahatan = LaporBencana::all();
        $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        // dd($data);
        return view('admin.dashboard', compact('data', 'start', 'warga', 'kejahatan'));
    }

    /**youts.main
     * Show the form for creating a new resource.
     */
    public function adminCreate()
    {
        return view('admin.dt_warga.tambah_warga');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function adminStore(Request $request)
    {

        $user = $request->validate([
            'nik' => 'required|integer|digits:16',
            'no_kk' => 'required|integer|digits:16',
            'nama' => 'required|alpha',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'desa' => 'required',
            'kecamatan' => 'required',
            'telepon' => 'required|numeric',
            'keterangan' => 'required'
        ]);

        $data = new Warga();
        $data->nik = $request->input('nik');
        $data->no_kk = $request->input('no_kk');
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->rt =  $request->input('rt');
        $data->rw = $request->input('rw');
        $data->desa = $request->input('desa');
        $data->kecamatan = $request->input('kecamatan');
        $data->telepon = $request->input('telepon');
        $data->keterangan = $request->input('keterangan');
        // dd($data);
        $data->save();


        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detail = Warga::find($id);
        // return view('#MasukkanNamaViewYangSesuai');
    }

    public function adminShow($id)
    {
        $warga = Warga::find($id);
        $rt = strlen($warga->rt) == 1 ? '00' . $warga->rt  : '0' . $warga->rt;
        $rw = strlen($warga->rw) == 1 ? '00' . $warga->rw : '0' . $warga->rw;
        // dd($warga);
        return view('admin.dt_warga.detail_warga', compact('warga', 'rt', 'rw'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // 
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
