<?php

//namespace CloudDevStudio\EAV\Interfaces\OnticData;
namespace CloudDevStudio\EAV\Interfaces\OnticData;

interface EntityInterface
{
    /**
     * Gets the entity and his attributes
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getEntity($entityTypeId, $entityId);

    /**
     * Updates de entity
     * @param $entityTypeId
     * @param $entityId
     * @param $attributes
     * @param bool|false $all true for overwrite all entity or false for only attributes in array parameter
     * @return mixed
     */
    public function updateEntity($entityTypeId, $entityId, $attributes, $all = false);


    /**
     * Gets all the entities related with this entity
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getRelations($entityTypeId, $entityId);

    /**
     * Gets the parent entity
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getParent($entityTypeId, $entityId);

    /**
     * Gets all the childs related in the same data table
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getChilds($entityTypeId, $entityId);
}