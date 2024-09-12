<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ["name" => "Orange", "cost" => 58800000, "amount" => 27],
            ["name" => "Banana", "cost" => 128808069, "amount" => 17],
            ["name" => "Bread", "cost" => 79006088, "amount" => 8],
        ];

        return view('products.index', compact('products'));
    }
}