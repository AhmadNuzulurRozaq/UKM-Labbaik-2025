<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('departement.kemuslimahan'); // Mengarahkan ke psdm
});

Route::get('/psdm', function () {
    return view('departement.kemuslimahan'); // Mengarahkan ke resources/views/departement/psdm.blade.php
});
