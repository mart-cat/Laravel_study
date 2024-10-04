<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index()
    {
        // Получаем заказы текущего пользователя
        $orders = Order::where('user_id', auth()->id())->get();

        return view('orders.index', compact('orders'));
    }
    
    public function store(Request $request)
    {
        // Получаем продукт
        $product = Product::findOrFail($request->product_id);

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Вы должны войти в систему, чтобы создать заказ.');
        }
    
        // Валидация входящих данных
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'amount' => 'required|integer|min:1|max:' . $product ->amount,
        ]);
    
        
    
        // Вычисляем общую сумму
        $totalAmount = $product->cost * $request->amount;
    
        // Создаем заказ и сохраняем его в базе данных
        $order = Order::create([
            'product_id' => $product->id,
            'name' => $product->name, // Получаем имя продукта
            'amount' => $request->amount,
            'total_amount' => $totalAmount,
            'user_id' => Auth::id(), // Сохранение id текущего пользователя
        ]);

        
    
        // Обновляем количество продукта
        $product->amount -= $request->amount;
        $product->save();
    
        return redirect()->route('product.show', $product->id)->with('success', 'Заказ успешно создан!');
    
}}
