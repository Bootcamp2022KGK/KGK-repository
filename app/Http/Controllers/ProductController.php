<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $product = new Product();
        $productsList = $product->all();
        return view('products', ['products' => $productsList]);
    }

    public function getProduct($manufacturer, $model, $size)
    {
        $product = Product::where('manufacturer', $manufacturer)->where('model', $model)->where('size', $size)->first();
        return view('product', ['product' => $product]);
    }
}