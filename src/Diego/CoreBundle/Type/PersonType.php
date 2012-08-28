<?php

namespace Diego\CoreBundle\Type;

use Diego\CoreBundle\Type\EnumType;

class PersonType extends EnumType
{
    const NATURAL = 'naturalPerson';
    const LEGAL = 'legalPerson';
    
    protected $name = 'persontype';
    protected $values = array(self::NATURAL, self::LEGAL);
}