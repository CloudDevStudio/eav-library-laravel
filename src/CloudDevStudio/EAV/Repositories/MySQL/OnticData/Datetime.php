<?php


namespace CloudDevStudio\EAV;

class Datetime extends Value
{
    /**
     * @param $format
     * @return bool|string
     */
    public function getFormatedDate($format)
    {
        return date($format, $this->getValue());
    }
}