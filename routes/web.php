<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TodoController::class, 'index']);
Route::post('/save-todo', [TodoController::class, 'saveTodo'])->name('saveTodo');
Route::get('delete/{id}', [TodoController::class,'delete']);
Route::get('edit/{id}', [TodoController::class,'edit']);
Route::post('/edit', [TodoController::class,'updateTodo'])->name('updateTodo');