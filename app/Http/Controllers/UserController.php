<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class UserController extends Controller
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

    public function getAllUsers(){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/users', $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return redirect(route('users.index'));
            //return view('users',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }


    public function getSpecificUser(Request $request){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/users/'.$request->user, $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return redirect(route('users.index'));
            //return view('users',compact('response'));


        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

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
            ],
            [
            'name' => 'lastname',
            'contents' => $request->lastname
            ],
            [
            'name' => 'email',
            'contents' => $request->email
            ],
            [
            'name' => 'phone_number',
            'contents' => $request->phone_number
            ],
            [
            'name' => 'created_by',
            'contents' => $request->created_by
            ],
            [
            'name' => 'role',
            'contents' => $request->role
            ],
            [
            'name' => 'password',
            'contents' => $request->password
            ],
            [
            'name' => 'profile_photo_file',
            'contents' => Utils::tryFopen('/C:/Users/jsoto/Downloads/avatar.jpg', 'r'),
            'filename' => '/C:/Users/jsoto/Downloads/avatar.jpg',
            'headers'  => [
                'Content-Type' => '<Content-type header>'
            ]
            ]
        ]];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/users', $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return redirect(route('users.index'));
            //return view('users',compact('response'));


        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }

    }

    public function update(Request $request){
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
            'Content-Type' => 'application/x-www-form-urlencoded'
          ];
          $options = [
          'form_params' => [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'created_by' => $request->created_by,
            'role' => $request->role,
            'password' => $request->password,
            'id' => $request->id
          ]];

          $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/users', $headers);

          try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return redirect(route('users.index'));
            //return view('users',compact('response'));


        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function delete(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/users/'.$request->id, $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return redirect(route('users.index'));
            //return view('users',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }

    }




}
