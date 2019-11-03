<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = ['title', 'description', 'confirmations', 'image_id', 'person_id', 'isActive'];


  public function person()
  {
    return $this->belongsTo('App\Models\Person');
  }

  public function supermarket()
  {
    return $this->belongsTo('App\Models\Supermarket');
  }

  public function image()
  {
    return $this->belongsTo('App\Models\Image');
  }
}
