<!DOCTYPE html>
<html>

<head>
    <title>Заказы</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @include('components.header')
    <div class="container">
        <h1>Мои Заказы</h1>

        @if($orders->isEmpty())
        <p>У вас нет заказов.</p>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID Заказа</th>
                    <th>Сумма</th>
                    <th>Количество</th>
                    <th>Дата</th>
                    <th>Cтатус</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->total_amount }}</td>
                    <td>{{ $order->amount }}</td>
                    <td>{{ $order->created_at->format('d.m.Y H:i') }}</td>
                    <td> @switch($order->status)
                        @case(1)
                        Новый
                        @break
                        @case(2)
                        Одобрен
                        @break
                        @case(3)
                        Доставлен
                        @break
                        @default
                        Неизвестный статус
                        @endswitch</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>