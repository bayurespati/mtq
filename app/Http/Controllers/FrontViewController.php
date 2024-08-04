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
        $data = [
            [
                "TILAWAH DEWASA DAN QIRAAT SABAH MUJJAAWAD",
                "Mimbar utama MTQN XXX GOR Kadrie Oening"
            ],
            [
                "QIRA'AT MUROTTAL REMAJA DAN DEWASA",
                "Aula Islamic Centre / Masjid Baitul Muttaqin"
            ],
            [
                "KHAT AL-QUR'AN GOL. NASKAH DAN HIASAN MUSHAF dan GOL. DEKORASI DAN LUKIS KONTEMPORER",
                "Gedung Serbaguna GOR Kadrie Oening"
            ],
            [
                "HIFZIL AL-QUR'AN GO. 1 JUZ DAN 5 JUZ TILAWAH",
                "Ruang Ruhui Rahayu Setda Provinsi Kalimantan Timur"
            ],
            [
                "TILAWAH AL QUR'AN GOL. ANAK-ANAK DAN REMAJA",
                "Aula RRI Samarinda"
            ],
            [
                "HIFZIL QUR'AN GOL. 10 JUZ DAN 20 JUZ",
                "Gedung Pramuka Samarinda"
            ],
            [
                "TILAWAH GOL. TARTIL DAN CANET",
                "Gedung Auditorium Universitas Mulawarman"
            ],
            [
                "FAHMIL QUR'AN",
                "Gedung Olah Bebaya Provinsi Kalimantan Timur"
            ],
            [
                "HIFZIL QUR'AN GOL. 30 JUZ DAN TAFSIR AL QUR'AN GOL. BAHASA ARAB",
                "Gedung Inspektorat Provinsi Kalimantan Timur"
            ],
            [
                "SYARHIL AL QUR'AN",
                "Aula MAN 2 Samarinda"
            ],
            [
                "KARYA TULIS ILMIAH AL QUR'AN",
                "Ruang Assessment Center Kantor Korpri BKD Prov. Kaltim, BPKAD PROVINSI"
            ],
            [
                "TAFSIR BHS. INDONESIA DAN BHS. INGGRIS",
                "Kampus UMKT Samarinda"
            ],
        ];
        return view('frontend.musabaqadah-center', ["data" => $data]);
    }

    public function hubungiKami()
    {
        return view('frontend.hubungi-kami');
    }
}
