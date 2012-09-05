<?php

namespace Diego\CoreBundle\Entity;

use Diego\CoreBundle\Entity\BaseEntity;
use Diego\CoreBundle\Entity\LegalPerson;
use Diego\CoreBundle\Entity\NaturalPerson;
use Diego\CoreBundle\Type\PersonType;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Diego\CoreBundle\Repository\PersonRepository")
 * @ORM\Table(name="person")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="persontype")
 * @ORM\DiscriminatorMap({"NATURAL" = "NaturalPerson", "LEGAL" = "LegalPerson"})
 */
abstract class Person extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $type;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }            

    public function getName()
    {
        return $this->name;
    }            

    public function setName($name)
    {
        $this->name = $name;
    }

    abstract function getType();
    abstract function getDocument();
    abstract function setDocument($document);
}