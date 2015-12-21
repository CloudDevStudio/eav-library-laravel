<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV\Repositories\MySQL\OnticData;

use CloudDevStudio\EAV\Value;
use Illuminate\Support\Facades\DB;
use CloudDevStudio\EAV\Interfaces\OnticData\EntityInterface;
use CloudDevStudio\EAV\Repositories\MySQL\MetaData\EntityType;

class Entity implements EntityInterface
{
    const REGISTER_ACTIVE = 1;

    protected $entity_id;
    protected $entity_type_id;
    protected $entityType;


    public function __construct(EntityType $entityType)
    {
        $this->entityType = $entityType;

    }

    /**
     * Function that obtains list of entities of a type passed
     */
    public function getEntities($entityType)
    {
        // @todo-traer entidades concreetas
        /*$query = DB::table('eav_entity_type')
            ->where('entity_type_status', self::REGISTER_ACTIVE)
            ->get();**/


        return true;

    }

    public function getEntity($entityTypeId, $entityId)
    {
        $data['meta'] = $this->getEntityMeta($entityTypeId);


        $data['ontic'] = DB::table('entities')
            ->where('entity_id', $entityId)
            ->where('entity_type_id', $entityTypeId)
            ->first();

        $data['ontic']->values = $this->getAttributeValues($entityTypeId, $entityId, $data['meta']);
        return $data;

    }

    public function getAttributeValues($entityType, $entityId, $meta = false)
    {
        if (!$meta) {
            $meta = $this->getEntityMeta($entityType);
        }

        $values = [];
        foreach ($meta['eav_attributes'] as $key => $attribute) {
            $values[$attribute->attribute_name] = DB::table($attribute->attribute_table)
                ->where('entity_id', $entityId)
                ->where('entity_type_id', $entityType)
                ->where('attribute_id', $attribute->attribute_id)
                ->first()->value;
        }

        return $values;

    }

    public function getEntityMeta($entityTypeId)
    {
        return $this->entityType->getMeta($entityTypeId);
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
        return "dsfd";
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