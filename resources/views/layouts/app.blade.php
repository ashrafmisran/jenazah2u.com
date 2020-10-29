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
        @include('layouts.top-navbar')
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
        
        @hasSection ('unique-page')
            {{-- Offset created space for navbar and breadcrumb --}}
            <div style="margin-top:-3.5rem"> 
                @yield('unique-page')
            </div>
        @else
            <main class="py-4">
                <div class="container">
                    <h1 class="mt-4 mb-4">@yield('page-title')</h1>
                    @yield('content')
                </div>
            </main>
        @endif
        <div style="height:2.5rem"></div>
    </div>
</body>
</html>
