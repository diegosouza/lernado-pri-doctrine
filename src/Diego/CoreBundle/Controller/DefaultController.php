<?php

namespace Diego\CoreBundle\Controller;

use Diego\CoreBundle\Entity\LegalPerson;
use Diego\CoreBundle\Entity\NaturalPerson;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function insertAction()
    {
        $diego = new NaturalPerson();
        $diego->setName('Diego Souza');
        $diego->setDocument('33454865808');
        
        $empresa = new LegalPerson();
        $empresa->setName('Empresa Tecnologia');
        $empresa->setDocument('12345678901234');

        $em = $this->getDoctrine()->getEntityManager();
        
        $em->persist($diego);
        $em->persist($empresa);
        $em->flush();
        
        return $this->render('DiegoCoreBundle:Default:index.html.twig',
                array('people' => array($diego, $empresa))
        );
    }
}
