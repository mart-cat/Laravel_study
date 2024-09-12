<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Маршрут для отображения списка продуктов
Route::get('/products', [ProductController::class, 'index']);