<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Faq;
use App\Models\Foto;
use App\Models\Lomba;
use App\Models\Pengumuman;
use App\Models\Video;
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
        $faqs = Faq::all();
        return view(
            'frontend.index',
            [
                "pengumuman" => $pengumuman,
                "utama" => $utama,
                "berita_latest" => $berita_latest,
                "pengumuman_latest" => $pengumuman_latest,
                "faqs" => $faqs,
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
        $videos = Video::all();
        return view('frontend.video', ["videos" => $videos]);
    }

    public function musabaqadahCenter()
    {
        $data = Lomba::all();
        return view('frontend.musabaqadah-center', ["data" => $data]);
    }

    public function hubungiKami()
    {
        return view('frontend.hubungi-kami');
    }
}
