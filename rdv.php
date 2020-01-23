<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 29/03/2018
 * Time: 22:23
 */
?>



<?php
class rdvv
{
    private $idd;
    private $emaill;
    private $da;
    private $heure;
    private $raison;
    private $confirmation;






    public function __construct($idd,$emaill,$da,$heure,$raison,$confirmation){
        $this->idd = $idd;
        $this->emaill= $emaill;
        $this->da= $da;
        $this->heure= $heure;
        $this->raison= $raison;
        $this->confirmation= $confirmation;




    }

    public function getid()
    {
        return $this->idd;
    }
    public function getEmail()
    {
        return $this->emaill;
    }
    public function getDate()
    {
        return $this->da;
    }
    public function getHeure()
    {
        return $this->heure;
    }
    public function getRaison()
    {
        return $this->raison;
    }
    public function getC()
    {
        return $this->confirmation;
    }





    public function setId($Idd)
    {
        $this->Idd=$Idd;
    }
    public function setEmail($emaill)
    {
        $this->emaill=$emaill;
    }

    public function setDate($Date)
    {
        $this->Date=$Date;
    }
    public function setTelephone($heure)
    {
        $this->heure=$heure;
    }


    public function setRaison($raison)
    {
        $this->raison=$raison;
    }
    public function setC($confirmation)
    {
        $this->confirmation=$confirmation;
    }




}







?>
