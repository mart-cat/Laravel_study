<div class="card">
    <div class="card-body">
        <a href="{{ route('product.show', $product->id) }}">
            <h5 class="card-title">{{ $product->name }}</h5>
        </a>
        <p class="card-text">Cost: {{ $product->cost}}</p>
        <p class="card-text">Amount: {{ $product->amount }}</p>
    </div>
</div>