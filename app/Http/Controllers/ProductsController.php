<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class ProductsController extends Controller
{
    public function getAllProducts(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/products', $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return view('index',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return view('index')->with("Error","Datos incorrectos");
        }

    }

    public function getEspecificProduct(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/products/'.$request->id, $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return view('details',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return view('details')->with("Error","Datos incorrectos");
        }
    }

    public function getProductBySlug(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/products/slug/'.$request->slug, $headers);

        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            return view('details',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return view('details')->with("Error","Datos incorrectos");
        }
    }

    public function getProductByCategory(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/products/categories/'.$request->category, $headers);
        try {
            $response = $client->send($request, $options);
            $response = json_decode($response->getBody()->getContents());

            //return view('details',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('details')->with("Error","Datos incorrectos");
        }
    }

    // public function createProduct (){
    //     $client = new Client();
    //     $headers = [
    //     'Authorization' => 'Bearer 3|JSvLL27EhMfH70onI5sSZP6ROwcdSsHQU8cm7k9X'
    //     ];
    //     $options = [
    //     'multipart' => [
    //         [
    //         'name' => 'name',
    //         'contents' => 'playear azul'
    //         ],
    //         [
    //         'name' => 'slug',
    //         'contents' => 'playera-azul-21-forever-312'
    //         ],
    //         [
    //         'name' => 'description',
    //         'contents' => 'hermosa playera de color azul de la marca 21 forever'
    //         ],
    //         [
    //         'name' => 'features',
    //         'contents' => 'La lavadora cuenta con capacidad de lavado de 18 kg, diseño exterior de color gris, su funcionamiento integra tecnología air bubble 4d, sistema de lavado por pulsador, 5 ciclos de lavado mas ciclo ariel , tina de acero inoxidable, 9 niveles de agua y 3 niveles de temperatura. Ofrece llenado con cascada de agua waterrfall, timer para inicio retardado y manija de apertura ez soft'
    //         ],
    //         [
    //         'name' => 'brand_id',
    //         'contents' => '1'
    //         ],
    //         [
    //         'name' => 'cover',
    //         'contents' => Utils::tryFopen('/C:/Users/jsoto/Downloads/00750101111561L.webp', 'r'),
    //         'filename' => '/C:/Users/jsoto/Downloads/00750101111561L.webp',
    //         'headers'  => [
    //             'Content-Type' => '<Content-type header>'
    //         ]
    //         ],
    //         [
    //         'name' => 'categories[0]',
    //         'contents' => '1'
    //         ],
    //         [
    //         'name' => 'categories[1]',
    //         'contents' => '2'
    //         ],
    //         [
    //         'name' => 'tags[0]',
    //         'contents' => '1'
    //         ],
    //         [
    //         'name' => 'tags[1]',
    //         'contents' => '2'
    //         ]
    //     ]];
    //     $request = new RequestGuzzle('POST', 'http://127.0.0.1:8000/api/products', $headers);
    //     $response = $client->sendAsync($request, $options)->wait();
    //     echo $response->getBody();
    // }

}

