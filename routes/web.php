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
})->name('index');


//Rutas creadas para la administracion de los clubes
Route::get('/clubes/admin', [\App\Http\Controllers\ClubController::class, 'index'])->name('club.index');
Route::get('/clubes/crear', [\App\Http\Controllers\ClubController::class, 'create'])->name('club.create');
Route::get('/clubes/editar/{id}', [\App\Http\Controllers\ClubController::class, 'edit'])->name('club.edit');
Route::patch('/clubes/{club}', [App\Http\Controllers\ClubController::class, 'update'])->name('club.update');
Route::post('/clubes/guardar', [\App\Http\Controllers\ClubController::class, 'store'])->name('club.store');
Route::delete('clubes/{club}', [App\Http\Controllers\ClubController::class, 'destroy'])->name('club.destroy');

//Rutas creadas para la creacion de los jugadores
Route::get('/jugadores/admin', [\App\Http\Controllers\JugadorController::class, 'index'])->name('jugador.index');