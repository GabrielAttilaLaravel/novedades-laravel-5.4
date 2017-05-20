<?php

namespace App\Listeners;

use App\Eventes\ProductUpdate;
use App\Mail\ProductUpdated as ProductUpdateMail;
use Illuminate\Support\Facades\Mail;

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
        Mail::to('gabrieljmorenot@gmail.com')
            ->send(new ProductUpdateMail($event->product));
    }
}
