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
</head>

<body>
<div class="bg-pink-200 ">
    <header class="lg:px-38 px-16 text-black flex flex-wrap items-center lg:py-10 py-5">
        <div class="flex-1 flex justify-between items-center">
            <a href="#">
                Mandala
            </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor lg:hidden block">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                 viewBox="0 0 20 20"><title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle"/>

        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav>
                <ul class="text-black lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                           href="#">Home</a>
                    </li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                           href="#">Categories</a>
                    </li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                           href="#">About</a>
                    </li>
                    <li>
                        <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2"
                           href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="flex flex-col items-center py-5">
        <h1 class="pt-2">LET'S DO IT TOGETHER</h1>
        <p class="py-8">we will produce you to tunisian mandala</p>
        <button
            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 pt-3 pb-5 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
            type="button">
            See latest posts
        </button>
    </div>
</div>
<div id="categories" class="bg-gray-100 border-b-2 border-black">
    <ul class=" flex :flex-row flex-wrap md:flex-nowrap md:py-3 justify-center">
        <li class="mx-8 my-3"><a href="#">categorie</a></li>
        <li class="mx-8 my-3"><a href="#">categorie</a></li>
        <li class="mx-8 my-3"><a href="#">categorie</a></li>
        <li class="mx-8 my-3"><a href="#">categorie</a></li>
        <li class="mx-8 my-3"><a href="#">categorie</a></li>
        <li class="mx-8 my-3"><a href="#">categorie</a></li>
    </ul>
</div>

<main class="bg-blue-200 flex flex-col justify-between content-center">
    <div id="best products ">
    <h1 class="border-b-2 mx-auto">best products</h1>
    <div>content</div>
    </div>
    <br>
    <div id="recent products">
        <h1 class="border-b-2 mx-auto">best products</h1>
        <div>content</div>
    </div>
</main>
</body>
</html>
