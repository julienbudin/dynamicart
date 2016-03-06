<?php

namespace ChapitreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ChapitreBundle\Entity\Chapitre;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class DefaultController extends Controller
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

    
}
