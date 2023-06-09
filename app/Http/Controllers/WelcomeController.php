<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
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

    //admin
    public function VMenuSewaMobil()
    {
        $data = [
        	'title'  => 'Menu Harga Sewa Mobil Premium - Kenz Tranz'
        ];
        return view('admin.VMenuSewaMobil', $data);
    }
    public function VMenuKontak()
    {
        $data = [
        	'title'  => 'Menu Kontak - Kenz Tranz'
        ];
        return view('admin.VMenuKontak', $data);
    }
    public function VMenuTentangKami()
    {
        $data = [
        	'title'  => 'Menu Tentang Kami - Kenz Tranz'
        ];
        return view('admin.VMenuTentangKami', $data);
    }
    public function VMenuHome()
    {
        $data = [
        	'title'  => 'Menu Home / Landing Page - Kenz Tranz'
        ];
        return view('admin.VMenuHome', $data);
    }
    public function VMenuArtikel()
    {
        $data = [
        	'title'  => 'Menu Artikel - Kenz Tranz'
        ];
        return view('admin.VMenuArtikel', $data);
    }
    public function VMenuPaketWisata()
    {
        $data = [
        	'title'  => 'Menu Paket Wisata - Kenz Tranz'
        ];
        return view('admin.VMenuPaketWisata
        ', $data);
    }
    public function VMenuTestimoni()
    {
        $data = [
        	'title'  => 'Menu Testimoni - Kenz Tranz'
        ];
        return view('admin.VMenuTestimoni
        ', $data);
    }
    public function VLogin()
    {
        $data = [
        	'title'  => 'Login - Kenz Tranz'
        ];
        return view('admin.VLogin
        ', $data);
    }   
}
