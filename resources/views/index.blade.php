<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/4">
            <select name="category" id="category" class="w-full rounded-lg px-4 py-2 border-none">
                <option value="programming">Programming</option>
                <option value="css">Css</option>
                <option value="livewire">Livewire</option>
                <option value="alpinejs">Alpine JS</option>
            </select>
        </div>
        <div class="w-1/4">
            <select name="difficulty" id="difficulty" class="w-full rounded-lg px-4 py-2 border-none">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>

        <div class="relative w-1/2">
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
        <div class="idea-container bg-white rounded-lg flex">
            <div class="px-5 py-8 border-r border-gray-100">
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
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-lg">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">An idea title goes here</a>
                    </h4>
                    <div class="mt-4 text-gray-600 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda doloribus, ea
                        earum, facilis ipsa iusto minus nisi numquam odio omnis quae quasi quibusdam quo reiciendis
                        totam voluptatem! Consequatur delectus dicta magni nesciunt sit. Ad animi consectetur
                        consequuntur ex, illo ipsum minus molestiae placeat qui reprehenderit. Aut consectetur ipsam
                        laborum minima nostrum pariatur placeat recusandae similique tempore. Aliquid animi aspernatur
                        atque, blanditiis doloribus ea facilis illo illum incidunt iure minus nobis nulla optio placeat
                        praesentium similique voluptatibus. Consequuntur, illum in.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
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
                                    class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 px-4 py-2 transition duration-150 ease-in">
                                    <svg class="text-gray-400 hover:text-gray-500" fill="currentColor" width="24"
                                         height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"></path>
                                    </svg>
                                </button>
                                <ul class="absolute w-40 bg-white font-semibold shadow-lg rounded-lg py-2 ml-12">
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 transition duration-150 ease-in px-5 py-2">Delete Post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End idea container -->
    </div><!-- End ideas container -->
</x-app-layout>
