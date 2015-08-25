<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model implements IEntity
{

    protected $table;

    public function __construct($entity_name)
    {
        $this->table = $entity_name;
    }
    /**
     *
     */
    public function getBaseAttributes()
    {

    }

    /**
     * @param $attribute_name
     */
    public function hasAttribute($attribute_name)
    {

    }
}