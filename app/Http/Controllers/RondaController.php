<?php

namespace App\Http\Controllers;

use App\Models\Ronda;
use App\Models\RondaData;
use App\Models\Warga;
use Illuminate\Http\Request;

class RondaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Warga::paginate(10);
        $title = 'ronda';
        $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        return view('page.ronda.index', compact('title', 'data', 'start'));
    }

    // todo besok : membuat search sekaligus filter untuk warga di page ronda - pusing dikit gk ngaruh

    public function show(Request $request)
    {
        $data = Warga::where('desa', '=', $request->input('search'))->get('nama');
        $title = 'ronda';
        $start = $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        return view('page.ronda.index', compact('title', 'data', 'start'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($desa)
    {
        $warga = Warga::where('desa', '=', $desa)->get('nama');

        $count = count($warga);
        $rerata = ceil($count / 5);
        $title = 'jadwal ronda';

        $hasil = [[], [], [], [], [], [], []];

        foreach ($warga as $war) {
            if (count($hasil[0]) === 5) {
                array_push($hasil[random_int(1, 6)], $war->nama);
            } else if (count($hasil[1]) === 5) {
                array_push($hasil[array_rand([0, 2, 3, 4, 5, 6])], $war->nama);
            } else if (count($hasil[2]) === 5) {
                array_push($hasil[array_rand([0, 1, 3, 4, 5, 6])], $war->nama);
            } else if (count($hasil[3]) === 5) {
                array_push($hasil[array_rand([0, 1, 2, 4, 5, 6])], $war->nama);
            } else if (count($hasil[4]) === 5) {
                array_push($hasil[array_rand([0, 1, 2, 3, 5, 6])], $war->nama);
            } else if (count($hasil[5]) === 5) {
                array_push($hasil[array_rand([0, 1, 2, 3, 4, 6])], $war->nama);
            } else if (count($hasil[6]) === 5) {
                array_push($hasil[random_int(0, 5)], $war->nama);
            } else {
                array_push($hasil[random_int(0, 6)], $war->nama);
            }
        }
        dd($hasil);

        $data = new RondaData();
        $data->senin = implode('-', $hasil[0]);
        $data->selasa = implode('-', $hasil[1]);
        $data->rabu = implode('-', $hasil[2]);
        $data->kamis = implode('-', $hasil[3]);
        $data->jumat = implode('-', $hasil[4]);
        $data->sabtu = implode('-', $hasil[5]);
        $data->minggu = implode('-', $hasil[6]);
        $data->dari = now();
        $data->sampai = now()->addDays(7);
        $data->save();

        return redirect()->back();
    }

    public function random(Request $request)
    {
        // pengecekan masa berlaku jadwal yang sudah ada
        $jadwal = RondaData::where('sampai', '>=', now())->get();
        $title = 'jadwal ronda';

        if ($jadwal === []) {
            $this->create('gandasari');
        }

        $user = $jadwal[0];
        $hasil = [];
        $senin = array_push($hasil, explode('-', $user->senin));
        $selasa = array_push($hasil, explode('-', $user->selasa));
        $rabu = array_push($hasil, explode('-', $user->rabu));
        $kamis = array_push($hasil, explode('-', $user->kamis));
        $jumat = array_push($hasil, explode('-', $user->jumat));
        $sabtu = array_push($hasil, explode('-', $user->sabtu));
        $minggu = array_push($hasil, explode('-', $user->minggu));

        return view('page.ronda.jadwal_ronda', compact('title', 'hasil'));
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
