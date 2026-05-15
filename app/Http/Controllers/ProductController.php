<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function landing() {
        $products = Product::limit(3)->get();
        return view('landing', compact('products'));
    }

    public function index(Request $request) {

        // Ambil harga tertinggi untuk slider
        $maxPriceDB = Product::max('price') ?? 1000000;

        // Query produk + filter
        $products = Product::query()
            ->when($request->search, function($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->when($request->min_price, function($query) use ($request) {
                $query->where('price', '>=', $request->min_price);
            })
            ->when($request->max_price, function($query) use ($request) {
                $query->where('price', '<=', $request->max_price);
            })
            ->when($request->notes, function($query) use ($request) {
                $column = $request->notes . '_notes'; // top_notes / middle_notes / base_notes
                $query->whereNotNull($column)->where($column, '!=', '');
            })
            ->get();

        return view('product.index', compact('products', 'maxPriceDB'));
    }

    public function detail($id) {
        $product = Product::findOrFail($id);
        return view('product.detail', compact('product'));
    }
}
