<x-layout>

<div class="container mt-5">
    <h2>Регистрация</h2>
    <form action="{{ route('register') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>
        @if ($errors->has('name'))
            <div class="alert alert-danger mt-1">
                {{ $errors->first('name') }}
            </div>
        @endif

        <div class="form-group">
            <label for="email">Почта:</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            <!--old возвращает предыдущее значение поля email, если форма была отправлена и произошла ошибка валидации. -->
        </div>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Подтвердить пароль:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
         @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    
    </div>
       
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>

    
</div>
</x-layout>

<!--

@foreach (['name', 'email', 'password', 'password_confirmation'] as $field)
            <div class="form-group">
                <label for="{{ $field }}">{{ ucfirst($field) }}:</label>
                <input type="{{ $field === 'email' ? 'email' : 'text' }}" name="{{ $field }}" class="form-control" required value="{{ old($field) }}">
                @if ($errors->has($field))
                    <span class="text-danger">{{ $errors->first($field) }}</span>
                @endif
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
    -->