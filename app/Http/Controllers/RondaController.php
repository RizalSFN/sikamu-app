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
        $data = RondaData::all();
        $user = $data[0];
        $hasil = [];
        $senin = array_push($hasil, explode('-', $user->senin));
        $selasa = array_push($hasil, explode('-', $user->selasa));
        $rabu = array_push($hasil, explode('-', $user->rabu));
        $kamis = array_push($hasil, explode('-', $user->kamis));
        $jumat = array_push($hasil, explode('-', $user->jumat));
        $sabtu = array_push($hasil, explode('-', $user->sabtu));
        $minggu = array_push($hasil, explode('-', $user->minggu));
        dd($hasil);
    }

    public function random()
    {
        $warga = Warga::all(['nama']);

        $count = count($warga);
        $rerata = ceil($count / 5);

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
