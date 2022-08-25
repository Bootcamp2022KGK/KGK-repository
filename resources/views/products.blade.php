<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGK Collection</title>

    <link rel="stylesheet" href="{{ asset('styles/collection.css') }}">
</head>

<body>
    <div class="wrapper">
        <x-navbar />
        <div class="collection">
            <div class="collection__title">
                Wheels
                <!--must be name from database-->
            </div>
            <div class="collection__filter">
                <button class="collection__sort"> Filter and sort</button>
                <div class="options hidden">
                    <span>Filter by:</span>
                    <div class="filter__options">
                        <label for="filter_size"></label>
                        <input type="checkbox" id="filter_size">
                    </div>
                    <span>Sort by:</span>
                    <div class="sort__options">

                    </div>
                </div>

                <span class="collection__productcount"> {{ count($products) }} products</span>
            </div>
            <hr class="collection__line">
            <div class="collection__gallery">
                @foreach ($products as $product)
                    <x-product-card :product="$product"></x-product-card>
                @endforeach
            </div>

            <hr class="collection__line">

        </div>



</body>

<script src="{{ asset('js/addToCart.js') }}"></script>
<script src="{{ asset('js/filterSortToggle.js') }}"></script>

</html>
