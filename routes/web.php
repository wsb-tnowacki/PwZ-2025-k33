<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
})->name('start'); */
Route::get('/',[App\Http\Controllers\OgolneController::class, 'start'])->name('ogolne.start');
/* Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt'); */
Route::get('/kontakt',[App\Http\Controllers\OgolneController::class, 'kontakt'])->name('ogolne.kontakt');
/* Route::get('/onas', function () {
    $zadania =[
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    //return view('onas', ['zadania' => $zadania]);
    //return view('onas')->with('zadania', $zadania);
    return view('onas', compact('zadania'));
})->name('onas'); */
Route::get('/o-nas',[App\Http\Controllers\OgolneController::class, 'onas'])->name('ogolne.onas');
