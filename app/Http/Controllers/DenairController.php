<?php

namespace App\Http\Controllers;

use App\Models\Denair;
use App\Models\DenairCategories;
use Illuminate\Http\Request;

class DenairController extends Controller
{


    public function index () {
        $categories = DenairCategories::all();
        return view('pages/denair')->with(compact('categories'));
    }

    public function category_index ($id) {
        $list = Denair::query()->select('id', 'title', 'avatar', 'short_description')->where('denair_category_id', $id)->get();
        $categories = DenairCategories::with('denairs')->get();
        $categoryInfo = DenairCategories::find($id);
        return view('pages/denair-category')->with(compact('list', 'categories', 'categoryInfo'));
    }

    public function show ($id) {
        $product = Denair::find($id);
        $categories = DenairCategories::with('denairs')->get();
        $categoryInfo = DenairCategories::find($product->denair_category_id);
        return view('pages/denair-product')->with(compact('product', 'categories', 'categoryInfo'));
    }
}
