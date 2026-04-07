<?php


use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd("hello world");
    return view('welcome');
});

# iniii route untuk memanggil controller
Route::get('/hi', function () {
    return 'hi';
})->name('hi');

// Route::get('/hi', 'HiController@index');

// buat manggil home.blade.php
Route::get('/home', function () {
    return view('home'); # gausah pake .blade.php
})->name('home');

// buat manggil controller
Route::get('/home/sum', [FirstController::class, 'sum'])->name('sum');