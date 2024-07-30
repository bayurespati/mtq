<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\FrontViewController;
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

    Route::group(['prefix' => 'foto'], function () {
        Route::get('', [FotoController::class, 'index'])->name('admin-foto-index');
        Route::get('create', [FotoController::class, 'create'])->name('admin-foto-create');
        Route::get('edit/{foto}', [FotoController::class, 'edit'])->name('admin-foto-edit');
        Route::post('store', [FotoController::class, 'store'])->name('admin-foto-store');
        Route::post('update/{foto}', [FotoController::class, 'update'])->name('admin-foto-update');
        Route::get('delete/{foto}', [FotoController::class, 'destroy'])->name('admin-foto-delete');
    });
});
