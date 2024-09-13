<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Импортируйте класс Product

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * "seeder" — это инструмент для заполнения базы данных тестовыми данными.
     * 
     * php artisan db:seed --class=ProductSeeder
     * php artisan migrate:fresh --seed | Обновляет + очищает БД
     */
    public function run(): void
    {
    Product::create(['name' => 'Orange', 'cost' => 58800000, 'amount' => 27]);
    Product::create(['name' => 'Banana', 'cost' => 128808069, 'amount' => 17]);
    Product::create(['name' => 'Bread', 'cost' => 79006088, 'amount' => 8]);
    }
}
