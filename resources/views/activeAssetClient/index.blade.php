@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Active Asset Of Client
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
                                            <th> Asset No. </th>
                                            <th>Client Name</th>
                                            <th>Mobile Number</th>
                                            <th> City Name </th>
                                            <th> Registration No. </th>
                                            <th>Registration Date</th>
                                            <th> Model Name </th>
                                            <th>  Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                       @foreach($model as $model)
                                        <tr>
                                            <td><b>{{ $model->AssetNo }}</b></td>
                                            <td>{{ $model->FirstName }} {{ $model->LastName }}</td>
                                           <td>{{ $model->Mobile }}</td>
                                            <td>{{ $model->CityName }}</td>
                                            <td>{{ $model->RegNum }}</td>
                                            <td>{{ $model->RegistrationDate }}</td>
                                            <td>{{ $model->ModelName }}</td>
                                            <td><a href="{{ route('active-asset-client-show', $model->AssetNo )}}" class="badge badge-info">View Details</a></td>
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
            $('.active-asset-client').addClass('kt-menu__item--active');
        });
    </script>
@stop
