<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('index', compact('products'));
    }


    public function product_detail($id) {
        return Product::findOrFail($id);
    }
}
