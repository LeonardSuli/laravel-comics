<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $comics = config('data.comics');

    // dd($comics);

    return view('guests.homepage', compact('comics'));
})->name('Home');






Route::get('/single', function () {


    return view('guests.single', ['comics' => config('data.comics')]);
})->name('Single');
