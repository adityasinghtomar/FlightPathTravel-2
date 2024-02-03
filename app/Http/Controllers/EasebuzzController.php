<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Easebuzz\PayWithEasebuzzLaravel\PayWithEasebuzzLib;
use Easebuzz\Easebuzz;

class EasebuzzController extends Controller
{
    //
    // public function initiate_payment_show(): View
    // {
    //     return view('initiate_payment', ['result' => '']);
    // }
    public function initiate_payment_ebz(Request $request)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];
                        $string = str_shuffle($pin);
            $MERCHANT_KEY = "PQALG4XZKO";
        $SALT = "5DZAN1HXJQ";        
        $ENV = "test";   // set enviroment name : test / development / production
        
        $easebuzzObj = new PayWithEasebuzzLib($MERCHANT_KEY, $SALT, $ENV);    
        // print_r($easebuzzObj);die;
        $postData = array ( 
    "txnid" => $string, 
    "amount" => "1.0", 
    "firstname" => "Umesh", 
    "email" => "ram@gmail.com", 
    "phone" => "7999510032", 
    "productinfo" => "Flight", 
    "surl" => route('payment.success'), 
    "furl" => route('payment.cancel'), 
    "udf1" => "aaaa", 
    "udf2" => "aaaa", 
    "udf3" => "aaaa", 
    "udf4" => "aaaa", 
    "udf5" => "aaaa", 
    "address1" => "aaaa", 
    "address2" => "aaaa", 
    "city" => "aaaa", 
    "state" => "aaaa", 
    "country" => "aaaa", 
    "zipcode" => "461331" 
);
       $MERCHANT_KEY = "PQALG4XZKO";
        $SALT = "5DZAN1HXJQ";        
        $ENV = "prod";
        $payebz = new PayWithEasebuzzLib($MERCHANT_KEY, $SALT, $ENV);
        $result = $payebz->initiatePaymentAPI($postData, true);
        print_r($result);
        //  var_dump($payebz);
        // var_dump($param);
        die();

        return view('initiate_payment', ['result' => $result]);
    }
    // public function ebz_response(Request $request): View
    // {
    //     $param = $request->post();
    //     // $param will contain the response provided to you by Easebuzz. You can handle your success and failed scenarios based on the response.
    //     var_dump($param);
    //     die();
    //     return view('initiate_payment', ['result' => '']);
    // }
}