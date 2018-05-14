<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Store;
use App\Product;
class Product_Store extends Model
{
  protected $table = 'product_store';
  public function stores()
  {
    return $table->hasMany('App/Store');
  }
  public function products()
  {
    return $table->hasMany('App/Product');
  }
}
