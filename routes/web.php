<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContatoController;



Route::get('/', [ContatoController::class, 'index'])->name('contatos.index');

Route::get('/contatos/create', [ContatoController::class, 'create'])->middleware('auth')->name('contatos.create');

Route::get('/contatos/{id}', [ContatoController::class, 'show'])->name('contatos.show');

Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');

Route::get('/dashboard', [ContatoController::class, 'dashboard'])->middleware('auth')->name('contatos.dashboard');

Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->middleware('auth')->name('contatos.destroy');

Route::get('/contatos/edit/{id}', [ContatoController::class, 'edit'])->middleware('auth')->name('contatos.edit');

Route::put('/contatos/update/{id}', [ContatoController::class, 'update'])->middleware('auth')->name('contatos.update');

