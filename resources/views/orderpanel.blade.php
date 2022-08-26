<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orders</title>
    <link rel="stylesheet" href="{{ asset('styles/orderpanel.css') }}">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <x-navbar />

    <div class="order">
        <div class="order__title">
            Orders
        </div>
        <hr class="order__line">
        <div class="order__box">
            <table class="order__table" style="width:100%">
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>E-mail</th>
                    <th>m.Phone</th>
                </tr>

                @php
                    $position = 1;
                @endphp

                @foreach ($data as $item)
                    @php
                        $item['position'] = $position;
                    @endphp

                    <x-order-panel-item :item="$item" />

                    @php
                        $position = $position + 1;
                    @endphp
                @endforeach

            </table>
        </div>
        <hr class="order__line">
    </div>
    <x-footer />
</body>

</html>
