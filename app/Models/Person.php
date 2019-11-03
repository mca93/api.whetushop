<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  protected $table = 'people';

  protected $fillable = ['first_name', 'last_name', 'birthday', 'home_google_maps_address', 'address_id', 'profile_picture_id'];


  public function address()
  {
    return $this->belongsTo('App\Models\Address');
  }

  public function image()
  {
    return $this->belongsTo('App\Models\Image');
  }

  public function comments()
  {
    return $this->hasMany('App\Models\Comment');
  }
}
