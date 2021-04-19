<div>
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
            @livewire('idea-item', ['idea' => $idea], key($idea->id))
        @endforeach
    </div>

    <div class="my-2">
        {{ $ideas->links() }}
    </div>
</div>
