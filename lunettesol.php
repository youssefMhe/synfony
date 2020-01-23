 <?php

include "../entities/lignecommande.php";


$errors = [];

if(!isset($_POST['color'])){
    $errors['color']="Vous n'avez pas entrer couleur";
}
if($_POST['qtesol']<=0){
        $errors['qtesol']="Vous n'avez pas entrer la quantite";

}


if(!empty($errors)){
   session_start();
$_SESSION['errors']=$errors;
    header("Location: modosol.php");
   exit;  
    
    
    
}






else{

////////////////////////  //////               session       /////   ///////////////////////////////// 
session_start();

    
    $_SESSION['moidprod']=2;
$_SESSION['moimageprodprod']="images/cart/mail.png";
$_SESSION['prixprod']=36;
$_SESSION['monomprod']="mozitoun";
    
    
   $$_SESSION['moidcl']=$_SESSION['id'];
$_SESSION['monomcl']=$_SESSION['nom'];
$_SESSION['moadressecl']=$_SESSION['mail'];
$_SESSION['motelcl']=$_SESSION['telephone'];
   
   
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    
    

$ligne = new lignecommande($_SESSION['moidprod'],"black",1,$_SESSION['monomprod'],$_SESSION['prixprod']);


if(isset($_POST['tosoldetails'])){
    
    $ligne->setcolor($_POST['color']);
    $ligne->setqte($_POST['qtesol']);
    //$ligne->settotale($_POST['qtesol']*$ligne->gettotale());
    
    
    
    
}
$ligne->setimage($_SESSION['moimageprodprod']);
$_SESSION['lunettesol'] = serialize($ligne);



header("Location: lunettesolinfo.php");
   exit;


}




?>