<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategories;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index () {
        $categories = ProductCategories::all();
        return view('pages/product')->with(compact('categories'));
    }

    public function category_index ($id) {
        $product = Product::where('product_category_id', $id)->first();

        $categories = ProductCategories::with('products')->get();

        $categoryInfo = ProductCategories::find($id);
        return view('pages/product-category')->with(compact('product', 'categories', 'categoryInfo'));
    }

    public function show ($id) {
        $product = Product::find($id);
        $categories = ProductCategories::with('products')->get();
        $categoryInfo = ProductCategories::find($product->product_category_id);
        return view('pages/product-product')->with(compact('product', 'categories', 'categoryInfo'));
    }
}
