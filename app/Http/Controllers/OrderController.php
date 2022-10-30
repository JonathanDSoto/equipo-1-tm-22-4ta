<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Client;

class OrderController extends Controller
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

    public function getAllOrders(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/orders', $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $orders = json_decode($response->getBody()->getContents());
            $orders = $orders->data;

            return view('Orders.index',compact('orders'));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificOrder($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/orders/details/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $order = json_decode($response->getBody()->getContents());
            $order = $order->data;

            return view('Orders.detailOrder',compact('order'));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }

    public function getSpecificOrderBetweenDates(Request $request){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/orders/'.$request->date1.'/'.$request->date2, $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $orders = json_decode($response->getBody()->getContents());
            $orders = $orders->data;

            return view('Orders.index',compact('orders'));
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
                    'name' => 'folio',
                    'contents' => $request->folio
                ],
                [
                    'name' => 'total',
                    'contents' => $request->total
                ],
                [
                    'name' => 'is_paid',
                    'contents' => $request->is_paid
                ],
                [
                    'name' => 'client_id',
                    'contents' =>$request->client_id
                ],
                [
                    'name' => 'address_id',
                    'contents' => $request->address_id
                ],
                [
                    'name' => 'order_status_id',
                    'contents' => $request->order_status_id
                ],
                [
                    'name' => 'payment_type_id',
                    'contents' => $request->payment_type_id
                ],
                [
                    'name' => 'coupon_id',
                    'contents' => $request->coupon_id
                ],
                [
                    'name' => 'presentations[0][id]',
                    'contents' => '1'
                ],
                [
                    'name' => 'presentations[0][quantity]',
                    'contents' => '2'
                ],
                [
                    'name' => 'presentations[1][id]',
                    'contents' => '2'
                ],
                [
                    'name' => 'presentations[1][quantity]',
                    'contents' => '2'
                ]
            ]
        ];

        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/orders', $headers);
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
                'id' => $id,
                'order_status_id' => $request->order_status_id
            ]
        ];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/orders', $headers);
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
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/orders/'.$id, $headers);
        try {
            $response = $client->sendAsync($request)->wait();
            $user = json_decode($response->getBody()->getContents());

            return redirect()->route('orders.index')->with('success', 'true');
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();

            return redirect()->route('orders.index')->with('error', 'true');
        }
    }
}
