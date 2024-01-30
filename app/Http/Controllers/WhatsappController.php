<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function sendMessage()
    {
        $sid = getenv('TWILIO_SID');
        $token = getenv('TWILIO_AUTH_TOKEN');
        $twilio = new Client($sid, $token);

        $message = $twilio->messages->create('whatsapp:+6287776481109', [
            "from" => 'whatsapp:+14155238886',
            "body" => 'tes notif sikamu-app via twilio'
        ]);
        dd($message);
    }
}
