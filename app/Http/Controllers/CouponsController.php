<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class CouponsController extends Controller
{
    public function getAllCoupons(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. $_SESSION['token']
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/coupons', $headers);
        $response = $client->sendAsync($request)->wait();

        $response = json_decode($response->getBody()->getContents());

        if(isset($response->code) && $response->code > 0){
            return $response;
        }else{
            return view('index')->with("Error","Datos incorrectos");
        }
    }
    public function getSpecificCoupon(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. $_SESSION['token']
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/coupons/'.$request->coupon, $headers);
        $response = $client->sendAsync($request)->wait();

        $response = json_decode($response->getBody()->getContents());

        if(isset($response->code) && $response->code > 0){
            return $response;
        }else{
            return view('index')->with("Error","Datos incorrectos");
        }

    }
}
