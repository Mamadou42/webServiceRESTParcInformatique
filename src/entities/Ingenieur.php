<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="ingenieur")
 **/
class Ingenieur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $password;
    /**
     * Many ingenieurs have one profil. This is the owning side.
     * @ManyToOne(targetEntity="Profil", inversedBy="ingenieurs")
     * @JoinColumn(name="profil_id", referencedColumnName="id")
     */
    private $profil;
     /**
     * Many Ingenieurs have Many Serveurs.
     * @ManyToMany(targetEntity="Serveur",inversedBy="ingenieurs")
    
     */
    private $serveurs;

    public function __construct()
    {
        $this->serveurs = new ArrayCollection();
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

    public function getPrenom()
    {
        return $this->date;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setDEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getProfil()
    {
        return $this->profil;
    }
    public function setUser($profil)
    {
        $this->profil = $profil;
    }
    public function getServeur()
    {
        return $this->serveurs;
    }
    public function setServeur($serveurs)
    {
        $this->serveurs = $serveurs;
    }
}

?>