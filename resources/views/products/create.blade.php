<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Create new product</title>
</head>

<body>
    <div class="m-5">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back to product list
        </a>
        <div class="mt-5 text-center">
            <form method="post" action="{{ route('products.store') }}" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Product name*</label>
                    <div class="col-sm-2 d-inline-block">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Product name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-2 d-inline-block">
                        <input type="text" class="form-control" id="type" name="type" placeholder="Product type">
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-2 d-inline-block">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Product price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="size" class="col-sm-2 control-label">Select product size</label>
                    <div class="col-sm-2 d-inline-block">
                        <select class="form-control" name="size" id="size">
                            <option selected disabled>Select the product size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                </div>
                <div class="mt-5 form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
