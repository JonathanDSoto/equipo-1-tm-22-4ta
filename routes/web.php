<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('login');

Route::post('log-in',[AuthController::class, 'login'])->name('log-in');

Route::get('log-out',[AuthController::class, 'logout'])->name('log-out');

Route::middleware(['logged'])->group(function () {
    Route::get('products/', function () {
        return view('products.index');
    })->name('products.index');
    Route::get('/products/detail-product', function () {
        return view('products.details');
    })->name('products.details');
    Route::get('users/', function () {
        return view('users.index');
    })->name('users.index');
    Route::get('/users/profile', function () {
        return view('users.profile');
    })->name('users.profile');
    Route::get('clients/', function () {
        return view('clientes.index');
    })->name('clientes.index');
    Route::get('/clients/detail-client', function () {
        return view('clientes.detailClient');
    })->name('clientes.detailClient');
    Route::get('/catalogs/categories', function () {
        return view('catalogs.categories');
    })->name('catalogs.categories');
    Route::get('/catalogs/brands', function () {
        return view('catalogs.brands');
    })->name('catalogs.brands');
    Route::get('/catalogs/tags', function () {
        return view('catalogs.tags');
    })->name('catalogs.tags');
    Route::get('orders/', function () {
        return view('orders.index');
    })->name('orders.index');
    Route::get('/orders/detail-order', function () {
        return view('orders.detailOrder');
    })->name('orders.detailOrder');
    Route::get('coupons/', function () {
        return view('coupons.index');
    })->name('coupons.index');
    Route::get('/coupons/detail-coupon', function () {
        return view('coupons.detailCoupon');
    })->name('coupons.detailCoupon');
});

