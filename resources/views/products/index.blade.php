<x-layout>
    <div class="container">
        <h1>Products</h1>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <x-product-card :product="$product" />
            </div>
            @endforeach


        </div>
    </div>
    </x-layout>