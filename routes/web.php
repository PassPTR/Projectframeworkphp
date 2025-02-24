<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [PagesController::class, 'index'])->name('index');
Route::get('/create', [PagesController::class, 'create'])->name('create');
Route::post('/create', [PagesController::class, 'inputdata'])->name('inputdata');
Route::get('/edit/{id}', [PagesController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [PagesController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [PagesController::class, 'delete'])->name('delete');
// Route::get('/edit', [PagesController::class, 'edit'])->name('edit');
