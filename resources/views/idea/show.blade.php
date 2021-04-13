<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    @livewire('idea-show', ['idea' => $idea])

    <div class="comments-container relative md:ml-22 space-y-6 pt-4 mt-1">

        <div class="comment-container relative bg-white rounded-lg flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-lg">
                    </a>
                </div>

                <div class="mx-4 w-full mt-2 md:mt-0">
                    <div class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Autem error iure magnam magni obcaecati quisquam. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Cum laborum rem repudiandae. Accusamus amet atque
                        est harum, iste odio tempora? Eveniet, voluptatibus.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div
                            x-data="{ isOpen: false }"
                            class="relative"
                        >
                            <button
                                @click="isOpen = !isOpen"
                                class="bg-gray-100 hover:bg-gray-200 rounded-full border h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg class="text-gray-400 hover:text-gray-500" fill="currentColor" width="24"
                                     height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"></path>
                                </svg>
                            </button>
                            <ul
                                x-cloak
                                x-show.transition="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute z-10 w-40 bg-white font-semibold shadow-dialog rounded-lg right-0 md:left-0 md:ml-12 top-8 md:top-6 py-2"
                            >
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
        <div
            class="comment-container is-admin relative bg-white rounded-lg flex mt-4 bg-gradient-to-r from-gray-500 to-blue p-0.5">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6 w-full h-full bg-white rounded-md">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                             class="w-14 h-14 rounded-lg">
                    </a>
                    <div class="md:text-center text-blue text-xxs font-bold uppercase mt-1">Admin</div>
                </div>

                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status changed to "Under consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Cum laborum rem repudiandae. Accusamus amet atque est harum, iste
                        odio tempora? Eveniet, voluptatibus.
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
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                             class="w-14 h-14 rounded-lg">
                    </a>
                </div>

                <div class="mx-4 w-full mt-2 md:mt-0">
                    <div class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Autem error iure magnam magni obcaecati quisquam. Lorem ipsum
                        dolor sit amet, consectetur. Accusamus amet atque est harum, iste odio tempora? Eveniet,
                        voluptatibus.
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
