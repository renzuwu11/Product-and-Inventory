<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewProductsController;

Route::get('/ecommerce_products', [ViewProductsController::class, 'index'])->name('ecommerce.products');

/*Login
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/loading', function () {
        return view('loadingpage', ['redirectPath' => '/ecommerce_dashboard']);
    }); 
});*/

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', function(){
        return view('login');
    })->name('login');
    Route::post('/', [LoginController::class, 'login']);
});

Route::get('/loading', function () {
    return view('loadingpage', ['redirectPath' => '/ecommerce_dashboard']);
}); 

/*Route::post('/', function () {
    $credentials = request()->only('email', 'password');

    // Hardcoded check (for testing purposes only)
    if ($credentials['email'] === 'test@example.com' && $credentials['password'] === 'pass_123') {
        // If the credentials match, simulate authentication using session

        // Redirect to the loading page with the dashboard as the redirect path
        return redirect('/loading');
    } else {
        // Incorrect credentials - redirect back to login with error message
        return redirect('/')->with('error', 'Invalid credentials');
    }
});*/

//Dashboard
Route::get('/ecommerce_dashboard', function () {
    return view('ecommerce_dashboard');
});

// //Products
// Route::get('/ecommerce_products', function () {
//     return view('ecommerce_products');
// });

Route::get('/ecommerce_addproducts', function () {
    return view('ecommerce_addproducts');
});

//Account settings
Route::get('/ecommerce_settings', function () {
    return view('ecommerce_settings');
});

Route::get('/ecommerce_returneditem', function () {
    return view('ecommerce_returneditem');
});

