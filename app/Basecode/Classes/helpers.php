<?php

function generateOTP(){

    $permitted_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $str = substr(str_shuffle($permitted_chars), 0, 2);

    return mt_rand(1111, 9999);

}


function executeApi($url, $data = [], $method = "GET", $port = 8283) {
    try {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_PORT, $port);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        return json_decode($result);
    } catch(Exception $e) {

    }

}

function sendOtp($mobile_no, $message = '') {

    $otp = generateOTP();

    if(!$message) $message = 'Please enter '.$otp.' as your one time verification for mobile number.';

    sendMessage($mobile_no, $message);

    return $otp;

}

function getImageUrl($image, $type = null, $isNull = false) {

    if((!$image) && $type == 'user' ) return asset('uploads/user-not-found.svg');

    if($isNull && (!$image)) return null;

    if(!$image) return asset('uploads/not-found.png');

    return asset($image);

}

function sendMessage( $mobileNo, $message ) {

    $message = urlencode($message);

    $api = '';

    try {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7);
        curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $result = curl_exec($ch);
        curl_close($ch);

        // $client = new \GuzzleHttp\Client();
        // $res = $client->request('GET', $api);

    } catch ( \Exception $e ) {

    }
}

/**
 * WE ARE USING THIS FUNCTION TO INCLUDE
 * SCRIPT AND CSS FILES AND OTHER MEDIA
 * FILES IN ADMIN APPLICATION
 */
if (! function_exists('getMediaUrl')) {

    function getMediaUrl($filePath) {
        return asset($filePath);
    }

}

function currencySign() {
    return '₹';
}

function distanceSign() {
    return 'Km';
}

function redirectToDashboard() {
    return redirect()->route('admin.dashboard')->withErrors('Something went wrong');
}

define('DATE_FORMAT', 'd-m-Y');

define('DATETIME_FORMAT', 'd-m-Y g:i A');

define('TIME_FORMAT', 'g:i A');

if (! function_exists('getDateTimeValue')) {

    function getDateTimeValue($date) {
        if( in_array($date, ['0000-00-00', '0000-00-00 00:00:00']) || (!$date)) return '';
        return date(DATETIME_FORMAT, strtotime($date));
    }

}

if (! function_exists('getDateValue')) {

    function getDateValue($date) {
        if( in_array($date, ['0000-00-00', '0000-00-00 00:00:00']) || (!$date)) return '';
        return date('d-m-Y', strtotime($date));
    }

}

if (! function_exists('getTimeValue')) {

    function getTimeValue($date) {
        if( in_array($date, ['0000-00-00', '0000-00-00 00:00:00', '00:00:00']) || (!$date)) return '';
        return date(TIME_FORMAT, strtotime($date));
    }

}

/**
 * WE ARE USING THIS FUNCTION TO REMOVE
 * VALIDATION RULES KEY FROM RULES IF THEY ARE
 * BEING UPDATE USING SAME MODEL.
 */
if (! function_exists('getValidationRules')) {

    function getValidationRules( $rules = [], $model = null ) {
        if(!$rules) return [];

        foreach( $rules as $key => $rule ) {
            if( $model && ( $model->$key == request($key) ) ) unset($rules[$key]);
        }
        return $rules;
    }
}

if (! function_exists('decodeId')) {

    function decodeId($value) {
        try{
            return decrypt($value);
        } catch (\Exception $e) {
            return '';
        }
    }

}

function getAddressFromGoogle( $address = '', $lat = '', $lng = '' ){

    $data = [
        'lat'                   => '',
        'lng'                   => '',
        'locality'              => '',
        'street_number'         => '',
        'route'                 => '',
        'sublocality_level_1'   => '',
        'postal_code'           => '',
        'city'                  => '',
        'short_city'            => '',
        'state'                 => '',
        'short_state'           => '',
        'country'               => '',
        'short_country'         => '',
    ];

    try {
        if( $address ) {
            $geocode = file_get_contents('https://maps.google.com/maps/api/geocode/json?key=AIzaSyAKrYvcyFVz3Ao4R60OzZzj0zttjzsQRwE&address='.urlencode($address).'&sensor=false&region=India');
        } else {
            $geocode = file_get_contents('https://maps.google.com/maps/api/geocode/json?key=AIzaSyAKrYvcyFVz3Ao4R60OzZzj0zttjzsQRwE&latlng='.$lat.','.$lng.'&sensor=false&region=India');
        }

        $output = json_decode($geocode);

        // echo '<pre>'; print_r($output); die;

        if(! isset( $output->results ) ) return $data;
        if(! isset($output->results[0]) ) return $data;

        if( isset($output->results[0]->geometry) && isset( $output->results[0]->geometry->location ) && $output->results[0]->geometry->location->lat ) $data['lat'] = $output->results[0]->geometry->location->lat;
        if( isset($output->results[0]->geometry) && isset( $output->results[0]->geometry->location ) && $output->results[0]->geometry->location->lng ) $data['lng'] = $output->results[0]->geometry->location->lng;

        if( isset($output->results[0]->address_components) ) {

            foreach( $output->results[0]->address_components as $res ) {

                if( isset($res->types[0]) && $res->types[0] == 'administrative_area_level_1' ) {
                    $data['state'] = $res->long_name;
                    $data['short_state'] = $res->short_name;
                } elseif( isset($res->types[0]) && $res->types[0] == 'administrative_area_level_2' ) {
                    $data['city'] = $res->long_name;
                    $data['short_city'] = $res->short_name;
                } elseif( isset($res->types[0]) && $res->types[0] == 'country' ) {
                    $data['country'] = $res->long_name;
                    $data['short_country'] = $res->short_name;
                } elseif( isset($res->types[0]) && $res->types[0] == 'locality' ) {
                    $data['locality'] = $res->long_name;
                }elseif( isset($res->types[2]) && $res->types[2] == 'sublocality_level_1' ) {
                    $data['sublocality_level_1'] = $res->long_name;
                } elseif( isset($res->types[0]) && $res->types[0] == 'postal_code' ) {
                    $data['postal_code'] = $res->long_name;
                } elseif( isset($res->types[0]) && $res->types[0] == 'street_number' ) {
                    $data['street_number'] = $res->long_name;
                } elseif( isset($res->types[0]) && $res->types[0] == 'route' ) {
                    $data['route'] = $res->long_name;
                }

            }

        }

        if( isset($output->results[0]->formatted_address) ) $data['address'] = $output->results[0]->formatted_address;

    } catch ( \Exception $e ) {
        return $data;
    }

    return $data;

}

if (! function_exists('isAuth')) {

    function isAuth($class, $method, $var = null) {

        try{
            $className = '\App\Basecode\Classes\Permissions\\'.$class.'Permission';
            $permission = new $className();
            return $permission->$method($var);
        } catch (\Exception $e) {
            return false;
        }

    }

};

if (! function_exists('checkAuth')) {

    function checkAuth($class, $method) {

        try {
            $className = $class;
            $permission = new $className();
            return $permission->$method();
        } catch (\Exception $e) {
            return false;
        }

    }

};

if (! function_exists('isSuperAdmin')) {

    function isSuperAdmin() {
        if(!auth()->check()) return false;
        if(auth()->user()->type == \App\User::SUPERADMIN) return true;
        return false;
    }

}

function cvalidate( $rules, $attrs = [] ) {

    if(! count($attrs) ) $attrs = request()->all();
    $validation = Validator::make( $attrs, $rules );
    if(! $validation->fails() ) return false;
    return $validation->messages();

}

function appError($message = '', $messages = []) {

    try {

        $response = ['error' => true, 'data' => $messages, 'message' => $message];

        \DB::table('api_logs')->insert([
            'url'       => request()->url(),
            'json'      => serialize(request()->all()),
            'req'       => serialize(request()->all()),
            'res'       => serialize($response),
            'created_at'=> date('Y-m-d H:i:s')
        ]);

    } catch ( \Exception $e) {
        //echo $e->getMessage();die;
    }

    if((!$messages) && is_array($messages)) return response()->json(['error' => true, 'data' => new \stdClass, 'message' => $message]);
    if(!$messages) return response()->json( ['error' => true, 'data' => new \stdClass, 'message' => $message] );
    return response()->json(['error' => true, 'data' => $messages, 'message' => $message]);
}

function appData($res, $message = '', $results_name = 'results') {


    try {

        if(!$res){
            $response = [
                'error' => false,
                'data' => [ $results_name => [] ],
                'message' => $message
            ];
        } else {
            $response = [
                'error' => false,
                'data' => [ $results_name => $res ],
                'message' => $message
            ];
        }

        \DB::table('api_logs')->insert([
            'url'       => request()->url(),
            'json'      => serialize(request()->all()),
            'req'       => serialize(request()->all()),
            'res'       => serialize($response),
            'created_at'=> date('Y-m-d H:i:s')
        ]);

    } catch ( \Exception $e) {
        //echo $e->getMessage();die;
    }

    if(!$res) return response()->json ([
        'error' => false,
        'data' => [ $results_name => [] ],
        'message' => $message
    ]);

    return response()->json (['error' => false, 'data' => [ $results_name => $res ], 'message' => $message ]);
}

// this will return single model data
function appModelData($res, $message = '', $results_name = 'results') {

    try {

        if(!$res){
            $response = [
                'error' => false,
                'data' => [ $results_name => new \stdClass() ],
                'message' => $message
            ];
        } else {
            $response = [
                'error' => false,
                'data' => [ $results_name => $res ],
                'message' => $message
            ];
        }

        \DB::table('api_logs')->insert([
            'url'       => request()->url(),
            'json'      => serialize(request()->all()),
            'req'       => serialize(request()->all()),
            'res'       => serialize($response),
            'created_at'=> date('Y-m-d H:i:s')
        ]);

    } catch ( \Exception $e) {
        //echo $e->getMessage();die;
    }


    if(!$res) return response()->json ([
        'error' => false,
        'data' => [ $results_name => new \stdClass() ],
        'message' => $message
    ]);

    return response()->json (['error' => false, 'data' => [ $results_name => $res ], 'message' => $message ]);
}

function noAuth(){
    return response()->json(['message' => 'Not Authorised'], 401);
}

function appLogout( $userId = null ) {
    if($userId) {
        try{
            \DB::table('oauth_access_tokens')->where('user_id', $userId)->delete();
        } catch (\Exception $e) {

        }
    } elseif (auth()->check()) {
        try{
            \DB::table('oauth_access_tokens')->where('user_id', auth()->user()->id)->delete();
        } catch (\Exception $e) {

        }
    }
}


function exportCsv($headerFields = [], $dataFiles = [], $fileName = 'export') {

    ini_set('max_execution_time', 30000);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$fileName.'.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');

    $fp = fopen('php://output', 'w');

    fputcsv($fp, $headerFields);

    foreach( $dataFiles as $row ) {
        fputcsv($fp, $row);
    }

    die;
}

function csvToArray($file) {

    $csv = array_map('str_getcsv', file($file));

    foreach( $csv as &$row ) {
        foreach ( $row as &$field ) {
            $field = trim($field);
        }
    }

    array_walk($csv, function(&$a) use ($csv) {
        $a = array_combine($csv[0], $a);
    });
    array_shift($csv);
    return $csv;
}

function unpackSlug( $str, $sep = '_' ) {
    $str = str_replace($sep, ' ', $str);
    return ucwords($str);
}

function floatToInt($number) {

    if( is_string($number) ) $number = (float) $number;

    if(! (is_numeric( $number ) && floor( $number ) != $number ) ) return $number;

    return number_format((float)$number, 2, '.', '');

}


function ApiData($extendUrl){

    $url = 'https://lapi.smasindia.com/api/WebPortalMobile/'. $extendUrl;
    $username = 'SalesForce';
    $password = 'SFCrm@!9@-#$J';

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        $result= json_decode($response);
        return $result->results;

    } catch(\Exception $e) {

    }
    
}

function ApiPostData($extendUrl, $data = [], $method = 'GET'){

    $url = 'https://lapi.smasindia.com/api/'. $extendUrl;
    $username = 'SalesForce';
    $password = 'SFCrm@!9@-#$J';

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data) );
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
        ]);
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        $result = json_decode($response);
        return $result;

    } catch(\Exception $e) {

    }
    
}

function serviceDeliveryCount($day){
    $model = ApiData('ServiceDeliveryDetails?clientID=1507');
    $count = 0;
    foreach($model as $model){
        if($model->ServiceDeliveryTAT == $day){
            $count += abs($model->DeliveryTAT);
        }
    }
    return $count;
}

function accidentalDeliveryCount($day){
    $model = ApiData('getAccidentDeliveryTat?clientID=1507');
    $count = 0;
    foreach($model as $model){
        if($model->AccidentalDeliveryTAT == $day){
            $count += abs($model->DeliveryTAT);
        }
    }
    return $count;
    
}

