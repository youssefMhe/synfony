  <?php
/*include "../entities/lignecommande.php";
                             

if(isset($_COOKIE['mozitoun'])){

//print_r($tabcoo);

 session_start();
    echo "mohjgbj";
                            
                                       $tab_ser = serialize($tabcoo);
                                       setcookie('mozitoun',$tab_ser,time()+15);
    
    header("Location: panier.php");
   exit;
                                }*/



include "../entities/lignecommande.php";

include "../entities/commande.php";
include "../core/commandec.php";
include "../entities/facturecommande.php";
include "../core/facturecommandec.php";
   session_start();
////////////////////////////////////////  


 /*$_SESSION['moidcl']=$_SESSION['id'];
$_SESSION['monomcl']=$_SESSION['nom'];
$_SESSION['moprenomcl']=$_SESSION['prenom'];
$_SESSION['motelcl']=$_SESSION['telephone'];*/



///////////////////////////////////////

 $tabcoo = unserialize($_COOKIE['mozitoun'.$_SESSION['moidcl']]);
 
if(isset($_POST['delete'])&&!empty($tabcoo)){
   
                             
   
                                unset($tabcoo[$_SESSION['mo']]);
                                setcookie('mozitoun'.$_SESSION['moidcl'], '', time()-24*60*60 , '/');
                                $tab_ser = serialize($tabcoo);
                                setcookie('mozitoun'.$_SESSION['moidcl'],$tab_ser,time()+24*60*60);
    

    header("Location: panier.php");
   exit;
    
    
    }





if(isset($_COOKIE['mozitounlentille'.$_SESSION['moidcl']])){
$tabcool = unserialize($_COOKIE['mozitounlentille'.$_SESSION['moidcl']]);
    
}
if(isset($_POST['deletel'])&&!empty($tabcool)){
   
                                session_start();
   
                                unset($tabcool[$_SESSION['mol']]);
                                setcookie('mozitounlentille'.$_SESSION['moidcl'], '', time()-24*60*60 , '/');
                                $tab_serl = serialize($tabcool);
                                setcookie('mozitounlentille'.$_SESSION['moidcl'],$tab_serl,time()+24*60*60);
    

    header("Location: panier.php");
   exit;
    
    
    }








if(isset($_COOKIE['mozitounsol'.$_SESSION['moidcl']])){
$tabcoosol = unserialize($_COOKIE['mozitounsol'.$_SESSION['moidcl']]);
}
if(isset($_POST['deletesol'])&&!empty($tabcoosol)){
   
                                session_start();
   
                                unset($tabcoosol[$_SESSION['mosol']]);
                                setcookie('mozitounsol'.$_SESSION['moidcl'], '', time()-24*60*60 , '/');
                                $tab_sersol = serialize($tabcoosol);
                                setcookie('mozitounsol'.$_SESSION['moidcl'],$tab_sersol,time()+24*60*60);
    

    header("Location: panier.php");
   exit;
    
    
    }







    if(isset($_POST['passercommande'])){
    $date =  new DateTime();
    $idproduits="";
    $totale=0;
    $description="";
        $qte=0;
        
        $datel =  new DateTime();
    $idproduitsl="";
    $totalel=0;
    $descriptionl="";
        $qtel=0;
        
        $datesol =  new DateTime();
    $idproduitssol="";
    $totalesol=0;
    $descriptionsol="";
        $qtesol=0;
        
       if(!empty($tabcoo)){  
        
    for($j=0;$j<count($tabcoo);$j++){
        
        
        $idproduits=$idproduits.$tabcoo[$j]->getidproduit()."(".$tabcoo[$j]->getqte().")".";";
        $totale=$totale+$tabcoo[$j]->gettotale();
        $description=$description.$tabcoo[$j]->getcolor().$tabcoo[$j]->getverre().$tabcoo[$j]->getmarquedeverre().$tabcoo[$j]->gettypee().$tabcoo[$j]->gettypeteinte().";";
        $qte=$qte+$tabcoo[$j]->getqte();
    
    }
       
            $totale=$totale*$qte;
        }
        
          if(!empty($tabcool)){
        for($h=0;$h<count($tabcool);$h++){
        
        
        $idproduitsl=$idproduitsl.$tabcool[$h]->getidproduit()."(".$tabcool[$h]->getqte().")".";";
        $totalel=$totalel+$tabcool[$h]->gettotale();
        $descriptionl=$descriptionl.$tabcool[$h]->getrayon().$tabcool[$h]->getdiametre().$tabcool[$h]->getcylendre().$tabcool[$h]->getaxe().$tabcool[$h]->getsphere().";";
        $qtel=$qtel+$tabcool[$h]->getqte();
    
    }
       
            $totalel=$totalel* $qtel;
        }
       
        if(isset($tabcoosol)){
        for($k=0;$k<count($tabcoosol);$k++){
        
        
        $idproduitssol=$idproduitssol.$tabcoosol[$k]->getidproduit()."(".$tabcoosol[$k]->getqte().")".";";
        $totalesol=$totalesol+$tabcoosol[$k]->gettotale();
        $descriptionsol=$descriptionsol.$tabcoosol[$k]->getcolor().";";
        $qtesol=$qtesol+$tabcoosol[$k]->getqte();
    
    }
        $totalesol=$totalesol* $qtesol;
        }
        
        
        
        
        
        
        
        $idcommande ="";
        
         
        if(!empty($tabcoo)){
        $lunettes = new Commande(1,$date,$idproduits,$totale,$qte,$description);
        $lunettesajouter = new Commandec();
        $lunettesajouter->ajoutercommande($lunettes);
        $idcommande =  $idcommande.$_SESSION['idcommande'].";";
        }
        
        
         if(!empty($tabcool)){
        $lentille = new Commande(1,$datel,$idproduitsl,$totalel,$qtel,$descriptionl);
        $lunettesajouterl = new Commandec();
        $lunettesajouterl->ajoutercommande($lentille);
                     $idcommande =  $idcommande.$_SESSION['idcommande'].";";

        }
        
        if(!empty($tabcoosol)){
        $sol = new Commande(1,$datesol,$idproduitssol,$totalesol,$qtesol,$descriptionsol);
        $lunettesajoutersol = new Commandec();
        $lunettesajoutersol->ajoutercommande($sol);
                    $idcommande =  $idcommande.$_SESSION['idcommande'].";";

        }
        
    
        /////id client aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa fe 1;
        
        
        
        $facture = new facturecommande(0,$idcommande,$_SESSION['moidcl'],$_SESSION['monomcl'],$_SESSION['moprenomcl'],$totale+$totalel+$totalesol,"","non-payee");
        $facturec = new facturecommandec();
        $facturec->ajouterfacture($facture);
       
        
        
      /////////////////////////////////////////////////       //////////////////////////////////     ///////////////////////////////
        
        
                                unset($tabcoosol);
                                setcookie('mozitounsol'.$_SESSION['moidcl'],'', time()-24*60*60 , '/');
                                $tab_sersol = serialize($tabcoosol);
                                setcookie('mozitounsol'.$_SESSION['moidcl'],$tab_sersol,time()+24*60*60);
        
        
                               
                                  unset($tabcoo);
                                setcookie('mozitoun'.$_SESSION['moidcl'], '', time()-24*60*60 , '/');
                                $tab_ser = serialize($tabcoo);
                                setcookie('mozitoun'.$_SESSION['moidcl'],$tab_ser,time()+24*60*60);
        
        
        
                                unset($tabcool);
                                setcookie('mozitounlentille'.$_SESSION['moidcl'], '', time()-24*60*60 , '/');
                                $tab_serl = serialize($tabcool);
                                setcookie('mozitounlentille'.$_SESSION['moidcl'],$tab_serl,time()+24*60*60);
        
        
    //////////////////////////////////////////////////         /////////////////////////////////     //////////////////////////////
        
header("Location: factureintclient.php");
   exit;
    }
















                                    ?>
                                    