<?php

namespace Diego\CoreBundle\Entity;

use Diego\CoreBundle\Entity\Person;
use Diego\CoreBundle\Type\PersonType;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="naturalperson")
 */
class NaturalPerson extends Person
{
    /**
     * @ORM\Column(type="string", length=11)
     */
    private $cpf;

    public function getDocument()
    {
        return $this->cpf;
    }

    public function setDocument($document)
    {
        $this->cpf = $document;
    }

    public function getType()
    {
        return PersonType::NATURAL;
    }
}