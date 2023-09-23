<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServerStatusController extends Controller
{
    public function index()
    {
        return view('server-status');
    }

    public function checkStatus()
{
    $url = "https://layar.yarsi.ac.id/"; // URL yang akan dicek statusnya

    try {
        $response = Http::head($url);
        $status = $response->status();
        return view('server-status', ['status' => "Server is online with status code: $status"]);
    } catch (\Exception $e) {
        return view('server-status', ['status' => "Server is offline. Error: " . $e->getMessage()]);
    }

    
}
public function dashboard()
{
    $url = "https://layar.yarsi.ac.id/"; // URL yang akan dicek statusnya

    try {
        $response = Http::head($url);
        $status = $response->status();
        return view('dashboard', [
            'status' => "SERVER ONLINE",
            'details' => "Server is online with status code: $status"
        ]);
    } catch (\Exception $e) {
        return view('dashboard', [
            'status' => "SEVER OFFLINE",
            'details' => "Server is offline. Error: " . $e->getMessage()]);
    }
}




}
