<?php

namespace App\Http\Controllers;

use App\Models\Boerger;
use App\Models\BoergerCategories;
use Illuminate\Http\Request;

class BoergerController extends Controller
{


    public function index () {
        $categories = BoergerCategories::all();
        return view('pages/boerger')->with(compact('categories'));
    }

    public function category_index ($id) {
        $list = Boerger::query()->select('id', 'title', 'avatar', 'short_description')->where('boerger_category_id', $id)->get();
        $categories = BoergerCategories::with('boergers')->get();
        $categoryInfo = BoergerCategories::find($id);
        return view('pages/boerger-category')->with(compact('list', 'categories', 'categoryInfo'));
    }

    public function show ($id) {
        $product = Boerger::find($id);
        $categories = BoergerCategories::with('boergers')->get();
        $categoryInfo = BoergerCategories::find($product->boerger_category_id);
        return view('pages/boerger-product')->with(compact('product', 'categories', 'categoryInfo'));
    }
}
