<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\PiezaController;
use App\Http\Controllers\RegistroController;

Route::get('/obtener-proyectos', [ProyectoController::class, 'obtenerProyectos']);
Route::get('/obtener-bloques/{proyecto}', [BloqueController::class, 'obtenerBloques']);
Route::get('/obtener-peso-teorico/{pieza}', [PiezaController::class, 'obtenerPesoTeorico']);
Route::post('/registrar-datos', [RegistroController::class, 'registrarDatos']);



require __DIR__.'/auth.php';
