<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-background font-sans text-gray-900 text-sm antialiased">
<header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
    <a href="/"><img src="{{ asset('images/logo.svg') }}" alt="logo"></a>
    <div class="flex items-center mt-2 md:mt-0">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="text-sm text-gray-700 underline">
                            {{ __('Log out') }}
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="http://www.gravatar.com/avatar/?d=retro" alt="avatar" class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>

<!-- Page Content -->
<main class="container flex flex-col md:flex-row mx-auto max-w-custom">
    <div class="w-70 mx-auto md:mx-0 md:mr-5">
        <div
            class="bg-white md:sticky md:top-8 border-2 border-blue mt-14 rounded-lg"
            style="
                border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                border-image-slice: 1;
                background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                background-origin: border-box;
                background-clip: content-box, border-box;
            "
        >
            <div class="text-base text-center px-6 py-2 pt-6">
                <h3 class="font-semibold">Add an idea</h3>
                <p class="text-xs mt-4">Let us know what you would like and we'll take a look over!</p>
                <form action="#" class="space-y-4 py-6">
                    <div>
                        <input type="text" class="w-full text-sm bg-gray-100 border-none rounded-lg placeholder-gray-700 px-4 py-2" placeholder="Your idea">
                    </div>
                    <div>
                        <select name="category" id="category" class="w-full text-sm bg-gray-100 border-none rounded-lg px-4 py-2">
                            <option value="programming">Programming</option>
                            <option value="css">Css</option>
                            <option value="livewire">Livewire</option>
                            <option value="alpinejs">Alpine JS</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4" class="w-full text-sm bg-gray-100 border-none rounded-lg placeholder-gray-700 px-4 py-2" placeholder="Describe your idea"></textarea>
                    </div>

                    <div class="flex items-center justify-between space-x-3">
                        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs font-semibold bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-lg transition duration-150 ease-in">
                            <svg class="h-5 w-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="ml-1">Attach</span>
                        </button>
                        <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-white text-xs font-semibold bg-blue border border-blue hover:bg-blue-hover rounded-lg transition duration-150 ease-in">
                            <span>Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w-full md:w-175 px-3 md:px-0">
        <nav class="hidden md:flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-8">
                <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                <li><a href="#" class="text-gray-400 transition ease-in duration-150 border-b-4 pb-3 hover:border-blue">Considering (12)</a></li>
                <li><a href="#" class="text-gray-400 transition ease-in duration-150 border-b-4 pb-3 hover:border-blue">In progress(1)</a></li>
            </ul>
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-8">
                <li><a href="#" class="text-gray-400 transition ease-in duration-150 border-b-4 pb-3 hover:border-blue">Implemented (10)</a></li>
                <li><a href="#" class="text-gray-400 transition ease-in duration-150 border-b-4 pb-3 hover:border-blue">Closed (55)</a></li>
            </ul>
        </nav>

        <div class="mt-6">
            {{ $slot }}
        </div>

    </div>
</main>
</body>
</html>
