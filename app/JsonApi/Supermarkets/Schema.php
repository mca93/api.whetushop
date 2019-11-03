<?php

namespace App\JsonApi\Supermarkets;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

  /**
   * @var string
   */
  protected $resourceType = 'supermarkets';

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
      'full_name' => $resource->full_name,
      'short_name' => $resource->short_name,
      'open_time' => $resource->open_time,
      'close_time' => $resource->close_time,
      'google_maps_coordenates' => $resource->google_maps_coordenates,
      'slug' => $resource->slug,
      'created-at' => $resource->created_at->toAtomString(),
      'updated-at' => $resource->updated_at->toAtomString(),
    ];
  }

  public function getRelationships($resource, $isPrimary, array $includeRelationships)
  {
    return [
      'address' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'image' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'advertisements' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'comments' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
