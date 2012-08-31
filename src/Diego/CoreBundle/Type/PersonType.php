<?php

namespace Diego\CoreBundle\Type;

use Diego\CoreBundle\Type\EnumType;

class PersonType extends EnumType
{
    const NATURAL = 'NATURAL';
    const LEGAL = 'LEGAL';
    
    protected $name = 'persontype';
    protected $values = array(self::NATURAL, self::LEGAL);
}