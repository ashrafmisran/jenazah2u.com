@extends('layouts.app')

@section('page-title', __('Subscription') )
@section('second-breadcrumb', __('Subscription') )
{{-- @section('third-breadcrumb', __('Third') )
@section('fourth-breadcrumb', __('Fourth') ) --}}

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6"><h3>{{__('Package')}}</h3></div>
                        <div class="col-12 col-md-6 d-flex justify-content-md-end"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-subscription">{{__('Change')}}</button></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row">Package</th>
                            <td>Basic</td>
                        </tr>
                        <tr>
                            <th scope="row">Type</th>
                            <td>Annual Subscription</td>
                        </tr>
                        <tr>
                            <th scope="row">Coverage</th>
                            <td>Management of funeral which covers:
                                <ul>
                                    <li>Transportation from hospital to the masjid</li>
                                    <li>Cost of preparing grave</li>
                                    <li>Imam</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6"><h3>{{__('Beneficiaries')}}</h3></div>
                        <div class="col-12 col-md-6 d-flex justify-content-md-end"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-subscription">{{__('Add beneficiary')}}</button></div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-stripped table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Age')}}</th>
                                <th scope="col">{{__('Registration ID')}}</th>
                                <th scope="col">{{__('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1.</th>
                                <td>Muhammad Ashraf bin Misran</td>
                                <td>29-year-old</td>
                                <td>911101065717</td>
                                <td>
                                    <button class="btn btn-sm"><span class="fas fa-pen"></span></button>
                                    <button class="btn btn-sm"><span class="fas fa-times"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6"><h3>{{__('Tenure')}}</h3></div>
                        <div class="col-12 col-md-6 d-flex justify-content-md-end"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-subscription">{{__('Extend')}}</button></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row">{{__('Starts')}}</th>
                            <td>1 January 2020</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Ends')}}</th>
                            <td>31 December 2020</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Remaining month')}}</th>
                            <td>2 months</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Second row --}}
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-header"><h3>{{__('Past subscriptions')}}</h3></div>
                <div class="card-body p-0">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Type')}}</th>
                                <th scope="col">{{__('Starts')}}</th>
                                <th scope="col">{{__('Ends')}}</th>
                                <th scope="col">{{__('Rate (RM/pax)')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal-subscription" tabindex="-1" role="dialog" aria-labelledby="subscription-form-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">Subscription</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        Add rows here
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
        });
    </script>

@endsection
