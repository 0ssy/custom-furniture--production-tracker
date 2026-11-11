<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/customers', function () {
    return view('customers.index');
});
Route::get('/customers/create', function () {
    return view('customers.create');
});

Route::get('/orders', function () {
    return view('orders.index');
});

Route::get('/production', function () {
    return view('production.index');
});

Route::get('/payments', function () {
    return view('payments.index');
});

Route::get('/deliveries', function () {
    return view('deliveries.index');
});

Route::get('/profile', function () {
    return view('profile');
});
