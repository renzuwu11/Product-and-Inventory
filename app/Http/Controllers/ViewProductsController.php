<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ViewProductsController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all products from the database
        $product = Product::query();
    
        $selectedCategory = $request->input('filter-category');
    
        if ($selectedCategory) {
            $product->where('category_id', $selectedCategory);
        }
    
        $product = $product->get();
    
        if ($request->ajax()) {
            return view('products.product_table', ['products' => $product])->render();
        }
    
        return view('ecommerce_products', ['product' => $product]);
    }   

    public function updateProduct(Request $request, $id)
    {
        $product = product::find($id);
    
        return view('ecommerce_updateproducts', compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'ProdName' => 'required|string',
            'ProdDescription' => 'required|string',
            'ProdMaterial' => 'required|string',
            'ProdWeight' => 'required|numeric',
            'ProdSize' => 'required|string',
            'UnitPrice' => 'required|numeric',
            'ProdDiscount' => 'nullable|numeric',
            'Stock' => 'required|integer',
        ]);
    
        // Update the product details in the database
        $product = Product::findOrFail($id);
        $product->update($request->all());
    
        // Redirect to the product list page with a success message
        return redirect()->route('ecommerce.products')->with('message', 'Product updated successfully!');
    }    

    public function create()
    {
        return view('ecommerce_addproducts');
    }
}