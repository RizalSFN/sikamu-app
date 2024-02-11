<?php

namespace App\Http\Controllers;

use App\Models\Ronda;
use App\Models\RondaData;
use App\Models\RondaSyifa;
use App\Models\Warga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mockery\Undefined;

// TODO :
// 1. menerapkan fungsi yang terbaru dari index(), create(), store()
// 2. implementasi di viewnya

class RondaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = RondaData::where('hari', '=', $request->query('data', 'senin'))->paginate(10);
        // dd($data);
        if ($data->isEmpty()) {
            $message = 'Data tidak ada';
        } else {
            $message = '';
        }
        $hari = $request->query('data');

        return view('page.ronda.jadwal_ronda', compact('data', 'message', 'hari'));
    }

    public function create()
    {
        $data = Warga::where('keterangan', '=', 'kepala keluarga')->get(['id', 'nama', 'telepon']);
        // dd($data);
        return view('admin.ronda.buat_jadwal', compact('data'));
    }

    public function store(Request $request)
    {
        $all = [$request->input('select_name'), $request->input('select_day')];
        $ronda = RondaData::all();

        foreach ($all[0] as $a => $i) {
            $jadwal = new RondaData();
            $jadwal->nama = $i;
            $jadwal->hari = $all[1][$a];
            $jadwal->save();
        }

        return redirect()->back()->with('success', 'sukses bro!');
        // dd($p);
    }

    public function show(Request $request)
    {
        $data = Warga::where('desa', '=', $request->input('search'))->get('nama');
        $title = 'ronda';
        $start = $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        return view('page.ronda.index', compact('title', 'data', 'start'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ronda $ronda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ronda $ronda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ronda $ronda)
    {
        //
    }
}
