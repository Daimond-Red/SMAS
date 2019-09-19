<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDeliveryController extends Controller
{
   
    public function index(){

        $collection = ApiData('ServiceDeliveryDetails?clientID=1507');

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

        if(!$model) return abort(404);

        return view('serviceDelivery.index', compact('model'));
    }

    public function show(request $request){

        $model = ApiData('ServiceDeliveryDetails?clientID=1507');
        
        if(!$model) return abort(404);

        foreach($model as $model){
            if($model->BookingNumber == $request->bookingId){
                return view('serviceDelivery.show', compact('model'));
            }
        }
    }

    
}
