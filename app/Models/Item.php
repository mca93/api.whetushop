<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = ['long_name', 'short_name', 'price', 'currency', 'description', 'exists', 'advertisement_id'];

  public function advertisement()
  {
    return $this->belongsTo('App\Models\Adverstisement');
  }

  public function image()
  {
    return $this->belongsTo('App\Models\Image');
  }
}
