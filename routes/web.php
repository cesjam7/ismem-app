<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/noticias', [App\Http\Controllers\NoticiasController::class, 'listado']);
Route::get('/noticias/registrar', [App\Http\Controllers\NoticiasController::class, 'registrar']);

Route::resource('eventos', EventosController::class);
Route::resource('estudiantes', EstudianteController::class);

