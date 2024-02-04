<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->warga_id;
        $data = Warga::find($id);
        $ttl = explode('/', $data->ttl);
        $tempat = $ttl[0];
        $tanggal = Carbon::parse($ttl[1])->translatedFormat('d F Y');
        $rt = strlen($data->rt) == 1 ? '00' . $data->rt : '0' . $data->rt;
        $rw = strlen($data->rw) == 1 ? '00' . $data->rw : '0' . $data->rw;
        return view('home.profil.profil', compact('data', 'tempat', 'tanggal', 'rt', 'rw'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = auth()->user()->warga_id;
        $data = Warga::find($id);
        $ttl = explode('/', $data->ttl);
        $tempat = $ttl[0];
        $ex = explode('-', $ttl[1]);
        $tanggal = implode('-', array_reverse($ex));
        $rt = strlen($data->rt) == 1 ? '00' . $data->rt : '0' . $data->rt;
        $rw = strlen($data->rw) == 1 ? '00' . $data->rw : '0' . $data->rw;
        // dd($tanggal);
        return view('home.profil.form_profil', compact('data', 'tempat', 'tanggal', 'rt', 'rw'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
