<?php

namespace App\JsonApi\Items;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

  /**
   * @var string
   */
  protected $resourceType = 'items';

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
      'long_name' => $resource->long_name,
      'short_name' => $resource->short_name,
      'price' => $resource->price,
      'currency' => $resource->currency,
      'description' => $resource->description,
      'exists' => $resource->exists,
      'created-at' => $resource->created_at->toAtomString(),
      'updated-at' => $resource->updated_at->toAtomString(),
    ];
  }

  public function getRelationships($resource, $isPrimary, array $includeRelationships)
  {
    return [
      'advertisement' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'image' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
