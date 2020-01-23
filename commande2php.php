 <?php 


include "../entities/lignecommande.php";

$errors = [];

if(isset($_POST['teinteb'])&&!isset($_POST['teinte'])){
    $errors['color']="Vous n'avez pas entrer couleur";
    
    
    
    
}
if(isset($_POST['photoc'])&&!isset($_POST['photoch'])){
    $errors['color']="Vous n'avez pas entrer couleur";
    
    
    
    
}



if(!empty($errors)){
   session_start();
$_SESSION['errors']=$errors;
    header("Location: commande2.php");
   exit;  
    
    
    
}

else{


session_start();
 $obj = unserialize($_SESSION['lunettevue']);
$ligne = new lignecommandelunettevue($obj->getidproduit(),$obj->getcolor(),$obj->getqte(),$obj->getverre(),$obj->getmarquedeverre(),$obj->gettypee(),$obj->gettypeteinte(),$obj->getnom(),$obj->gettotale());

if(isset($_POST['sansteinte'])){
    $ligne->settypeteinte("sans-teinte (INCLUS)");
}
else if(isset($_POST['teinteb'])){
    if($_POST['teinte']=="gris"){
        $ligne->settypeteinte("teinté Gris (+15)");
    }
    else if($_POST['teinte']=="brun"){
                $ligne->settypeteinte("teinté Brun (+15)");

    }
    else if($_POST['teinte']=="vert"){
                $ligne->settypeteinte("teinté Vert (+15)");

    }
        
        $ligne->settotale($ligne->gettotale()+15);
}
else if(isset($_POST['photoc'])){
    if($_POST['photoch']=="gris"){
$ligne->settypeteinte("PHOTOCHROMIQUE Gris (+40)");    }
    else if($_POST['photoch']=="brun"){
$ligne->settypeteinte("PHOTOCHROMIQUE Brun (+40)");
    }
        $ligne->settotale($ligne->gettotale()+15);
}
//session_destroy();
$_SESSION['lunettevue'] = serialize($ligne);

 header("Location: commande3.php");
   exit;


}


?>