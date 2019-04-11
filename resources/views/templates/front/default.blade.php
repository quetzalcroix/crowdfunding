<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | CrowdFunding</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/app.3e2f989d.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/vendor.7daa6915.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/pages.home.de682750.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/patterns.b415952552496967b8aa.css') }}">

</head>
<body>

<div class="cc-viewContainer" id="app">
    @yield('navigation')

    @yield('body')

    <main-footer></main-footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/vendor/app.7a751e17.js') }}"></script>
<script src="{{ asset('js/vendor/manifest.d41d8cd9.js') }}"></script>
<script src="{{ asset('js/vendor/vendor.e5b7c98f.js') }}"></script>
<script src="{{ asset('js/vendor/commonLight.b415952552496967b8aa.js') }}"></script>
<script src="{{ asset('js/vendor/cookieBar.b415952552496967b8aa.js') }}"></script>
<script src="{{ asset('js/vendor/pages.home.2237dc9a.js') }}"></script>

</body>
</html>