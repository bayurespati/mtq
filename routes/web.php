<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('beranda');

Route::get('/profil/tentang-kami', function () {
    return view('frontend.tentang-kami');
})->name('tentang-kami');

Route::get('/profil/sambutan', function () {
    return view('frontend.sambutan');
})->name('sambutan');

Route::get('/artikel/berita', function () {
    return view('frontend.berita');
})->name('berita');

Route::get('/artikel/pengumuman', function () {
    return view('frontend.pengumuman');
})->name('pengumuman');

Route::get('/media/foto', function () {
    return view('frontend.foto');
})->name('foto');

Route::get('/media/video', function () {
    return view('frontend.video');
})->name('video');

Route::get('/musabaqadah-center', function () {
    return view('frontend.musabaqadah-center');
})->name('musabaqadah-center');

Route::get('/hubungi-kami', function () {
    return view('frontend.hubungi-kami');
})->name('hubungi-kami');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

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


Route::post('/login', [AuthController::class, 'login'])->name('auth-login');
Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('/admin-view', function () {
    //     return view('admin.index');
    // })->name('admin-page');
});
