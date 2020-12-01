<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $product->name }}</title>
</head>

<body>
<div class="m-5">
    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
        Back to product list
    </a>
    <div class="mt-5 text-center">
        <form method="post" action="{{ route('products.update', $product) }}" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Product name*</label>
                <div class="col-sm-2 d-inline-block">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Product name" required
                           value="{{ $product->name }}">
                </div>
            </div>
            <div class="form-group">
                <label for="type" class="col-sm-2 control-label">Type</label>
                <div class="col-sm-2 d-inline-block">
                    <input type="text" class="form-control" id="type" name="type" placeholder="Product type"
                           value="{{ $product->type }}">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-2 control-label">Price</label>
                <div class="col-sm-2 d-inline-block">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Product price"
                           value="{{ $product->getPrice() }}">
                </div>
            </div>
            <div class="form-group">
                <label for="size" class="col-sm-2 control-label">Select product size</label>
                <div class="col-sm-2 d-inline-block">
                    <select class="form-control" name="size" id="size">
                        <option disabled {{ ($product->size) ? '' : 'selected' }}>Select the product size</option>
                        <option value="S" {{ ($product->size === 'S') ? 'selected' : '' }}>S</option>
                        <option value="M" {{ ($product->size === 'M') ? 'selected' : '' }}>M</option>
                        <option value="L" {{ ($product->size === 'L') ? 'selected' : '' }}>L</option>
                        <option value="XL" {{ ($product->size === 'XL') ? 'selected' : '' }}>XL</option>
                    </select>
                </div>
            </div>
            <div class="mt-5 form-group text-center">
                <button type="submit" class="btn btn-primary btn-lg">Edit</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>
