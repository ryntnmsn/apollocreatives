<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
        new Splide('.splide', {
            type: 'loop',
            autoplay: 'true',
            gap: '1.5rem',
            perMove: 1,
            arrows: false,
            focus: 'center',
            perPage: 3,
            interval: 5000,
            pagination: false,
            breakpoints: {
            1440: {
                perPage: 2,
                focus: 'none',
            },
            768: {
                perPage: 1,
                focus: 'none',
            }
            }
        }).mount();
        });
    </script>

</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <main>
        @yield('pageTitle')
        <div class="max-w-screen-xl w-full mx-auto px-4 pt-20">
            @yield('contents')
        </div>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>