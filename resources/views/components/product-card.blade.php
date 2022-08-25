<link rel="stylesheet" href="{{ asset('styles/card.css') }}">

<div class="card">
    <a href="/products/{{ $manufacturer }}/{{ $model }}/{{ $size }}/{{ $code }}">
        <img class="card__image" src="{{ asset("images/products/$image.jpg") }}" {{-- src="https://d3tye5etyupvvn.cloudfront.net/img/bmw-wheels-rims-beyern-antler-5-lug-silver-mirror-cut-face-std-700.jpg" --}} alt="rims">

        <div class="card__price">{{ $price }}</div>
        <div class="card__name">{{ $model }}</div>
        <div class="card__name">{{ $code }}</div>
        <div class="card__producer">{{ $manufacturer }}</div>
        <span>{{ $size }}</span>
    </a>
    <button onclick="clickCounter()" class="card__button">Add to Cart</button>
</div>
