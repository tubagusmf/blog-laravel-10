<?php

namespace App\Http\Controllers\Backend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index', [
            'total_articles'    => Article::count(),
            'total_categories'  => Category::count(),
            'latest_article'    => Article::with('Category')->whereStatus(1)->latest()->take(5)->get(), //mengambil artikel terbaru dari status publish(1) & mengambil 5 artikel
            'popular_article'   => Article::with('Category')->whereStatus(1)->orderBy('views', 'desc')->take(5)->get(), //mengambil artikel popular dari banyak views & mengambil 5 artikel
        ]);
    }
}
