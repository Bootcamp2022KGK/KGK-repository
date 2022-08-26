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
                <div class="cart__subtotal">Total: - EUR</div>
                <div class="cart__subtotalinfo">Taxes and shipping calculated at checkout</div>
                {{-- <a href="/checkout"> --}}
                <button class="cart__buttonchekout">CheckOut</button>
                {{-- </a> --}}
            </div>
            <hr class="cart__line">
            <x-footer />
        </div>


</body>
<script src="{{ asset('js/makeCartList.js') }}"></script>

</html>
