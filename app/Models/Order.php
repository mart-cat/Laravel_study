<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
 // Указываем поля, которые могут быть массово присвоены
    protected $fillable = [
        'user_id',
        'name',
        'product_id',
        'amount',
        'total_amount',
    ];
}