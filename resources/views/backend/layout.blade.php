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

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="flex flex-row">
<div>
    <div class="flex flex-row min-h-screen w-full bg-gray-300 shadow-2xl">
        <div @click.away="open = false"
             class="flex flex-col w-64 text-gray-700 bg-white flex-shrink-0"">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                <a href="{{url('/')}}"
                   class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg ">Mandala</a>
            </div>

            <nav class="flex-grow block px-4 pb-4 pb-0 overflow-y-auto">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="{{url('/myspace')}}">Dashboard</a>
                <a class=" @if(request()->is('myspace/articles')) bg-gray-200 @endif block px-4 py-2 mt-2 text-sm font-semibold text-gray-900  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="{{url('/myspace/articles')}}">Articles</a>
                <a class=" @if(request()->is('myspace/categories')) bg-gray-200 @endif block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="{{url('/myspace/categories')}}">Categories</a>

            </nav>
        </div>
    </div>
</div>

<div class="w-full flex flex-col ">
    <div class="flex flex-row py-3 px-10 border-b-2 justify-between">
        <div class=" relative text-gray-600">
            <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                   type="search" name="search" placeholder="Search">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-3">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                     viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                     width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
          </svg>
            </button>
        </div>

        <div class="w-10 h-10 rounded-full self-end dropdown">
            <img alt="profile" src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_960_720.png" >
                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 pr-3 rounded-md">
                    <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">one</a></li>
                    <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Logout</a></li>
                </ul>
        </div>

    </div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
