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
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequatur dolore est excepturi facilis id, ipsum libero minus mollitia neque nobis numquam provident quisquam, sit tenetur ullam voluptas? Alias, consequuntur, corporis dignissimos dolores, dolorum eos est fuga fugit inventore laudantium modi nobis repellendus sit. Adipisci, architecto blanditiis consequatur dicta eum ipsum laboriosam libero maxime minima modi nihil nisi non obcaecati officiis rem repellat repellendus similique vel?
    </div>
    <div class="w-175">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi fuga molestias nulla optio! A ab ad aut, autem consectetur eligendi, explicabo illum impedit, in iure nobis odit provident qui quibusdam quod quos repellat sed! Animi aperiam, commodi dolores hic incidunt itaque neque quis sequi tenetur velit. Exercitationem facilis labore mollitia nemo odio, perferendis quod reiciendis rem soluta suscipit. Aliquam asperiores blanditiis cum, dolorem est et ex exercitationem ipsa iusto minima nulla numquam officiis omnis, pariatur quam quis reiciendis repellendus reprehenderit suscipit temporibus. Eius eligendi molestiae odio porro quis reprehenderit sint? Alias culpa delectus, deserunt dignissimos dolore dolorem enim, harum nam non nostrum numquam placeat possimus quis recusandae repellendus sed sunt temporibus voluptates. A atque, itaque laborum laudantium magnam minus mollitia placeat, ratione reiciendis rem saepe ut, vel! Animi architecto blanditiis dignissimos distinctio dolore eos illum in, itaque laudantium molestiae tenetur totam. A, aliquam dicta, ducimus enim eum fugiat id illum, impedit ipsum maxime odit pariatur quod reprehenderit similique tempora? A laborum maxime nesciunt repellat vel. Ad alias aspernatur beatae commodi delectus, deleniti, dolorem doloremque eum eveniet expedita explicabo fuga fugit illum labore laborum necessitatibus nisi numquam obcaecati odit officia provident quae qui quia quisquam rem reprehenderit repudiandae sapiente sequi sint sunt tenetur velit veniam veritatis vero vitae voluptas voluptate? Dignissimos, rerum.
    </div>
</main>
</body>
</html>
