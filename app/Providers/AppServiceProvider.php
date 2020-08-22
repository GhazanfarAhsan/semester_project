<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\MenuClass;

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
        //

        $menu=new MenuClass();
        $AllCartDetail=$menu->showHeaderCart();
        $ProductDetailSize=$AllCartDetail[0];
        $TotPrice=$AllCartDetail[1];

        view()->share('brandData',$menu->getBrandMenu());
        view()->share('CatData',$menu->getCatMenu());
        view()->share('ProductDetailSize',$ProductDetailSize);
        view()->share('TotPrice',$TotPrice);
    }
    }

