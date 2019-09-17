<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDeliveryController extends Controller
{
   
    public function index(){

        $model = ApiData('ServiceDeliveryDetails?clientID=1507');

        return view('serviceDelivery.index', compact('model'));
    }

    public function show(request $request){

        $model = ApiData('ServiceDeliveryDetails?clientID=1507');

        foreach($model as $model){
            if($model->BookingNumber == $request->bookingId){
                return view('serviceDelivery.show', compact('model'));
            }
        }
    }

    public function filter(request $request){

        $collection = ApiData('ServiceDeliveryDetails?clientID=1507');
        $data = [];
        foreach($collection as $model){
            if(
                $model->ServiceType == $request->service_type ||
                $model->BookingNumber == $request->booking_id ||
                $model->BookingDate == $request->from ||
                $model->ClientName == $request->client_name ||
                $model->AssetNumber == $request->asset_number ||
                $model->CityName == $request->city
            ){
                $data[] = $model;
            }
        }
        $model = (object)$data;
        //dd($model);
        return view('serviceDelivery.index', compact('model'));
    }
}
