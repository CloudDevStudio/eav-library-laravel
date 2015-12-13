<?php

/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV;

class Value
{
    protected $value_id;
    protected $entity_id;
    protected $entity_type_id;
    protected $attribute_id;
    protected $attribute_set_id;
    protected $value;
    protected $order;
    protected $active;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


    /**
     * @return mixed
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * @param mixed $value_id
     */
    public function setValueId($value_id)
    {
        $this->value_id = $value_id;
    }

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * @param mixed $entity_id
     */
    public function setEntityId($entity_id)
    {
        $this->entity_id = $entity_id;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeId()
    {
        return $this->entity_type_id;
    }

    /**
     * @param mixed $entity_type_id
     */
    public function setEntityTypeId($entity_type_id)
    {
        $this->entity_type_id = $entity_type_id;
    }

    /**
     * @return mixed
     */
    public function getAttributeId()
    {
        return $this->attribute_id;
    }

    /**
     * @param mixed $attribute_id
     */
    public function setAttributeId($attribute_id)
    {
        $this->attribute_id = $attribute_id;
    }

    /**
     * @return mixed
     */
    public function getAttributeSetId()
    {
        return $this->attribute_set_id;
    }

    /**
     * @param mixed $attribute_set_id
     */
    public function setAttributeSetId($attribute_set_id)
    {
        $this->attribute_set_id = $attribute_set_id;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }



}