<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccidentalDeliveryController extends Controller
{
    public function index(){

        $collection = ApiData('getAccidentDeliveryTat?clientID=1507');

        if(\request('isAjax') && $this->checkEmptyValue()) {

            $data = [];

            $from = strtotime(\request('from'));
            $to = strtotime(\request('to'));
            
            foreach($collection as $model) {

                $bookingDate = (int)strtotime($model->BookingDate);

                if(
                    $model->ServiceType == \request('service_type') ||
                    ( \request('booking_id')  && stristr($model->BookingNumber, \request('booking_id')) ) ||
                    ( ( $bookingDate >= $from )  && ( $bookingDate <= $to ) ) ||
                    ( \request('client_name')  && stristr($model->ClientName, \request('client_name')) ) ||
                    ( \request('asset_number')  && stristr($model->AssetNumber, \request('asset_number')) ) ||
                    ( \request('City')  && stristr( $model->CityName, \request('City') ) )
                ){
                    $data[] = $model;
                }
            }
            $model = (object)$data;
        } else {
            $model = $collection;
        }
        return view('accidentalDelivery.index', compact('model'));
    }

    public function show(request $request){

        $model = ApiData('getAccidentDeliveryTat?clientID=1507');

        foreach($model as $model){
            if($model->BookingNumber == $request->bookingId){
                return view('accidentalDelivery.show', compact('model'));
            }
        }
    }

    public function history(){

        $collection = ApiData('getAccidentalHistory?clientID=1507');
        if(\request('isAjax') && $this->checkEmptyValue()) {

            $data = [];

            $from = strtotime(\request('from'));
            $to = strtotime(\request('to'));
            
            foreach($collection as $model) {

                $bookingDate = (int)strtotime($model->BookingDate);

                if(
                    $model->serviceType == \request('service_type') ||
                    ( \request('booking_id')  && stristr($model->BookingNumber, \request('booking_id')) ) ||
                    ( ( $bookingDate >= $from )  && ( $bookingDate <= $to ) ) ||
                    ( \request('client_name')  && stristr($model->ClientName, \request('client_name')) ) ||
                    ( \request('asset_number')  && stristr($model->AssetNumber, \request('asset_number')) ) ||
                    ( \request('City')  && stristr( $model->CityName, \request('City') ) )
                ){
                    $data[] = $model;
                }
            }
            $model = (object)$data;
        } else {
            $model = $collection;
        }
        return view('accidentalDelivery.history', compact('model'));
    }

    public function historyShow(request $request){

        $model = ApiData('getAccidentalHistory?clientID=1507');

        foreach($model as $model){
            if($model->BookingNumber == $request->bookingId){
                return view('accidentalDelivery.history-show', compact('model'));
            }
        }
    }
}
