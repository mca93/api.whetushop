<?php

namespace App\JsonApi\Advertisements;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

  /**
   * @var string
   */
  protected $resourceType = 'advertisements';

  /**
   * @param $resource
   *      the domain record being serialized.
   * @return string
   */
  public function getId($resource)
  {
    return (string) $resource->getRouteKey();
  }

  /**
   * @param $resource
   *      the domain record being serialized.
   * @return array
   */
  public function getAttributes($resource)
  {
    return [
      'start_date' => $resource->start_date,
      'duration' => $resource->duration,
      'end_date' => $resource->end_date,
      'isActive' => $resource->isActive,
      'created-at' => $resource->created_at->toAtomString(),
      'updated-at' => $resource->updated_at->toAtomString(),
    ];
  }

  public function getRelationships($resource, $isPrimary, array $includeRelationships)
  {
    return [
      'supermarket' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'items' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
