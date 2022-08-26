<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin products panel</title>
    <link rel="stylesheet" href="{{ asset('styles/adminproductspanel.css') }}">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <x-navbar />

    <div class="admin">
        <div class="admin__top">
            <div class="admin__title">
                Admin products panel
            </div>
            <hr class="admin__line">
            <div class="admin__text">
                Input field form
            </div>
            <div class="admin__inputbox">
                <form action="" class="admin__add">
                    <table class="admin__inputtable" style="width:100%">
                        <tr>

                            <th>code</th>
                            <th>Name</th>
                            <th>Manufacturer</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Picture_name</th>
                            <td><button>Clear</button></td>
                            </th>
                        </tr>
                        <tr>

                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><input type="text" class="input__code"></td>
                            <td><button>Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="admin__text">
                Products field form
            </div>
            <hr class="admin__line">
            <div class="admin__box">
                <table class="admin__table" style="width:100%">
                    <tr>
                        <th>#</th>
                        <th>code</th>
                        <th>Name</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>Type</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Picture_name</th>
                    </tr>
                    <!--input here-------------------->
                    <tr>
                        <td>1</td>
                        <td>rh477t3t</td>
                        <td>2022/08/26</td>
                        <td>10000</td>
                        <td>Ainārs</td>
                        <td>Šlesers</td>
                        <td>slesers@oligarhs.gov</td>
                        <td>66889900</td>
                        <td>Šlesers</td>
                        <td>slesers@oligarhs.gov</td>
                        <td>66889900</td>
                    </tr>
                    <!--input here-------------------->
                    <tr>
                        <td>1</td>
                        <td>rh477t3t</td>
                        <td>2022/08/26</td>
                        <td>10000</td>
                        <td>Ainārs</td>
                        <td>Šlesers</td>
                        <td>slesers@oligarhs.gov</td>
                        <td>66889900</td>
                        <td>Šlesers</td>
                        <td>slesers@oligarhs.gov</td>
                        <td>66889900</td>
                    </tr>
                    <!--input here-------------------->
                    <tr>
                        <td>1</td>
                        <td>rh477t3t</td>
                        <td>2022/08/26</td>
                        <td>10000</td>
                        <td>Ainārs</td>
                        <td>Šlesers</td>
                        <td>slesers@oligarhs.gov</td>
                        <td>66889900</td>
                        <td>Šlesers</td>
                        <td>slesers@oligarhs.gov</td>
                        <td>66889900</td>
                    </tr>

                </table>
            </div>


        </div>
    </div>

    <x-footer />
</body>

</html>
