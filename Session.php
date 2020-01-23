<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 25/03/2018
 * Time: 23:26
 */
//include "../config.php";
include_once "../core/ClientC.php";
class session
{


    function Recherchermdp($email)
    {
        $mdp="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $mdp=$row['mdp'];
        }
        return $mdp;
    }
    function  ReturnFirstname($email)
    {
        $nom="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $nom = $row['nom'];
        }
        return $nom;

    }
    function  ReturnLastname($email)
    {  $prenom="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $prenom=$row['prenom'];
        }
        return $prenom;
    }

    function  ReturnMail($email)
    {  $prenom="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $mail=$row['email'];
        }
        return $mail;
    }

    function  ReturnMdp($email)
    {  $prenom="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $mdp=$row['mdp'];
        }
        return $mdp;
    }

    function  ReturnIdentifiant($email)
    {  $prenom="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $identifiant=$row['id'];
        }
        return $identifiant;
    }

    function  ReturnTelephone($email)
    {  $prenom="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $telephone=$row['telephone'];
        }
        return $telephone;
    }

    function  ReturnAdresse($email)
    {  $prenom="";
        $Client=new ClientC();
        $liste=$Client->rechercher($email);
        foreach ($liste as $row)
        {
            $adresse=$row['adresse'];
        }
        return $adresse;
    }
    function  veriflogin($login,$password)
    { $x="";
        $cl=new session();
        $pass=$cl->Recherchermdp($login);
        if(empty($pass))
        {
            $x="Email n'existe pas";
        }
        else
        {
            if($password==$pass)
            {
                $x="";
            }
            else
            {
                $x="Votre mot de passe est incorrect";
            }
        }

      return $x;
    }

function verification($a)
{
    if ($a==1) {
        return 15;
    }
    elseif($a==2)  {
        return 16;
    }
}
}