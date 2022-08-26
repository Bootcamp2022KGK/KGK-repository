<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    public function getProductsData(Request $request)
    {
        $data = json_decode($request->getContent());

        $response = [];

        foreach ($data as $key) {
            $product = Product::where('code', $key)->first();
            array_push($response, $product);
        }

        return json_encode($response);
    }
}