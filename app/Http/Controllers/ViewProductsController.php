<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ViewProductsController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all products from the database
        $products = Product::query();
    
        $selectedCategory = $request->input('filter-category');
    
        if ($selectedCategory) {
            $products->where('category_id', $selectedCategory);
        }
    
        $products = $products->get();
    
        if ($request->ajax()) {
            return view('products.product_table', ['products' => $products])->render();
        }
    
        return view('ecommerce_products', ['products' => $products]);
    }   

    public function create()
    {
        // Your controller logic goes here
        return view('products.create');
    }
}