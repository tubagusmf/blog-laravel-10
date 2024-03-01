<?php

namespace App\Http\Controllers\frontend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        return view('frontend.category.index', [
            'articles'  => Article::with('Category')->whereHas('Category', function($q) use ($slugCategory) {
                $q->where('slug', $slugCategory);
            })->latest()->paginate(3),
            'category'  =>  $slugCategory,
            'category_navbar'   => Category::latest()->take(3)->get(),
        ]);
    }

    public function allCategory()
    {
        $category = Category::withCount(['Articles' => function (Builder $query) {
            $query->where('status', 1);
        }])->latest()->get();

        return view('frontend.category.all-category', [
            'category'  => $category,
        ]);
    }
}
