@extends('layouts.master')

@section('content')
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
    
    <div class="kt-quick-panel__content">
        <div class="container px-4">
            {!! Form::open([ 'data-content' => '#searchFormContent', 'id' => 'search-form', 'route' => ['service-delivery'] ]) !!}
            {{-- <form class="pt-4" method="POST" action="{{ route('service-delivery-filter') }}"> --}}
                {{-- @csrf --}}
                <input type="hidden" name="isAjax" value="1">
                <div class="form-group">
                    <label for="booking-id">Booking ID</label>
                    <input type="text" class="form-control" name="booking_id" id="booking-id" placeholder="Booking ID">
                </div>
                <div class="form-group">
                    <label for="asset-number">Asset No.</label>
                    <input type="text" class="form-control" name="asset_number" id="asset-number" placeholder="Asset No.">
                </div>
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                        <label for="from">Date Range (From)</label>
                        <input type="text" class="form-control datepicker2" name="from" id="from">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="to">Date Range (To)</label>
                        <input type="text" class="form-control datepicker2" name="to" id="to">
                    </div>
                </div>
                <div class="form-group">
                    <label for="client-name">Client Name</label>
                    <input type="text" class="form-control" name="client_name" id="client-name" placeholder="Client Name">
                </div>
                <div class="form-group">
                    <label for="City">City</label>
                    <input type="text" class="form-control" name="City" id="City" placeholder="City">
                </div>
                <div class="form-group">
                    <label for="service-type">Service Type</label>
                    <select class="form-control" name="service_type" id="service-type">
                        <option value="">Select Service Type</option>
                        <option value="Service/Repair">Service/Repair</option>
                        <option value="Accidental">Accidental</option>
                    </select>
                </div>        
                <button type="submit" class="btn btn-info">Search</button>
                <a href="{{ route('service-delivery') }}" class="btn btn-danger sidebarSearchClear" data-content="#searchFormContent">Clear</a>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Service Delivery TAT List
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <button type="button" class="btn btn-sm btn-brand btn-icon-sm mr-2" id="kt_quick_panel_toggler_btn">
                        <i class="flaticon2-search"></i> Filter
                    </button>
                    <!-- <button type="button" class="btn btn-sm btn-brand btn-icon-sm"
                        data-id="#mainPanel"
                        data-title="Import"
                        data-href="#" >
                        <i class="flaticon2-plus"></i> Export
                    </button> -->
                </div>
            </div>
            <div class="kt-portlet__body" id="searchFormContent">
                <div class="kt-section">
                    
                    <div class="kt-section__content">

                        <div class="row">
                            <div class="col-12 ajax-collection">
                                
                                <table id="data-table" class="data-table-export table table-bordered table-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Booking ID</th>
                                            <th>Booking Date</th>
                                            <th>Client Name</th>
                                            <th> Asset No. </th>
                                            <th> City Name </th>
                                            <th> Registration No. </th>
                                            <th> Model Name </th>
                                            <th> Service Type </th>
                                            <th class="noExport">  Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                       @foreach($model as $model)
                                      
                                        <tr>
                                            <td><b>{{ $model->BookingNumber }}</b></td>
                                            <td>{{ $model->BookingDate }}</td>
                                            <td>{{ $model->ClientName }}</td>
                                            <td>{{ $model->AssetNumber }}</td>
                                            <td>{{ $model->CityName }}</td>
                                            <td>{{ $model->RegistrationNumber }}</td>
                                            <td>{{ $model->Model }}</td>
                                            <td>{{ $model->ServiceType }}</td>
                                            <td><a href="{{ route('service-delivery-show', $model->BookingNumber ) }}" class="badge badge-info">View Details</a></td>
                                        </tr>  
                                       @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
    <script>
        $(document).ready(function(){
            $('.service-delivery-menu').addClass('kt-menu__item--active');
        });
    </script>
@stop
