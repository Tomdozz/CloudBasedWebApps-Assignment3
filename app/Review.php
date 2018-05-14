<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  public function getStoreStock(){
    return $this->products;
  }
}
