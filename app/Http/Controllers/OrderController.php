<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'amount' => 'required|integer|min:1|max:' . Product::findOrFail($request->product_id)->amount,
        ]);
    
        $product = Product::findOrFail($request->product_id);
    
        $totalAmount = $product->cost * $request->amount;
    
        Order::create([
            'product_id' => $product->id,
            'name' => $product->name,
            'amount' => $request->amount, // Изменено здесь
            'total_amount' => $totalAmount,
        ]);
    
        $product->amount -= $request->amount;
        $product->save();
    
        return redirect()->route('product.show', $product->id)->with('success', 'Заказ успешно создан!');
    }
    
}
