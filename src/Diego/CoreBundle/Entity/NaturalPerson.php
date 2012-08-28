<?php

namespace Diego\CoreBundle\Entity;

use Diego\CoreBundle\Entity\Person;
use Diego\CoreBundle\Type\PersonType;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;

use Symfony\Component\Validator\Constraints;

/**
 * @Entity
 */
class NaturalPerson extends Person
{
    /**
     * @Column(type="string", length=11)
     */
    private $cpf;

    public function __construct()
    {
        $this->setType(PersonType::NATURAL);
    }
    
    public function getDocument()
    {
        return $this->cpf;
    }

    public function setDocument($document)
    {
        $this->cpf = $document;
    }    
}