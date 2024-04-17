<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $new_products = Product::with('category')->whereBetween('product_id', [70, 75])->get();
        $top_selling_products = Product::with('category')->whereBetween('product_id', [59, 65])->get();

        return view('index', [
            'new_products' => $new_products,
            'top_selling_products' => $top_selling_products
        ]);
    }

    public function viewProduct($id) {
        $product = Product::where('product_id', $id)->firstOrFail();
        $relatedProducts = Product::where('product_id', '>', $id)->limit(3)->get();

        return view('product', [
            'product' => $product,
            'relatedProducts'=> $relatedProducts
        ]);
    }
}
