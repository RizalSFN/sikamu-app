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
        $data = RondaData::paginate(10);

        if ($data->isEmpty()) {
            $message = 'Data tidak ada';
        } else {
            $message = '';
        }
        
        $hari = $request->query('data');
        $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        $title = 'ronda';

        if (auth()->user()->role == 'admin') {
            return view('admin.ronda.jadwal_ronda', compact('data', 'message', 'hari', 'title', 'start'));
        } else {
            return view('page.ronda.jadwal_ronda', compact('data', 'message', 'hari'));
        }
    }

    public function create()
    {
        $data = Warga::where('keterangan', '=', 'kepala keluarga')->get(['id', 'nama', 'telepon']);
        // dd($data);

        return view('admin.ronda.buat_jadwal', compact('data'));
    }

    public function store(Request $request)
    {
        $all = [$request->input('nama'), $request->input('hari')];

        foreach ($all[0] as $a => $i) {
            $jadwal = new RondaData();
            $jadwal->nama = $i;
            $jadwal->hari = $all[1][$a];
            $jadwal->save();
        }

        return redirect()->route('admin.ronda')->with('success', 'Jadwal ronda berhasil dibuat');
    }

    public function edit($id)
    {
        $data = RondaData::findOrFail($id);
        $ronda = RondaData::all('nama');

        return view('admin.ronda.edit-jadwal', compact('data', 'ronda'));
    }

    public function update(Request $request, $id)
    {
        $data = RondaData::findOrFail($id);

        $data->update([
            'nama' => $request->input('nama'),
            'hari' => $request->input('hari')
        ]);

        return redirect()->route('admin.ronda')->with('success', 'data berhasil diperbarui');
    }
}
