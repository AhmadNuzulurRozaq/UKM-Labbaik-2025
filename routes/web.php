<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage.index')->name('homepage.index');

// ROUTE LAIN
Route::get('/departement/kemuslimahan', fn() => view('departement.kemuslimahan'));
Route::get('/departement/syiar', fn() => view('departement.syiar'));
Route::get('/departement/kewirausahaan', fn() => view('departement.kewirausahaan'));
Route::get('/departement/psdm', fn() => view('departement.psdm'));
Route::get('/departement/kominfo', fn() => view('departement.kominfo'));

Route::get('/galeri/galeri', fn() => view('galeri.galeri'))->name('galeri.galeri');
Route::get('/profil/profil', fn() => view('profil.profil'))->name('profil.profil');
Route::get('/kontak/kontak', fn() => view('kontak.kontak'))->name('kontak.kontak');
