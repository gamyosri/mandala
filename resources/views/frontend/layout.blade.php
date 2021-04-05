<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mandala</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        #menu-toggle:checked + #menu {
            display: block;
        }
    </style>
    @include('frontend.headers')
</head>
<body>

<div>
    @yield('header')
    @yield('subheader')
</div>

<div>
@yield('content')
</div>

<div>
    @yield('footer')
</div>

</body>
