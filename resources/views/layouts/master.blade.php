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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">
</head>

<body>
    <!-- tt-mobile menu -->
    @include('partials.navbar')
    @include('partials.header')
    
    @yield('content');
    
    @include('partials.popupsetting')
    @include('partials.pagetopic')
    @include('partials.modalfade')
    <script src="{{asset ('theme/js/bundle.js')}}"></script>
    <script src="{{asset('theme/js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    @yield('js');
    @include('partials.svg')
</body>

</html>