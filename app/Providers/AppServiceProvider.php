<?php

namespace App\Providers;

use App\Alert;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**$this->app->bind('alert', function ($app){
            return new Alert($app['session'], $app['view']);
        });**/
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
