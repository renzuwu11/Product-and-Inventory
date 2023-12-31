<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login'); 

Route::post('/', function () {
    $credentials = request()->only('email', 'password');

    // Hardcoded check (for testing purposes only)
    if ($credentials['email'] === 'test@example.com' && $credentials['password'] === 'password123') {
        // If the credentials match, simulate authentication using session
        Session::put('logged_in', true);
        return redirect('/ecommerce_dashboard'); // Redirect to the dashboard
    } else {
        // Incorrect credentials - redirect back to login
        return redirect('/login')->with('error', 'Invalid credentials');
    }
});

Route::get('/ecommerce_dashboard', function () {
    return view('ecommerce_dashboard');
});

Route::get('/ecommerce_products', function () {
    return view('ecommerce_products');
});

Route::get('/ecommerce_orders', function () {
    return view('ecommerce_orders');
});

Route::get('ecommerce_customers', function () {
    return view('ecommerce_customers');
});

Route::get('/ecommerce_settings', function () {
    return view('ecommerce_settings');
});

