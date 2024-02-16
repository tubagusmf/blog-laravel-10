<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function show($slug)
    {
        return view('frontend.article.show', [
            'article'       => Article::whereSlug($slug)->first(),
            'categories'    => Category::latest()->get(),
        ]);
    }
}
