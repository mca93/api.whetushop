<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = ['country_name', 'town', 'street', 'builging', 'google_maps_coordenates', 'isActive'];

  public function supermarkets()
  {
    return $this->hasMany('App\Models\Supermarket');
  }

  public function people()
  {
    return $this->hasMany('App\Models\Person');
  }
}
