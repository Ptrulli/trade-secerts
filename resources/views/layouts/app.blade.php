<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm">
      <header class="flex items-center justify-between px-8 py-4">
        <a href="#">
            <img src="img/logo.svg" 
            alt="Logo"
            class="w-10 h-10 rounded-full">
        </a> 
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="img/avatar.svg"
                alt="avatar"
                class="w-10 h-10 rounded-full opacity-50">
            </a>
        </div>      
    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Add idea form ** Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, rem neque alias distinctio architecto, incidunt, beatae enim molestias quis asperiores quisquam atque! Fugit, at ipsa, est quisquam, asperiores molestias numquam veritatis error autem dolore dolores cumque? Explicabo officiis impedit dolore blanditiis! Ipsum ab quas pariatur iusto modi sapiente vel eligendi quo quidem architecto, consectetur aut dolorum veritatis ea adipisci expedita voluptates? Repudiandae hic impedit tempora dolores excepturi recusandae exercitationem similique voluptatibus quibusdam sequi nam odio eos suscipit, quasi rem ipsa? Rerum iusto modi ducimus sapiente unde hic magnam reprehenderit dolores tenetur nostrum a reiciendis consequatur, atque ea ratione molestias veniam?
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="" class="border-b-4 pb-3 border-blue-500">All Secerets (87)</a></li>
                    <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Considering (87)</a></li>
                    <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Progress (87)</a></li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500"></a>Implemented (10)</li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500"></a>Closed (55)</li>
                </ul>
            </nav>
        </div>
    </main>

    </body>
</html>
