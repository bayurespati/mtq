<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\FrontViewController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LoController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\SkpdController;
use App\Http\Controllers\SopirController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontViewController::class, 'beranda'])->name('beranda');
Route::get('/profil/tentang-kami', [FrontViewController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/profil/sambutan', [FrontViewController::class, 'sambutan'])->name('sambutan');
Route::get('/artikel/berita', [FrontViewController::class, 'berita'])->name('berita');
Route::get('/artikel/berita/example', [FrontViewController::class, 'beritaExample'])->name('berita-example');
Route::get('/artikel/berita/example-2', [FrontViewController::class, 'beritaExample2'])->name('berita-example-2');
Route::get('/artikel/pengumuman', [FrontViewController::class, 'pengumuman'])->name('pengumuman');
Route::get('/artikel/pengumuman/example', [FrontViewController::class, 'pengumumanExample'])->name('pengumuman-example');
Route::get('/media/foto', [FrontViewController::class, 'foto'])->name('foto');
Route::get('/media/video', [FrontViewController::class, 'video'])->name('video');
Route::get('/musabaqadah-center', [FrontViewController::class, 'musabaqadahCenter'])->name('musabaqadah-center');
Route::get('/hubungi-kami', [FrontViewController::class, 'hubungiKami'])->name('hubungi-kami');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/admin-view', function () {
        return view('admin.index');
    })->name('admin-page');

    Route::get('/admin-view/tema-mtq', function () {
        return view('admin.tema-mtq');
    })->name('tema-mtq');

    Route::get('/admin-view/hasil-individu', function () {
        return view('admin.hasil-individu');
    })->name('hasil-individu');

    Route::get('/admin-view/lokasi-perlombaan', function () {
        return view('admin.lokasi-perlombaan');
    })->name('lokasi-perlombaan');

    Route::get('/admin-view/lokasi-bazaar', function () {
        return view('admin.lokasi-bazaar');
    })->name('lokasi-bazaar');

    Route::get('/admin-view/lokasi-pemondokan', function () {
        return view('admin.lokasi-pemondokan');
    })->name('lokasi-pemondokan');

    Route::get('/admin-view/official-kafilah', function () {
        return view('admin.official-kafilah');
    })->name('official-kafilah');

    Route::get('/admin-view/dewan-majelis', function () {
        return view('admin.dewan-majelis');
    })->name('dewan-majelis');

    Route::get('/admin-view/panitia-mtq', function () {
        return view('admin.panitia-mtq');
    })->name('panitia-mtq');

    Route::group(['prefix' => 'berita'], function () {
        Route::get('', [BeritaController::class, 'index'])->name('admin-berita-index');
        Route::get('create', [BeritaController::class, 'create'])->name('admin-berita-create');
        Route::get('edit/{berita}', [BeritaController::class, 'edit'])->name('admin-berita-edit');
        Route::post('store', [BeritaController::class, 'store'])->name('admin-berita-store');
        Route::post('update/{berita}', [BeritaController::class, 'update'])->name('admin-berita-update');
        Route::get('delete/{berita}', [BeritaController::class, 'destroy'])->name('admin-berita-delete');
    });

    Route::group(['prefix' => 'pengumuman'], function () {
        Route::get('', [PengumumanController::class, 'index'])->name('admin-pengumuman-index');
        Route::get('create', [PengumumanController::class, 'create'])->name('admin-pengumuman-create');
        Route::get('edit/{pengumuman}', [PengumumanController::class, 'edit'])->name('admin-pengumuman-edit');
        Route::post('store', [PengumumanController::class, 'store'])->name('admin-pengumuman-store');
        Route::post('update/{pengumuman}', [PengumumanController::class, 'update'])->name('admin-pengumuman-update');
        Route::get('delete/{pengumuman}', [PengumumanController::class, 'destroy'])->name('admin-pengumuman-delete');
    });

    Route::group(['prefix' => 'jadwal'], function () {
        Route::get('', [JadwalController::class, 'index'])->name('admin-jadwal-index');
        Route::get('create', [JadwalController::class, 'create'])->name('admin-jadwal-create');
        Route::get('edit/{jadwal}', [JadwalController::class, 'edit'])->name('admin-jadwal-edit');
        Route::post('store', [JadwalController::class, 'store'])->name('admin-jadwal-store');
        Route::post('update/{jadwal}', [JadwalController::class, 'update'])->name('admin-jadwal-update');
        Route::get('delete/{jadwal}', [JadwalController::class, 'destroy'])->name('admin-jadwal-delete');
    });

    Route::group(['prefix' => 'skpd'], function () {
        Route::get('', [SkpdController::class, 'index'])->name('admin-skpd-index');
        Route::get('create', [SkpdController::class, 'create'])->name('admin-skpd-create');
        Route::get('edit/{skpd}', [SkpdController::class, 'edit'])->name('admin-skpd-edit');
        Route::post('store', [SkpdController::class, 'store'])->name('admin-skpd-store');
        Route::post('update/{skpd}', [SkpdController::class, 'update'])->name('admin-skpd-update');
        Route::get('delete/{skpd}', [SkpdController::class, 'destroy'])->name('admin-skpd-delete');
    });

    Route::group(['prefix' => 'lo'], function () {
        Route::get('', [LoController::class, 'index'])->name('admin-lo-index');
        Route::get('create', [LoController::class, 'create'])->name('admin-lo-create');
        Route::get('edit/{lo}', [LoController::class, 'edit'])->name('admin-lo-edit');
        Route::post('store', [LoController::class, 'store'])->name('admin-lo-store');
        Route::post('update/{lo}', [LoController::class, 'update'])->name('admin-lo-update');
        Route::get('delete/{lo}', [LoController::class, 'destroy'])->name('admin-lo-delete');
    });

    Route::group(['prefix' => 'provinsi'], function () {
        Route::get('', [ProvinsiController::class, 'index'])->name('admin-provinsi-index');
        Route::get('create', [ProvinsiController::class, 'create'])->name('admin-provinsi-create');
        Route::get('edit/{provinsi}', [ProvinsiController::class, 'edit'])->name('admin-provinsi-edit');
        Route::post('store', [ProvinsiController::class, 'store'])->name('admin-provinsi-store');
        Route::post('update/{provinsi}', [ProvinsiController::class, 'update'])->name('admin-provinsi-update');
        Route::get('delete/{provinsi}', [ProvinsiController::class, 'destroy'])->name('admin-provinsi-delete');
    });

    Route::group(['prefix' => 'peserta'], function () {
        Route::get('', [PesertaController::class, 'index'])->name('admin-peserta-index');
        Route::get('create', [PesertaController::class, 'create'])->name('admin-peserta-create');
        Route::get('edit/{peserta}', [PesertaController::class, 'edit'])->name('admin-peserta-edit');
        Route::post('store', [PesertaController::class, 'store'])->name('admin-peserta-store');
        Route::post('update/{peserta}', [PesertaController::class, 'update'])->name('admin-peserta-update');
        Route::get('delete/{peserta}', [PesertaController::class, 'destroy'])->name('admin-peserta-delete');
    });

    Route::group(['prefix' => 'sopir'], function () {
        Route::get('', [SopirController::class, 'index'])->name('admin-sopir-index');
        Route::get('create', [SopirController::class, 'create'])->name('admin-sopir-create');
        Route::get('edit/{sopir}', [SopirController::class, 'edit'])->name('admin-sopir-edit');
        Route::post('store', [SopirController::class, 'store'])->name('admin-sopir-store');
        Route::post('update/{sopir}', [SopirController::class, 'update'])->name('admin-sopir-update');
        Route::get('delete/{sopir}', [SopirController::class, 'destroy'])->name('admin-sopir-delete');
    });

    Route::group(['prefix' => 'mobil'], function () {
        Route::get('', [MobilController::class, 'index'])->name('admin-mobil-index');
        Route::get('create', [MobilController::class, 'create'])->name('admin-mobil-create');
        Route::get('edit/{mobil}', [MobilController::class, 'edit'])->name('admin-mobil-edit');
        Route::post('store', [MobilController::class, 'store'])->name('admin-mobil-store');
        Route::post('update/{mobil}', [MobilController::class, 'update'])->name('admin-mobil-update');
        Route::get('delete/{mobil}', [MobilController::class, 'destroy'])->name('admin-mobil-delete');
    });

    Route::group(['prefix' => 'lomba'], function () {
        Route::get('', [LombaController::class, 'index'])->name('admin-lomba-index');
        Route::get('create', [LombaController::class, 'create'])->name('admin-lomba-create');
        Route::get('edit/{lomba}', [LombaController::class, 'edit'])->name('admin-lomba-edit');
        Route::post('store', [LombaController::class, 'store'])->name('admin-lomba-store');
        Route::post('update/{lomba}', [LombaController::class, 'update'])->name('admin-lomba-update');
        Route::get('delete/{lomba}', [LombaController::class, 'destroy'])->name('admin-lomba-delete');
    });

    Route::group(['prefix' => 'foto'], function () {
        Route::get('', [FotoController::class, 'index'])->name('admin-foto-index');
        Route::get('create', [FotoController::class, 'create'])->name('admin-foto-create');
        Route::get('edit/{foto}', [FotoController::class, 'edit'])->name('admin-foto-edit');
        Route::post('store', [FotoController::class, 'store'])->name('admin-foto-store');
        Route::post('update/{foto}', [FotoController::class, 'update'])->name('admin-foto-update');
        Route::get('delete/{foto}', [FotoController::class, 'destroy'])->name('admin-foto-delete');
    });
});
