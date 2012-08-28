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
class LegalPerson extends Person
{
    /**
     * @Column(type="string", length=14)
     */
    private $cnpj;
    
    public function __construct()
    {
        $this->setType(PersonType::LEGAL);
    }
    
    public function getDocument()
    {
        return $this->cnpj;
    }
    
    public function setDocument($document)
    {
        $this->cnpj = $document;
    }
}