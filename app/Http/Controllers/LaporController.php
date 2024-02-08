<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\LaporBencana;
use Illuminate\Http\Request;
use App\Models\KategoriBencana;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReportEmailNotification;
use App\Models\User;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Support\Facades\Auth;

class LaporController extends Controller
{
    public function index()
    {
        $kategori = KategoriBencana::all();
        $warga = Warga::find(auth()->user()->warga_id);
        // dd($kategori);
        return view('home.bantuan.bantuan', compact('kategori', 'warga'));
    }

    public function bantuan(Request $request)
    {
        $ex = explode('-', $request->input('kategoriBantuan'));
        $laporan = new LaporBencana();
        $laporan->kategori_bencana_id = $ex[0];
        $laporan->warga_id = auth()->user()->id;
        $laporan->alamat = $request->input('patokanLokasi');
        $laporan->catatan = $request->input('catatan') ? $request->input('catatan') : NULL;
        $laporan->koordinat = $request->input('koordinat');
        // $laporan->save();

        $data = [
            "kategori" => $ex[1],
            "pelapor" => auth()->user()->name,
            "lokasi" => 'https://maps.google.com/?q=' . $request->input('koordinat'),
            "patokan" => $request->input('patokanLokasi'),
            "catatan" => $request->input('catatan') ? $request->input('catatan') : '-'
        ];
        // TODO : Diskusi mengenai notif wa yang delay nya agak lumayan (SOLVED: Dihilangkan)

        $emails = User::where('role', '=', 'user')->get('email');
        $emailData = [];

        foreach ($emails as $email) {
            array_push($emailData, $email->email);
        }

        Mail::to($emailData)->send(new ReportEmailNotification($data));

        return redirect()->back()->with('success', 'Bantuan sudah terkirim!');
    }

    public function sendWhatsappMessage($target)
    {
        // $client = new GuzzleHttpClient();
        $token = getenv('FONNTE_TOKEN');
        // $request = $client->request('GET', 'https://api.fonnte.com/send?token=' . $token . '&target=' . $target . '&message=' . $message . '&delay=1');
        $response = Http::withHeaders([
            'Authorization' => $token,
        ])->post('https://api.fonnte.com/send', [
            'target' => $target,
            'delay' => '1',
            'message' => 'hai',
        ]);
    }
}
