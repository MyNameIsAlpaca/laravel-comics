<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $comics = config('comics');

    return view('home', compact('comics'));
});

Route::get('/Action_Comics', function () {

    $comics = config('comics');

    return view('comic_page', compact('comics'));
})->name('comic_page');
