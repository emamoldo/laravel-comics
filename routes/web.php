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
Route::get("/", function () {
    $comics = config('db.comics');
    return view("home", compact("comics"));
})->name("home");


Route::get('/comics', function () {
    $comics = config('db.comics');
    // dd($comics);
    return view('comics', compact('comics'));
})->name('comics');

Route::get("/movies", function () {
    return view("movies");
})->name("movies");

Route::get("/tv", function () {
    return view("tv");
})->name("tv");

Route::get("/games", function () {
    return view("games");
})->name("games");

Route::get("/collectibles", function () {
    return view("collectibles");
})->name("collectibles");

Route::get("/videos", function () {
    return view("video");
})->name("videos");

Route::get("/fans", function () {
    return view("fans");
})->name("fans");

Route::get("/mews", function () {
    return view("news");
})->name("news");

Route::get("/shop", function () {
    return view("shop");
})->name("shop");