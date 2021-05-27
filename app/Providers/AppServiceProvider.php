<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Brand;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //   For sending data to all view files
        //   View::share('name','Barat Ahmed');

        //   For sending data to specific view files
        View::composer('front-end.includes.header', function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        View::composer('front-end.includes.header', function ($view){
            $view->with('brands', Brand::where('publication_status',1)->get());
        });
    }
}
