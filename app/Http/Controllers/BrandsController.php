<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class BrandsController extends Controller
{
    public function getAllBrands(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. $_SESSION['token']
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/brands', $headers);
        $response = $client->sendAsync($request)->wait();

        $response = json_decode($response->getBody()->getContents());

        if(isset($response->code) && $response->code > 0){
            return $response;
        }else{
            return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificBrand(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. $_SESSION['token']
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/brands/'.$request->brand_id, $headers);
        $response = $client->sendAsync($request)->wait();
        if(isset($response->code) && $response->code > 0){
            return $response;
        }else{
            return view('index')->with("Error","Datos incorrectos");
        }
    }
}
