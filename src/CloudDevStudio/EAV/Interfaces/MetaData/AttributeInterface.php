<?php

namespace CloudDevStudio\EAV;

interface AttributeInterface
{
    /**
     * @return mixed
     */
    public function getMeta($entityTypeId, $attributeId);

    /**
     * @param $attributeId
     * @return mixed
     */
    public function getEntityId($attributeId);


}