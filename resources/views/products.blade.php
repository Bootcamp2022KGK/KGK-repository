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
                <span class="collection__productcount"> 6 products</span>
            </div>
            <hr class="collection__line">
            <div class="collection__gallery">
                <x-productcard />
                <x-productcard />
                <x-productcard />
                <x-productcard />
                <x-productcard />
                <x-productcard />
                <x-productcard />
                <x-productcard />
                <x-productcard />
                <x-productcard />
            </div>

            <hr class="collection__line">

        </div>



</body>

</html>
