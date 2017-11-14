<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @mixin \Eloquent
 */
class Product extends Model
{

   protected $fillable = ['title', 'description', 'price', 'image_url'];

}
