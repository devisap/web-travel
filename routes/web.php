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
    return view('user.VBeranda', $data);
});

// Route::get('home', 'App\Http\Controllers\WelcomeController@VHome');
Route::get('beranda', [WelcomeController::class, 'VBeranda']);
Route::get('sewa-mobil', [WelcomeController::class, 'VSewaMobil']);
Route::get('paket-wisata', [WelcomeController::class, 'VPaketWisata']);
Route::get('tentang-kami', [WelcomeController::class, 'VTentangKami']);
Route::get('kontak', [WelcomeController::class, 'VKontak']);
Route::get('artikel', [WelcomeController::class, 'VArtikel']);

Route::get('menu-harga', [WelcomeController::class, 'VMenuSewaMobil']);
Route::get('menu-kontak', [WelcomeController::class, 'VMenuKontak']);
Route::get('menu-tentangkami', [WelcomeController::class, 'VMenuTentangKami']);
Route::get('menu-paketwisata', [WelcomeController::class, 'VMenuPaketWisata']);
Route::get('menu-artikel', [WelcomeController::class, 'VMenuArtikel']);
Route::get('menu-home', [WelcomeController::class, 'VMenuHome']);
Route::get('menu-testimoni', [WelcomeController::class, 'VMenuTestimoni']);
Route::get('login', [WelcomeController::class, 'VLogin']);

// user 
Route::get('beranda', [WelcomeController::class, 'VBeranda']);
