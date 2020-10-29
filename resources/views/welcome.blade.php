@extends('layouts.app')

@if (Route::has('login'))
<div class="top-right links">
    @auth
        <a href="{{ url('/dashboard') }}">{{__('Go to Dashboard')}}</a>
    @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endauth
</div>
@endif

@section('unique-page')
    {{-- Top banner --}}
    <div style="background: linear-gradient(135deg,#008bff,#ef70d3)">
        <div class="container pt-4">
            <div class="row" style="height: 60vh">
                <div class="col-12 col-md d-flex align-items-center">
                    <img src="http://girlzinweb.com/wp-content/uploads/2012/12/devices-multi.png" width="100%" alt="Featured screenshot of apps">
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <div>
                        <h1 class="display-4">{{__('Management of Corpses')}}</h1>
                        <h2>{{__('Digital solution for Khairat Kematian')}}</h2>
                        <div>
                            @guest
                                <a href="{{url('register')}}" class="btn btn-primary btn-lg">{{__('Register NOW')}}</a>
                            @else
                                <a href="{{url('dashboard')}}" class="btn btn-primary btn-lg">{!!__('Go to <b class="text-warning">DASHBOARD</b>')!!}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Unique selling point --}}
    <div class="bg-light">
        <div class="container py-4">
            <h2 class="text-center m-4">Why to use Khairat2u?</h2>
                <div class="row">
                    @php
                        $usps = [[
                            'icon'=>'fas fa-globe-asia',
                            'title'=>'Locally developed',
                            'desc'=>'So we can support you locally'
                        ],[
                            'icon'=>'fas fa-moon',
                            'title'=>'Shariah compliant',
                            'desc'=>'All transactions are programmed to be in compliance with Shariah'
                        ],[
                            'icon'=>'fas fa-seedling',
                            'title'=>'Save our planet and go paperless',
                            'desc'=>'Support environmental cause'
                        ]]
                    @endphp

                    {{-- Single USP --}}
                    @foreach($usps as $usp)
                        <div class="col-12 col-md-4">
                            <div class="card mb-2" style="height: 300px">
                                <div class="card-body text-center">
                                    <h1 class="display-1 m-4"><span class="{{$usp['icon']}}"></span></h1>
                                    <h3>{{$usp['title']}}</h3>
                                    <h5>{{$usp['desc']}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- End single USP --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Full feature list --}}
    <div class="bg-dark">
        <div class="container py-4">
            <h2 class="text-center m-4 text-white">Full of features and benefits</h2>
            <div class="row d-flex align-content-stretch flex-wrap">
                @php
                    $cols_no = 3;  // Allow 1,2,3,4,6

                    // List of features
                    $features = [ 
                        ['icon' => 'fas fa-atlas','title' => __('Directory of participants')],
                        ['icon' => 'fas fa-child','title' => __('Beneficiaries management')],
                        ['icon' => 'fas fa-columns','title' => __('Support multiple subscription plans based on coverage and period')],
                        ['icon' => 'fas fa-calculator','title' => __('Auto-calculate contribution based on no. of beneficiaries and plan')],
                        ['icon' => 'fas fa-bullhorn','title' => __('Announcement')],
                        ['icon' => 'fas fa-file-invoice-dollar','title' => __('Invoice and receipt management')],
                        ['icon' => 'fas fa-bell','title' => __('Contribution payment reminder via email and SMS')],
                        ['icon' => 'fas fa-clipboard-check','title' => __('Claims and dispute management')],
                        ['icon' => 'fas fa-chart-bar','title' => __('Performance report')],
                        ['icon' => 'fas fa-mobile','title' => __('Designed for mobile and desktop')],
                        ['icon' => 'fas fa-language','title' => __('Support Bahasa Melayu & English')],
                    ]
                @endphp
                {{-- Single feature --}}
                @foreach ($features as $feature)
                    <div class="col-12 col-md-6 col-lg-{{12 / $cols_no}} d-flex align-items-stretch">
                        <div class="card bg-secondary mb-4 p-4 bg-light w-100 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <h1 class="display-4 text-center"><span class="{{$feature['icon']}}"></span></h1>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <h5>{{$feature['title']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection