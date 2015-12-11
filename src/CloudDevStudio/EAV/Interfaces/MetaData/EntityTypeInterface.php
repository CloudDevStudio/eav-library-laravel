<?php

namespace CloudDevStudio\EAV;

interface EntityTypeInterface
{

    /**
     * Function to get entity structure
     * @param $entityTypeId
     * @return mixed
     */
    public function getMetaData($entityTypeId);

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