<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sinistre - @yield('title')</title>

    <meta property="og:title" content="Sinistre">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="/img/logo.png">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/logo.ico">
    @yield('extra-css')
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-black">
<div class="loading">
    <img class="sm:w-1/6 w-1/2 object-cover object-center rounded" alt="logo" src="/img/logo2.gif">
</div>
<video autoplay="true" muted loop id="bgvid" src="/videos/4k_short.mp4" title="bg">
    <source src="/videos/4k_short.mp4" type="video/mp4">
</video>

<section
    class="text-custom-grey body-font flex items-center justify-center flex-col h-screen page-layout-left-sidebar shop">
    <div class="relative infos flex-row flex items-center justify-center bg-black sm:p-16 p-4 rounded">
        @if(Request::url() !== route('home'))
            @include('layout.navbar')
        @endif
        @yield('content')
    </div>
</section>
<script src="/js/modernizr-3.11.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/main.js"></script>
<!-- Google Analytics -->
<script>
    window.ga = window.ga || function () {
        (ga.q = ga.q || []).push(arguments)
    };
    ga.l = +new Date;
    ga('create', 'UA-170372907-1', 'auto');
    ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->
@yield('extra-js')
</body>
</html>
