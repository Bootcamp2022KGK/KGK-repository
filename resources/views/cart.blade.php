<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGK Collection</title>

    <link rel="stylesheet" href="{{ asset('styles/cart.css') }}">
</head>

<body>
    <div class="wrapper">
        <x-navbar />
        <div class="cart">
            <div class="cart__box">
                <div class="cart__title">Cart</div>
                <x-cart-product />
            </div>
            <hr class="cart__line">
            <div class="cart__checkout">
                <div class="cart__subtotal">Summa: 10000 e</div>
                <div class="cart__subtotalinfo">Taxes and shipping calculated at checkout</div>
                <button class="cart__buttonchekout">CheckOut</button>
            </div>
            <hr class="cart__line">
            <x-footer />
        </div>



</body>

</html>
