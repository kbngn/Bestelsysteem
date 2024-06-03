<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bestelsysteem') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/sass/order.css'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white border border-bottom shadow-sm">
        <div class="col-md-12 col-6">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex d-none justify-content-evenly" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <div class="d-flex col-md-3 col-0">
                    <img class="h-25 w-25 border border-opacity-75 shadow-sm rounded"
                         src="https://media.discordapp.net/attachments/1204338336047697980/1230096062707007488/cow.png?ex=664e6b7b&is=664d19fb&hm=990e03f5f7f2fd392d0633d4b056890d694497780973c0d62f3790c4f42416ff&=&format=webp&quality=lossless&width=500&height=500">
                    <h4 class="ms-2 my-auto">Rik Bakker</h4>
                </div>

                <!-- Middle Side Of Navar -->
                <a href="{{ url('/') }}" class="d-md-flex d-none"><img class="w-75 mx-auto" src="{{ asset('images/logo.png') }}"></a>

                <!-- Right Side Of Navbar -->
                <div class="text-white fw-bold my-auto col-md-3 col-0 justify-content-end d-md-flex d-none">
                    <ul class="list-unstyled d-flex flex-column my-auto col-3">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="rounded bg-primary bg-opacity-75 border border-primary border-opacity-50 bg-gradient shadow-sm text-center mb-1 p-2">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Hulp') }}</a></li>
                            @endif

                            @if (Route::has('register'))
                                <li class="rounded bg-white bg-gradient border shadow-sm text-black text-center mt-1 p-2">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Log uit') }}</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   v-pre>{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
