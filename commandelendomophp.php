 <?php 


include "../entities/lignecommande.php";


$errors = [];

if(empty($_POST['rayonog']) || empty($_POST['rayonod'])){
    
    $errors['rayon']="Vous n'avez pas entrer le rayon <br>";
    
}

if(!is_numeric($_POST['rayonog'])|| !is_numeric($_POST['rayonod'])|| !is_numeric($_POST['diametreog'])|| !is_numeric($_POST['diametreod'])){
    $errors['rayon']=" les champs rayon et diametre ne doivent pas contenir  des lettres";
}

if(empty($_POST['diametreog']) || empty($_POST['diametreod'])){
    
    $errors['diametre']=".Vous n'avez pas entrer le diametre <br>";
    
}
if($_POST['cylindreog']=="" || $_POST['cylindreod']==""){
    
    $errors['cylindre']=".Vous n'avez pas entrer le cylindre <br>";
    
}
if($_POST['axeod']=="" || $_POST['axeog']==""){
    
    $errors['axe']=".Vous n'avez pas entrer l'axe <br>";
    
}
if($_POST['sphereod']=="" || $_POST['sphereog']==""){
    
    $errors['sphere']=".Vous n'avez pas entrer le champ sphere <br>";
    
}
if($_POST['moqteg']<=0 && $_POST['moqted']<=0){
    
    $errors['quantite']=".erreur quantite <br>";
    
}


/*if(!isset($_POST['photoch'])){

    $errors['color']=".Vous n'avez pas entrer couleur <br>";

}*/



if(!empty($errors)){
   session_start();
$_SESSION['errors']=$errors;
    header("Location: commandelendomo.php");
   exit;  
    
    
    
}

else{


session_start();
    
    ////////////////////////////////////////////////////         session    ///////////////////////////////////////////////////
    
$_SESSION['moidprod']=2;
$_SESSION['moimageprodprod']="images/cart/three.png";
$_SESSION['prixprod']=36;
$_SESSION['monomprod']="mozitoun";
    
    
    $_SESSION['moidcl']=$_SESSION['id'];
$_SESSION['monomcl']=$_SESSION['nom'];
$_SESSION['moadressecl']=$_SESSION['mail'];
$_SESSION['motelcl']=$_SESSION['telephone'];
   
   

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
$ligne = new lignecommadelentille($_SESSION['moidprod'],"",1,$_SESSION['monomprod'],$_SESSION['prixprod'],"","","","","");

if(isset($_POST['ajouterpan'])){
    
    $ligne->setimage($_SESSION['moimageprodprod']);
   $ligne->setrayon($_POST['rayonog']." ; ".$_POST['rayonod']);
   $ligne->setdiametre($_POST['diametreog']." ; ".$_POST['diametreod']);
    
    
$ligne->setcylendre($_POST['cylindreog']." ; ".$_POST['cylindreod']);
$ligne->setaxe($_POST['axeog']." ; ".$_POST['axeod']);
$ligne->setsphere($_POST['sphereog']." ; ".$_POST['sphereod']);
    $ligne->setqte($_POST['moqteg']+$_POST['moqted']);
    
}
$_SESSION['lentille'] = serialize($ligne);

 header("Location: lentilleinfo.php");
   exit;
}

?>