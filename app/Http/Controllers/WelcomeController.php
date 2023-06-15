<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //admin
    public function VLogin()
    {
        $data = [
        	'title'  => 'Login - Kenz Tranz'
        ];
        return view('admin.VLogin
        ', $data);
    }

    // user 
    public function VBeranda()
    {
        $data = [
        	'title'  => 'Sewa Mobil Termurah di Malang - Kenz Tranz'
        ];
        return view('user.VBeranda
        ', $data);
    }

    public function VSewaMobil()
    {
        $data = [
        	'title'  => 'Harga Sewa Mobil di Malang - Kenz Tranz'
        ];
        return view('user.VSewaMobil', $data);
    }

    public function VPaketWisata()
    {
        $data = [
        	'title'  => 'Paket Wisata - Kenz Tranz'
        ];
        return view('user.VPaketWisata', $data);
    }

    public function VTentangKami()
    {
        $data = [
        	'title'  => 'Tentang Kami - Kenz Tranz'
        ];
        return view('user.VTentangKami', $data);
    }

    public function VKontak()
    {
        $data = [
        	'title'  => 'Kontak - Kenz Tranz'
        ];
        return view('user.VKontak', $data);
    }

    public function VArtikel()
    {
        $data = [
        	'title'  => 'Artikel - Kenz Tranz'
        ];
        return view('user.VArtikel', $data);
    }
}
