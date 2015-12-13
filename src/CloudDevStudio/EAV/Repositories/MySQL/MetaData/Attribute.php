<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV;


use DB;

class Attribute implements AttributeInterface
{
    /**
     * Gets the metadata related to this attribute.
     * @param $entityTypeId
     * @param $attributeId
     */
    public function getMeta($entityTypeId, $attributeId)
    {
        $query = DB::table('eav_attributes')
            ->where('attribute_id', $attributeId)
            ->where('entity_type_id', $entityTypeId)
            ->first();

        return $query;
    }

    /**
     * Gets the entity id related to this attribute
     * @param $attributeId
     */
    public function getEntityId($attributeId)
    {

        $attribute = DB::table('eav_attributes')
            ->where(
                'attribute_id',
                $attributeId
            )->first();

        if ($attribute) {
            return $attributeId->attribute_entity_type_id;
        }

    }
}