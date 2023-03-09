<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Config\Repository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public function register()
    // {
    //     //
    // }

    public function register()
    {
        $this->app->singleton(Repository::class, function () {
            return $this->app['config'];
        });
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (!defined('HEADER_X_FORWARDED_ALL')) {
            define('HEADER_X_FORWARDED_ALL', 'x-forwarded-for,x-forwarded-proto,x-forwarded-port');
        }
    }
}
