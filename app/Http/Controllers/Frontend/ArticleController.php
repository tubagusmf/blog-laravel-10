<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $keyword = request()->keyword;
        
        if($keyword) {
            $articles = Article::with('Category')
            ->whereStatus(1)
            ->where('title', 'like', '%' .$keyword. '%')
            ->latest()
            ->paginate(6);
        } else {
            $articles = Article::with('Category')->where('status', 1)->latest()->paginate(3);
        }

        return view('frontend.article.index', [
            'article'           => $articles,
            'keyword'           => $keyword,  
            // 'categories'        => Category::latest()->get(),
            // 'category_navbar'   => Category::latest()->take(3)->get(), ->sudah dipindahkan ke service provide side-widget
        ]);
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        $article->increment('views'); //menambah views ketika dikunjungi

        return view('frontend.article.show', [
            'article'           => $article,
            // 'category_navbar'   => Category::latest()->take(3)->get(), ->sudah dipindahkan ke service provide side-widget
        ]);
    }
}
