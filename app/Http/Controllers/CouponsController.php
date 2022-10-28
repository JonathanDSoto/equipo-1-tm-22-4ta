<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Auth\RequestGuard;

class CouponsController extends Controller
{
    public function getAllCoupons(){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/coupons', $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $coupons = json_decode($response->getBody()->getContents());
            $coupons = $coupons->data;

            return $coupons;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('index')->with("Error","Datos incorrectos");
        }
    }
    public function getSpecificCoupon($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/coupons/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $coupon = json_decode($response->getBody()->getContents());
            $coupon = $coupon->data;

            return $coupon;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return view('index')->with("Error","Datos incorrectos");
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
                    //'contents' => 'cupon OP 20%'
                ],
                [
                    'name' => 'code',
                    'contents' => $request->code
                    //'contents' => '20PERCEN22'
                ],
                [
                    'name' => 'percentage_discount',
                    'contents' => $request->porcentage_discount
                    //'contents' => '20'
                ],
                [
                    'name' => 'min_amount_required',
                    'contents' => $request->min_amount_required
                    //'contents' => '100'
                ],
                [
                    'name' => 'min_product_required',
                    'contents' => $request->min_product_required
                    //'contents' => '1'
                ],
                [
                    'name' => 'start_date',
                    'contents' => $request->start_date
                    //'contents' => '2022-10-04'
                ],
                [
                    'name' => 'end_date',
                    'contents' => $request->end_date
                    //'contents' => '2022-10-14'
                ],
                [
                    'name' => 'max_uses',
                    'contents' => $request->max_users
                    //'contents' => '100'
                ],
                [
                    'name' => 'count_uses',
                    'contents' => $request->count_uses
                    //'contents' => '0'
                ],
                [
                    'name' => 'valid_only_first_purchase',
                    'contents' => $request->valid_only_first_purchase
                    //'contents' => '1'
                ],
                [
                    'name' => 'status',
                    'contents' => $request->status
                    //'contents' => '1'
                ]
            ]
        ];
        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/coupons', $headers);
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
                'code' => $request->code,
                'percentage_discount' => $request->porcentage_discount,
                'min_amount_required' => $request->min_amount_required,
                'min_product_required' => $request->min_product_required,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'max_uses' => $request->max_uses,
                'count_uses' => $request->count_uses,
                'valid_only_first_purchase' => $request->valid_only_first_purchase,
                'status' => $request->status,
                'id' => $id
            ]
        ];
        $request = new RequestGuzzle('PUT', 'https://crud.jonathansoto.mx/api/coupons', $headers);
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
        $request = new RequestGuzzle('DELETE', 'https://crud.jonathansoto.mx/api/coupons/'.$id, $headers);
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
}
