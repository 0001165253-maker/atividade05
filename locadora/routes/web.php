<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\AluguelController;

Route::resource('clientes', ClienteController::class);
Route::resource('carros', CarroController::class);
Route::resource('alugueis', AluguelController::class);
