<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset('style/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        sessionStorage.setItem("themeMode", "1");
        function themeMode() {
            let style = document.documentElement.style

            let colorALight = "#ffd8b8"
            let colorBLight = "#0B474B"
            let colorADark = "#3a1017"
            let colorBDark = "#f88275"

            // console.log(style.getPropertyValue('--color-B'))
            if (sessionStorage.getItem("themeMode") === "1"){ // being light
                style.setProperty('--color-A', colorADark) // change to dark
                style.setProperty('--color-B', colorBDark) // change to dark
                sessionStorage.setItem("themeMode", "0");
            } else {
                style.setProperty('--color-A', colorALight) // change to light
                style.setProperty('--color-B', colorBLight)
                sessionStorage.setItem("themeMode", "1");
            }
        }

        $(window).ready(function(){
            themeMode()
            $('#theme').on('click', function(){
                themeMode()
            })
        })
    </script>

    @yield('title')
</head>

<body @yield('id')>


<!--navigation-->
<nav class="nav fixed">
    <ul class="nav__list">
        <li class="nav__item"><div class="logo logo--mini">G</div></li>
        <li class="nav__item"><a href="/" class="nav__link">home</a></li>
        <li class="nav__item"><a href="/museum" class="nav__link">museum</a></li>
        <li class="nav__item"><a href="#about-me" class="nav__link">about</a></li>
        <li class="nav__item"><a href="/#contact" class="nav__link">contact</a></li>
    </ul>
</nav>

<nav class="tool fixed">
    <ul class="tool__list">
        <li class="tool__item" id="theme">
            <i class="ri-contrast-2-fill"></i>
        </li>
        <li class="tool__item">
            <i class="ri-fullscreen-fill"></i>
        </li>
        <li class="tool__item">
            <i class="ri-chat-3-line"></i>
            <!-- Messenger Plugin chat Code -->

        </li>
    </ul>
</nav>

<header class="header flex-column">
    <div class="header--inner flex">
        <div class="logo logo--big">G</div>
        <div class="position ff-B">
            <div data-text="Designer">Designer</div>
        </div>
    </div>
    <div class="line--main"></div>
</header>

<!--main-->


@yield('main')

</body>
</html>
