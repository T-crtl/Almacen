<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('usuarios.')->prefix('usuarios')->group(function () {
    Route::get('index', [UsuariosController::class, 'index'])->name('index');
    Route::post('create', [UsuariosController::class, 'create'])->name('create');
    Route::put('update/{user}', [UsuariosController::class, 'update'])->name('update');
    Route::delete('delete/{user}', [UsuariosController::class, 'delete'])->name('delete');
});

//api regrese datos paso 1
//tomar paso api y mandarlos a la vista paso 2