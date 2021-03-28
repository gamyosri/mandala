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
</div>

<div>
    @yield('subheader')
</div>
<div class="my-20">
    <div class="flex justify-center flex-row flex-wrap">
        <div class="h-64 md:w-1/4 w-1/3 bg-gray-300 m-3 rounded-xl text-center flex flex-col justify-center bg-local bg-opacity-0" style="background-image: url(https://image.freepik.com/free-vector/background-template-with-mandala-pattern_1308-44077.jpg)"><h1 class="">Categorie</h1> </div>
        <div class="h-64 md:w-1/4 w-1/3 bg-gray-300 m-3 rounded-xl text-center flex flex-col justify-center bg-local opacity-50" style="background-image: url(https://image.freepik.com/free-vector/background-template-with-mandala-pattern_1308-44077.jpg)"><h1 class="">Categorie</h1> </div>
        <div class="h-64 md:w-1/4 w-1/3 bg-gray-300 m-3 rounded-xl text-center flex flex-col justify-center bg-local opacity-50" style="background-image: url(https://image.freepik.com/free-vector/background-template-with-mandala-pattern_1308-44077.jpg)"><h1 class="">Categorie</h1> </div>
        <div class="h-64 md:w-1/4 w-1/3 bg-gray-300 m-3 rounded-xl text-center flex flex-col justify-center bg-local opacity-50" style="background-image: url(https://image.freepik.com/free-vector/background-template-with-mandala-pattern_1308-44077.jpg)"><h1 class="">Categorie</h1> </div>
        <div class="h-64 md:w-1/4 w-1/3 bg-gray-300 m-3 rounded-xl text-center flex flex-col justify-center bg-local opacity-50" style="background-image: url(https://image.freepik.com/free-vector/background-template-with-mandala-pattern_1308-44077.jpg)"><h1 class="">Categorie</h1> </div>
        <div class="h-64 md:w-1/4 w-1/3 bg-gray-300 m-3 rounded-xl text-center flex flex-col justify-center bg-local opacity-50" style="background-image: url(https://image.freepik.com/free-vector/background-template-with-mandala-pattern_1308-44077.jpg)"><h1 class="">Categorie</h1> </div>
    </div>
</div>
<div>
    @yield('footer')
</div>
</body>
