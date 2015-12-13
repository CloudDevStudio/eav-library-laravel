<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model implements EntityInterface
{

    /**
     * This function gets the entity and all the attributes in it.
     *
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getEntity($entityTypeId, $entityId)
    {

    }

    /**
     * Function to update entity, pass an array of attributes with the
     * codename as key.
     *
     *
     * @param $entityTypeId
     * @param $entityId
     * @param $attributes array of attributes
     * @param bool|false $all if true will overwrite the entire document
     * if false it will be update only attributes existing in attributes parameter
     * @return mixed
     */
    public function updateEntity($entityTypeId, $entityId, $attributes, $all = false)
    {

    }


    /**
     * Function to get all relations and entities related to the entity
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getRelations($entityTypeId, $entityId)
    {

    }

    /**
     * Get the parent entity
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getParent($entityTypeId, $entityId)
    {

    }

    /**
     * Get the childs in the same table structure
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getChilds($entityTypeId, $entityId)
    {

    }
}