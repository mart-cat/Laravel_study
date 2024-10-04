<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Регистрация</title>
</head>
<body>

@include('components.header')

<div class="container mt-5">
    <h2>Регистрация</h2>
    <form action="{{ route('register') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Почта:</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            <!--old возвращает предыдущее значение поля email, если форма была отправлена и произошла ошибка валидации. -->
        </div>
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Подтвердить пароль:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</div>

</body>
</html>
