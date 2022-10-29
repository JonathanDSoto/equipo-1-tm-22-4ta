<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class BrandsController extends Controller
{

    public function index(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/brands', $headers);

        try{
            $response = $client->sendAsync($request)->wait();
            $brands = json_decode($response->getBody()->getContents());
            $brands = $brands->data;

            return view('catalogs.tags',compact('brands'));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getAllBrands(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/brands', $headers);

        try{
            $response = $client->sendAsync($request)->wait();
            $brands = json_decode($response->getBody()->getContents());
            $brands = $brands->data;

            return  $brands;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificBrand($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/brands/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $brand = json_decode($response->getBody()->getContents());
            $brand = $brand->data;

            return $brand;
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
                'contents' => $request->slug
                ],
                [
                'name' => 'description',
                'contents' => $request->description
                ],
                [
                'name' => 'slug',
                'contents' => $request->slug
                ]
            ]
        ];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/brands', $headers);

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
                'description' => $request->description,
                'slug' => $request->slug,
                'id' => $id
            ]
        ];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/brands', $headers);

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

    public function delete($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new Request('DELETE', 'https://crud.jonathansoto.mx/api/brands/'.$id, $headers);

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
