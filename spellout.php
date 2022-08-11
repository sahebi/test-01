<?php
use Salarmehr\Cosmopolitan\Cosmo;

class Spellout
{
    private $_spellout;
    public function __construct($number, $language)
    {
        if(!is_numeric($number))
        {
            throw new ErrorException("'{$number}' is not valid a number", -1000);
        }
    
        if(!in_array($language, ResourceBundle::getLocales('')))
        {
            throw new ErrorException("'{$language}' is not valid locale", -1001);
        }
        $cosmo = new Cosmo($language);
        $this->_spellout = $cosmo->spellout($number);
    }

    public function getValue()
    {
        return $this->_spellout;
    }

    public function __toString()
    {
        return $this->_spellout;
    }
}