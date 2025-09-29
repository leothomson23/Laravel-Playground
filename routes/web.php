<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{cve}', function($cve) {
    return view('cve', ['cve' => $cve]);
});