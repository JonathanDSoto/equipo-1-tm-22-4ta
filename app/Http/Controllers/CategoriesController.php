<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Client;

class CategoriesController extends Controller
{

    public function index()
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/categories', $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $categories = json_decode($response->getBody()->getContents());
            $categories = $categories->data;

            return view('catalogs.categories',compact('categories'));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getAllCategories(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/categories', $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $categories = json_decode($response->getBody()->getContents());
            $categories = $categories->data;

            return $categories;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificCategory($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/categories/'.$id, $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $categorie = json_decode($response->getBody()->getContents());
            $categorie = $categorie->data;

            return $categorie;
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
            'name' => 'name',
            'contents' => $request->name
            //'contents' => 'Dulces y Caramelos'
            ],
            [
            'name' => 'description',
            'contents' => $request->description
            //'contents' => 'malisiosos viscos '
            ],
            [
            'name' => 'slug',
            'contents' => $request->slug
            //'contents' => 'dulces-y-caramelos'
            ]
            // [
            // 'name' => 'category_id',
            // 'contents' => '1'
            // ]
        ]];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/categories', $headers);
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

    public function update(Request $request, $id)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $options = [
            'form_params' => [
                'id' => $id,
                'name' => $request->name,
                'description' => $request->description,
                'slug' => $request->slug,
                // 'category_id' => '1'
        ]];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/categories', $headers);
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


    public function delete($id)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/categories/'.$id, $headers);

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
