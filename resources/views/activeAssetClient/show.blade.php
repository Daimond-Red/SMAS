@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Active Asset's Client Details
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
                                    <p class="mb-0">Asset No.</p>
                                    <h2 class="mt-0 text-primary">{{ $model->AssetNo }}</h2>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Contract Start Date</p>
                                    <h5 class="mt-0">
                                    {{ $model->ContractStartDate }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Contract End Date</p>
                                    <h5 class="mt-0">
                                    {{ $model->ContractEndDate }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Months</p>
                                    <h5 class="mt-0">{{ $model->Months }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Name</p>
                                    <h5 class="mt-0">{{ $model->FirstName }} {{ $model->LastName }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">City Name</p>
                                    <h5 class="mt-0">
                                    {{ $model->CityName }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">KMs</p>
                                    <h5 class="mt-0">
                                    {{ $model->KMs }}
                                    </h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="mt-4">
                                    <p class="mb-0">Client Name</p>
                                    <h5 class="mt-0">
                                    {{ $model->ClientName }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Client ID</p>
                                    <h5 class="mt-0">
                                    {{ $model->ClientID }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Mobile</p>
                                    <h5 class="mt-0">
                                    {{ $model->Mobile }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Registration Number</p>
                                    <h5 class="mt-0">{{ $model->RegNum }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Model</p>
                                    <h5 class="mt-0">{{ $model->ModelName }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Variant Name</p>
                                    <h5 class="mt-0">{{ $model->VariantName }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Service Date</p>
                                    <h5 class="mt-0">{{ $model->ServiceDate }}</h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                
                                <div class="mt-4">
                                    <p class="mb-0">Registration Date</p>
                                    <h5 class="mt-0">
                                    {{ $model->RegistrationDate }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Delivery Date</p>
                                    <h5 class="mt-0">{{ $model->DeliveryDate }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">PDC Start Date</p>
                                    <h5 class="mt-0">{{ $model->PDCStartDate }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">PDC End Date</p>
                                    <h5 class="mt-0">{{ $model->PDCEndDate }}</h5>
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
