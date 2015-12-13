<?php

namespace CloudDevStudio\EAV;

class Relations
{
    protected $relation_id;
    protected $relation_description;
    protected $relation_entity_type_a;
    protected $relacion_entity_type_b;

    /**
     * @return mixed
     */
    public function getRelationId()
    {
        return $this->relation_id;
    }

    /**
     * @param mixed $relation_id
     */
    public function setRelationId($relation_id)
    {
        $this->relation_id = $relation_id;
    }

    /**
     * @return mixed
     */
    public function getRelationDescription()
    {
        return $this->relation_description;
    }

    /**
     * @param mixed $relation_description
     */
    public function setRelationDescription($relation_description)
    {
        $this->relation_description = $relation_description;
    }

    /**
     * @return mixed
     */
    public function getRelationEntityTypeA()
    {
        return $this->relation_entity_type_a;
    }

    /**
     * @param mixed $relation_entity_type_a
     */
    public function setRelationEntityTypeA($relation_entity_type_a)
    {
        $this->relation_entity_type_a = $relation_entity_type_a;
    }

    /**
     * @return mixed
     */
    public function getRelacionEntityTypeB()
    {
        return $this->relacion_entity_type_b;
    }

    /**
     * @param mixed $relacion_entity_type_b
     */
    public function setRelacionEntityTypeB($relacion_entity_type_b)
    {
        $this->relacion_entity_type_b = $relacion_entity_type_b;
    }


}