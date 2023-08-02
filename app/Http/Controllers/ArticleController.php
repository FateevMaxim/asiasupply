<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\BoergerCategories;
use App\Models\DenairCategories;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function show ($id)
    {
        $article = DB::table('articles')->select('id','title->ru as title', 'avatar', 'tags', 'text->ru as text', 'created_at')->where('id', $id)->first();
        return view('pages/article')->with(compact('article'));
    }
}
