<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\TerminosController;
use App\Http\Controllers\PoliticaController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\ReglamentoController;
USE App\Http\Controllers\ContactoController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\InfoEstaticaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index',[IndexController::class, 'index']);
Route::get('/producto',[ProductoController::class, 'producto']);
Route::get('/reserva',[ReservaController::class, 'reserva']);
Route::get('/comunidad',[ComunidadController::class, 'comunidad']);
Route::get('/acerca',[AcercaController::class, 'acerca']);
Route::get('/terminos',[TerminosController::class, 'terminos']);
Route::get('/politica',[PoliticaController::class, 'politica']);
Route::get('/preguntas',[PreguntasController::class, 'preguntas']);
Route::get('/reglamento',[ReglamentoController::class, 'reglamento']);
Route::get('/contacto',[ContactoController::class, 'contacto']);
Route::get('/soporte',[SoporteController::class, 'soporte']);
Route::get('/infoEstatica',[InfoEstaticaController::class, 'infoEstatica']);

