<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

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
        $stores = DB::select('select * from stores');
        view()->share('stores', $stores);
        
        $opens = DB::select('select * from opens');
        view()->share('opens', $opens);

        $itemImages = DB::select('select * from item_images');
        view()->share('itemImages', $itemImages);

        $item = DB::select('select * from item');
        view()->share('item', $item);

        $brands = DB::select('select * from brands');
        view()->share('brands', $brands);
    }
}
