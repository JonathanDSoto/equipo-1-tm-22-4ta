<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class AuthController extends Controller
{
    public function login(Request $request){
        $client = new Client();
        $options = [
        'multipart' => [
            [
            'name' => 'email',
            //'contents' => 'abdiel2_19@alu.uabcs.mx'
            'contents' => $request->email
            ],
            [
            'name' => 'password',
            //'contents' => '41htT%pYl0I6kZ'
            'contents' => $request->password
            ]
        ]];

        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/login');
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());
            return redirect()->view('products.index');

            session_start();
            $_SESSION['name'] = $response->data->name;
            $_SESSION['lastname'] = $response->data->lastname;
            $_SESSION['avatar'] = $response->data->avatar;
            $_SESSION['token'] = $response->data->token;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return ($responseBodyAsString);
        }
    }

    public function logout(Request $request){
        $client = new Client();
        $options = [
        'multipart' => [
            [
            'name' => 'email',
            'contents' => $request->email
            ]
        ]];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/logout');
        $response = $client->sendAsync($request, $options)->wait();

        $response = json_decode($response->getBody()->getContents());

        if(isset($response->code) && $response->code > 0){
            session_destroy();

            return view('welcome');
        }else{
            return view('welcome')->with("Error","Datos incorrectos");
        }
    }
}
