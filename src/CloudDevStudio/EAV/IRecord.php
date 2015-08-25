<?php

namespace CloudDevStudio\EAV;


interface IRecord
{
    public function getExistingData();
    public function addAtrribute(string $name, $value);
    public function add($data_array);
    public function updateSingleAttribute(string $attribute_name, $new_value);
    public function updateMultipleAttributes($data_array);
    public function updateAllAttributes($data_array);
    public function delete($id_record);
}