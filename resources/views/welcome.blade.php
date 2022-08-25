<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('styles/landing.css') }}">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <x-navbar />

    <div class="landing">
        <div class="landing__top">
            <img class="landing__image"
                src="https://w0.peakpx.com/wallpaper/761/99/HD-wallpaper-nissan-silvia-s13-tuning-ice-blue-rims-silvia-nissan-racing-bodykit-s13-gigantic-tuning-widebody-car-ice-r-drift-blue-race-car.jpg"
                alt="lading rims" class="landing__image">

            <a href="/about" class="landing__text"> Learn More</a>
        </div>
    </div>

    <x-footer />
</body>

</html>
