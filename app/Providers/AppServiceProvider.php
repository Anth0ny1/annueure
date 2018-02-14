<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        /* Test ajout JB Pour rendre actif l'item du menu sur la page active
         view()->composer('*', function ($view) {
            $current_route_name = \Request::route()->getName();
            $view->with('current_route_name', $current_route_name);
         }); */

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
