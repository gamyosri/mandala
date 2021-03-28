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

    @include('backend.articles')
</head>
<body class="flex flex-row ">
<div>
@include('backend.sideNav')
</div>
<div class="bg-gray-300 w-screen flex flex-col mx-auto">
    @yield('articleSmall')
</div>
</body>
</html>
