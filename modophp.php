 <?php



include "../entities/lignecommande.php";








$errors = [];

if(!isset($_POST['color'])){
    $errors['color']="Vous n'avez pas entrer couleur";
}



if(!empty($errors)){
   session_start();
$_SESSION['errors']=$errors;
    header("Location: modo.php");
   exit;  
    
    
    
}






else{

    //////////////////////////////////////    les  sessions de  MD   ///////////////////////////////////
    
    
    
    session_start();


$_SESSION['moidprod']=174;
$_SESSION['moimageprodprod']="images/cart/glasses.jpg";
$_SESSION['prixprod']=36;
$_SESSION['monomprod']="mozitoun";
    
    
    
                                                    ///les  sessions de  MS\\\
    
    $_SESSION['moidcl']=$_SESSION['id'];
$_SESSION['monomcl']=$_SESSION['nom'];
$_SESSION['moadressecl']=$_SESSION['mail'];
$_SESSION['motelcl']=$_SESSION['telephone'];
   

     /////////////////////////////////////////////////////////////////////////////////////////////////////
    
$ligne = new lignecommandelunettevue($_SESSION['moidprod'],"b",1,"moeeee","sans","non","teite",$_SESSION['monomprod'],$_SESSION['prixprod']);

if(isset($_POST['ajouter'])){
if(isset($_POST['color'])){
    $ligne->setcolor($_POST['color']);
    }
    $ligne->setverre($_POST['verre']);
    
    
    


}
    



$_SESSION['lunettevue'] = serialize($ligne);
if($ligne->getverre()=="Verre Progressif"){
header("Location: commande1prog.php");
   exit;
    }
else{
  header("Location: commande1.php");
   exit;  
}
}




?>