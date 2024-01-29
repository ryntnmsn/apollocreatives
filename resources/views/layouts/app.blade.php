<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    
    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide('#banners', {
                type: 'loop',
                autoplay: 'true',
                perMove: 1,
                arrows: true,
                perPage: 1,
                interval: 5000,
                pagination: true,
            }).mount()
        });
        
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '#splide', {
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
            }).mount()
        });
    </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-C6GWG2Q4ZH"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-C6GWG2Q4ZH');
    </script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-50 dark:bg-slate-900">
    <header class="fixed top-0 right-0 left-0 z-50">
        @include('layouts.header')
    </header>
    <main>
        <div class="pt-[91px]">@yield('pageTitle')</div>
        <div class="max-w-screen-xl w-full mx-auto px-4 {{ request()->is('/') ? 'pt-0' : 'pt-20' }}">
            @yield('contents')
        </div>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });
    </script>


<script>
    const tabs = document.querySelector(".wrapper");
    const tabButton = document.querySelectorAll(".tabButton");
    const contents = document.querySelectorAll(".tabContent");

    tabs.onclick = e => {
    const id = e.target.dataset.id;
    if (id) {
        tabButton.forEach(btn => {
            btn.classList.remove("active");
        });
        e.target.classList.add("active");

        contents.forEach(content => {
            content.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.add("active");
        }
    }
</script>
       
</body>
</html>
