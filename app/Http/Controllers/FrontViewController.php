<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function beranda()
    {
        return view('frontend.index');
    }

    public function tentangKami()
    {
        return view('frontend.tentang-kami');
    }

    public function sambutan()
    {
        return view('frontend.sambutan');
    }

    public function berita()
    {
        return view('frontend.berita');
    }

    public function pengumuman()
    {
        return view('frontend.pengumuman');
    }

    public function beritaExample()
    {
        return view('frontend.berita-example');
    }

    public function beritaExample2()
    {
        return view('frontend.berita-example-2');
    }

    public function pengumuanExample()
    {
        return view('frontend.pengumuman-example');
    }

    public function foto()
    {
        return view('frontend.foto');
    }

    public function video()
    {
        return view('frontend.video');
    }

    public function musabaqadahCenter()
    {
        return view('frontend.musabaqadah-center');
    }

    public function hubungiKami()
    {
        return view('frontend.hubungi-kami');
    }
}
