<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        window.laravel = [
            baseurl = '{{ url('/') }}'
        ]
    </script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.jpg')}}" type="image/png">
    <title>Make Your Furniture | Fe-Commerce</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <style>
        .preloader {
            position: fixed;
            height: 100%;
            width: 100%;
            background: #ffffffeb;
            top: 0;
            z-index: 12;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('components.backend.header')
    <div class="app-main">
        @include('components.backend.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('main-content')
            </div>
            {{--         @include('components.backend.footer')--}}
        </div>
    </div>
</div>
<div class="preloader">
    <h5 class="text-danger"><i class="fa fa-cog  fa-spin"></i>Loading...</h5>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('assets/scripts/main.js') }}" defer></script>

<script>
    setTimeout(() => {
        document.querySelector('.preloader').style.display = 'none'
    }, 1000)
</script>
</body>

</html>
