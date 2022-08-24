<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGK Product</title>

    <link rel="stylesheet" href="{{ asset('styles/product.css') }}">
</head>

<body>
    <x-navbar />

    <div class="wrapper">
        <div class="product">
            <div class="product__image">
                @php
                    $image = $product['picture_name'];
                @endphp
                <img src="{{ asset("images/products/$image.jpg") }}" alt="">
            </div>
            <div class="product__title">
                <span>
                    {{ $product['manufacturer'] }}
                </span>
                <br>
                <span>
                    {{ $product['model'] }}
                </span>
            </div>

            <hr class="product__line">

            <p class="product__description">
                {{ $product['description'] }}
            </p>

            <span class="product__size">
                Size: {{ $product['size'] }}
            </span>
            <br>
            <span class="product__type">
                Type: {{ $product['type'] }}
            </span>
            <br>
            <span class="product__color">
                Color: {{ $product['color'] }}
            </span>
            <br>
            <span class="product__price">
                @php
                    $price = number_format($product['price'], 2);
                @endphp
                Price: {{ $price }}eur
            </span>

            <hr class="product__line">

            <a href="">
                <button class="card__button">
                    Add to Cart
                </button>
            </a>

        </div>
</body>

</html>
