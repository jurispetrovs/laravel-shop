@extends('layouts.app')

@section('content')
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
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
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
