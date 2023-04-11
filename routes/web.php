<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title'  => 'Sewa Mobil Termurah di Malang - Kenz Tranz'
    ];
    return view('depan.VHome', $data);
});

// Route::get('home', 'App\Http\Controllers\WelcomeController@VHome');
Route::get('home', [WelcomeController::class, 'VHome']);
Route::get('sewa-mobil', [WelcomeController::class, 'VSewaMobil']);
Route::get('paket-wisata', [WelcomeController::class, 'VPaketWisata']);
Route::get('tentang-kami', [WelcomeController::class, 'VTentangKami']);
Route::get('kontak', [WelcomeController::class, 'VKontak']);
