<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV;


use Illuminate\Support\Facades\DB;

class Attribute implements AttributeInterface
{
    /**
     * Gets the metadata related to this attribute.
     * @param $entityTypeId
     * @param $attributeId
     */
    public function getMeta($entityTypeId, $attributeId)
    {

    }

    /**
     * Gets the entity id related to this attribute
     * @param $attributeId
     */
    public function getEntityId($attributeId)
    {

    }
}