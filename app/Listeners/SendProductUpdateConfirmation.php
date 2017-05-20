<?php

namespace App\Listeners;

use App\Eventes\ProductUpdate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendProductUpdateConfirmation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductUpdate  $event
     * @return void
     */
    public function handle(ProductUpdate $event)
    {
        dd('Actualizando producto', $event->product);
    }
}
