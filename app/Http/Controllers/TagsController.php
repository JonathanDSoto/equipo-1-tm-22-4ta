<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class TagsController extends Controller
{
    public function getAllTags(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/tags', $headers);
        $response = $client->sendAsync($request)->wait();

        $response = json_decode($response->getBody()->getContents());

        if(isset($response->code) && $response->code > 0){
            return $response;
        }else{
            return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificTag(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/tags/'.$request->tag, $headers);
        $response = $client->sendAsync($request)->wait();

        $response = json_decode($response->getBody()->getContents());

        if(isset($response->code) && $response->code > 0){
            return $response;
        }else{
            return view('index')->with("Error","Datos incorrectos");
        }
    }



}
