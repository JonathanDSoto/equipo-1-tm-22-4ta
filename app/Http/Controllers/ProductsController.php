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
            $response = $client->sendAsync($request)->wait();
            $products = json_decode($response->getBody()->getContents());
            $products = $products->data;

            $brand_controller = new BrandsController;
            $brands = $brand_controller->getAllBrands();

            $tag_controller = new TagsController;
            $tags = $tag_controller->getAllTags();

            $category_controller = new CategoriesController;
            $categories = $category_controller->getAllCategories();

            return view('products.index', compact('products', 'tags', 'categories', 'brands'));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return view('index')->with("Error","Datos incorrectos");
        }

    }

    public function getSpecificProduct($id){
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer '. session('token')
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/products/'.$id, $headers);

        try {
            $response = $client->sendAsync($request)->wait();
            $response = json_decode($response->getBody()->getContents());

            return view('products.details',compact('response'));

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
            $response = $client->sendAsync($request)->wait();
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
            $response = $client->sendAsync($request)->wait();
            $response = json_decode($response->getBody()->getContents());

            //return view('details',compact('response'));

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            //return view('details')->with("Error","Datos incorrectos");
        }
    }

    public function store(Request $request)
    {
        //return json_encode( $request->tags);
        if (isset($request->avatar)) {
            $imageContent = Utils::tryFopen($request->avatar->getRealPath(), 'r');
            $filename = $request->avatar->getRealPath();
        } else {
            $imageContent = "";
            $filename = "";
        }
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer ' . session('token')
        ];
        $options = [
            'multipart' => [
                [
                    'name' => 'name',
                    'contents' => $request->name
                ],
                [
                    'name' => 'slug',
                    'contents' => $request->slug
                ],
                [
                    'name' => 'description',
                    'contents' => $request->description
                ],
                [
                    'name' => 'features',
                    'contents' => $request->features
                ],
                [
                    'name' => 'brand_id',
                    'contents' => $request->brand_id
                ],
                [
                    'name' => 'cover',
                    'contents' => $imageContent,
                    'filename' => $filename,
                    'headers'  => [
                        'Content-Type' => '<Content-type header>'
                    ]
                ],
            ]
        ];
        $tata = ($options['multipart']);
        //tags
        if (isset($request->tags)) {
            $coot = 0;
            foreach ($request->tags as $key) {
                $test = [['name' => 'tags[' . $coot . ']', 'contents' => $key]];
                $coot++;
                $tata = array_merge(($tata), ($test));
            }
        }
        //categories
        if (isset($request->categories)) {

            $coot = 0;
            foreach ($request->categories as $key) {
                $test = [['name' => 'categories[' . $coot . ']', 'contents' => $key]];
                $coot++;
                $tata = array_merge(($tata), ($test));
            }
        }

        $request = new RequestGuzzle('POST', 'https://crud.jonathansoto.mx/api/products', $headers);
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

