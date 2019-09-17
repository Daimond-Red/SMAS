@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Accidental Delivery TAT List
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <button type="button" class="btn btn-sm btn-brand btn-icon-sm mr-2" id="kt_quick_panel_toggler_btn">
                        <i class="flaticon2-search"></i> Filter
                    </button>
                    {{-- <button type="button" class="dataModel btn btn-brand btn-icon-sm"
                        data-id="#mainPanel"
                        data-title="Import"
                        data-href="{{ route('admin.sales.create') }}" >
                        <i class="flaticon2-plus"></i> Import
                    </button> --}}
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="kt-section">
                    
                    <div class="kt-section__content">

                        <div class="row">
                            <div class="col-12 ajax-collection">
                                
                                <table class="data-table-export table table-bordered table-sm">
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
                                            <th> Action</th>
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
                                            <td><a href="{{ route('accidental-delivery-show', $model->BookingNumber ) }}" class="badge badge-info">View Details</a></td>
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
            $('.accidental-delivery-menu').addClass('kt-menu__item--active');
        });
    </script>
@stop
