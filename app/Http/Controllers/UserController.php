<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Client;

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
            $response = $client->sendAsync($request)->wait();
            $users = json_decode($response->getBody()->getContents());
            $users = $users->data;
            //return redirect(route('users.index'));
            //return $users;
            return view('users.index',compact('users'));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }



    public function getSpecificUser($id){

        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/users/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $user = json_decode($response->getBody()->getContents());
            $user = $user->data;
            //return redirect(route('users.index'));
            return view('users.profile',compact('user'));


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
            'contents' => session('name').' '.session('lastname')
            ],
            [
            'name' => 'role',
            'contents' => 'Administrador'
            ],
            [
            'name' => 'password',
            'contents' => $request->password
            ],
            [
            'name' => 'profile_photo_file',
            'contents' => Utils::tryFopen($request->avatar->getRealPath(), 'r'),
            'filename' => $request->avatar->getRealPath(),
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
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'created_by' => $request->created_by,
            'role' => $request->role,
            'password' => $request->password,
            'id' => $id
          ]];

          $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/users', $headers);

          try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return redirect()->back()->with('success', 'true');
            //return redirect(route('users.index'));
            //return view('users',compact('response'));


        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
            return redirect()->back()->with('error', 'true');
        }
    }

    public function delete($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/users/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $user = json_decode($response->getBody()->getContents());

            return redirect()->back()->with('success', 'true');
            //return redirect(route('users.index'));
            //return view('users.profile',compact('user'));

            //return redirect(route('users.index'));
            //return view('users',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return redirect()->back()->with('error', 'true');
            //return view('index')->with("Error","Datos incorrectos");
        }

    }




}
