<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        echo $orderId;
        $data = 0;
        return view('checkout', ['data ' => $data]);
    }
}