<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Product List</title>
</head>
<body>

<div class="m-5">
    <div class="mb-5 text-right">
        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
            Create new product
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>
                    <a href="{{ route('products.show', $product) }}">
                        {{ $product->name }}
                    </a>
                </td>
                <td>{{ $product->type }}</td>
                <td>€ {{ $product->getPrice() }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
                        Edit
                    </a>
                    <form method="post" action="{{ route('products.destroy', $product) }}" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
