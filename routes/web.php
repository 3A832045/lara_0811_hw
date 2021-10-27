<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::get('home',[HomeController::class,'index'])->name('home.index');

Route::get('about',[\App\Http\Controllers\AboutController::class,'index'])->name('about.index');

Route::get('news',[\App\Http\Controllers\NewsController::class,'index'])->name('news.index');

/*Route::get('/home', function () {
    return view('home');
})->name('home.index');

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/news', function () {
    return view('news');
})->name('news.index');*/

