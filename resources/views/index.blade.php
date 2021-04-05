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
            <input type="search" class="w-full rounded-lg pl-8 px-4 py-2 border-none xl:placeholder-gray-900" placeholder="Find an idea">
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
                    <button class="px-4 py-3 rounded-lg text-xxs font-bold w-20 bg-gray-200 uppercase border border-gray-200 hover:border-gray-400 transition ease-in duration-150">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-lg">
                </a>
            </div>
        </div><!-- End idea container -->
    </div><!-- End ideas container -->
</x-app-layout>
