<?php

namespace Diego\CoreBundle\Controller;

use Diego\CoreBundle\Entity\LegalPerson;
use Diego\CoreBundle\Entity\NaturalPerson;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $diego = new NaturalPerson();
        $diego->setName('Diego Souza');
        $diego->setDocument('33454865808');
        
        $casoft = new LegalPerson();
        $casoft->setName('Casoft Tecnologia');
        $casoft->setDocument('12345678901234');
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($diego);
        $em->persist($casoft);
        $em->flush();
        
        return $this->render('DiegoCoreBundle:Default:index.html.twig',
                array('people' => array($diego, $casoft))
        );
    }
}
