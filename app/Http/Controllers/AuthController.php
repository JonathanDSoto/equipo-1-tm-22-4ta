<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class AuthController extends Controller
{
    public function login(Request $request2){
        $client = new Client();
        $options = [
        'multipart' => [
            [
            'name' => 'email',
            //'contents' => 'abdiel2_19@alu.uabcs.mx'
            'contents' => $request2->email
            ],
            [
            'name' => 'password',
            //'contents' => '41htT%pYl0I6kZ'
            'contents' => $request2->password
            ]
        ]];

        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/login');
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            session(['name' => $response->data->name]);
            session(['lastname' => $response->data->lastname]);
            session(['email' => $request2->email]);
            session(['avatar' => $response->data->avatar]);
            session(['token' => $response->data->token]);
            session(['id' => $response->data->id]);

            return redirect(route('products.index'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return redirect()->back()->with('error', 'usuario o contraseña no existe');
        }
    }

    public function logout(){
        $client = new Client();
        $options = [
        'multipart' => [
            [
            'name' => 'email',
            'contents' => session('email')
            ]
        ]];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/logout');
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());
            session()->forget('name');
            session()->forget('lastname');
            session()->forget('email');
            session()->forget('avatar');
            session()->forget('token');
            return redirect()->route('login');

        } catch (\GuzzleHttp\Exception\ClientException $e) {

        }
        return 'hola';
    }
}
