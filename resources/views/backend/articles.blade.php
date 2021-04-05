@extends('backend.layout')
@section('content')
    <div class="flex flex-col w-3/4 m-auto">
        <div class="flex flex-row justify-end m-5">
            <button class="bg-pink-300 px-4 py-2 rounded-md mr-20 shadow-xl" type="button" id="show-modal">Ajouter</button>
        </div>
        <div class="m-5 shadow-xl">
            <table class=" p-3 w-full ">
                <thead class="uppercase bg-gray-300">
                <th class="p-3 text-left" id="name">Article</th>
                <th class="p-3 text-left" id="price">Prix</th>
                <th class="p-3 text-left" id="promo">Promo</th>
                <th class="p-3 text-left" id="cat">Categorie</th>
                <th class="p-3 text-center" id="state">Etat</th>
                <th class="p-3 text-center" id="action">Actions</th>
                </thead>
                <tbody class=" bg-gray-100 rounded-xg">
                <tr class="">
                    <td class="p-3">
                        <div class="flex flex-row">
                            <div class="w-6 h-6 mr-2 "><img class="rounded-full" alt="prod"
                                                            src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/large/28311.jpg">
                            </div>
                            <div>Tasse</div>
                        </div>
                    </td>
                    <td class="p-3 text-left">25€</td>
                    <td class="p-3 text-left">20€</td>
                    <td class="p-3">
                        <div class="flex flex-row">
                            <div class="w-6 h-6 mr-2 "><img class="rounded-full" alt="prod"
                                                            src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/large/28311.jpg">
                            </div>
                            <div>Tableaux</div>
                        </div>
                    </td>
                    <td class="p-3 text-center"><span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Public</span>
                    </td>
                    <td class="p-3 text-center">
                        <div class="flex item-center justify-center">
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class=" bg-gray-200 ">
                    <td class="p-3">
                        <div class="flex flex-row">
                            <div class="w-6 h-6 mr-2 "><img class="rounded-full" alt="categorie"
                                                            src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/large/28311.jpg">
                            </div>
                            <div>Tasse</div>
                        </div>
                    </td>
                    <td class="p-3 text-left">25€</td>
                    <td class="p-3 text-left">20€</td>
                    <td class="p-3 text-center">
                        <div class="flex flex-row ">
                            <div class="w-6 h-6 mr-2 "><img class="rounded-full" alt="categorie"
                                                            src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/large/28311.jpg">
                            </div>
                            <div>Tasse</div>
                        </div>
                    </td>
                    <td class="p-3 text-center"><span
                            class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Privee</span></td>
                    <td class="p-3 text-center">
                        <div class="flex item-center justify-center">
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@include('backend.article-modal')
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

@section('articlee')
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
