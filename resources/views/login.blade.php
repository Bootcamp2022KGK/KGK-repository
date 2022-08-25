<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGK Home</title>
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/website.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <x-navbar />
    <div class="login">
        <form action="" class="login__form">
            <input type="text" class="login__input">
            <input type="password" class="login__psw">
            <button class="login__submit">Login</button>

        </form>
    </div>



    <x-footer />

</body>

</html>
