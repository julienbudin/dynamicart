<?php

namespace ReponseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="ReponseBundle\Repository\ReponseRepository")
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="reponse_correct", type="integer")
     */
    private $reponseCorrect;

    /**
     * @var int
     *
     * @ORM\Column(name="enonce_reponse", type="integer")
     */
    private $enonceReponse;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reponseCorrect
     *
     * @param integer $reponseCorrect
     * @return Reponse
     */
    public function setReponseCorrect($reponseCorrect)
    {
        $this->reponseCorrect = $reponseCorrect;

        return $this;
    }

    /**
     * Get reponseCorrect
     *
     * @return integer 
     */
    public function getReponseCorrect()
    {
        return $this->reponseCorrect;
    }

    /**
     * Set enonceReponse
     *
     * @param integer $enonceReponse
     * @return Reponse
     */
    public function setEnonceReponse($enonceReponse)
    {
        $this->enonceReponse = $enonceReponse;

        return $this;
    }

    /**
     * Get enonceReponse
     *
     * @return integer 
     */
    public function getEnonceReponse()
    {
        return $this->enonceReponse;
    }
}
