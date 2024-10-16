<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        $orders = Order::all();
        return view('admin.index', compact('orders'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|integer|in:1,2,3',
        ]);
        $order->status = $request->status;
        $order->save();
        return redirect()->route('admin.orders.index')->with('success', 'Статус заказа обновлён успешно!');

        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Статус заказа обновлен.');
    }


    }

