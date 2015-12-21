<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV\Repositories\MySQL;


use Illuminate\Support\Facades\DB;
use CloudDevStudio\EAV\Interfaces\MetaData\RelationInterface;

class Relation implements RelationInterface
{
    /**
     * Gets the metadata related to this relation
     * @param $entityTypeId
     * @param $attributeId
     */
    public function getMeta($relationId)
    {
        $query = DB::table('eav_relations')
            ->where('relation_id', $relationId)
            ->first();

        return $query;
    }

}