<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app'); // atau halaman awal apa saja
});

Route::get('/departement/kemuslimahan', function () {
    return view('departement.kemuslimahan');
});
Route::get('/departement/syiar', function () {
    return view('departement.syiar');
});
Route::get('/departement/kewirausahaan', function () {
    return view('departement.kewirausahaan');
});
Route::get('/departement/psdm', function () {
    return view('departement.psdm');
});
Route::get('/departement/kominfo', function () {
    return view('departement.kominfo');
});
Route::get('/galeri/galeri', function () {
    return view('galeri.galeri');
});
Route::get('/profil/profil', function () {
    return view('profil.profil');
});
Route::get('/homepage/homepage', function () {
    return view('homepage.homepage');
});

