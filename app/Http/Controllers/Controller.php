<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkEmptyValue() {
    	$attrs = \request()->all();
    	
    	foreach ($attrs as $key => $value) {

    		if( !in_array($key, ['_token', 'isAjax']) && $value) return true;
    	}

    	return false;
    }
}
