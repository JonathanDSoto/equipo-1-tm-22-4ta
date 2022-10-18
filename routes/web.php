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

// Route::middleware(['logged'])->group(function () {
//     Route::get('/products', function () {
//         return view('products.index');
//     });
//     Route::get('/users', function () {
//         return view('users.index');
//     });
//     Route::get('/profile', function () {
//         return view('users.profile');
//     });
//     Route::get('/clients', function () {
//         return view('clientes.index');
//     });
//     Route::get('/detail-client', function () {
//         return view('clientes.detailClient');
//     });

// });

Route::get('/products', function () {
    return view('products.index');
});
Route::get('/users', function () {
    return view('users.index');
});
Route::get('/profile', function () {
    return view('users.profile');
});
Route::get('/clients', function () {
    return view('clientes.index');
});
Route::get('/detail-client', function () {
    return view('clientes.detailClient');
});