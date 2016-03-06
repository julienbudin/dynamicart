<?php

namespace ChapitreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre")
 * @ORM\Entity(repositoryClass="ChapitreBundle\Repository\ChapitreRepository")
 */
class Chapitre
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=255)
     */
    private $document;

    /**
     * @ORM\ManyToOne(targetEntity="CourBundle\Entity\Cour", fetch="EAGER")
     * @ORM\JoinColumn(nullable=false)
     */

    protected $Cour;


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
     * Set nom
     *
     * @param string $nom
     * @return Chapitre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Chapitre
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set document
     *
     * @param string $document
     * @return Chapitre
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set Cour
     *
     * @param \CourBundle\Entity\Cour $cour
     * @return Chapitre
     */
    public function setCour(\CourBundle\Entity\Cour $cour = null)
    {
        $this->Cour = $cour;

        return $this;
    }

    /**
     * Get Cour
     *
     * @return \CourBundle\Entity\Cour 
     */
    public function getCour()
    {
        return $this->Cour;
    }
}
