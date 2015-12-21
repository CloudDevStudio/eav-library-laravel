<?php

namespace CloudDevStudio\EAV\Interfaces\MetaData;

interface AttributeInterface
{
    /**
     * Gets the metadata related to this attribute
     * @return mixed
     */
    public function getMeta($entityTypeId, $attributeId);

    /**
     * Gets the entity id related to this attribute
     * @param $attributeId
     * @return mixed
     */
    public function getEntityId($attributeId);


}