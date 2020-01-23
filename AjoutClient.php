<?php
include "../entities/Client.php";
include "../core/ClientC.php";

if ((isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['mail']))&&(isset($_POST['mdp']))&&(isset($_POST['mdpp'])))
{

$ClientC=new ClientC();
          	     $errors=$ClientC->verif($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mdp'],$_POST['mdpp']);
          	     


          if (empty($errors))
          {
          
            
$ClientC=new ClientC();
        $token= $ClientC->str_random(60);

            $client=new client($_POST['nom'],$_POST['prenom'],$_POST['mdp'],$_POST['mail'],$token);


            $ClientC=new ClientC();
            $ClientC->ajouterClient($client);
            
            //header('Location: login.php');


            
           
  }
  }   

          	     	

?>










