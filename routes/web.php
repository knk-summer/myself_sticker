<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopPageController;
use App\Http\Controllers\NamePageController;
use App\Http\Controllers\StickerPageController;
use App\Http\Controllers\ResultPageController;
use App\Http\Controllers\ImageController;

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

Route::get('/',  [TopPageController::class, 'show'])->name('top.show');
Route::get('/name',  [NamePageController::class, 'show'])->name('name.show');
Route::match(['get','post'],'/sticker',  [StickerPageController::class, 'show'])->name('sticker.show');
Route::post('/result',  [ResultPageController::class, 'img'])->name('result.show');

