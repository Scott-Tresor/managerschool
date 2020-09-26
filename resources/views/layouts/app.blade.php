<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <div class="container-scroller">
        @include('layouts.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.banner')
            @yield('content')
        </div>
    </div>

    <script src="{{asset('assets/vendors/base/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('assets/vendors/chart.js/Chart.min.jss')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/template.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>

    <script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>
</html>
