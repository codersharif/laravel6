<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//       view()->composer('*', function ($view)
//        {
//           $articles=Article::take(3)->latest()->get();
//
//            $view->with('articles', $articles);
//        });
    }
}
