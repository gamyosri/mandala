@section('articleBig')
    <div class="container flex">

    </div>
@endsection

@section('articleSmall')
        <div class="flex shadow-lg mx-auto my-10 h-64 w-3/4">
            <img class="h-full w-1/3 object-cover rounded-l-lg"
                 src="https://ik.imagekit.io/q5edmtudmz/FB_IMG_15658659197157667_wOd8n5yFyXI.jpg" alt="bag">
            <div class="flex flex-col justify-around w-full md:w-2/3 px-4 py-4 bg-white rounded-r-lg">
                <div class="flex items-center">
                    <h2 class="text-xl text-gray-800 font-medium mr-auto">Your Travel Buddy</h2>
                    <p class="text-gray-800 font-semibold tracking-tighter">
                        only
                        <i class="text-gray-600 line-through">60$</i>
                        48$
                    </p>
                </div>
                <p class="text-sm text-gray-700 mt-4">
                    Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam tempore commodi ipsa
                    suscipit laboriosam, sit earum at sequ adipisicing elit. Amet veritatis ipsam reiciendis numquam
                    tempore commodi ipsa suscipit laboriosam, sit earum at sequi.
                </p>
                <div class="flex items-center justify-end mt-4 top-auto">
                    <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>
                    <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>
                    <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">view</button>
                </div>
            </div>
@endsection
