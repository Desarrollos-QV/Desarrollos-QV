<?php namespace App\Http\Controllers\api;

use App\Http\Requests;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;
use Redirect;
use Uuid;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Contracts\JWTSubject; 

use Illuminate\Support\Facades\Hash;
class ApiController 
{


    function webhookclipmx($uuid, Request $request)
    {

        
        $key = Hash::make(2);
        // https://softicket.com/api/webhookclipmx/eyJpdiI6Im
        /**
         * Decodificacion
         */
        return response()->json([
            'data' => substr(decrypt(1),0,10),
        ]);
        // Log::channel()->info('[*]['.date('H:i:s')."] Inicializacion de Lectura de peticion .\r\n");

        // $payload = array(
        //     "iss" => "http://example.org",
        //     "aud" => "http://example.com",
        //     "iat" => 1356999524,
        //     "nbf" => 1357000000
        // );
        // $jwt = JWTAuth::encode($payload,$key);

        // Log::channel()->info('[*]['.date('H:i:s')."] Store UUID => ". $key ." .\r\n");
        // Log::channel()->info('[*]['.date('H:i:s')."] ".json_encode($request->all())." .\r\n");


        /**
         * Request de CLIPMX
         * {
         *  "merchant_name":"TestMerchant",
         *  "payment_date":"2025-05-16T00:23:45.393Z",
         *  "latitude":"18.99236400705368",
         *  "longitude":"-98.27756730566163",
         *  "amount":"0.10",
         *  "tip":"0.00",
         *  "currency":"MXN",
         *  "receipt_no":"yK7ycrb",
         *  "term":"09",
         *  "merch_inv_id":"456789ABC",
         *  "transaction_id":"5b212d10-eba5-4869-8993-6804ef1842d2",
         *  "src_transaction_id":null,
         *  "user_id":"john@doe.com",
         *  "status":"PAID"
         * }
         */
    }
}