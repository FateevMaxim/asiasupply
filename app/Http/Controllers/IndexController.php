<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Articles;
use App\Models\BoergerCategories;
use App\Models\DenairCategories;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index ()
    {
        $categoriesB = BoergerCategories::all();
        $categories = ProductCategories::all();
        $categoriesDenair = DenairCategories::all();
        $articles = DB::table('articles')->select('id','title->ru as title', 'avatar', 'tags', 'intro->ru as intro', 'created_at')->get();
        return view('index')->with(compact('categoriesB', 'categories', 'categoriesDenair', 'articles'));
    }
    public function about ()
    {
        $about = About::find(1);
        return view('pages/about')->with(compact('about'));
    }
}
