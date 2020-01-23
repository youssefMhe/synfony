 
 
 <?php
include "../entities/lignecommande.php";

   session_start();
    $obj = unserialize($_SESSION['lentille']);
///////////////////////////////////////////////////////////
$_SESSION['mocodeoffer']="momozitoun";
$_SESSION['moper']=0.25;

////////////////////////////////////////////////////////////



if(isset($_POST['ajouteraupan'])){
$tab = array();
$tab = unserialize($_COOKIE['mozitounlentille'.$_SESSION['moidcl']]);
//$tab = array($obj,$obj,$obj);

//$tab = array($obj,$obj,$obj); ////////////bech iekhdem;
//$var = count($tab);
     if($_SESSION['capt1']==1){
         $obj->settotale( $obj->gettotale()- $obj->gettotale()*$_SESSION['moper']);
         $_SESSION['capt1']=0;

     }
$tab[]=$obj;
$tab_ser = serialize($tab);
setcookie('mozitounlentille'.$_SESSION['moidcl'],$tab_ser,time()+24*60*60);



/*setcookie('mozitoun'); //écrasement du cookie par un cookie vide
unset($_COOKIE['mozitoun']);*/

    
    header("Location: panier.php");
   exit;



$tabcoo = unserialize($_COOKIE['mozitoun'.$_SESSION['moidcl']]);
//print_r($tabcoo);

//echo $tabcoo[0]->getnom();
/*echo $tabcoo[1]->gettypee();
echo $tabcoo[2]->gettypee();*/
//echo $tabcoo[3]->gettypee();
}

if(isset($_POST['promosubmit'])){
    
    

  if($_POST['promocode']==$_SESSION['mocodeoffer'])  {
      
     $obj->settotale( $obj->gettotale()- $obj->gettotale()*$_SESSION['moper']);
      $_SESSION['capt1']=1;
      
  }

}







?>
 
 
 
 
 
 
 <html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  	
  	
  	
  	
  	
  	<link rel="stylesheet" type="text/css" href="commande.css">
  	
  	
  	
  	<script>
      
    function promofn(){
        if(document.getElementById('promo').checked == true){
            
            document.getElementById('ajouter').style.display = 'inline';  
            document.getElementById('promocode').style.display = 'inline';  
        }
        else{
           
            document.getElementById('ajouter').style.display = 'none';  
            document.getElementById('promocode').style.display = 'none';  
        }
    
    
    }
    </script>
  	
  	
  	
  	
  	
  	
</head>
<body>
  
  
  <form method="post" action="lentilleinfo.php">
  
   <section id="mo">
   <center>
<table  style="width: 80%;" id="tabajoutpanier">
    <tbody>
       
        <tr>
            <td colspan="3" id="mesprod" >MES PRODUITS</td>
        </tr>
        <tr>
            <td>NOTRE EQUIPE D4EXPERT AVOTRE ECOUTE</td>
            <td><strong>tél.:52925466</strong><br>Du lundi au vendredi de 9h a 18h30<br>(prix d'un appel local)</td>
            <td>
               Par e-mail <a href="#">en clicant ici!</a> 
            </td>
        </tr>
        
        <?php $obj->settotale($obj->gettotale()*$obj->getqte()); ?>
        <tr>
           <td><img src="<?php echo $obj->getimage(); ?>" style="width: 300px;height: 150px;"></td>
           <td>
            LENTILLE DE VUE :
            <p style="font-family: monospace; font-size: 35px; color: orangered;"><strong><?php
               
               echo $obj->getnom();
               
               ?></strong></p>
            <p><?php
                echo " <strong>Rayon</strong> : ".$obj->getrayon();
                echo "<br>";
                echo " <strong>Dametre</strong> : ".$obj->getdiametre();
                echo "<br>";
                echo " <strong>Cylendre</strong> : ".$obj->getcylendre();
                echo "<br>";
                echo " <strong>Axe</strong> : ".$obj->getaxe();
                echo "<br>";
                echo " <strong>Sphere</strong> : ".$obj->getsphere();
                echo "<br>";
                ?></p>
            </td>
            <td>
                   
                   
                   
                    <p style="text-align: right;font-family: monospace; font-size: 25px;"><strong><?php echo "Totoale :  ".$obj->gettotale()." £";?></strong></p> 
            </td>
            
        </tr>
        <tr>
           
            <td>MYRIEMOPTIC SERVICES :</td>
            <td>
                <p style="font-size: 10px;">
                    PAIEMENT EN MAGASIN <br>
                    LIVRAISON EN 24H <br>
                    GARANTIE  2 ANS "CASSE MOTURE & VERRE"<br>
                    GARANTE 3 MOIS "ADAPTATION TOUS TYPES DE VERRES"<br>1er PARTENAITE DES COMPEMENTAIRES SANTE
                </p>
            </td>
            <td>
                OFFERT
            </td>
            
            
        </tr>
        <tr>
            <td style="text-align: right" colspan="2">
                <input type="checkbox" name="promo" id="promo" onclick="promofn()">j'ai un code promo
            </td>
            <td><input type="submit" value="valider" id="ajouter" name="promosubmit" style="width: 30%;padding: 4px; border: none; display: none;" >
            <input type="text" name="promocode" id="promocode" style="width: 60%; display:none;" > </td>
            
        </tr>
        <tr>
            <td style="text-align: right" colspan="2"><strong>Montant total :</strong></td>
            <td><strong><?php echo "Totoale :  ".$obj->gettotale()." DT";?></strong></td>
        </tr>
        <tr>
            <td style="background-color: whitesmoke;"></td>
            <td id="annuler"><input type="submit" value="ANNULER"  id="annuler" style="width: 100%;padding: 10px; border: none; border-radius: 90px;" ></td>
            <td id="ajouter"><input type="submit" name="ajouteraupan" value="AJOUTER A VOTRE PANIER ."   id="ajouter" style="width: 100%;padding: 10px; border: none; border-radius: 90px;" ></td>
        </tr>
        
        
    </tbody>
</table>
   </center>  
     
   </section>   
       
        </form>
         
          
           
            
             
              
               
                
                 
                  
                   
                     
</body>
</html>