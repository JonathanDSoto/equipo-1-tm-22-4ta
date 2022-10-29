<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\ProductsController;

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

    Route::get('products/', [ProductsController::class, 'getAllProducts'])->name('products.index');
    Route::post('products/', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductsController::class, 'getSpecificProduct'])->name('products.details');
    Route::put('products/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::delete('products/{id}', [ProductsController::class, 'delete'])->name('products.delete');

    Route::post('products/{id}/create-presentation', [PresentationsController::class, 'store'])->name('products.store.presentation');
    Route::put('products/{id}/update-presentation', [PresentationsController::class, 'update'])->name('products.update.presentation');
    Route::delete('products/{id}/destroy-presentation', [PresentationsController::class, 'delete'])->name('products.delete.presentation');

    Route::get('users/', [UserController::class, 'getAllUsers'])->name('users.index');
    Route::post('users/', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'getSpecificUser'])->name('users.profile');
    Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{id}', [UserController::class, 'delete'])->name('users.delete');  
    
    Route::put('/users/{id}/update-pic', [UserController::class, 'updateProfilePic'])->name('users.put.update-pic');

    Route::get('clients/', [ClientsController::class, 'getAllClients'])->name('clientes.index');
    Route::post('clients/', [ClientsController::class, 'store'])->name('clientes.store');
    Route::get('/clients/{id}', [ClientsController::class, 'getSpecificClient'])->name('clientes.detailClient');
    Route::put('clients/{id}', [ClientsController::class, 'update'])->name('clientes.update');
    Route::delete('clients/{id}', [ClientsController::class, 'delete'])->name('clientes.delete');

    Route::post('/clients/{id}/create-address', [AddressController::class, 'store'])->name('clientes.store.address');
    Route::put('/clients/{id}/update-address', [AddressController::class, 'update'])->name('clientes.update.address');
    Route::delete('/clients/{id}/delete-address', [AddressController::class, 'delete'])->name('clientes.delete.address');

    Route::get('/catalogs/categories', [CategoriesController::class, 'getAllCategories'])->name('catalogs.categories');
    Route::post('/catalogs/categories', [CategoriesController::class, 'store'])->name('catalogs.categories.store');
    Route::put('/catalogs/categories/{id}', [CategoriesController::class, 'update'])->name('catalogs.categories.update');
    Route::delete('/catalogs/categories/{id}', [CategoriesController::class, 'delete'])->name('catalogs.categories.delete');

    Route::get('/catalogs/brands', [BrandsController::class, 'getAllBrands'])->name('catalogs.brands');
    Route::post('/catalogs/brands', [BrandsController::class, 'store'])->name('catalogs.brands.store');
    Route::put('/catalogs/brands/{id}', [BrandsController::class, 'update'])->name('catalogs.brands.update');
    Route::delete('/catalogs/brands/{id}', [BrandsController::class, 'delete'])->name('catalogs.brands.delete');

    Route::get('/catalogs/tags', [TagsController::class, 'getAllTags'])->name('catalogs.tags');
    Route::post('/catalogs/tags', [TagsController::class, 'store'])->name('catalogs.tags.store');
    Route::put('/catalogs/tags/{id}', [TagsController::class, 'update'])->name('catalogs.tags.update');
    Route::delete('/catalogs/tags/{id}', [TagsController::class, 'delete'])->name('catalogs.tags.delete');

    Route::get('orders/', [ClientsController::class, 'getAllorders'])->name('orders.index');
    Route::post('orders/', [ClientsController::class, 'store'])->name('orders.store');
    Route::get('/orders/{$id}', [ClientsController::class, 'getSpecificOrder'])->name('orders.detailOrder');
    Route::put('orders/{$id}', [ClientsController::class, 'update'])->name('orders.update');
    Route::delete('orders/{$id}', [ClientsController::class, 'delete'])->name('orders.delete');

    // Route::get('orders/', function () {
    //     return view('orders.index');
    // })->name('orders.index');

    // Route::get('/orders/detail-order', function () {
    //     return view('orders.detailOrder');
    // })->name('orders.detailOrder');

    // ruta vista añadir una orden
    Route::get('orders/add-order', function () {
        return view('orders.add');
    })->name('orders.add');


    Route::get('coupons/', [CouponsController::class, 'getAllCoupons'])->name('coupons.index');
    Route::post('coupons/', [CouponsController::class, 'store'])->name('coupons.store');
    Route::get('/coupons/{id}', [CouponsController::class, 'getSpecificCoupon'])->name('coupons.detailCoupon');
    Route::put('coupons/{id}', [CouponsController::class, 'update'])->name('coupons.update');
    Route::delete('coupons/{id}', [CouponsController::class, 'delete'])->name('coupons.delete');
});

