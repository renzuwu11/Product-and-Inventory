<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
            'ProdImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ProdName' => 'required|string',
            'ProdDescription' => 'required|string',
            'CategoryID' => 'required|integer',
            'ProdMaterial' => 'nullable|string',
            'ProdWeight' => 'nullable|string',
            'ProdSize' => 'nullable|string',
            'UnitPrice' => 'required|numeric|min:0',
            'ProdDiscount' => 'nullable|numeric|min:0|max:100',
            'ProdStock' => 'required|integer|min:0',
        ]);
    
        // Handle image upload
        $imagePath = $request->file('ProdImage')->store('assests/img/products');
    
        // Get the ID of the currently authenticated user
        $createdBy = auth()->id();
    
        // Create a new product with the 'CreatedBy' field
        Product::create(array_merge($request->all(), ['CreatedBy' => $createdBy, 'ProdImage' => $imagePath]));
    
        return redirect()->route('ecommerce.addproducts')->with('success', 'Product saved successfully!');
    }

    public function products() {
        
        $products = Product::paginate(10);
        $filterproducts = null;
        return view(('ecommerce_products'), compact('products', 'filterproducts'));
    }

    public function filterproducts(Request $request)
    {
        $categories = Category::all();
        $categoryFilter = $request->input('Category');
        $query = Product::query();
        if($categoryFilter) {
            $query->where('CategoryID', $categoryFilter);
        }
        $products = $query->paginate(10);
        /*$products = Product::where(function($query) use ($categoryFilter) {
            $query->where('id', $categoryFilter);
        })->paginate(10);*/
        
        return view('ecommerce_products', compact('products', 'categories'));
    }

    public function deleteProduct($id)
    {
        $products = Product::find($id);

        if (!$products) {
            return redirect()->back()->with('message', 'Product not found');
        }

        $products->delete();

        return redirect()->back()->with('message', 'Product deleted successfully');
    }
    
    public function index()
    {
        $products = Product::all();
    
        return view('product_list', ['product' => $product]);
    }
    
}
