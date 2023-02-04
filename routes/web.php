<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SiteController;
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
Route::resource('category',CategoryController::class);
Route::resource('movie',MovieController::class);
Route::get('movies',[MovieController::class,'allMovies'])->name('allMovies');
Route::get('/movies/{cat}',[SiteController::class,'movies'])->name('site.movies');
