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

    public function getProduct()
    {
        return view('product');
    }
}