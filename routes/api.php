<?php

use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Support\Facades\Route;

Route::post('exercicio/um', [ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', [ExercicioDoisController::class, 'retornarMaior']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'exibirNumeros']);