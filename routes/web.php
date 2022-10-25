<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EvenementController;

use \App\Http\Controllers\UserController;
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
Route::resource("/user",UserController::class);
Route::resource("/cour",\App\Http\Controllers\CoursController::class);



Route::resource('/classes', \App\Http\Controllers\ClasseController::class);
Route::resource('/etablissements', \App\Http\Controllers\EtablissementController::class);

Route::resource('/blogs', \App\Http\Controllers\BlogController::class);

Route::resource('/evenements', \App\Http\Controllers\EvenementController::class);




Route::resource("/reclamation", ReclamationController::class);
Route::resource("/club", ClubController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
