<link rel="stylesheet" href="{{ asset('styles/card.css') }}">

<div class="card">
    <img class="card__image" src="{{ asset("images/products/$image.jpg") }}" {{-- src="https://d3tye5etyupvvn.cloudfront.net/img/bmw-wheels-rims-beyern-antler-5-lug-silver-mirror-cut-face-std-700.jpg" --}} alt="rims">

    <div class="card__price">{{ $price }}</div>
    <div class="card__name">{{ $model }}</div>
    <div class="card__producer">{{ $manufacturer }}</div>
    {{-- <div class="card__code">SCR567</div> --}}
    <button class="card__button">Add to Cart</button>
</div>
