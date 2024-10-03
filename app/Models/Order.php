<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
 // Указываем поля, которые могут быть массово присвоены
    protected $fillable = [
        'product_id',
        'name',
        'amount',
        'total_amount',
        'user_id',
    ];
}