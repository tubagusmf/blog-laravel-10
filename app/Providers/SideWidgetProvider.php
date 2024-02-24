<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SideWidgetProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('frontend.layout.side-widget', function ($view) {
            $category = Category::latest()->get();

            $view->with('categories', $category);
        });

        View::composer('frontend.layout.navbar', function ($view) {
            $category = Category::latest()->take(3)->get();

            $view->with('category_navbar', $category);
        });

        View::composer('frontend.layout.side-widget', function ($view) {
            $posts = Article::orderBy('views', 'desc')->take(3)->get();

            $view->with('popular_post', $posts);
        });
    }
}
