<?php

namespace Diego\CoreBundle\Entity;

use Diego\CoreBundle\Entity\LegalPerson;
use Diego\CoreBundle\Entity\NaturalPerson;
use Diego\CoreBundle\Type\PersonType;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\InheritanceType;

use Symfony\Component\Validator\Constraints;

/**
 * @Entity
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="type", type="persontype")
 * @DiscriminatorMap({"person" = "Person", "naturalPerson" = "NaturalPerson", "legalPerson" = "LegalPerson"})
 */
abstract class Person
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    protected $type;
    
    /**
     * @Column(type="string", length=100)
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }            

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getType()
    {
        return $this->type;
    }            

    public function setType($personType)
    {
        $this->type = $personType;
    }

    public function getName()
    {
        return $this->name;
    }            

    public function setName($name)
    {
        $this->name = $name;
    }

    abstract function getDocument();
    abstract function setDocument($document);
}