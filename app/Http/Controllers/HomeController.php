<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function __construct()
    {
        $this->middleware('admin.auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index() {
        return view('home');
    }

    public function activeAssetClient(){

        $clientID = session('user')[0]->clientID;

        $collection = ApiData('getActiveAssets?clientID='.$clientID);

        if(\request('isAjax') && $this->checkEmptyValue()) {

            $data = [];

            $from = strtotime(\request('from'));
            $to = strtotime(\request('to'));
            
            foreach($collection as $model) {
                // dd($model);
                // $bookingDate = (int)strtotime($model->BookingDate);

                if( ( \request('client_name')  && stristr($model->ClientName, \request('client_name')) ) ||
                    ( \request('asset_number')  && stristr($model->AssetNo, \request('asset_number')) ) ||
                    ( \request('City')  && stristr( $model->CityName, \request('City') ) )
                ){
                    $data[] = $model;
                }
            }
            $collection = (object)$data;
        } 
        
        if(!$collection) return abort(404);

        return view('activeAssetClient.index', compact('collection'));
    }

    public function activeAssetClientShow($assetNo) {
        
        $clientID = session('user')[0]->clientID;

        $collection = ApiData('getActiveAssets?clientID='.$clientID);
        
        if(!$collection) return abort(404);

        foreach ($collection as $model) {
            if($assetNo == $model->AssetNo) return view('activeAssetClient.show', compact('model'));
        }
    }    

    public function terminationAsset($assetNo) {
        
        $model = ApiData('getTerminationByAssetNo?assetNo='.$assetNo);
        
        if(!$model) return abort(404);

        return view('activeAssetClient.termination', [
            'model' => $model[0]
        ]);
    }

    public function bookValueChart($assetNo, $quoteNo) {

        $collection = ApiData('getBookValueOfAssetByQuoteNo?Qno='.$quoteNo);

        if(!$collection) return abort(404);

        return view('activeAssetClient.bookValueChart', [
            'collection' => $collection,
            'assetNo' => $assetNo
        ]);                                                                                                                                                  
    }
}
