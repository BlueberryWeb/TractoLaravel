<?php

use App\Http\Controllers\Depertamentos\AdministracionController;
use App\Http\Controllers\Depertamentos\AlmacenController;
use App\Http\Controllers\Depertamentos\CalidadController;
use App\Http\Controllers\Depertamentos\CobranzaController;
use App\Http\Controllers\Depertamentos\FinanzasController;
use App\Http\Controllers\Depertamentos\LogisticaController;
use App\Http\Controllers\Depertamentos\OperacionesController;
use App\Http\Controllers\Depertamentos\ProduccionController;
use App\Http\Controllers\Depertamentos\RRHHHController;
use App\Http\Controllers\Depertamentos\VentasController;
use App\Http\Controllers\PeticionesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideosController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// RUTAS DE USUARIOS ----------
Route::get('/usuarios', UserController::class, 'index')->middleware(['auth'])->name('users.index');
Route::post('/usuarios/crear', [UserController::class, 'store'])->middleware(['auth'])->name('users.store');
Route::put('/usuarios/editar/{id}', [UserController::class, 'edit'])->middleware(['auth'])->name('users.edit');
Route::delete('/usuarios/eleminar/{id}', [UserController::class, 'delete'])->middleware(['auth'])->name('users.delete');

// RUTAS DE PETICIONES ----------
Route::get('/peticiones', PeticionesController::class, 'index')->middleware(['auth'])->name('peticiones.index');
Route::post('/peticiones/crear', [PeticionesController::class, 'store'])->middleware(['auth'])->name('peticiones.store');
Route::delete('/peticiones/eleminar/{id}', [PeticionesController::class, 'delete'])->middleware(['auth'])->name('peticiones.delete');

// RUTAS DE VIDEOS ----------
Route::get('/videos', VideosController::class, 'index')->middleware(['auth'])->name('videos.index');
Route::post('/videos/crear', [VideosController::class, 'store'])->middleware(['auth'])->name('videos.store');
Route::put('/videos/editar/{id}', [VideosController::class, 'edit'])->middleware(['auth'])->name('videos.edit');
Route::delete('/videos/eleminar/{id}', [VideosController::class, 'delete'])->middleware(['auth'])->name('videos.delete');

// RUTAS DE DEPARTAMENTOS
Route::get('/administracion', AdministracionController::class, 'index')->middleware(['auth'])->name('administracion.index');
Route::get('/ventas', VentasController::class, 'index')->middleware(['auth'])->name('ventas.index');
Route::get('/rrhhh', RRHHHController::class, 'index')->middleware(['auth'])->name('rrhhh.index');
Route::get('/calidad', CalidadController::class, 'index')->middleware(['auth'])->name('calidad.index');
Route::get('/cobranza', CobranzaController::class, 'index')->middleware(['auth'])->name('cobranza.index');
Route::get('/finanzas', FinanzasController::class, 'index')->middleware(['auth'])->name('finanzas.index');
Route::get('/operaciones', OperacionesController::class, 'index')->middleware(['auth'])->name('operaciones.index');
Route::get('/almacen', AlmacenController::class, 'index')->middleware(['auth'])->name('almacen.index');
Route::get('/logistica', LogisticaController::class, 'index')->middleware(['auth'])->name('logistica.index');
Route::get('/produccion', ProduccionController::class, 'index')->middleware(['auth'])->name('produccion.index');
