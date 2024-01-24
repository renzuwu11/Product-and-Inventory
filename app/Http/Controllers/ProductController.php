<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('ecommerce_product'); 
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'ProdName' => 'required|string',
            'ProdDescription' => 'required|string',
            'CategoryID' => 'required|string',
            'ProdMaterial' => 'nullable|string',
            'ProdWeight' => 'nullable|string',
            'ProdSize' => 'nullable|string',
            'UnitPrice' => 'required|numeric|min:0',
            'ProdDiscount' => 'nullable|numeric|min:0|max:100',
            'ProdStock' => 'required|integer|min:0',
        ]);

        // Create a new product and save it to the database
        Product::create($request->all());

        return redirect()->route('product.create')->with('success', 'Product saved successfully!');
    }

    public function index()
    {
        $products = Product::all();

        return view('product_list', ['product' => $products]); 
    }
}
