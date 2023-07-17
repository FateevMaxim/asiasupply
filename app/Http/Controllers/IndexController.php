<?php

namespace App\Http\Controllers;

use App\Models\BoergerCategories;
use App\Models\DenairCategories;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
            $categories = BoergerCategories::all();
            $categoriesDenair = DenairCategories::all();
            return view('index')->with(compact('categories', 'categoriesDenair'));
    }
}
