<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    @include('components.header')
<div class="container">
    <h2>Вход в систему</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Электронная почта</label>
            <input type="email" class="form-control" id="email" name="email" required autofocus value="{{ old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>

