<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Streamlinedigit') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body style="min-height: 100px">

    <header>
        @include('partials.h_nav_bar')
    </header>



                @yield('content')




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
