<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Client;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getAddress($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/addresses/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $address = json_decode($response->getBody()->getContents());
            $address = $address->data;
            //return redirect(route('users.index'));
            return $address;


        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function store(Request $request)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $options = [
        'multipart' => [
            [
            'name' => 'first_name',
            'contents' => $request->first_name
            //'contents' => 'juanito'
            ],
            [
            'name' => 'last_name',
            'contents' => $request->last_name
            //'contents' => 'leon'
            ],
            [
            'name' => 'street_and_use_number',
            'contents' => $request->street_and_use_number
            //'contents' => '16 de septiembre #123'
            ],
            [
            'name' => 'postal_code',
            'contents' => $request->postal_code
            //'contents' => '23000'
            ],
            [
            'name' => 'city',
            'contents' => $request->city
            //'contents' => 'La Paz'
            ],
            [
            'name' => 'province',
            'contents' => $request->province
            //'contents' => 'Baja California Sur'
            ],
            [
            'name' => 'phone_number',
            'contents' => $request->phone_number
            //'contents' => '6120000000'
            ],
            [
            'name' => 'is_billing_address',
            'contents' => $request->is_billing_address
            //'contents' => '1'
            ],
            [
            'name' => 'client_id',
            'contents' => $request->client_id
            //'contents' => '1'
            ]
        ]];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/addresses', $headers);
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());
            //return redirect(route('users.index'));
            //return view('users',compact('response'));

            return redirect()->back()->with('success', 'true');
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return redirect()->back()->with('error', 'true');
        }


    }

    public function update(Request $request, $id)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $options = [
        'form_params' => [
        'first_name' => $request->name,
        'last_name' => $request->last_name,
        'street_and_use_number' => $request->street_and_use_number,
        'postal_code' => $request->postal_code,
        'city' => $request->city,
        'province' => $request->province,
        'phone_number' => $request->phone_number,
        'is_billing_address' => $request->is_billing_address,
        'client_id' => $request->client_id,
        'id' => $id
        ]];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/addresses', $headers);
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());
            //return redirect(route('users.index'));
            //return view('users',compact('response'));

            return redirect()->back()->with('success', 'true');
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return redirect()->back()->with('error', 'true');
        }

    }

    public function delete($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/addresses/'.$id, $headers);

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
