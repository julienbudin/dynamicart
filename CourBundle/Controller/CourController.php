<?php

namespace CourBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CourBundle\Entity\Cour;
use ChapitreBundle\Entity\Chapitre;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;


class CourController extends Controller
{
    /**
     * @Route("/")
     */



    public function ajoutAction(){

        $cour = New Cour();
        $cour->setNom('Cour de photo');
        $cour->setDate('Chapitre de test');
        $cour->setMatiere('Photo');
        $cour->setActif(true);
        $cour->setExpire('Chapitre de test');



        $em = $this->getDoctrine()->getManager();

        $em->persist($cour);
        $em->flush();

        return new Response(
            'Created product id: '.$cour->getId()

        );
        
    }


    public function afficheAction()
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $cour = $em
            ->getRepository('CourBundle:Cour')
            ->findAll()
        ;

        if (null === $cour) {
            throw new NotFoundHttpException("L'annonce d'id n'existe pas.");
        }

        // On récupère la liste des candidatures de cette annonce
        $chapitre = $em
            ->getRepository('ChapitreBundle:Chapitre')
            ->findAll()
        ;

        return $this->render('CourBundle:Default:index.html.twig', array(
            'cour'           => $cour,
            'chapitre' => $chapitre
        ));
    }

    /*
      public function  afficheAction(){

        $em = $this->getDoctrine()->getManager();

        $cour = $em->getRepository('CourBundle:Cour')->findAll();

        return $this->render('CourBundle:Default:index.html.twig', array('cour' => $cour));

    }
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cour = $em->getRepository('CourBundle:Cour')->findAll();

        return $this->render('CourBundle:Default:affiche.html.twig', array('cour' => $cour));
    }
}
