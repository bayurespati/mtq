<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Foto;
use App\Models\Pengumuman;
use \Carbon\Carbon;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function beranda()
    {
        $pengumuman = Pengumuman::where('is_featured', 1)->orderBy('created_at', 'desc')->take(5)->get();
        $utama = $pengumuman[0] ?? [];
        $berita_latest = Berita::latest()->first();
        $pengumuman_latest = Pengumuman::latest()->first();
        return view(
            'frontend.index',
            [
                "pengumuman" => $pengumuman,
                "utama" => $utama,
                "berita_latest" => $berita_latest,
                "pengumuman_latest" => $pengumuman_latest,
            ]
        );
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
        $berita = Berita::all();
        return view('frontend.berita', ["berita" => $berita]);
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('frontend.pengumuman', ["pengumuman" => $pengumuman]);
    }

    public function beritaExample(Berita $berita)
    {
        $show = str_replace("\r\n", '', $berita->deskripsi);
        $date = \Carbon\Carbon::parse('2024-11-19 17:12:37');
        $berita["final"] =  explode("<br>", trim($show));
        $berita["date"] =  $date;
        return view('frontend.berita-example', ["berita" => $berita]);
    }

    public function pengumumanExample(Pengumuman $pengumuman)
    {
        $show = str_replace("\r\n", '', $pengumuman->deskripsi);
        $date = \Carbon\Carbon::parse('2024-11-19 17:12:37');
        $pengumuman["final"] =  explode("<br>", trim($show));
        $pengumuman["date"] =  $date;
        return view('frontend.pengumuman-example', ["pengumuman" => $pengumuman]);
    }

    public function foto()
    {
        $foto = Foto::all();
        return view('frontend.foto', ["foto" => $foto]);
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
