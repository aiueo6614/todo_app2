<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [TodoController::class, 'index'])->name('todo.index');

Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/', [TodoController::class, 'store'])->name('todo.store');

Route::get('/{item}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::patch('/{item}', [TodoController::class, 'update'])->name('todo.update');

Route::delete('/{item}', [TodoController::class, 'destroy'])->name('todo.destroy');
