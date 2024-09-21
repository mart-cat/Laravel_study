<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
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
</body>

</html>