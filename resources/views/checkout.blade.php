<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('./styles/checkout.css') }}">
</head>

<body>
    <x-navbar />
    <h1>Checkout</h1>
    <h3>Order ID: {{ $data['orderId'] }}</h3>

    <div class="order_items">
        @foreach ($data['items'] as $item)
            <x-order-item :data="$item" />
        @endforeach
    </div>

    <h3>Total: {{ $data['orderData'][0]['total'] }}</h3>
    <x-footer />
</body>

</html>
