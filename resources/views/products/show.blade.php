<div>
    <div>
        Product: {{ $product->name }}
    </div>
    <div>
        Product description: {{ $product->type }}
    </div>
    <div>
        Product price: {{ $product->price }}
    </div>
    <div>
        Product size: {{ $product->size }}
    </div>
    <ul>
        @foreach($product->deliveries as $delivery)
            <li>{{ $delivery->name}}  {{ $delivery->price }}</li>
        @endforeach
    </ul>
</div>
