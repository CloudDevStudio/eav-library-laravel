<?php

namespace CloudDevStudio\EAV\Interfaces\MetaData;

interface AttributeInterface
{
    /**
     * @param $entityTypeId
     * @param $attributeId
     * @return mixed
     */
    public function getMeta($entityTypeId, $attributeId);

    /**
     * @param $attributeId
     * @return mixed
     */
    public function getEntityId($attributeId);

    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getAttributesMeta($entityTypeId);

}