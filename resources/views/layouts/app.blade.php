<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container d-flex">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div class="pr-2 border-right border-dark my-auto">
                        <img src="/svg/viruslogo.svg">
                    </div>
                    <div class="hide-when-small pl-2 border-left my-auto"><b>BOGART HUB</b></div>
                </a>
                @auth
                    <div class="search-box">
                        <search-box class="pl-2" />
                    </div>
                @endauth
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown row justify-content-center pt-3">
                                <div class="col-*-6" style="width: 35px;height: 35px;">
                                    <a href="/profile/{{ Auth::user()->id }}">
                                        <img class="w-100 h-100 rounded-circle" src="{{ Auth::user()->profile->default() }}" alt="Profile photo">
                                    </a>
                                </div>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle col-*-6" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right col-sm-12" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-center" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
<style>
    @media only screen and (max-width: 767px) {
        * {
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }
        .posts-index {
            width: 100% !important;
            padding: 0;
        }
        .posts-index img {
            padding: 0;
            margin: 0;
        }
        .posts-index p {
            padding: 0 10px;
        }
        .hide-when-small {
            display: none;
        }
        .search-box {
            padding: 0;
            margin: 0 auto 0 0;
        }
        .nav-item {
            margin: 0 auto 0 auto;
        }
    }
</style>
</html>
