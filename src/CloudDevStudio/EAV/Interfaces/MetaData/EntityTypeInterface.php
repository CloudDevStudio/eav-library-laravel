<?php

namespace CloudDevStudio\EAV\Interfaces\MetaData;

interface EntityTypeInterface
{


    /**
     * Gets the list of attributes related to this entity type
     * @param $entityTypeId
     * @return mixed
     */
    public function getAttributes($entityTypeId);

    /**
     * Checks if the entity has this attribute
     * @param $entityTypeId
     * @param $attributeName
     * @return mixed
     */
    public function hasAttribute($entityTypeId, $attributeName);

    /**
     * Gets the list of entity types available
     * @param array $filters
     * @return mixed
     */
    public function getList($filters = array());



}