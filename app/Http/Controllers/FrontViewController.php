<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Faq;
use App\Models\Foto;
use App\Models\Livestream;
use App\Models\Lomba;
use App\Models\Pengumuman;
use App\Models\Video;
use \Carbon\Carbon;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function beranda()
    {
        $pengumuman = Pengumuman::where('is_featured', 1)->orderBy('tanggal', 'desc')->take(5)->get();
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
        $berita = Berita::orderBy('tanggal', 'DESC')->paginate(9);
        $berita_latest_3 = Berita::orderBy('views', 'desc')->take(10)->get();
        return view('frontend.berita', ["berita" => $berita, "berita_latest_3" => $berita_latest_3]);
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::orderBy('tanggal', 'DESC')->paginate(9);
        $pengumuman_latest_3 = Pengumuman::orderBy('views', 'desc')->take(10)->get();
        return view('frontend.pengumuman', ["pengumuman" => $pengumuman, "pengumuman_latest_3" => $pengumuman_latest_3]);
    }

    public function beritaExample(Berita $berita)
    {
        $show = str_replace("\r\n", '', $berita->deskripsi);
        $date = \Carbon\Carbon::parse('2024-11-19 17:12:37');
        $berita["final"] =  explode("<br>", trim($show));
        $berita["date"] =  $date;
        // Check if the user has already viewed this article during this session
        $sessionKey = 'pengumuman_' . $berita->id . '_viewed';
        if (!session()->has($sessionKey)) {
            // Increment the view count
            $berita->increment('views');
            // Store the flag in the session
            session([$sessionKey => true]);
        }
        $berita_latest_3 = Berita::orderBy('tanggal', 'desc')->take(10)->get();
        return view('frontend.berita-example', ["berita" => $berita, "berita_latest_3" => $berita_latest_3]);
    }

    public function pengumumanExample(Pengumuman $pengumuman)
    {
        $show = str_replace("\r\n", '', $pengumuman->deskripsi);
        $date = \Carbon\Carbon::parse('2024-11-19 17:12:37');
        $pengumuman["final"] =  explode("<br>", trim($show));
        $pengumuman["date"] =  $date;
        $pengumuman->increment('views');
        // Check if the user has already viewed this article during this session
        $sessionKey = 'pengumuman_' . $pengumuman->id . '_viewed';
        if (!session()->has($sessionKey)) {
            // Increment the view count
            $pengumuman->increment('views');
            // Store the flag in the session
            session([$sessionKey => true]);
        }
        $pengumuman_latest_3 = Pengumuman::orderBy('tanggal', 'desc')->take(10)->get();
        return view('frontend.pengumuman-example', ["pengumuman" => $pengumuman, "pengumuman_latest_3" => $pengumuman_latest_3]);
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

    public function livestream()
    {
        $livestream = Livestream::all();
        return view('frontend.livestream', ["livestream" => $livestream]);
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
