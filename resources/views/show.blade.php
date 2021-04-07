<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-lg flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-lg">
                </a>
            </div>

            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">An idea title goes here</a>
                </h4>
                <div class="mt-4 text-gray-600 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div class="">Livewire</div>
                        <div>&bull;</div>
                        <div class="text-gray-700">3 comments</div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase rounded-full text-center w-24 px-4 py-2 leading-none h-7">
                            Open
                        </div>
                        <div class="relative">
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full border h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg class="text-gray-400 hover:text-gray-500" fill="currentColor" width="24"
                                     height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"></path>
                                </svg>
                            </button>
                            <ul class="hidden absolute w-40 bg-white font-semibold shadow-dialog rounded-lg py-2 ml-12">
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Mark as
                                        Spam</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Delete
                                        Post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End idea container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button"
                    class="w-32 h-11 text-white text-xs font-semibold bg-blue border border-blue hover:bg-blue-hover rounded-lg transition duration-150 ease-in">
                Reply
            </button>
            <button type="button"
                    class="flex items-center justify-center w-32 h-11 text-xs font-semibold bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-lg transition duration-150 ease-in">
                <span>Set status</span>
                <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-lg px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-xs leading-none text-gray-400">Votes</div>
            </div>
            <button type="button"
                    class="w-36 h-11 text-xs font-semibold uppercase bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-lg transition duration-150 ease-in">
                Vote
            </button>
        </div>
    </div><!-- End buttons container -->

    <div class="comments-container relative ml-22 space-y-6 pt-4 mt-1">

        <div class="comment-container relative bg-white rounded-lg flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-lg">
                    </a>
                </div>

                <div class="mx-4 w-full">
                    <div class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem error iure magnam magni obcaecati quisquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laborum rem repudiandae. Accusamus amet atque est harum, iste odio tempora? Eveniet, voluptatibus.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="relative">
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full border h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg class="text-gray-400 hover:text-gray-500" fill="currentColor" width="24"
                                     height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"></path>
                                </svg>
                            </button>
                            <ul class="hidden absolute w-40 bg-white font-semibold shadow-dialog rounded-lg py-2 ml-12">
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Mark as
                                        Spam</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Delete
                                        Post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End comment container -->
        <div class="comment-container is-admin relative bg-white rounded-lg flex mt-4 bg-gradient-to-r from-gray-500 to-blue p-0.5">
            <div class="flex flex-1 px-4 py-6 w-full h-full bg-white rounded-md">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                             class="w-14 h-14 rounded-lg">
                    </a>
                    <div class="text-center text-blue text-xxs font-bold uppercase mt-1">Admin</div>
                </div>

                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status changed to "Under consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laborum rem repudiandae. Accusamus amet atque est harum, iste odio tempora? Eveniet, voluptatibus.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Adrean</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="relative">
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full border h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg class="text-gray-400 hover:text-gray-500" fill="currentColor" width="24"
                                     height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"></path>
                                </svg>
                            </button>
                            <ul class="hidden absolute w-40 bg-white font-semibold shadow-dialog rounded-lg py-2 ml-12">
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Mark as
                                        Spam</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Delete
                                        Post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End comment container -->
        <div class="comment-container relative bg-white rounded-lg flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                             class="w-14 h-14 rounded-lg">
                    </a>
                </div>

                <div class="mx-4 w-full">
                    <div class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem error iure magnam magni obcaecati quisquam. Lorem ipsum dolor sit amet, consectetur. Accusamus amet atque est harum, iste odio tempora? Eveniet, voluptatibus.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="relative">
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full border h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg class="text-gray-400 hover:text-gray-500" fill="currentColor" width="24"
                                     height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"></path>
                                </svg>
                            </button>
                            <ul class="hidden absolute w-40 bg-white font-semibold shadow-dialog rounded-lg py-2 ml-12">
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Mark as
                                        Spam</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Delete
                                        Post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End comment container -->

    </div><!-- End comments container -->
</x-app-layout>
