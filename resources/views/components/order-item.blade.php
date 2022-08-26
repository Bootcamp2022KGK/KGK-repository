<div class="order_item">
    <div class="info">
        <div class="manufacturer">
            {{ $manufacturer }}
        </div>

        <div class="model">
            {{ $model }}
        </div>
    </div>

    <div class="right">
        <div class="image">
            <img src="{{ asset("images/products/$image.jpg") }}" alt="">
        </div>
        <div class="price">
            Price: {{ $price }}
        </div>
    </div>
</div>
