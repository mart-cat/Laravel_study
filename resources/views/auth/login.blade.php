<x-layout>
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
           
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
</x-layout>

