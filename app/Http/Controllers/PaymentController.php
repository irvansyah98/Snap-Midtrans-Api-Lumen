<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Configurations
use App\Http\Controllers\Midtrans\Config;

// Midtrans API Resources
use App\Http\Controllers\Midtrans\Transaction;

// Plumbing
use App\Http\Controllers\Midtrans\ApiRequestor;
use App\Http\Controllers\Midtrans\SnapApiRequestor;
use App\Http\Controllers\Midtrans\Notification;
use App\Http\Controllers\Midtrans\CoreApi;
use App\Http\Controllers\Midtrans\Snap;

// Sanitization
use App\Http\Controllers\Midtrans\Sanitizer;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //
    public function getPayment(){

        $client = new Client();
        try{
            $res = $client->request('GET','http://localhost:8001/coba', []);
            $data = json_decode($res->getBody()->getContents());
            dd($data);
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
