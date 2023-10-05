<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmail;

class ServerStatusController extends Controller
{
    public function index()
    {
        return view('server-status');
    }


public function dashboard()
    {
        $url = "https://layar.yarsi.ac.id/";
        
        try {
            $response = Http::head($url);
            $status = $response->status();

            if ($status == 200) {
                // Website online, tampilkan dashboard
                return view('dashboard', [
                    'status' => "SERVER ONLINE",
                    'details' => "Server is online with status code: $status"
                ]);
            } else {
                // Website offline, kirim email dan tampilkan dashboard
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

                return view('dashboard', [
                    'status' => "SEVER OFFLINE",
                    'details' => "Server is offline. Error: Unable to access the website."
                ]);
            }
        } catch (\Exception $e) {
            // Gagal akses website, tampilkan error di dashboard
            return view('dashboard', [
                'status' => "SEVER OFFLINE",
                'details' => "Server is offline. Error: " . $e->getMessage()
            ]);
        }
    }






}
