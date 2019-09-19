@extends('layouts.master')

@section('content')
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
    
    <div class="kt-quick-panel__content">
        <div class="container px-4">
            {!! Form::open([ 'data-content' => '#searchFormContent', 'id' => 'search-form', 'route' => ['active-asset-client'] ]) !!}
            {{-- <form class="pt-4" method="POST" action="{{ route('service-delivery-filter') }}"> --}}
                {{-- @csrf --}}
                <input type="hidden" name="isAjax" value="1">
                
                <div class="form-group">
                    <label for="asset-number">Asset No.</label>
                    <input type="text" class="form-control" name="asset_number" id="asset-number" placeholder="Asset No.">
                </div>
                <div class="form-group">
                    <label for="client-name">Client Name</label>
                    <input type="text" class="form-control" name="client_name" id="client-name" placeholder="Client Name">
                </div>
                <div class="form-group">
                    <label for="City">City</label>
                    <input type="text" class="form-control" name="City" id="City" placeholder="City">
                </div>     
                <button type="submit" class="btn btn-info">Search</button>
                <a href="{{ route('active-asset-client') }}" class="btn btn-danger sidebarSearchClear" data-content="#searchFormContent">Clear</a>
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
                        Book Value Chart
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    {{-- <button type="button" class="btn btn-sm btn-brand btn-icon-sm mr-2" id="kt_quick_panel_toggler_btn">
                        <i class="flaticon2-search"></i> Filter
                    </button> --}}
                    {{-- <button type="button" class="dataModel btn btn-brand btn-icon-sm"
                        data-id="#mainPanel"
                        data-title="Import"
                        data-href="{{ route('admin.sales.create') }}" >
                        <i class="flaticon2-plus"></i> Import
                    </button> --}}
                    <a href="{{ route('active-asset-client-show', $assetNo) }}" class="btn btn-info btn-icon-sm"> Back </a>
                </div>
            </div>
            <div class="kt-portlet__body" id="searchFormContent">
                <div class="kt-section">
                    
                    <div class="kt-section__content">

                        <div class="row">
                            <div class="col-12 ajax-collection">
                                
                                <table class="data-table-export table table-bordered table-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th> Quote No. </th>
                                            <th> Installment No</th>
                                            <th> Installment Date</th>
                                            <th> Principal </th>
                                            <th> Outstanding </th>
                                            <th> Type </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                       @foreach($collection as $model)
                                        <tr>
                                            <td><b>{{ $model->QuoteNo }}</b></td>
                                            <td>{{ $model->InstallmentNo }}</td>
                                           <td>{{ getDateTimeValue($model->InstallmentDate) }}</td>
                                            <td>Rs. {{ $model->Principal }}</td>
                                            <td>Rs. {{ $model->Outstanding }}</td>
                                            <td>{{ $model->Type }}</td>
                                            <td>
                                                {{-- <a href="{{ route('active-asset-client-show', $model->AssetNo )}}" class="badge badge-info">View Details</a> --}}
                                            </td>
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
