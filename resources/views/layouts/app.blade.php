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
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e34e3e8edd.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div id="app">

        {{-- Fixed-top bar --}}
        <div id="fixed-top" class="fixed-top">
            <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @auth
                            <li class="nav-item">
                                <a href="dashboard" class="nav-link">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">{{ __('Fees') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">{{ __('Payments History') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">{{ __('Fund Reports') }}</a>
                            </li>
                            @endauth
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
                                    <li class="nav-item d-none d-md-block">
                                        <button class="nav-link btn btn-danger text-white" data-toggle="modal" data-target="#emergency-modal">{{ __('EMERGENCY') }}</button>
                                    </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->alias }}
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="#" class="dropdown-item">{{ __('Profile') }}</a>
                                        <a href="{{ url('password-change') }}" class="dropdown-item">{{ __('Change password') }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
        @auth
            <div class="fixed-top" style="top:3.3rem;z-index:10">
                @include('layouts.breadcrumb')
            </div>
        @endif

        <div style="height:5.5rem"></div>
        <nav class="p-1 fixed-bottom bg-danger d-block d-md-none">
            <button data-toggle="modal" data-target="#emergency-modal" class="nav-link btn btn-danger btn-lg btn-block text-white">{{ __('EMERGENCY') }}</button>
        </nav>
        
        <!-- Modal -->
        <div class="modal fade" id="emergency-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{__('Emergency contacts')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <button class="btn btn-block btn-lg btn-success">Whatsapp</button>
                        <button class="btn btn-block btn-lg btn-danger">Call</button>
                        <button class="btn btn-block btn-lg btn-primary">SMS</button>
                    </div>
                </div>
            </div>
        </div>
        
        <main class="py-4">
            <div class="container">
                <h1>@yield('page-title')</h1>
                @yield('content')
            </div>
        </main>
        <div style="height:2.5rem"></div>
    </div>
</body>
</html>
