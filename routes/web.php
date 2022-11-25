<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\NewsController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/handphone', [HandphoneController::class, 'show']);

Route::get('/news', [NewsController::class, 'show']);

Route::get('/content', function () {
    return view('content');
});

// ini ga ada
Route::get('/about', function () {
    return view('about');
});

Route::get('/baru', function () {
    return view('baru');
});
