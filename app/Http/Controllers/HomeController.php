<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller {

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminLogin(){
        return view('admin-login');
    }

    public function index() {
        return view('home');
    }

    public function activeAssetClient(){

        $model = ApiData('getActiveAssets?clientID=3727');
        
        return view('activeAssetClient.index', compact('model'));
    }

    public function activeAssetClientShow(request $request){

        $model = ApiData('getActiveAssets?clientID=3727');

        foreach($model as $model){
            if($model->AssetNo == $request->assetNo){
                return view('activeAssetClient.show', compact('model'));
            }
        }
    }
}
