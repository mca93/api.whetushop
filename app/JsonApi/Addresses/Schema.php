<?php

namespace App\JsonApi\Addresses;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

  /**
   * @var string
   */
  protected $resourceType = 'addresses';

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
      'country_name' => $resource->country_name,
      'town' => $resource->town,
      'street' => $resource->street,
      'street' => $resource->builging,
      'google_maps_coordenates' => $resource->google_maps_coordenates,
      'isActive' => $resource->isActive,
      'created-at' => $resource->created_at->toAtomString(),
      'updated-at' => $resource->updated_at->toAtomString(),
    ];
  }

  public function getRelationships($resource, $isPrimary, array $includeRelationships)
  {
    return [
      'supermarkets' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
