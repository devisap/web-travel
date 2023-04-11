<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function VHome()
    {
        $data = [
        	'title'  => 'Sewa Mobil Termurah di Malang - Kenz Tranz'
        ];
        return view('depan.VHome', $data);
    }

    public function VSewaMobil()
    {
        $data = [
        	'title'  => 'Harga Sewa Mobil di Malang - Kenz Tranz'
        ];
        return view('depan.VSewaMobil', $data);
    }

    public function VPaketWisata()
    {
        $data = [
        	'title'  => 'Paket Wisata - Kenz Tranz'
        ];
        return view('depan.VPaketWisata', $data);
    }

    public function VTentangKami()
    {
        $data = [
        	'title'  => 'Tentang Kami - Kenz Tranz'
        ];
        return view('depan.VTentangKami', $data);
    }

    public function VKontak()
    {
        $data = [
        	'title'  => 'Kontak - Kenz Tranz'
        ];
        return view('depan.VKontak', $data);
    }
}
