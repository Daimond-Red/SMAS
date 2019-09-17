@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Service Delivery TAT Details
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
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
                            
                            <div class="col-12 col-sm-4">
                                <div class="mt-4">
                                    <p class="mb-0">Booking ID</p>
                                    <h2 class="mt-0 text-primary">{{ $model->BookingNumber }}</h2>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Booking Date & Time </p>
                                    <h5 class="mt-0">
                                    {{ $model->BookingDate }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Client Name</p>
                                    <h5 class="mt-0">{{ $model->ClientName }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">City Name</p>
                                    <h5 class="mt-0">
                                    {{ $model->CityName }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Asset Number</p>
                                    <h5 class="mt-0">{{ $model->AssetNumber }}</h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="mt-4">
                                    <p class="mb-0">Registration Number</p>
                                    <h5 class="mt-0">{{ $model->RegistrationNumber }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Model</p>
                                    <h5 class="mt-0">{{ $model->Model }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Service Type</p>
                                    <h5 class="mt-0">{{ $model->ServiceType }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Service Date</p>
                                    <h5 class="mt-0">{{ $model->ServiceDate }}</h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                
                                <div class="mt-4">
                                    <p class="mb-0">Service Done Date</p>
                                    <h5 class="mt-0">
                                    {{ $model->ServiceDoneDate }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Actual Delivery Date</p>
                                    <h5 class="mt-0">{{ $model->ActualDelDate }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Delivery TAT</p>
                                    <h5 class="mt-0">{{ $model->DeliveryTAT }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Service Delivery TAT</p>
                                    <h5 class="mt-0">{{ $model->ServiceDeliveryTAT }}</h5>
                                </div>
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
