<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="profil")
 **/
class Profil
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /**
     * Many Profils have Many Ingenieurs.
     * @ManyToMany(targetEntity="Ingenieur", mappedBy="profil")
     */
    private $ingenieurs;
    
    public function __construct()
    {
        $this->ingenieurs = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getIngenieurs()
    {
        return $this->ingenieurs;
    }
    public function setIngenieur($ingenieurs)
    {
        $this->ingenieurs = $ingenieurs;
    }
}

?>