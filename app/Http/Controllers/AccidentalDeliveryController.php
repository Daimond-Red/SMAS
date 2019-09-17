<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccidentalDeliveryController extends Controller
{
    public function index(){

        $model = ApiData('getAccidentDeliveryTat?clientID=1507');

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

        $model = ApiData('getAccidentalHistory?clientID=1507');

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
