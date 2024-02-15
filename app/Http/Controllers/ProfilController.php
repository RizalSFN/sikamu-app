<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Warga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->warga_id;
        $data = Warga::find($id);
        // dd($data);

        if (!$data->nama || !$data->foto || !$data->ttl || !$data->alamat || !$data->rt || !$data->rw || !$data->desa || !$data->kecamatan || !$data->telepon || !$data->koordinat) {
            return redirect()->route('profil.edit')->with('error', 'Mohon untuk menglekapi data diri terlebih dahulu');
        }

        $ttl = explode('/', $data->ttl);
        $tempat = $ttl[0];
        $tanggal = Carbon::parse($ttl[1])->translatedFormat('d F Y');
        $title = 'profil';
        // dd($tanggal);
        // $rt = strlen($data->rt) == 1 ? '00' . $data->rt : '0' . $data->rt;
        // $rw = strlen($data->rw) == 1 ? '00' . $data->rw : '0' . $data->rw;
        return view('home.profil.profil', compact('data', 'tempat', 'tanggal', 'title'));
    }

    public function adminIndex()
    {
        $data = User::where('id', '=', auth()->user()->id)->get();
        // dd($data);
        $title = 'profil';
        return view('admin.profil.pr-admin', compact('data', 'title'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $id = auth()->user()->warga_id;
        $data = Warga::find($id);
        if ($data->ttl) {
            $ttl = explode('/', $data->ttl);
            $tempat = $ttl[0];
            $ex = explode('-', $ttl[1]);
            $tanggal = implode('-', array_reverse($ex));
            return view('home.profil.form_profil', compact('data', 'tempat', 'tanggal'));
        } else {
            $tempat = '';
            $tanggal = '';
            return view('home.profil.form_profil', compact('data', 'tempat', 'tanggal'));
        }
        // $rt = strlen($data->rt) == 1 ? '00' . $data->rt : '0' . $data->rt;
        // $rw = strlen($data->rw) == 1 ? '00' . $data->rw : '0' . $data->rw;
        // dd($tanggal);
    }

    public function adminEdit()
    {
        $title = 'profil';
        $data = User::findOrFail(auth()->user()->id);
        return view('admin.profil.edit-pr-admin', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            "image" => 'image|mimes:png,jpg,jpeg|max:2048',
            "nama" => 'required',
            "tempat" => 'required',
            "tanggal" => 'required',
            "alamat" => 'required',
            "rt" => 'required|numeric',
            "rw" => 'required|numeric',
            "desa" => 'required',
            "kecamatan" => 'required',
            "telepon" => 'required|numeric',
            "koordinat" => 'required'
        ]);

        if ($request->file('image')) {

            $warga = Warga::findOrFail(auth()->user()->warga_id);
            File::delete('images/' . $warga->foto);

            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $getTanggal = explode('-', $request->input('tanggal'));
            $tanggal = implode('-', array_reverse($getTanggal));
            $formatTTL = $request->input('tempat') . '/' . $tanggal;

            $warga->update([
                'nama' => $request->nama,
                'foto' => $imageName,
                'ttl' => $formatTTL,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'desa' => $request->desa,
                'kecamatan' => $request->kecamatan,
                'telepon' => $request->telepon,
                'koordinat' => $request->koordinat
            ]);

            return redirect()->route('profil')->with('success', 'Data berhasil diperbarui');
        } else {

            $getTanggal = explode('-', $request->input('tanggal'));
            $tanggal = implode('-', array_reverse($getTanggal));
            $formatTTL = $request->input('tempat') . '/' . $tanggal;

            $warga = Warga::findOrFail(auth()->user()->warga_id);

            // dd($request);
            $warga->update([
                'nama' => $request->nama,
                'ttl' => $formatTTL,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'desa' => $request->desa,
                'kecamatan' => $request->kecamatan,
                'telepon' => $request->telepon,
                'koordinat' => $request->koordinat
            ]);

            // dd($warga);

            return redirect()->route('profil')->with('success', 'Data berhasil diperbarui');
        }
    }

    public function adminUpdate(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/[0-9]/'
        ]);

        $user = User::findOrFail(auth()->user()->id);

        if ($request->password == $user->password) {
            $user->update([
                'email' => $request->email,
            ]);
        } else {
            $user->update([
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }


        return redirect()->route('admin.profil')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
