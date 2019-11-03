<?php

namespace App\JsonApi\People;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

  /**
   * @var string
   */
  protected $resourceType = 'people';

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
      'first_name' => $resource->first_name,
      'last_name' => $resource->last_name,
      'birthday' => $resource->birthday,
      'home_google_maps_address' => $resource->home_google_maps_address,
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
      'comments' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
