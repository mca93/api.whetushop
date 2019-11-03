<?php

namespace App\JsonApi\Supermarkets;

use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Adapter extends AbstractAdapter
{

  /**
   * Mapping of JSON API attribute field names to model keys.
   *
   * @var array
   */
  protected $attributes = [];

  /**
   * Mapping of JSON API filter names to model scopes.
   *
   * @var array
   */
  protected $filterScopes = [];

  /**
   * Adapter constructor.
   *
   * @param StandardStrategy $paging
   */
  public function __construct(StandardStrategy $paging)
  {
    parent::__construct(new \App\Models\Supermarket(), $paging);
  }

  /**
   * @param Builder $query
   * @param Collection $filters
   * @return void
   */
  protected function filter($query, Collection $filters)
  {
    $this->filterWithScopes($query, $filters);
  }

  public function address()
  {
    return $this->hasOne();
  }

  public function advertisements()
  {
    return $this->hasMany();
  }

  public function image()
  {
    return $this->hasOne();
  }

  public function comments()
  {
    return $this->hasMany();
  }
}
