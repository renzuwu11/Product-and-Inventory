<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $errorMessage = session('error'); // Retrieve error message from session
    return view('login', ['errorMessage' => $errorMessage]);
})->name('login'); 

Route::post('/', function () {
    $credentials = request()->only('email', 'password');

    // Hardcoded check (for testing purposes only)
    if ($credentials['email'] === 'test@example.com' && $credentials['password'] === 'pass_123') {
        // If the credentials match, simulate authentication using session
        Session::put('logged_in', true);

        // Redirect to the loading page with the dashboard as the redirect path
        return redirect('/loading');
    } else {
        // Incorrect credentials - redirect back to login with error message
        return redirect('/')->with('error', 'Invalid credentials');
    }
});

Route::get('/loading', function () {
    return view('loadingpage', ['redirectPath' => '/ecommerce_dashboard']);
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

