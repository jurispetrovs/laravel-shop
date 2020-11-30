<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product,
            'deliveries' => $product->deliveries()
        ]);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
