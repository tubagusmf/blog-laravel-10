<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TemplateProvider extends ServiceProvider
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
        View::composer('frontend.layout.template', function ($view) {
            // $category = Category::latest()->get();

            $configKeys = ['logo', 'blogname', 'title', 'caption', 'ads_widget', 'ads_header', 'ads_footer', 'phone', 'email', 'facebook', 'instagram', 'youtube', 'footer'];

            $config = Config::whereIn('name', $configKeys)->pluck('value', 'name');

            $view->with('config', $config);
        });

        View::composer('frontend.contact.index', function ($view) {
            // $category = Category::latest()->get();

            $configKeys = ['phone', 'email', 'facebook', 'instagram', 'youtube'];

            $config = Config::whereIn('name', $configKeys)->pluck('value', 'name');

            $view->with('config', $config);
        });
    }
}
