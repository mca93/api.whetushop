<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
  protected $fillable = ['start_date', 'duration', 'supermarket_id', 'exists', 'advertisement_id'];

  public function supermarket()
  {
    return $this->belongsTo('App\Models\Supermarket');
  }

  public function items()
  {
    return $this->hasMany('App\Models\Item');
  }
}
