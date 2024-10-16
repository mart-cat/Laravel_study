<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    use HasFactory;
 // Указываем поля, которые могут быть массово присвоены
    protected $fillable = [
        'product_id',
        'name',
        'amount',
        'total_amount',
        'user_id',
        'status',
    ];
}