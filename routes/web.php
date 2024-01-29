<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewProductsController;
use App\Http\Controllers\DashboardController;

Route::get('/ecommerce_products', [ViewProductsController::class, 'index'])->name('ecommerce.products');
Route::match(['get', 'put'], '/ecommerce_updateproducts/{id}', [ViewProductsController::class, 'updateProduct'])->name('update.product');
Route::delete('delete_product/{id}', [ProductController::class, 'deleteProduct'])->name('delete.product');
Route::post('/ecommerce_addproducts', [ProductController::class, 'store'])->name('ecommerce.addproducts');
Route::get('/ecommerce_dashboard', [DashboardController::class, 'show'])->name('dashboard.show');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', function(){
        return view('login');
    })->name('login');
    Route::post('/', [LoginController::class, 'login']);
});

Route::get('/loading', function () {
    return view('loadingpage', ['redirectPath' => '/ecommerce_dashboard']);
}); 

// //Dashboard
// Route::get('/ecommerce_dashboard', function () {
//     return view('ecommerce_dashboard');
// });

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

Route::get('/ecommerce_request', function () {
    return view('ecommerce_request');
});

//filter
Route::get('/ecommerce_products', [ProductController::class, 'products']);
Route::get('/filterproducts', [ProductController::class, 'filterproducts']);