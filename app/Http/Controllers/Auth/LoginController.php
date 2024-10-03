<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
   


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.log'); // возвращаем представление с формой входа
    }

    public function login(Request $request)
    {
        // Валидация входящих данных
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Попытка аутентификации пользователя
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Если аутентификация успешна, перенаправляем на главную страницу
            return redirect()->intended('products');
        }

        // Если аутентификация не удалась, возвращаем на страницу входа с ошибкой
        return back()->withErrors([
            'email' => 'Неверные учетные данные.',
        ]);

        
    }
    public function logout()
    {
        Auth::logout(); // Выход из системы

        return redirect('/login')->with('message', 'Вы успешно вышли из системы.');
}
}