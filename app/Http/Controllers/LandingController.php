<?php

namespace App\Http\Controllers;

use App\Models\Product;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil 3 produk teratas untuk Best Seller
        $products = Product::limit(3)->get();

        return view('landing', compact('products'));
    }
}
