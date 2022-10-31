<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class ClientsController extends Controller
{
    public function getClients(){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/clients', $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $clients = json_decode($response->getBody()->getContents());
            $clients = $clients->data;

            return $clients;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }
    public function getAllClients(){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/clients', $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $clients = json_decode($response->getBody()->getContents());
            $clients = $clients->data;

            return view('clientes.index',compact('clients'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificClient($id){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/clients/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $client = json_decode($response->getBody()->getContents());
            $client = $client->data;

            // $address_controller = new AddressController;
            // $address = $address_controller->getAddress($id);

            return view('clientes.detailClient',compact('client'));

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
                'contents' => '1'
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

            return redirect()->back()->with('success', 'true');

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return redirect()->back()->with('error', 'true');
        }
    }

    public function update(Request $request, $id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $options = [
            'form_params' => [
                'name' => $request->name,
                'email' => $request->email,
                //'password' => $request->password,
                'phone_number' => $request->phone_number,
                //'is_suscribed' => $request->is_suscribed,
                //'level_id' => $request->level_id,
                'id' => $id
            ]
        ];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/clients', $headers);
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return redirect()->back()->with('success', 'true');;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return redirect()->back()->with('error', 'true');
        }
    }

    public function delete($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
        ];
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/clients/'.$id, $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $user = json_decode($response->getBody()->getContents());

            return redirect()->back()->with('success', 'true');

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return redirect()->back()->with('error', 'true');
        }

    }
}
