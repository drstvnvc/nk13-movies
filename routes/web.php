<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
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
  return view('welcome');
});

Route::get('/movies', [MoviesController::class, 'index']);

Route::get('/movies/add', [MoviesController::class, 'create']);
Route::post('/movies', [MoviesController::class, 'store']);

Route::get('/movie/{movie}', [MoviesController::class, 'show'])->name('movie');

Route::post('/movies/{movie}/comments', [CommentsController::class, 'store'])->name('createComment');

Route::get('/genres/{genre}', [GenresController::class, 'show'])->name('genre');