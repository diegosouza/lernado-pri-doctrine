<?php

namespace Diego\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PersonRepository extends EntityRepository
{
    public function findLatest(array $criteria, $orderBy = null, $limit = 10)
    {
        return parent::findBy($criteria, $orderBy, $limit);
    }
}