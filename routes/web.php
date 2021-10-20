<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PamasastraController;
use App\Http\Controllers\KramaController;
use App\Http\Controllers\WayangController;
use App\Http\Controllers\GamelanController;
use App\Http\Controllers\AksaraController;
use App\Http\Controllers\UserController;


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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function() {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/friends', function () {
    return view('friends.index', [
        'title' => 'Friends'
    ]);
})->middleware('auth');

Route::resource('/profile', UserController::class)->middleware('auth');

Route::resource('/materi', MaterialController::class)->middleware('auth');
Route::get('/materis/checkSlug', [MaterialController::class, 'checkSlug'])->middleware('auth');

Route::resource('/pamasastra', PamasastraController::class)->middleware('auth');
Route::get('/pamasastras/checkSlug', [PamasastraController::class, 'checkSlug'])->middleware('auth');

Route::resource('/krama', KramaController::class)->middleware('auth');

Route::resource('/wayang', WayangController::class)->middleware('auth');
Route::get('/wayangs/checkSlug', [WayangController::class, 'checkSlug'])->middleware('auth');

Route::resource('/gamelan', GamelanController::class)->middleware('auth');
Route::get('/gamelans/checkSlug', [GamelanController::class, 'checkSlug'])->middleware('auth');

Route::resource('/aksara', AksaraController::class)->middleware('auth');
Route::get('/aksaras/checkSlug', [AksaraController::class, 'checkSlug'])->middleware('auth');