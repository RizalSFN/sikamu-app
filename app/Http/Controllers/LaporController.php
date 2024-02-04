<?php

namespace App\Http\Controllers;

use App\Mail\ReportEmailNotification;
use App\Models\KategoriBencana;
use App\Models\LaporBencana;
use App\Models\Warga;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Support\Facades\Mail;

class LaporController extends Controller
{
    public function index()
    {
        $kategori = KategoriBencana::all();
        // dd($kategori);
        return view('home.bantuan.bantuan', compact('kategori'));
    }

    public function bantuan(Request $request)
    {
        $ex = explode('-', $request->input('kategoriBantuan'));
        $laporan = new LaporBencana();
        $laporan->kategory_bencana_id = $ex[0];
        $laporan->warga_id = auth()->user()->id;
        $laporan->alamat = $request->input('patokanLokasi');
        $laporan->catatan = $request->input('catatan') ? $request->input('catatan') : NULL;
        $laporan->koordinat = $request->input('koordinat');

        $data = [
            "title" => $ex[1],
            "pelapor" => auth()->user()->name,
            "lokasi" => 'https://maps.google.com/?q=' . $request->input('koordinat'),
            "patokan" => $request->input('patokanLokasi'),
            "catatan" => $request->input('catatan') ? $request->input('catatan') : '-'
        ];

        Mail::to('rizalsofiana99@gmail.com')->send(new ReportEmailNotification($data));
        // $this->sendWhatsappMessage();

        return redirect()->back()->with('success', 'Bantuan sudah terkirim!');
    }

    public function sendWhatsappMessage($message, $noTujuan)
    {
        $client = new GuzzleHttpClient();
        $token = getenv('FONNTE_TOKEN');
        $request = $client->request('GET', 'https://api.fonnte.com/send?token=' . $token . '&target=' . $noTujuan . '&message=' . $message . '&delay=1');
        dd($request->getBody());
    }
}
