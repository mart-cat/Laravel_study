<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Получаем все продукты из базы данных

        return view('products.index', compact('products'));
         // Возвращаем представление 'products.index', 
         //передавая в него массив с данными о продуктах
    }
}