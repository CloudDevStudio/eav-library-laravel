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
     * @param $entityTypeId
     * @param $entityId
     * @param $attributes
     * @param bool|false $all
     * @return mixed
     */
    public function updateEntity($entityTypeId, $entityId, $attributes, $all = false)
    {

    }


    /**
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getRelations($entityTypeId, $entityId)
    {

    }

    /**
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getParent($entityTypeId, $entityId)
    {

    }

    /**
     * @param $entityTypeId
     * @param $entityId
     * @return mixed
     */
    public function getChilds($entityTypeId, $entityId)
    {

    }
}