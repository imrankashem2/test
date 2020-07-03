<?php

namespace App\Providers;

use App\Categories;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
       Schema::defaultStringLength(191);
       $categories = Categories::all();

       $shareData = array(

        'categories'=>$categories,


       );
       view()->share('shareData',$shareData);
    }
}
