<?php

namespace ChapitreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ChapitreBundle\Entity\Chapitre;
use CourBundle\Entity\Cour;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;

class ChapitreController extends Controller
{
    /**
     * @Route("/")
     */
    /*
    public function indexAction()
    {
        return $this->render('ChapitreBundle:Default:index.html.twig');
    }
    */
    public function ajoutAction(){

        $chapitre = New Chapitre();
        $chapitre->setNom('Chapitre de test');
        $chapitre->setContenu('blabjhbfhhvfvh');
        $chapitre->setDocument('fichier');


        $em = $this->getDoctrine()->getManager();

        $em->persist($chapitre);
        $em->flush();

        return new Response(
            'Created product id: '.$chapitre->getId()

        );

    }



    
     public function  afficheAction(){

        $em = $this->getDoctrine()->getManager();

        $chapitre = $em->getRepository('ChapitreBundle:Chapitre')->findAll();

        return $this->render('ChapitreBundle:Default:index.html.twig', array('chapitre' => $chapitre));

    }

}
