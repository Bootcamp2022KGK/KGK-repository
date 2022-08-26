<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGK Collection</title>
    <link rel="stylesheet" href="{{ asset('styles/card.css') }}">
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
                        <label for="filter_size">Size</label>
                        <input type="checkbox" id="filter_size">

                        <label for="filter_manufacturer">Manufacturer</label>
                        <input type="checkbox" id="filter_manufacturer">

                        <label for="filter_price">Price</label>
                        <input type="checkbox" id="filter_price">

                        {{-- <label for="filter_price_low">Starting price</label>
                        <input type="number" id="filter_price_low">

                        <label for="filter_price_high">Ending price</label>
                        <input type="number" id="filter_price_high"> --}}
                    </div>
                    <span>Sort by:</span>
                    <div class="sort__options">
                        <label for="sort_size_ascending">Size ↑</label>
                        <input type="checkbox" id="sort_size_ascending">

                        <label for="sort_size_descending">Size ↓</label>
                        <input type="checkbox" id="sort_size_descending">

                        <label for="sort_manufacturer_ascending">Manufacturer A-Z</label>
                        <input type="checkbox" id="sort_manufacturer_ascending">

                        <label for="sortsort_manufacturer_descending">Manufacturer Z-A</label>
                        <input type="checkbox" id="sortsort_manufacturer_descending">

                        <label for="sort_price_ascending">Price ↑</label>
                        <input type="checkbox" id="sort_price_ascending">

                        <label for="sort_price_descending">Price ↓</label>
                        <input type="checkbox" id="sort_price_descending">
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
            <x-footer />
        </div>



</body>
<script src="{{ asset('js/addToCart.js') }}"></script>
<script src="{{ asset('js/filterSortToggle.js') }}"></script>


</html>
