<?php


namespace CloudDevStudio\EAV;

class Decimal extends Value
{
    /**
     * @param $format
     * @return bool|string
     */
    public function getFormatedValue()
    {
        return number_format($this->getValue(), 2);
    }
}