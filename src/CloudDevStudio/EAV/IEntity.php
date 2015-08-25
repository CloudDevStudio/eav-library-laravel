<?php

namespace CloudDevStudio\EAV;


interface IEntity
{
    public function getBaseAttributes();
    public function hasAttribute($attribute_name);
}