<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;

class AuthController extends Controller
{
    public function login(){
        $client = new Client();
        $options = [
        'multipart' => [
            [
            'name' => 'email',
            'contents' => 'abdiel2_19@alu.uabcs.mx'
            // 'contents' => $request->email
            ],
            [
            'name' => 'password',
            'contents' => '41htT%pYl0I6kZ'
            //'contents' => $request->password
            ]
        ]];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/login');
        $response = $client->sendAsync($request, $options)->wait();

        $response = json_decode($response->getBody()->getContents());

        if(isset($response->code) && $response->code > 0){
            session_start();
            $_SESSION['name'] = $response->data->name;
            $_SESSION['lastname'] = $response->data->lastname;
            $_SESSION['avatar'] = $response->data->avatar;
            $_SESSION['token'] = $response->data->token;

            return view('welcome');
        }else{
            return view('login')->with("Error","Datos incorrectos");
        }

    }
}
