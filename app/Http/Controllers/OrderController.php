<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function completeOrder(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $keys = array_keys($data);

        $order = Order::create();

        foreach ($keys as $key) {
            DB::table('order_items')->insert([
                'orderId' => $order->id,
                'productCode' => $key,
                'quantity' => $data[$key],
            ]);
        }

        $redirectURL = "/checkout/" . $order->id;

        return json_encode(['redirectURL' => $redirectURL]);
    }

    public function getCheckout($orderId)
    {
        $orderItems = DB::table('order_items')->where('orderId', $orderId)->get();
        $data["orderId"] = $orderId;
        $data['orderData'] = Order::where('id', $orderId)->get();
        $data['items'] = [];

        foreach ($orderItems as $item) {
            $info = Product::where('code', $item->productCode)->first();
            $quantity = $item->quantity;
            $product = ['productData' => $info, 'quantity' => $quantity];
            $data['items'][$item->productCode] = $product;
        }

        // dd($data);

        return view('checkout', ['data' => $data]);
    }

    public function getOrderPanel()
    {
        $orders = Order::get();
        return view("orderpanel", ['data' => $orders]);
    }
}