@extends('layouts.app')

@section('content')
    <div>
        <div>
            Product: {{ $product->name }}
        </div>
        <div>
            Product description: {{ $product->type }}
        </div>
        <div>
            Product size: {{ $product->price }}
        </div>
        <div>
            Product price: {{ $product->size }}
        </div>
        <ul>
            @foreach($deliveries as $delivery)
                <li>{{ $delivery->name}}  {{ $delivery->price }}</li>
            @endforeach
        </ul>

    </div>
@endsection
