<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 15/05/17
 * Time: 09:17 AM
 */

namespace App;


use Illuminate\Support\Facades\Facade;

class AlertFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        // terornamos la lkey la cual es la misma que enlazamos en el ServicePRovider
        return 'alert';
    }
}