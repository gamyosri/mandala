        <div class="bg-black bg-opacity-50 absolute inset-0 flex flex-col justify-center items-center hidden" id="modal-full">
            <div class=" bg-gray-100 w-3/4 rounded-xl " id="modal">
                <div class="flex flex-row justify-between px-4 py-6 border-b-2 border-gray-300 hidde" id="modal-header">
                    <div class="text-lg font-bold"> Ajouter une Creation</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" id="close">
                        <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </div>
                <div class="px-4 py-6" id="modal-body">
                    <form class=" flex flex-row space-x-4">
                        <div id="left-panel" class="w-1/2">
                            <div>
                                <label>Titre</label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="title" type="text" placeholder="">
                            </div>

                            <div class="flex flex-row justify-between">
                                <div>
                                    <label>Prix</label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="price" type="number" placeholder="">
                                </div>

                                <div>
                                    <label>Prix en promo</label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="price2" type="number" placeholder="">
                                </div>
                            </div>

                            <div class="flex flex-row justify-between">
                                <div>
                                <label for="Category-select">Category</label>
                                <br>
                                <select name="categories" id="Category-select"
                                        class=" no-resize appearance-none w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500 resize-none">
                                    <option value="category1"><span
                                            class=" p-2 m-2 hover:bg-blue-500"> category1 </span></option>
                                    <option value="category2"><span
                                            class=" p-2 m-2 hover:bg-blue-500"> category2 </span></option>
                                </select>
                                </div>
                                <div>
                                    <label for="toggle">Actif</label> <br>
                                    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                        <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <label> description</label>
                                <textarea
                                    class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-60 resize-none"
                                    id="message"></textarea>
                            </div>
                        </div>
                        <div id="right-panel" class="w-1/2 grid grid-cols-3 bg-gray-500 ">
                            <div class="bg-green-300 rounded m-2"></div>
                            <div class="bg-green-300 rounded m-2"></div>
                            <div class="bg-green-300 rounded m-2"></div>
                            <div class="bg-green-300 rounded m-2"></div>
                            <div class="bg-green-300 rounded m-2"></div>
                            <div class="bg-green-300 rounded m-2"></div>
                        </div>
                    </form>
                </div>
                <div class="px-2 py-6 border-t-2 border-gray-300 flex justify-end space-x-2" id="modal-footer">
                    <button class="border-2  p-3 rounded-lg hover:bg-blue-500" id="cancel">Cancel</button>
                    <button class="w-1/5 bg-green-200 p-2 rounded-lg hover:bg-green-500">Save</button>
                </div>
            </div>
        </div>

    <script>
        $(document).ready(function(){
            $("#show-modal").on('click',function () {
                $("#modal-full").removeClass('hidden');
            console.log('click');
            })

            $("#close").on('click',function () {
                $("#modal-full").addClass('hidden');
                console.log('click');
            })

            $("#cancel").on('click',function () {
                $("#modal-full").addClass('hidden');
                console.log('click');
            })

        });
    </script>
    <style>
        .toggle-checkbox:checked {
            @apply: right-0 border-green-400;
            right: 0;
            border-color: #68D391;
        }
        .toggle-checkbox:checked + .toggle-label {
            @apply: bg-green-400;
            background-color: #68D391;
        }
    </style>

