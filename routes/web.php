<?php

use App\Http\Controllers\routecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// home
Route::get('/', [routecontroller::class, 'home'])->name('home');
Route::get('/tentang-kami', [routecontroller::class, 'aboute'])->name('aboute');
Route::get('/fasilitas', [routecontroller::class, 'fasilitas'])->name('fasilitas');
Route::get('/kontak-kami', [routecontroller::class, 'contact'])->name('contact');
Route::get('/login-siwsa', [routecontroller::class, 'SiswaLogin'])->name('siswa-login');
Route::get('/profil-guru', [routecontroller::class, 'ProfilGuru'])->name('Profil-guru');
Route::get('/detail-guru', [routecontroller::class, 'DetailGuru'])->name('detail-guru');
Route::get('/struktur-organisasi', [routecontroller::class, 'StrukturOrganisasi'])->name('struktur-organisasi');
// end home