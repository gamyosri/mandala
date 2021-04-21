@section('header')
    <div class="bg-pink-200 ">
        <header class="lg:px-38 px-16 text-black flex flex-wrap items-center lg:py-10 py-5">
            <div class="flex-1 flex justify-between items-center">
                <a href="{{ url('/') }}">
                    <img  class=" h-10 md:h-20 lg:h-40 md:absolute" src="https://scontent.ftxl3-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/161895682_766409417578296_8943074497703261004_n.png?_nc_cat=108&ccb=1-3&_nc_sid=ae9488&_nc_ohc=4yxPlQVNGXUAX9FA7Hr&_nc_ht=scontent.ftxl3-1.fna&_nc_tp=30&oh=c8688431045c6d0ccab01872d8b8a3e2&oe=6092C0C4">
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
        class="lg:px-38 px-16 text-black flex flex-row flex-wrap justify-around lg:py-8 py-5 bg-pink-300 border-t-2 border-black items-center ">
        <div class="flex justify-between items-center">
            <a href="{{url('/')}}">
                <img  class="h-10 md:h-20" src="https://scontent.ftxl3-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/161895682_766409417578296_8943074497703261004_n.png?_nc_cat=108&ccb=1-3&_nc_sid=ae9488&_nc_ohc=4yxPlQVNGXUAX9FA7Hr&_nc_ht=scontent.ftxl3-1.fna&_nc_tp=30&oh=c8688431045c6d0ccab01872d8b8a3e2&oe=6092C0C4">
            </a>
        </div>

        <div class=" flex" id="menu">
            <nav class="items-center">
                <ul class="block text-black  space-x-2 flex items-center justify-around text-base text-gray-700 pt-4 lg:pt-0 items-center">
                    <li>
                        <a class="link" href="https://www.facebook.com/amene.lajnef" data-tippy-content="@facebook_handle">
                            <svg class="h-8 fill-current text-gray-600 hover:text-pink-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                                <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="link" href="https://www.instagram.com/amene_lajnef/" data-tippy-content="@instagram_handle">
                            <svg class="h-8 fill-current text-gray-600 hover:text-pink-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
@endsection
