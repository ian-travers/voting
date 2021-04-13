<div
    x-data
    @click="
                    const clicked = $event.target
                    const target = clicked.tagName.toLowerCase()
                    const ignores = ['button', 'svg', 'path', 'a']

                    if (!ignores.includes(target)) {
                        clicked.closest('.idea-container').querySelector('.idea-link').click()
                    }
                "
    class="idea-container bg-white rounded-lg flex hover:shadow-card cursor-pointer transition duration-150 ease-in">
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
        <div class="text-center">
            <div class="font-semibold text-2xl">
                {{ $idea->votes_count }}
            </div>
            <div class="text-gray-500">
                Votes
            </div>
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
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar"
                     class="w-14 h-14 rounded-lg">
            </a>
        </div>

        <div class="w-full flex flex-col justify-between mx-4 ">
            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
            </h4>
            <div class="mt-4 text-gray-600 line-clamp-3">
                {{ $idea->description }}
            </div>

            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                    <div>{{ $idea->created_at->diffForHumans() }}</div>
                    <div>&bull;</div>
                    <div class="">{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-700">3 comments</div>
                </div>

                <div class="flex items-center space-x-2 mt-3 md:mt-0">
                    <div
                        class="{{ $idea->status->getClasses() }} text-xxs font-bold uppercase rounded-full text-center w-24 px-4 py-2 leading-none h-7">
                        {{ $idea->status->name }}
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
                            style="display: none"
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
                            {{ $idea->votes_count }}
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
</div>
