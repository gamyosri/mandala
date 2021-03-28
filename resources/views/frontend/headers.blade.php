@section('header')
    <div class="bg-pink-200 ">
        <header class="lg:px-38 px-16 text-black flex flex-wrap items-center lg:py-10 py-5">
            <div class="flex-1 flex justify-between items-center">
                <a href="{{ url('/') }}">
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
                               href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                               href="{{ url('/categories') }}">Categories</a>
                        </li>
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                               href="{{ url('/about') }}">About</a>
                        </li>
                        <li>
                            <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2"
                               href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        @endsection
        @section('subheader')
            <div class="flex flex-col items-center py-5 bg-pink-200">
                <h1 class="pt-2">LET'S DO IT TOGETHER</h1>
                <p class="py-8">we will produce you to tunisian mandala</p>
                <a href="#latest-creations">
                    <button
                        class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 pt-3 pb-5 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button">
                        See latest posts
                    </button>
                </a>
            </div>

    </div>
@endsection

@section('footer')
    <footer
        class="lg:px-38 px-16 text-black flex flex-row flex-wrap justify-around lg:py-8 py-5 bg-pink-300 border-t-2 border-black ">
        <div class="flex justify-between items-center">
            <a href="#">
                Mandala
            </a>
        </div>

        <div class=" flex" id="menu">
            <nav class="items-center">
                <ul class="block text-black flex items-center justify-around text-base text-gray-700 pt-4 lg:pt-0">
                    <li>
                        <a class="py-3 px-4 block border-b-2 border-transparent hover:border-indigo-400"
                           href="https://www.facebook.com/amene.lajnef"><img class="object-scale-down h-5 md:h-10"
                                         src="https://cdn.icon-icons.com/icons2/642/PNG/512/facebook_icon-icons.com_59205.png"
                                         alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a class="py-3 px-4 block border-b-2 border-transparent hover:border-indigo-400"
                           href="https://www.instagram.com/amene_lajnef/"><img class="object-scale-down h-5 md:h-10"
                                         src="https://www.pngkit.com/png/full/0-7617_instagram-color-icon-instagram-social-media-png-instagram.png"
                                         alt="insta">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
@endsection
