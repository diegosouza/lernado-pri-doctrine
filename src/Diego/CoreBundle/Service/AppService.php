<?php

namespace Diego\CoreBundle\Service;

use Doctrine\ORM\EntityManager;

class AppService
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findWithBusinessLogic()
    {
        $personRepository = $this->entityManager->getRepository('DiegoCoreBundle:Person');
        return $personRepository->findLatest(array());
    }
}