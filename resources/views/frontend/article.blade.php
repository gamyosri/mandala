@extends('frontend.layout')
@section('content')
    <div class="flex flex-col ">
      <div class="flex flex-col items-center my-8 w-3/4 mx-auto ">

        <div class="w-full bg-white rounded-xl overflow-x-hidden flex snap-x" style="height: 60vh">
            <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-1">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
            </div>
            <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-2">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
            </div>
            <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-3">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
            </div>
            <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-4">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
            </div>
            <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-5">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
            </div>
            <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-6">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
            </div>
        </div>

          <div class="my-2 flex p-3 bg-gray-300 bg-opacity-50 space-x-2 rounded-xl lg:absolute lg:bottom-2 lg:z-10 ">
              <a class="hover:opacity-50" href="#slide-1"><img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="md:h-20 md:w-20 h-10 w-10 object cover  rounded-xl"></a>
              <a class="hover:opacity-50" href="#slide-2"><img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="md:h-20 md:w-20 h-10 w-10 object cover  rounded-xl"></a>
              <a class="hover:opacity-50" href="#slide-3"><img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="md:h-20 md:w-20 h-10 w-10 object cover  rounded-xl"></a>
              <a class="hover:opacity-50" href="#slide-4"><img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="md:h-20 md:w-20 h-10 w-10 object cover  rounded-xl"></a>
              <a class="hover:opacity-50" href="#slide-5"><img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="md:h-20 md:w-20 h-10 w-10 object cover  rounded-xl"></a>
              <a class="hover:opacity-50" href="#slide-6"><img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="md:h-20 md:w-20 h-10 w-10 object cover  rounded-xl"></a>
          </div>


          <div class="mt-4 w-full md:w-3/4 md:mt-0 h-80 bg-pink-400 md:rounded-b-xl lg:rounded-t-none rounded-xl shadow-xl">

          </div>
    </div>


@endsection
<style>
    .snap-x {
        scroll-snap-type: x mandatory;

        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
    }
    .snap-start {
        scroll-snap-align: start;
    }

</style>
