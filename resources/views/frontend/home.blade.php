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
@yield('header')
@yield('subheader')
<div id="categories" class="bg-gray-100 border-b-2 border-black">
    <ul class=" flex :flex-row flex-wrap md:flex-nowrap md:py-3 justify-center">
        <li class="mx-5 my-3"><a class="p-4 hover:bg-pink-300 rounded-lg transition ease-in-out duration-700" href="#">categorie</a>
        </li>
        <li class="mx-5 my-3"><a class="p-4 hover:bg-pink-300 rounded-lg transition ease-in-out duration-700" href="#">categorie</a>
        </li>
        <li class="mx-5 my-3"><a class="p-4 hover:bg-pink-300 rounded-lg transition ease-in-out duration-700" href="#">categorie</a>
        </li>
        <li class="mx-5 my-3"><a class="p-4 hover:bg-pink-300 rounded-lg transition ease-in-out duration-700" href="#">categorie</a>
        </li>
        <li class="mx-5 my-3"><a class="p-4 hover:bg-pink-300 rounded-lg transition ease-in-out duration-700" href="#">categorie</a>
        </li>
        <li class="mx-5 my-3"><a class="p-4 hover:bg-pink-300 rounded-lg transition ease-in-out duration-700" href="#">categorie</a>
        </li>
    </ul>
</div>

<main class="bg-blue-200 flex flex-col justify-between content-center">
    <div id="latest-products " class="flex flex-col content-center mt-10">
        <h1 class="border-b-2 mx-auto m" id="latest-creations">latest creations</h1>
        <div class="flex flex-col flex-wrap justify-center md:flex-row mt-10">
            <div class="rounded overflow-hidden shadow-lg m-4 bg-gray-100 md:w-1/4">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4  border-b-2">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-grey-darker text-base">
                        description
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                </div>
            </div>
            <div class=" rounded overflow-hidden shadow-lg m-4 bg-gray-100 md:w-1/4">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4  border-b-2">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-grey-darker text-base">
                        description
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                </div>
            </div>
            <div class=" rounded overflow-hidden shadow-lg m-4 bg-gray-100 md:w-1/4">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4  border-b-2">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-grey-darker text-base">
                        description
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                </div>
            </div>
        </div>
    </div>
    <div id="recent-products" class="flex flex-col content-center m-10">
        <h1 class="border-b-2 mx-auto">best products</h1>
        <div class="flex flex-col flex-wrap justify-center md:flex-row mt-10">
            <div class=" rounded overflow-hidden shadow-lg m-4 bg-gray-100 md:w-1/3 lg:w-1/5">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4  border-b-2">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-grey-darker text-base">
                        description
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                </div>
            </div>

            <div class=" rounded overflow-hidden shadow-lg m-4 bg-gray-100 md:w-1/3 lg:w-1/5">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4  border-b-2">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-grey-darker text-base">
                        description
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                </div>
            </div>

            <div class=" rounded overflow-hidden shadow-lg m-4 bg-gray-100 md:w-1/3 lg:w-1/5">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4  border-b-2">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-grey-darker text-base">
                        description
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                </div>
            </div>

            <div class=" rounded overflow-hidden shadow-lg m-4 bg-gray-100 md:w-1/3 lg:w-1/5">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4  border-b-2">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-grey-darker text-base">
                        description
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="bg-gray-100 flex flex-col justify-center my-10 py-10">
        <h1 class="border-b-2 mx-auto my-8">stay in touch</h1>
        <form class="flex flex-wrap justify-center py-auto flex-shrink-1 ">
            <input class=" my-4 rounded-lg border-t mx-2 border-b border-l text-gray-800 border-gray-200 bg-white"
                   placeholder="  Enter your email adress"/>
            <button
                class="my-4 px-8 rounded-lg bg-pink-400  text-gray-800 font-bold p-4 uppercase border-pink-500 border-t border-b border-r">
                Subscribe
            </button>
        </form>
    </div>

@yield('footer')
</main>
</body>
</html>
