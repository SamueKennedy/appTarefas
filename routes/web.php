<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TarefaController::class, 'index'])->name('tarefa.index');
