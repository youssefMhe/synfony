<?php
class Client
{
private $id;
private $nom;
private $prenom;
private $mdp;
private $mdpp;
private $mail;
private $confirmation_t;
private $telephone;
private $adresse;





public function __construct($id,$nom,$prenom,$mdp,$mail,$confirmation_t,$telephone,$adresse){
    $this->id=$id;
$this->nom = $nom;
$this->prenom= $prenom;
$this->mdp= $mdp;
$this->mail= $mail;
$this->confirmation_t=$confirmation_t;
$this->telephone=$telephone;
$this->adresse=$adresse;



}
    public function getId()
    {
        return $this->id;
    }
public function getNom()
{
return $this->nom;
}
public function getPrenom()
{
return $this->prenom;
}
public function getMdp()
{
return $this->mdp;
}
public function getMdpp()
{
return $this->mdpp;
}

public function getMail()
{
return $this->mail;
}
public function getCt()
{
return $this->confirmation_t;
}
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }



public function setNom($nom)
{
$this->nom=$nom;
}
public function setPrenom($prenom)
{
$this->prenom=$prenom;
}
public function setMdp($mdp)
{
$this->mdp=$mdp;
}
public function setMdpp($mdpp)
{
$this->mdpp=$mdpp;
}
public function setMail($mail)
{
$this->mail=$mail;
}
public function setCt($confirmation_t)
{
 $this->confirmation_t=$confirmation_t;
}
    public function setTelephone($telephone)
    {
         $this->telephone=$telephone;
    }
    public function setAdresse($adresse)
    {
        $this->adresse=$adresse;
    }

    public function setId($id)
    {
        $this->id=$id;
    }






}







?>