<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\CambioController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\ReporteController;
Route::get('/', function () {
    return redirect('proyecto');
});
Route::view('/login','auth.login')->name('login');
Route::get('/report', [ReporteController::class, 'index'])->name('reportes.index');
Route::get('/reportes/{id}', [ReporteController::class, 'show'])->name('reportes.show');
Route::get('/calendario', [CalendarioController::class, 'index']);
Route::get('/calendario/tareas', [CalendarioController::class, 'show']);
/*Route::get('/usuario', function () {return view('tarea');});*/
Route::post('/login',[AuthenticatedSessionController::class,'store'])->middleware('web');
/*Route::get('/proyecto', function () {return view('proyecto');});*/
Route::get('/proyecto',[ ProyectoController::class, 'index'])->name('proyecto.index');
Route::post('/proyecto', [ProyectoController::class, 'store'])->name('proyecto.store');
Route::get('guardar', [ProyectoController::class, 'show'])->name('proyecto.show');
/*Route::get('/tarea', function () {return view('tarea');});*/
Route::get('/tarea/{id}',[ TareaController::class, 'index'])->name('tarea.index');
/*Route::get('/tarea',[ TareaController::class, 'index'])->name('tarea.index');*/
Route::post('/tarea', [TareaController::class, 'store'])->name('tarea.store');
Route::get('/tarea',[TareaController::class, 'show'])->name('tarea.show');
Route::post('/cambiar-estado-tarea', [CambioController::class, 'cambiarEstado'])->name('cambiar.estado.tarea');








