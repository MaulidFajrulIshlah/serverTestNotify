<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\CustomEmail;

class CustomController extends Controller
{
    public function checkWebsite()
    {
        $url = "https://layar.yarsi.ac.id/";
        $response =  Http::withoutVerifying()->get($url);
        $result = $response->status() == 200 ? "Website aktif" : "Website down";
        return $result;
    }

    public function checkHosting()
    {
        $response = Http::withoutVerifying()->get("https://layar.yarsi.ac.id/");
        $status = $response->status();

        if ($status == 0) {
            return view('dashboard');
        } else {
            $emailAddresses = [
                'maulidfajrulishlah@gmail.com',
                'maulidfajrulishlah030601@gmail.com',
            ];

            $data = [
                'name' => 'Maulid',
                'body' => 'Halo, Ini email test'
            ];

            foreach ($emailAddresses as $email) {
                Mail::to($email)->send(new CustomEmail($data));
            }
        }

        return view('emails.customEmail');
    }
}
