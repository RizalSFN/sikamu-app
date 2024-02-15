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
        $data = RondaData::where('hari', '=', $request->query('hari', 'senin'))->paginate(10);
        // dd($data);
        if ($data->isEmpty()) {
            $message = 'Data tidak ada';
        } else {
            $message = '';
        }
        $hari = $request->query('hari');
        $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        $title = 'ronda';

        if (auth()->user()->role == 'admin') {
            return view('admin.ronda.jadwal_ronda', compact('data', 'message', 'hari', 'title', 'start'));
        } else {

            $warga = Warga::find(auth()->user()->warga_id);
            if (!$warga->nama || !$warga->foto || !$warga->ttl || !$warga->alamat || !$warga->rt || !$warga->rw || !$warga->desa || !$warga->kecamatan || !$warga->telepon || !$warga->koordinat) {
                return redirect()->route('profil.edit')->with('error', 'Mohon untuk menglekapi data diri terlebih dahulu');
            }

            return view('page.ronda.jadwal_ronda', compact('data', 'message', 'hari', 'title', 'start'));
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
        $ronda = Warga::where('keterangan', '=', 'kepala keluarga')->get();

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

    public function destroy($id)
    {
        $ronda = RondaData::findOrFail($id);

        $ronda->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
