<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select('id', 'image', 'name', 'description', 'price')->get(); 

        return response()->json($products); 
    }
    public function showDetails()
    {
        // Fetch product details from your database or model
        $product = Product::findOrFail(2);

        // Return the product details as JSON
        return response()->json($product);
    }
}
