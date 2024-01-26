<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DashboardController extends Controller
{
    public function show()
    {
        // Total items count
        $totalItems = Product::count();

        // Returned products count
        $returnedProducts = Product::where('status', 'returned')->count();

        // Low stock products count
        $lowStockProducts = Product::where('Stock', '<', 10)->count();

        // Zero stock products count
        $zeroStockProducts = Product::where('Stock', 0)->count();

        return view('ecommerce_dashboard', compact('totalItems', 'returnedProducts', 'lowStockProducts', 'zeroStockProducts'));
    }
}