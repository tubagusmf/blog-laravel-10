<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        // $keyword = request()->keyword;
        
        // if($keyword) {
        //     $articles = Article::with('Category')
        //     ->whereStatus(1)
        //     ->where('title', 'like', '%' .$keyword. '%')
        //     ->latest()
        //     ->paginate(6);
        // } else {
        //     $articles = Article::with('Category')->where('status', 1)->latest()->paginate(3);
        // }

        return view('frontend.home.index', [
            'latest_post'       => Article::with(['User', 'Category'])->where('status', 1)->latest()->first(),
            'articles'          => Article::with('Category')->where('status', 1)->latest()->paginate(3),    
            // 'category_navbar'   => Category::latest()->take(3)->get(), ->sudah dipindahkan ke service provide side-widget
        ]);
    }

    public function about()
    {
        return view('frontend.home.about', [
            // 'category_navbar'   => Category::latest()->take(3)->get(), ->sudah dipindahkan ke service provide side-widget
        ]);
    }
}
