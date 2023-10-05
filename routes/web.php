<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServerStatusController;

use App\Http\Controllers\CustomController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/check-status', [ServerStatusController::class, 'checkStatus']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', [ServerStatusController::class, 'dashboard']);

// Route::get('/check-website', [CustomController::class, 'checkWebsite']);
// Route::get('/check-hosting', [CustomController::class, 'checkHosting']);


Route::get('/', [ServerStatusController::class, 'dashboard']);

Route::get('/check-status', [ServerStatusController::class, 'checkStatus']);

Route::get('/check-website', [ServerStatusController::class, 'checkWebsite']);
Route::get('/check-hosting', [ServerStatusController::class, 'checkHosting']);
