<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.homepage');
});

// ROUTE LAIN
Route::get('/departement/kemuslimahan', fn() => view('departement.kemuslimahan'));
Route::get('/departement/syiar', fn() => view('departement.syiar'));
Route::get('/departement/kewirausahaan', fn() => view('departement.kewirausahaan'));
Route::get('/departement/psdm', fn() => view('departement.psdm'));
Route::get('/departement/kominfo', fn() => view('departement.kominfo'));

Route::get('/galeri/galeri', fn() => view('galeri.galeri'));
Route::get('/profil/profil', fn() => view('profil.profil'));
Route::get('/homepage/homepage', fn() => view('homepage.homepage'));
Route::get('/kontak/kontak', fn() => view('kontak.kontak'));
