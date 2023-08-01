<?php

use App\Http\Controllers\ExercicioUmController;
use Illuminate\Support\Facades\Route;

Route::post('exercicio/um', [ExercicioUmController::class, 'multiplicar']);
