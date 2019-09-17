@extends('layouts.master')

@section('pageBar')
    <div class="kt-subheader__breadcrumbs">
        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>

        <span class="kt-subheader__breadcrumbs-separator"></span>
        <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            Dashboard </span>
    </div>
@stop
@section('content')

<div class="row">
    <div class="col-12 col-sm-4">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head bg-primary">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title text-white">
                        Service Delivery TAT
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!-- <div style="width:100%; height:300px;" id="service"></div> -->
                <canvas id="service" width="400" height="400"></canvas>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head bg-primary">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title text-white">
                        Accidental Delivery TAT
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!-- <div style="width:100%; height:300px;" id="accidental"></div> -->
                <canvas id="accidental" width="400" height="400"></canvas>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head bg-primary">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title text-white">
                        Accidental History
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!-- <div style="width:100%; height:300px;" id="accidental-history"></div> -->
                <canvas id="accidental-history" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>   



@stop
@section('script')

<script>
    $(document).ready(function(){
        $('.home-menu').addClass('kt-menu__item--active');
    });

    var chart1 = [
        {{serviceDeliveryCount('Same Day')}},
        {{serviceDeliveryCount('Between 2 to 3 Days')}},
        {{serviceDeliveryCount('Between 4 to 5 Days')}},
        {{serviceDeliveryCount('More Than 5 Days')}}
    ];

    var chart2 = [
        {{accidentalDeliveryCount('Same Day')}},
        {{accidentalDeliveryCount('Between 2 to 3 Days')}},
        {{accidentalDeliveryCount('Between 4 to 5 Days')}},
        {{accidentalDeliveryCount('More Than 5 Days')}}
    ];

    var chart3 = [100, 50, 40, 20];

    function chart(chartData, divID) {
        var ctx = document.getElementById(divID).getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Same Day', 'Between 2 to 3 Days', 'Between 4 to 5 Days', 'More Than 5 Days'],
                datasets: [{
                    data: chartData,
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 206, 86)',
                        'rgb(75, 192, 192)',
                    ],
                    borderWidth: 4
                }]
            },
            options: {
                legend: {
                    display: true,
                    position: 'bottom'
                },
                plugins: {
                    labels: {
                        render: 'value',
                        fontSize: 14,
                        fontStyle: 'bold',
                        fontColor: '#fff',
                        fontFamily: '"Lucida Console", Monaco, monospace'
                    }
                }
            }
        });
    }

    chart(chart1, 'service');
    chart(chart2, 'accidental');
    chart(chart3, 'accidental-history');

</script>
@stop
