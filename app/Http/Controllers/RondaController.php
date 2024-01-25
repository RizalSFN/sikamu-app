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

    public function acak()
    {
        $data = Warga::all(['nama']);
        // dd($data[0]);

        $jadwal = [[], [], [], [], [], [], []];
        // dd(count($data));
        foreach ($data as $d) {
            array_push($jadwal[random_int(0, 6)], $d->nama);
        }

        return view('page.ronda.jadwal', compact('jadwal'));
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
