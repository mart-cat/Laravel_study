<x-layout>
    <div class="container mt-5">
        <h1 class="text-center">{{ $product->name }}</h1>
        <div class="card mb-2">
            <div class="card-body">
                <p class="card-text">Цена: <strong>{{ $product->cost }}₽</strong></p>
                <p class="card-text">Количество на складе: <strong>{{ $product->amount }}</strong></p>

                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="form-group">
                        <label for="amount">Количество:</label>
                        <input type="number" name="amount" id="amount" class="form-control" min="1"
                            max="{{ $product->amount }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Заказать</button>
                </form>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


            </div>
        </div>
    </div>
    </x-layout>