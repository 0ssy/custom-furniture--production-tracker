
<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Authentication
Route::get('/login', function () {
    return view('auth.login');
});

// Customers
Route::get('/customers', function () {
    return view('customers.index');
});

Route::get('/customers/create', function () {
    return view('customers.create');
});

Route::get('/customers/{id}/edit', function ($id) {
    return view('customers.edit');
});

Route::get('/customers/{id}', function ($id) {
    return view('customers.show');
});

// Orders
Route::get('/orders', function () {
    return view('orders.index');
});

Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/orders/history', function () {
    return view('orders.history');
});

Route::get('/orders/{id}/edit', function ($id) {
    return view('orders.edit');
});

Route::get('/orders/{id}', function ($id) {
    return view('orders.show');
});

// Quotations
Route::get('/quotations', function () {
    return view('quotations.index');
});

Route::get('/quotations/create', function () {
    return view('quotations.create');
});

Route::get('/quotations/{id}', function ($id) {
    return view('quotations.show');
});

// Materials
Route::get('/materials', function () {
    return view('materials.index');
});

Route::get('/materials/create', function () {
    return view('materials.create');
});

// Production
Route::get('/production', function () {
    return view('production.index');
});

Route::get('/production/{id}', function ($id) {
    return view('production.show');
});

// Payments
Route::get('/payments', function () {
    return view('payments.index');
});

Route::get('/payments/create', function () {
    return view('payments.create');
});

// Deliveries
Route::get('/deliveries', function () {
    return view('deliveries.index');
});

Route::get('/deliveries/create', function () {
    return view('deliveries.create');
});

// Deadlines
Route::get('/deadlines', function () {
    return view('deadlines.index');
});

// Search
Route::get('/search', function () {
    return view('search.index');
});

// Staff Management
Route::get('/staff', function () {
    return view('staff.index');
});

Route::get('/staff/create', function () {
    return view('staff.create');
});

// Profile
Route::get('/profile', function () {
    return view('profile');
});
