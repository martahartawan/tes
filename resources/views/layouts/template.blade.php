<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{!! asset('img/logo/Favicon.png') !!}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/55036ec836.js" crossorigin="anonymous"></script>
    @livewireStyles
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div class="sticky top-0 z-50 header">
        <div class="items-top justify-center sm:items-center py-4 sm:pt-0">
            <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
                <a href="" class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"><img src="{!! asset('img/logo/Logo.png') !!}" alt="img" width="250px"></a>
                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li class="pt-2">
                            <a href="#" class="text-sm text-gray-300 dark:text-black pr-4 pt-2">Home</a>
                        </li>
                        <li class="pt-2">
                            <a href="#benefit" class="text-sm text-gray-300 dark:text-black pr-4 pt-2">Benefit</a>
                        </li>
                        <li class="pt-2">
                            <a href="#contact-us" class="text-sm text-gray-300 dark:text-black pr-4 pt-2">Hubungi Kami</a>
                        </li>
                        <li>
                            <button class="bg-sky-400 hover:bg-sky-700 py-2 px-4 rounded-full">
                                <a href="{{ route('login') }}" class="text-sm text-gray-300 dark:text-white">Login untuk mencoba!</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{$slot}}
    <hr>
    <div class="footer md:container md:mx-auto grid grid-rows-3 grid-flow-col">
        <div class="row-span-3">
            <div class="icon-sosial">
                <a href="https://www.facebook.com/DotA2.M9/" target="_blank"><i class="fa-brands fa-facebook-f footer-box" style="margin-left:60px;"></i></a>
                <a href="https://www.instagram.com/anantha.yoga/" target="_blank"><i class="footer-box fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="row-span-3 col-span-2">
            <p style="padding-left: 155px;padding-top: 14px;">Copyright&copy; 2022, GetFuture - <a href="https://www.instagram.com/anantha.yoga/" class="hover:text-sky-400">AKaGaMI</a>. All rights reserved.</p>
        </div>
    </div>
</body>

@stack('modals')
@livewireScripts

</html>