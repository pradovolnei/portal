<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

Route::get('/', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); // Coloque esta rota antes
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

?>
