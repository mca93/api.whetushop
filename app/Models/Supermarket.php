<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supermarket extends Model
{

  protected $fillable = ['full_name', 'short_name', 'open_time', 'close_time', 'google_maps_coordenates', 'logo_id', 'address_id'];

  public function address()
  {

    return $this->belongsTo('App\Models\Address');
  }

  public function advertisements()
  {
    return $this->hasMany('App\Models\Advertisement');
  }

  public function image()
  {
    return $this->belongsTo('App\Models\Image');
  }

  public function comments()
  {
    return $this->hasMany('App\Models\Comment', 'comments_supermarket');
  }
}
