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
<header class="px-8 py-4 flex items-center justify-between">
    <a href="/"><img src="{{ asset('images/logo.svg') }}" alt="logo"></a>
    <div class="flex items-center">
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
<main class="container flex mx-auto max-w-custom">
    <div class="w-70 mr-5">
        Add idea form goes here.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequatur dolore est excepturi facilis id,
        ipsum libero minus mollitia neque nobis numquam provident quisquam, sit tenetur ullam voluptas? Alias,
        consequuntur, corporis dignissimos dolores, dolorum eos est fuga fugit inventore laudantium modi nobis
        repellendus sit. Adipisci, architecto blanditiis consequatur dicta eum ipsum laboriosam libero maxime minima
        modi nihil nisi non obcaecati officiis rem repellat repellendus similique vel?
    </div>
    <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
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
    </div>
</main>
</body>
</html>
