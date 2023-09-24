<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//tablas
Route::resource('equipos', App\Http\Controllers\equipoController::class)->middleware('auth');
Route::resource('edificios', App\Http\Controllers\EdificioController::class)->middleware('auth');
Route::resource('campuses', App\Http\Controllers\CampusController::class)->middleware('auth');
Route::resource('areas', App\Http\Controllers\AreaController::class)->middleware('auth');
Route::resource('firmas', App\Http\Controllers\FirmaController::class)->middleware('auth');
Route::resource('safeguards', App\Http\Controllers\SafeguardController::class)->middleware('auth');
Route::resource('inventories', App\Http\Controllers\InventoryController::class)->middleware('auth');
Route::resource('personale', App\Http\Controllers\PersonaleController::class)->middleware('auth');

//consultas
Route::get('/consultas/resguardo', [App\Http\Controllers\ConsultaController::class, 'resguardo'])->name('resguardo');
Route::get('consultas', [App\Http\Controllers\ConsultaController::class, 'consultas'])->name('consultas');
Route::get('/consultas/articulo', [App\Http\Controllers\HomeController::class, 'articulo'])->name('articulo');
Route::get('/consultas/division', [App\Http\Controllers\HomeController::class, 'division'])->name('division');
Route::get('/consultas/traslado', [App\Http\Controllers\HomeController::class, 'traslado'])->name('traslado')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
