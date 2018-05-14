<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Store;
use App\Review;
class Product extends Model
{
  public function stores(){
    return $this->belongsToMany('App\Store');
  }
  public function reviews(){
     return $this->hasMany('App\Review');
  }
  public function getProducts(){
      return $this->products;
    }
    protected $fillable = [
      'title', 'brand', 'price', 'image', 'description', 'stores'
    ];
}
