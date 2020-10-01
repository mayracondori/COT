<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlantillaController;

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


Route::get('/', HomeController::class);

Route::get('layouts/plantilla', [PlantillaController::class, 'plantilla']);
    Route::get('layouts/registro', [PlantillaController::class, 'registro']);

Route::get('usuario', [UsuarioController::class, 'index']);

    Route::get('usuario/create', [UsuarioController::class, 'create']);
    Route::get('usuario/ver', [UsuarioController::class, 'ver']);
    Route::get('usuario/formulario', [UsuarioController::class, 'formulario']);
    Route::get('usuario/permiso', [UsuarioController::class, 'permiso']);
    Route::get('usuario/vacaciones', [UsuarioController::class, 'vacaciones']);
    Route::get('usuario/comisiones', [UsuarioController::class, 'comisiones']);
    Route::get('usuario/boleta', [UsuarioController::class, 'boleta']);
    Route::get('usuario/trabajo', [UsuarioController::class, 'trabajo']);
    Route::get('usuario/medico', [UsuarioController::class, 'medico']);

Route::get('admin', [AdminController::class, 'index']);

    Route::get('admin/create', [AdminController::class, 'create']);
    Route::get('admin/show', [AdminController::class, 'show']);
