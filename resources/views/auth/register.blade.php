
@include('components.header')
<body>
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Имя:</label>
            <input type="text" name="name" required value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">Почта:</label>
            <input type="email" name="email" required value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Подтвердить пароль:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</body>
</html>
