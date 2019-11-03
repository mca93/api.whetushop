<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

  protected $fillable = ['mime_type', 'file_name', 'extension', 'path'];

  public function item()
  {
    return $this->hasOne('App\Models\Item');
  }

  public function supermarket()
  {
    return $this->hasOne('App\Models\Supermarket', 'logo_id');
  }

  public function person()
  {
    return $this->hasOne('App\Models\Person', 'profile_picture_id');
  }

  public function comment()
  {
    return $this->hasOne('App\Models\Comment');
  }
}
