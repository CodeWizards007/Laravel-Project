<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\BlogController;

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



Route::resource('/etablissements', \App\Http\Controllers\EtablissementController::class);

Route::resource('/blogs', \App\Http\Controllers\BlogController::class);

Route::resource('/evenements', \App\Http\Controllers\EvenementController::class);



Route::resource("/reclamation", ReclamationController::class);
Route::resource("/club", ClubController::class);
