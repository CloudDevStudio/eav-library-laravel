<?php

namespace CloudDevStudio\EAV\Interfaces\MetaData;

interface EntityTypeInterface
{

    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getMeta($entityTypeId);

    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getAttributes($entityTypeId);

    /**
     * @param $entityTypeId
     * @param $attributeName
     * @return mixed
     */
    public function hasAttribute($entityTypeId, $attributeName);

    /**
     * @param array $filters
     * @return mixed
     */
    public function getList($filters = array());
}