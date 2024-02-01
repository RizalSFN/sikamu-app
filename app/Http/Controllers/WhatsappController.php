<?php

namespace App\Http\Controllers;

use App\Models\User;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Notifications\ReportNotification;
use GuzzleHttp\Client as GuzzleHttpClient;

class WhatsappController extends Controller
{
    public function sendMessage()
    {
        // $sid = getenv('TWILIO_SID');
        // $token = getenv('TWILIO_AUTH_TOKEN');
        // $twilio = new Client($sid, $token);

        // $message = $twilio->messages->create('whatsapp:+6287788873882', [
        //     "from" => 'whatsapp:+14155238886',
        //     "body" => 'tes notif sikamu-app via twilio'
        // ]);
        // dd($message);

        // $response = Http::post('https://api.fonnte.com/send', [
        //     'target' => '087788873882,08996982837',
        //     'message' => 'test message sikamu-app',
        //     'delay' => '2',
        //     'countryCode' => '62', // optional
        // ], [
        //     'Authorization' => 'c2rsHHveNTGETDJ!d7WT',
        // ]);

        // dd($response->body());

        $client = new GuzzleHttpClient();
        $message = "contoh message";
        $request = $client->request('GET', 'https://api.fonnte.com/send?token=c2rsHHveNTGETDJ!d7WT&target=087788873882&message=' . $message);
        dd($request->getBody());
    }

    public function sendEmail()
    {
        $user = User::find(1);
        $user->notify(new ReportNotification());
        return redirect()->back();
    }
}
