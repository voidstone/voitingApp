<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="We present to your attention a page with rating posts">

    <title>Voiting APP</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans bg-gray-background text-gray-900 text-sm">

<header class="flex items-center justify-between px-8 py-4">
    <a href="#"><img class="h-8 w-30" src="{{ asset('img/vehikl.png') }}" alt="logo"></a>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp"
             alt="avatar" class="w-10 h-10 rounded-full">
    </div>
</header>

<main class="container mx-auto max-w-custom flex">
    <div class="w-70 mr-5">
        Add idea form goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi aperiam
        consequuntur cupiditate dolore doloribus eligendi error et exercitationem expedita illum in laborum modi
        molestiae, placeat porro quaerat quasi quia quibusdam quisquam recusandae, repudiandae, sequi tempore tenetur
        totam veritatis vitae?
    </div>
    <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="border-b-4 pb-3 border-blue" alt="">All ideas (87) </a></li>
                <li><a href="#" class="text-gray-400 transition duration-150
                ease-in border-b-4 pb-3 hover:border-blue" alt="">Considering (6) </a></li>
                <li><a href="#" class="text-gray-400 transition duration-150
                ease-in border-b-4 pb-3 hover:border-blue" alt="">In Progress (1) </a></li>

            </ul>

            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="text-gray-400 transition duration-150
                ease-in border-b-4 pb-3 hover:border-blue" alt="">Implemented (10) </a></li>
                <li><a href="#" class="text-gray-400 transition duration-150
                ease-in border-b-4 pb-3 hover:border-blue" alt="">Closed (55) </a></li>
            </ul>
        </nav>


        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>
</main>
</body>
</html>
