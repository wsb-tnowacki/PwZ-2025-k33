<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/onas', function () {
    return view('onas');
});
