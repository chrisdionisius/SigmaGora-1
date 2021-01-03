<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('judul')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Forum - Responsive HTML5 Template">
    <meta name="author" content="Forum">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
</head>

<body>
    <!-- tt-mobile menu -->
    @include('partials.navbar')
    @include('partials.header')
    
    @yield('content');
    
    @include('partials.popupsetting')
    @include('partials.pagetopic')
    @include('partials.modalfade')
    <script src="js/bundle.js"></script>
    @include('partials.svg')
</body>

</html>