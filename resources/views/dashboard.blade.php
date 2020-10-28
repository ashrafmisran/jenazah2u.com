@extends('layouts.app')

@section('page-title', __('Dashboard') )
{{-- @section('second-breadcrumb', __('Second') )
@section('third-breadcrumb', __('Third') )
@section('fourth-breadcrumb', __('Fourth') ) --}}

@section('content')

    {{-- Stats section --}}
    <div class="row mb-2">
        {{-- Statistics --}}
        <div class="col-md">
            <div class="card mb-2">
                <div class="card-body">
                    <h5>{!! __('No. of members') !!}</h5>
                    <h1 class="text-center display-3">1,000</h1>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card mb-2">
                <div class="card-body">
                    <h5>{!! __('Amount collected (RM)') !!}</h5>
                    <h1 class="text-center display-3">50,000</h1>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card mb-2">
                <div class="card-body">
                    <h5>{!! __('No. of death') !!}</h5>
                    <h1 class="text-center display-3">23</h1>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card mb-2">
                <div class="card-body">
                    <h5>{!! __('Amount disbursed (RM)') !!}</h5>
                    <h1 class="text-center display-3">29,000</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- List --}}
    <div class="row">
        {{-- List of last 10 death --}}
        <div class="col-md-7">
            <div class="card mb-2 border-success">
                <div class="card-body">
                    <h2>{{ __('List of claimed cases') }}</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Anwar bin Hamat</td>
                                <td>23 Oktober 2020</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Rahmat bin Esa</td>
                                <td>14 Mei 2020</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Normah binti Mansor</td>
                                <td>1 Februari 2020</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Esah binti Johar</td>
                                <td>14 November 2019</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="claims" class="btn btn-outline-dark btn-block">{{ __('Show all claims') }} <span class="fas fa-angle-double-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card mb-2">
                <div class="card-body">
                    <h2>{{ __('Events') }}</h2>
                </div>
            </div>
        </div>
    </div>

@endsection
