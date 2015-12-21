<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV\Repositories\MySQL\MetaData;


use Illuminate\Support\Facades\DB;
use CloudDevStudio\EAV\Interfaces\MetaData\AttributeInterface;

class Attribute implements AttributeInterface
{
    const REGISTER_ACTIVE = 1;
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
            ->where('attribute_status', self::REGISTER_ACTIVE)
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

    public function getAttributesMeta($entityTypeId)
    {
        $attributes = DB::table('eav_attributes')
            ->where('attribute_entity_type_id', $entityTypeId)
            ->where('attribute_status', self::REGISTER_ACTIVE)
            ->get();

        return $attributes;
    }
}