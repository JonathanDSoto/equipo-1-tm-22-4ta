<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class ClientsController extends Controller
{
    public function getAllClients(){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/clients', $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return view('clients',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificClient(){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/clients/1', $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return view('clients',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }

    }

    //Comentado
    public function store(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $options = [
        'multipart' => [
            [
            'name' => 'name',
            'contents' => $request->name
            //'contents' => 'jonathan soto'
            ],
            [
            'name' => 'email',
            'contents' => $request->email
            //'contents' => 'jsoto@uabcs.mx'
            ],
            [
            'name' => 'password',
            'contents' => $request->password
            //'contents' => 'Th3_P4ssW0rd_4nt!_h4ck_2000'
            ],
            [
            'name' => 'phone_number',
            'contents' => $request->phone
            //'contents' => '6120000000'
            ],
            [
            'name' => 'is_suscribed',
            'contents' => $request->is_subscribed
            //'contents' => '1'
            ],
            [
            'name' => 'level_id',
            'contents' => $request->level_id
            //'contents' => '1'
            ]
        ]];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/clients', $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return $response;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function update(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $options = [
            'form_params' => [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'is_suscribed' => $request->is_suscribed,
            'level_id' => $request->level_id,
            'id' => $request->id
        ]];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/clients', $headers);
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return $response;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function delete(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
        ];
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/clients/'.$request->id, $headers);
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return $response;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }

    }
}
