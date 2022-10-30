<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Client;

class PresentationsController extends Controller
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

    public function getPresentationsOfProduct($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/presentations/product/'.$id, $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $presentations = json_decode($response->getBody()->getContents());
            $presentations = $presentations->data;

            return $presentations;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }

    }

    public function getSpecificPresentation($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/presentations/'.$id, $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $presentation = json_decode($response->getBody()->getContents());
            $presentation = $presentation->data;

            return $presentation;
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

        if(isset($request->avatar)){
            $imageContent = Utils::tryFopen($request->avatar->getRealPath(), 'r');
            $filename = $request->avatar->getRealPath();
        }else{
            $imageContent = "";
            $filename = "";
        }

        $options = [
            'multipart' => [
                [
                    'name' => 'description',
                    'contents' => $request->description
                ],
                [
                    'name' => 'code',
                    'contents' => $request->code,
                ],
                [
                    'name' => 'weight_in_grams',
                    'contents' => $request->weight_in_grams
                ],
                [
                    'name' => 'status',
                    'contents' => $request->status
                ],
                [
                    'name' => 'cover',
                    'contents' => $imageContent,
                    'filename' => $filename,
                    'headers'  => [
                        'Content-Type' => '<Content-type header>'
                    ]
                ],
                [
                    'name' => 'stock',
                    'contents' => $request->stock
                ],
                [
                    'name' => 'stock_min',
                    'contents' => $request->stock_min
                ],
                [
                    'name' => 'stock_max',
                    'contents' => $request->stock_max
                ],
                [
                    'name' => 'product_id',
                    'contents' => $request->product_id
                ],
                [
                    'name' => 'amount',
                    'contents' => $request->amount
                ]
            ]
        ];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/presentations', $headers);

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
                'description' => $request->description,
                'code' => $request->code,
                'weight_in_grams' => $request->weight_in_grams,
                'status' => $request->status,
                'stock' => $request->stock,
                'stock_min' => $request->stock_min,
                'stock_max' => $request->stock_max,
                'product_id' => $request->product_id,
                'id' => $id,
                'amount' => $request->amount
            ]
        ];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/presentations', $headers);
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

    public function updatePrice(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token'),
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $options = [
            'form_params' => [
                'id' => $request->id,
                'amount' => $request->amount
            ]
        ];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/presentations/set_new_price', $headers);
        $res = $client->sendAsync($request, $options)->wait();
        echo $res->getBody();

    }

    public function delete($id)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/presentations/'.$id, $headers);

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
