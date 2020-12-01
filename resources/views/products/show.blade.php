<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $product->name }}</title>
</head>

<body>
    <div class="m-5">
        <div class="mb-5">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
                Back to product list
            </a>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="text-center mb-5">
                    <h1>Product Description</h1>
                </div>
                <div>
                    <h5><strong>Product: </strong>{{ $product->name }}</h5>
                </div>
                <div>
                    <h5><strong>Product description: </strong>{{ $product->type }}</h5>
                </div>
                <div>
                    <h5><strong>Product price: </strong>€ {{ $product->getPrice() }}</h5>
                </div>
                <div>
                    <h5><strong>Product size: </strong>{{ $product->size }}</h5>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h1>Delivery methods and prices</h1>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="text-center">
            <ul class="list-unstyled">
                @foreach($product->deliveries as $delivery)
                    <li><h5><strong>{{ $delivery->name}}</strong> - {{ $delivery->getPrice() }}</h5></li>
                @endforeach
            </ul>
        </div>
    </div>
</body>

</html>
