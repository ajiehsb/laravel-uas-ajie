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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artis', [App\Http\Controllers\ArtisController::class, 'index']);
Route::get('/artis/create', [App\Http\Controllers\ArtisController::class, 'create']);
Route::post('/artis', [App\Http\Controllers\ArtisController::class, 'store']);
Route::get('/artis/{id}/edit', [App\Http\Controllers\ArtisController::class, 'edit']);
Route::patch('/artis/{id}', [App\Http\Controllers\ArtisController::class, 'update']);
Route::delete('/artis/{id}', [App\Http\Controllers\ArtisController::class, 'destroy']);

Route::get('/album', [App\Http\Controllers\AlbumController::class, 'index']);
Route::get('/album/create', [App\Http\Controllers\AlbumController::class, 'create']);
Route::post('/album', [App\Http\Controllers\AlbumController::class, 'store']);
Route::get('/album/{id}/edit', [App\Http\Controllers\AlbumController::class, 'edit']);
Route::patch('/album/{id}', [App\Http\Controllers\AlbumController::class, 'update']);
Route::delete('/album/{id}', [App\Http\Controllers\AlbumController::class, 'destroy']);

Route::get('/track', [App\Http\Controllers\TrackController::class, 'index']);
Route::get('/track/create', [App\Http\Controllers\TrackController::class, 'create']);
Route::post('/track', [App\Http\Controllers\TrackController::class, 'store']);
Route::get('/track/{id}/edit', [App\Http\Controllers\TrackController::class, 'edit']);
Route::patch('/track/{id}', [App\Http\Controllers\TrackController::class, 'update']);
Route::delete('/track/{id}', [App\Http\Controllers\TrackController::class, 'destroy']);

Route::get('/played', [App\Http\Controllers\PlayedController::class, 'index']);
Route::get('/played/create', [App\Http\Controllers\PlayedController::class, 'create']);
Route::post('/played', [App\Http\Controllers\PlayedController::class, 'store']);
Route::get('/played/{id}/edit', [App\Http\Controllers\PlayedController::class, 'edit']);
Route::patch('/played/{id}', [App\Http\Controllers\PlayedController::class, 'update']);
Route::delete('/played/{id}', [App\Http\Controllers\PlayedController::class, 'destroy']);