<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        // dd($tanggal);
        $rt = strlen($data->rt) == 1 ? '00' . $data->rt : '0' . $data->rt;
        $rw = strlen($data->rw) == 1 ? '00' . $data->rw : '0' . $data->rw;
        return view('home.profil.profil', compact('data', 'tempat', 'tanggal', 'rt', 'rw'));
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
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            "image" => 'image|max:2048',
            "nama" => 'alpha',
            "tempat" => 'required|alpha',
            "tanggal" => 'required',
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
                'foto' => $imageName,
                'nama' => $request->nama,
                'ttl' => $formatTTL,
                'koordinat' => $request->koordinat
            ]);
        } else {
            $getTanggal = explode('-', $request->input('tanggal'));
            $tanggal = implode('-', array_reverse($getTanggal));
            $formatTTL = $request->input('tempat') . '/' . $tanggal;

            $warga = Warga::findOrFail(auth()->user()->warga_id);

            $warga->update([
                'nama' => $request->nama,
                'ttl' => $formatTTL,
                'koordinat' => $request->koordinat
            ]);
        }

        return redirect()->route('profil')->with('success', 'Data berhasil diperbarui');
    }

    private function resizeTheImage($image, $width, $height)
    {
        list($originalWidth, $originalHeight) = getimagesize($image->getPathname());

        $ratio = $originalWidth / $originalHeight;

        $newWidth = $width;
        $newHeight = $height;

        if ($newWidth / $newHeight > $ratio) {
            $newWidth = $newHeight * $ratio;
        } else {
            $newHeight = $newWidth / $ratio;
        }

        $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
        $sourceImage = imagecreatefromstring(file_get_contents($image->getPathname()));

        imagecopyresampled($resizedImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

        return $resizedImage;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
