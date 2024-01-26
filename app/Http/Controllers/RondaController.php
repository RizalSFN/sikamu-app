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
        $data = Warga::all();
        return view('page.ronda.index', ["title" => "ronda", 'data' => $data]);
    }

    public function jadwal()
    {
        $datas = RondaData::all();
        $data = $datas[0];
        $hasil = [];
        $senin = array_push($hasil, explode('-', $data->senin));
        $selasa = array_push($hasil, explode('-', $data->selasa));
        // dd($hasil);
        $rabu = explode('-', $data->rabu);
        $kamis = explode('-', $data->kamis);
        $jumat = explode('-', $data->senin);
        $sabtu = explode('-', $data->sabtu);
        $minggu = explode('-', $data->minggu);

        return view('page.ronda.jadwal', compact('hasil'));
    }

    public function acak()
    {
        $data = Warga::all(['nama']);
        // dd($data[0]);
        $count = count($data);
        $hasil = ceil($count / 7);

        $jadwal = [[], [], [], [], [], [], []];
        // dd($hasil);
        // dd(random_int(random_int(1, 3), random_int(5, 7)));
        foreach ($data as $d) {
            if (count($jadwal[0]) === $hasil) {
                array_push($jadwal[random_int(1, 6)], $d->nama);
            } else if (count($jadwal[1]) === $hasil) {
                array_push($jadwal[array_rand([0, 2, 3, 4, 5, 6])], $d->nama);
            } else if (count($jadwal[2]) === $hasil) {
                array_push($jadwal[array_rand([0, 1, 3, 4, 5, 6])], $d->nama);
            } else if (count($jadwal[3]) === $hasil) {
                array_push($jadwal[array_rand([0, 1, 2, 4, 5, 6])], $d->nama);
            } else if (count($jadwal[4]) === $hasil) {
                array_push($jadwal[array_rand([0, 1, 2, 3, 5, 6])], $d->nama);
            } else if (count($jadwal[5]) === $hasil) {
                array_push($jadwal[array_rand([0, 1, 2, 3, 4, 6])], $d->nama);
            } else {
                array_push($jadwal[random_int(0, 6)], $d->nama);
            }
        }
        dd($jadwal);
        return view('page.ronda.jadwal-create', compact('jadwal'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ronda $ronda)
    {
        //
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
