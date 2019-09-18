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
        
        return view('activeAssetClient.index', compact('collection'));
    }

    public function activeAssetClientShow($assetNo) {
        
        $clientID = session('user')[0]->clientID;

        $collection = ApiData('getActiveAssets?clientID='.$clientID);

        foreach ($collection as $model) {
            if($assetNo == $model->AssetNo) return view('activeAssetClient.show', compact('model'));
        }
    }
}
