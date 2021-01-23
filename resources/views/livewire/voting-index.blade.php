<div>
    <div class="Container flex justify-center flex-wrap my-8 space-x-16">
        @for($i=1;$i<4;$i++) <div class="flex items-center justify-center my-2">

            <div class="max-w-xs">
                <div class="bg-white shadow-sm rounded-lg py-3 border-solid border-2 border-light-blue-500">
                    <div class="photo-wrapper p-2">
                        <img class="w-32 h-32 rounded-lg mx-auto"
                    src="https://i.pinimg.com/originals/2a/02/68/2a026809d5a02d6526f086c05e3d56fd.jpg" alt="{{$i}}">
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$i}}</h3>
                        <div class="text-center text-gray-400 text-xs font-bold">
                            <p>Nobita</p>
                        </div>
                        <table class="text-xs my-3">
                            <tbody id="card">
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold border-none">Address</td>
                                    <td class="px-2 py-2 border-none">Chatakpur-3, Dhangadhi Kailali</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold border-none">Phone</td>
                                    <td class="px-2 py-2 border-none">+977 9955221114</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold border-none">Email</td>
                                    <td class="px-2 py-2 border-none">john@exmaple.com</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center my-3 space-x-8">
                            <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium modal-open"
                                href="#">Detail</a>
                            <a href=""
                                class="bg-blue-500 rounded-full font-bold text-white px-4 py-1 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                <i class="fa fa-check" aria-hidden="true"></i>&nbsp;Vote
                            </a>
                        </div>


                    </div>
                </div>
            </div>

    </div>
    @endfor
</div>


<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div
            class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
            </svg>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Visi & Misi</p>
                
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <b>Visi :</b>
            <p>"Terwujudnya Indonesia Maju yang Berdaulat, Mandiri, dan Berkepribadian Berdasarkan
                Gotong Royong"</p>
            <b>Misi :</b>
            <p>1.Lorem ipsum dolor sit amet.</p>
            <p>2.Lorem ipsum dolor sit amet.</p>
            <p>3.Lorem ipsum dolor sit amet.</p>
            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
            </div>

        </div>
    </div>
</div>
</div>
