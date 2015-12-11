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
     * @param $entityTypeId
     * @param $attributeId
     */
    public function getMeta($entityTypeId, $attributeId)
    {

    }

    /**
     * @param $attributeId
     */
    public function getEntityId($attributeId)
    {

    }
}