<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'index'])->name('book');

Route::post('/store', [BookController::class, 'index'])->name('store');
Route::get('/tambah', [BookController::class, 'tambah'])->name('tambah');

Route::post('/edit/{id}', [BookController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [BookController::class, 'update'])->name('update');

Route::get('/destroy/{id}', [BookController::class, 'destroy'])->name('destroy');
Route::get('/detail/{id}', [BookController::class, 'detail'])->name('detail');