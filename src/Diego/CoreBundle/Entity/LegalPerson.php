<?php

namespace Diego\CoreBundle\Entity;

use Diego\CoreBundle\Entity\Person;
use Diego\CoreBundle\Type\PersonType;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="legalperson")
 */
class LegalPerson extends Person
{
    /**
     * @ORM\Column(type="string", length=14)
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