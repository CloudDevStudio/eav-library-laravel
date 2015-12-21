<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV\Repositories\MySQL\MetaData;

use CloudDevStudio\EAV\Repositories\MySQL\MetaData\Attribute;
use Illuminate\Support\Facades\DB;
use CloudDevStudio\EAV\Interfaces\MetaData\EntityTypeInterface;

class EntityType implements EntityTypeInterface
{
    const REGISTER_ACTIVE = 1;

    /**
     * @var ;
     */
    protected $attributeMeta;

    public function __construct(Attribute $attributeMeta)
    {

        $this->attributeMeta = $attributeMeta;
    }

    /**
     * Function to get entity structure
     * @param $entityTypeId
     * @return mixed
     */
    public function getMeta($entityTypeId)
    {
        $meta = [];

        $meta['eav_entity_type'] = DB::table('eav_entity_type')
            ->where('entity_type_status', self::REGISTER_ACTIVE)
            ->get();


        $meta['eav_attributes'] = self::getAttributes($entityTypeId);


        return $meta;


    }

    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getAttributes($entityTypeId)
    {
        return $this->attributeMeta->getAttributesMeta($entityTypeId);
    }

    /**
     * Returns true when entity has that attribute related
     * false otherwise
     * @param $entityTypeId
     * @param $attributeName
     * @return mixed
     */
    public function hasAttribute($entityTypeId, $attributeName)
    {
        $query = DB::table('eav_attributes')
            ->where('entity_type_id', $entityTypeId)
            ->where('attribute_codename', $attributeName)
            ->first();

        if (count($query) > 0) {
            return true;
        }

        return false;
    }

    /**
     * Gets the list of entity types
     * @param array $filters
     * @return mixed
     */
    public function getList($filters = array())
    {
        $query = DB::table('eav_entity_type')
            ->where('entity_type_status', self::REGISTER_ACTIVE)
            ->get();

        return $query;

    }
}