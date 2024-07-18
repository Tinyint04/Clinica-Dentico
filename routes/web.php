<?php

use App\Http\Controllers\HorariosmedicosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ruta para llamar la pantalla principal
Route::get('/principal', function () { return view('principal');});

//rutas para Horararios Medicos
Route::get('/principal',[HorariosMedicosController::class,'index'])->name('pacientes.principal');
Route::get('/horariosMedicos', [HorariosMedicosController::class, 'index'])->name('pacientes.index');


//ruta para crear un nuevo horario
Route::get('/create', [HorariosMedicosController::class, 'createPro'])->name('pacientes.create');
Route::post('/store', [HorariosMedicosController::class, 'store'])->name('pacientes.store');



Route::get('/show',[HorariosMedicosController::class, 'show'])->name('pacientes.show');


//ruta para las sucursales 


//ruta para los medicos 




