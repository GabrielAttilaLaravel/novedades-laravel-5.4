<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
       /** 'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],**/
       'App\Eventes\ProductUpdate' => [
           'App\Listeners\SendProductUpdateConfirmation'
       ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

       /**Event::listen('eloquent.updated: App\Product', function ($product){
            dd('Actualizando producto', $product->toArray());
        });**/
    }
}
