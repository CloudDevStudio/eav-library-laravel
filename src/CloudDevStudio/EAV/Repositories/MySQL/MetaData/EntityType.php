<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV;

use DB;

class EntityType implements EntityTypeInterface
{
    /**
     * Function to get entity structure
     * @param $entityTypeId
     * @return mixed
     */
    public function getMetaData($entityTypeId)
    {
        $query = DB::table('eav_entity_type')
            ->where('entity_type_id', $entityTypeId)
            ->first();
        return $query;
    }

    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getAttributes($entityTypeId)
    {
        $query = DB::table('eav_attributes')
            ->where('entity_type_id', $entityTypeId)
            ->first();

        return $query;
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

    }
}