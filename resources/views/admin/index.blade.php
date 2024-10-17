<!DOCTYPE html>
<html>

<head>
    <title>Заказы</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @include('components.header')
    <div class="container">
        <h1>Заказы</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Пользователь</th>
                    <th>Сумма</th>
                    <th>Количество</th>
                    <th>Дата</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->user ? $order->user->email : 'Нет пользователя' }}</td>
                        <td>{{ $order->total_amount }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->created_at->format('d.m.Y H:i') }}</td>
                        <td>
                            <form action="{{ route('admin.updateStatus', $order) }}" method="POST" style="display:inline;">
                                @csrf
                                <select name="status" onchange="updateStatus(this.form)" 
                                    {{ $order->status == 3 ? 'disabled' : '' }}>
                                        @foreach ($statuses as $value => $label)
                                            <option value="{{ $value }}" 
                                                {{ ($order->status == $value) ? 'selected' : '' }} 
                                                {{ ($order->status == 2 && in_array($value, [0, 1])) ? 'disabled' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                </select>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function updateStatus(form) {
            form.submit();
        }

    </script>
</body>

</html>