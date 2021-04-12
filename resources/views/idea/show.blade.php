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
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none mx-2 md:mx-4 md:mx-0">
                <a href="#">
                    <img src="{{ $idea->user->getAvatar() }}" alt="avatar"
                         class="w-14 h-14 rounded-lg">
                </a>
            </div>

            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="mt-4 text-gray-600 line-clamp-3">
                    {{ $idea->description }}
                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div class="">Livewire</div>
                        <div>&bull;</div>
                        <div class="text-gray-700">3 comments</div>
                    </div>

                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase rounded-full text-center w-24 px-4 py-2 leading-none h-7">
                            Open
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

                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-lg h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">
                                12
                            </div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">
                                Votes
                            </div>
                        </div>
                        <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-lg hover:border-gray-400 transition ease-in px-4 py-3 -ml-5">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End idea container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center md:space-x-4 ml-2 md:ml-6">
            <div
                x-data="{ isOpen: false}"
                class="relative"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="w-32 h-11 text-white text-sm font-semibold bg-blue border border-blue hover:bg-blue-hover rounded-lg transition duration-150 ease-in"
                >
                    Reply
                </button>
                <div
                    x-cloak
                    x-show.transition="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-lg mt-2"
                >
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="">
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                      class="w-full text-sm bg-gray-100 rounded-lg placeholder-gray-700 border-none px-4 py-2"
                                      placeholder="Go ahead,  don't be shy. Share your thoughts..."></textarea>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center md:space-x-3">
                            <button type="button"
                                    class="w-full md:w-1/2 h-11 text-white text-sm font-semibold bg-blue border border-blue hover:bg-blue-hover rounded-lg transition duration-150 ease-in"
                            >
                                Post Comment
                            </button>
                            <button type="button"
                                    class="flex items-center justify-center w-full md:w-32 h-11 text-xs font-semibold bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-lg transition duration-150 ease-in mt-2 md:mt-0">
                                <svg class="h-5 w-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div
                x-data="{ isOpen: false }"
                class="relative mt-2 md:mt-0"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center w-32 h-11 text-sm font-semibold bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-lg transition duration-150 ease-in"
                >
                    <span>Set Status</span>
                    <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div
                    x-cloak
                    x-show.transition="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-64 md:w-72 text-left font-semibold text-sm bg-white shadow-dialog rounded-lg mt-2"
                >
                    <form action="#" class="space-y-4 px-4 py-2">
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" checked class="bg-gray-200 text-gray-600 border-none"
                                       name="status"
                                       value="1">
                                <span class="ml-2">Open</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" class="bg-gray-200 text-purple border-none" name="status"
                                       value="2">
                                <span class="ml-2">Considering</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" class="bg-gray-200 text-yellow border-none" name="status"
                                       value="3">
                                <span class="ml-2">In Progress</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" class="bg-gray-200 text-green border-none" name="status"
                                       value="4">
                                <span class="ml-2">Implemented</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" class="bg-gray-200 text-red border-none" name="status"
                                       value="5">
                                <span class="ml-2">Closed</span>
                            </label>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                                      class="w-full text-sm bg-gray-100 rounded-lg border-none placeholder-gray-700 px-4 py-2"
                                      placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs font-semibold bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-lg transition duration-150 ease-in"
                            >
                                <svg class="h-5 w-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button type="submit"
                                    class="flex items-center justify-center w-1/2 h-11 text-white text-xs font-semibold bg-blue border border-blue hover:bg-blue-hover rounded-lg transition duration-150 ease-in"
                            >
                                <span>Update</span>
                            </button>
                        </div>

                        <label class="font-normal flex items-center">
                            <input type="checkbox" class="bg-gray-200 rounded" name="notify_voters"
                                   value="5">
                            <span class="ml-2">Notify all voters</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
        <div class="hidden md:flex items-center space-x-3">
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
