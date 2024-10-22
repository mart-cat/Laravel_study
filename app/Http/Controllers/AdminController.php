<?php

namespace App\Http\Controllers;
use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function admin()
    {
        $orders = Order::all();
        $statuses = OrderStatus::labels(); // Получаем статусы

        return view('admin.index', compact('orders', 'statuses'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|integer|in:1,2,3',
        ]);

        // Обновляем статус заказа
        $order->status = $request->status;
        $order->save();

        // Редиректим обратно с сообщением об успехе
        return redirect()->route('admin.orders.index')->with('success', 'Статус заказа обновлён успешно!');
    }


}

