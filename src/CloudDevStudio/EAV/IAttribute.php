<?php

namespace CloudDevStudio\EAV;

interface IAttribute
{
    public function getMeta();
    public function getValue();
    public function getType();
    public function deleteValue();
    public function updateValue($new_value);
}