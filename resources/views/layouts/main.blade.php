<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Issa - Portfolio</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Noto+Serif+Balinese&display=swap"
        rel="stylesheet" />
    {{-- Alpine Js cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js"
        integrity="sha512-x6oUSDeai/Inb/9HFvbrBtDOnLvFSd37f6j2tKRePhFBLYAezejnN5xgG52M20rnFN66+6EWwuFwAneEXyq6oA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- AOS Cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-charcoal font-noto text-white overflow-x-hidden">
    {{-- Navigation --}}
    <header class="pt-5 text-white h-20">
        <nav class="flex justify-between items-center px-12">
            <div class="z-10"><span class="font-bold"><a href="{{ route('home') }}">Issa</a></span> - Web Developer
            </div>
            <ul class="sm:flex space-x-5 hidden">
                <a href="{{ route('home') }}">
                    <li>Home</li>
                </a>
                <a href="{{ route('about') }}">
                    <li>About</li>
                </a>
                <a href="{{ route('contact') }}">
                    <li>Contact</li>
                </a>
            </ul>

            <!-- Mobile menu icon -->
            <div class="sm:hidden block mr-5 cursor-pointer z-10">
                <img src="./assets/icon-hamburger.svg" alt="icon-hamburger" id="showMenu" />
                <img class="hidden" src="./assets/icon-close.svg" alt="icon-close" id="hideMenu" />
            </div>

            <!-- Mobile navigation -->
            <div class="sm:hidden absolute w-full h-full bg-black top-0 left-0 translate-x-37 transition-transform duration-700 ease-in"
                id="mobileNav">
                <ul class="relative top-24 ml-10 space-y-6 font-josefin uppercase text-3xl text-white">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

        </nav>
    </header>

    @yield('content')

    <script>
        AOS.init({
            delay: 150
        });
    </script>

</body>

</html>
