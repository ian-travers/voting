<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/4">
            <select name="category" id="category" class="w-full rounded-lg px-4 py-2 border-none">
                <option value="programming">Programming</option>
                <option value="css">Css</option>
                <option value="livewire">Livewire</option>
                <option value="alpinejs">Alpine JS</option>
            </select>
        </div>
        <div class="w-full md:w-1/4">
            <select name="difficulty" id="difficulty" class="w-full rounded-lg px-4 py-2 border-none">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>

        <div class="relative w-full md:w-1/2">
            <svg class="w-4 absolute flex items-center h-full top-0 ml-2 text-gray-700" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="search" class="w-full rounded-lg pl-8 px-4 py-2 border-none xl:placeholder-gray-900"
                   placeholder="Find an idea">
        </div>
    </div><!-- End filters -->

    <div class="ideas-container py-6 space-y-6">
        @foreach($ideas as $idea)
            <div
                class="idea-container bg-white rounded-lg flex hover:shadow-card cursor-pointer transition duration-150 ease-in">
                <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                    <div class="mt-8">
                        <button
                            class="px-4 py-3 rounded-lg text-xxs font-bold w-20 bg-gray-200 uppercase border border-gray-200 hover:border-gray-400 transition ease-in duration-150">
                            Vote
                        </button>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                    <div class="flex-none mx-4 md:mx-0">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                                 class="w-14 h-14 rounded-lg">
                        </a>
                    </div>

                    <div class="w-full flex flex-col justify-between mx-4 ">
                        <h4 class="text-xl font-semibold mt-2 md:mt-0">
                            <a href="#" class="hover:underline">{{ $idea->title }}</a>
                        </h4>
                        <div class="mt-4 text-gray-600 line-clamp-3">
                            {{ $idea->description }}
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                            <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div class="">Livewire</div>
                                <div>&bull;</div>
                                <div class="text-gray-700">3 comments</div>
                            </div>

                            <div class="flex items-center space-x-2 mt-3 md:mt-0">
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
                                        class="bg-gray-100 hover:bg-gray-200 rounded-full border h-7 px-4 py-2 transition duration-150 ease-in"
                                    >
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
                                        class="absolute w-40 bg-white font-semibold shadow-dialog rounded-lg py-2 md:ml-12 top-8 md:top-6 right-0 md:left-0"
                                    >
                                        <li>
                                            <a href="#"
                                               class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Mark
                                                as Spam</a>
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
                                <button
                                    class="w-20 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-lg hover:border-gray-400 transition ease-in px-4 py-3 -ml-5">
                                    Vote
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End idea container -->
        @endforeach
    </div><!-- End ideas container -->
</x-app-layout>
