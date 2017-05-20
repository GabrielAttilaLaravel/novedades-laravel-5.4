<?php

namespace App;

use App\Eventes\ProductUpdate;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id'];

    protected $events = [
      'updated' => ProductUpdate::class
    ];
}
