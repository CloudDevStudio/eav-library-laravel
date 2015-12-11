<?php

namespace CloudDevStudio\EAV;

interface EntityInterface
{
    /**
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getEntity($entityTypeId, $entityId);

    /**
     * @param $entityTypeId
     * @param $entityId
     * @param $attributes
     * @param bool|false $all
     * @return mixed
     */
    public function updateEntity($entityTypeId, $entityId, $attributes, $all = false);


    /**
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getRelations($entityTypeId, $entityId);

    /**
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getParent($entityTypeId, $entityId);

    /**
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getChilds($entityTypeId, $entityId);
}