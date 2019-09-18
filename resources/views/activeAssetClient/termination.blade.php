@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Termination Statement For Asset
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    {{-- <button type="button" class="dataModel btn btn-primary btn-icon-sm"
                        data-id="#mainPanel"
                        data-title="Import"
                        data-href="" >
                        <i class="flaticon2-plus"></i> Import
                    </button> --}}
                    <a href="{{ route('active-asset-client-show', $model->AssetNumber) }}" class="btn btn-info btn-icon-sm"> Back </a>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="kt-section">
                    
                    <div class="kt-section__content">

                        <div class="row">
                            
                            <div class="col-12 col-sm-4">
                                <div class="mt-4">
                                    <p class="mb-0">Asset No.</p>
                                    <h2 class="mt-0 text-primary">{{ $model->AssetNumber }}</h2>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Installment End Date</p>
                                    <h5 class="mt-0">
                                    {{ getDateTimeValue($model->InstallmentEndDate) }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">BDM</p>
                                    <h5 class="mt-0">
                                    {{ $model->BDM }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">BDM Email</p>
                                    <h5 class="mt-0">{{ $model->BDMEmail }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">GST</p>
                                    <h5 class="mt-0">{{ $model->GST }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Registeration Number</p>
                                    <h5 class="mt-0">{{ $model->RegNumber }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Contract End Date</p>
                                    <h5 class="mt-0">{{ getDateTimeValue($model->ContractEndDate) }}</h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="mt-4">
                                    <p class="mb-0">Total Payable</p>
                                    <h5 class="mt-0">
                                    Rs. {{ $model->TotalPayable }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Total Percentage</p>
                                    <h5 class="mt-0">
                                    {{ $model->TotalPercentage }} %
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">IDs</p>
                                    <h5 class="mt-0">
                                    {{ $model->IDs }}
                                    </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Invoice Number</p>
                                    <h5 class="mt-0">{{ $model->InvoiceNumber }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Total RV</p>
                                    <h5 class="mt-0">{{ $model->TotalRV }}</h5>
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
                                    <p class="mb-0">User Name</p>
                                    <h5 class="mt-0">{{ $model->UserName }}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">CGST Percent</p>
                                    <h5 class="mt-0">{{ $model->CGstPercent }} %</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">SGST Percent</p>
                                    <h5 class="mt-0">{{ $model->SGstPercent }} % </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">IGST Percent</p>
                                    <h5 class="mt-0"> {{ $model->IGstPercent }} % </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">UTGST Percent</p>
                                    <h5 class="mt-0"> {{ $model->UTGstPercent }} % </h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Cess Percent</p>
                                    <h5 class="mt-0"> {{ $model->CessPercent }} % </h5>
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
            $('.active-asset-client').addClass('kt-menu__item--active');
        });
    </script>
@stop
