 <?php   


   
    include "C:/xampp/htdocs/projet_web_22222222222/G_stock/core/facturecommandec.php";
include "C:/xampp/htdocs/projet_web_22222222222/G_stock/core/commandec.php";
//include "C:/xampp/htdocs/mozitoun/config.php";





session_start();
   




$mo = new facturecommandec;
        
 $mo->modifieretat("etat","payee",$_SESSION['moidcl']);
$liste = $mo->recherche("idclient",$_SESSION['moidcl']);

    $str="";
    
    foreach($liste as $mozitoun){
        
        $str=$str.$mozitoun['idcommandes']; 
        
    }
    
    //echo $str;
$capt=0;
$capt1=0;
$k=0;
$j=0;
$strk="";
    
$stridprod="";
    
    
for($i=0;$i<strlen($str);$i++){
    if($str[$i]==";"){
       if($capt==0){
           $j=0;
            $capt++;
       }
        
           
            for($j;$j<$i;$j++){
                if($capt1==0){
               $k=0;
                    $capt1++;
                }
                
                $strk[$k]=$str[$j];
                
                $k++;
               
                
            }
        $capt1=0;
        //$k=0;
            $j=$i+1;
           //substr($strk, 0, -1);
         //echo $strk."<br>";
         $mo1 = new Commandec;

        /////////////////////////////////////  produit ///////////////////////////////////
        
        $liste1=$mo1->recherche("id",$strk);
        
        foreach($liste1 as $moon){
        
            if($moon['etat']!="payee")
        $stridprod=$moon['idproduits'];
        
    }
        
        
        $captprod=0;
        $capt1prod=0;
        $kk=0;
$jj=0;
$strkprod="";
    for($ii=0;$ii<strlen($stridprod);$ii++){
        
        if($stridprod[$ii]==";"){
            if($captprod==0){
           $jj=0;
            $captprod++;
       }
          
            for($jj;$jj<$ii;$jj++){
                if($capt1prod==0){
               $kk=0;
                    $capt1prod++;
                }
                
                $strkprod[$kk]=$stridprod[$jj];
                
                $kk++;
               
                
            }  
            $capt1prod=0;
        //$k=0;
            $jj=$ii+1;
            echo "<br>";
            //echo $strkprod;
               echo "<br>";   
            echo "<br>";   
            echo "<br>";
            $qte=  substr($strkprod, ($p = strpos($strkprod, '(')+1), strrpos($strkprod, ')')-$p);
            $id = strstr($strkprod, '(', true);
            
            ///////////////////////////////////////////////////    doucha   ///////////////////////////////////////
           
             $sql="UPDATE produits SET qte = qte - '".$qte."' WHERE id_pdt = '".$id."'  ";
        
        
        $db = config::getConnexion();
        
       
        
     $db->query($sql);
            
            
            
        }
        
        
    }
        
        
        
    
        
        ///////////////////////////////////////////////////////////////////////////////////
        $mo1->modifier("etat","payee",$strk);
    }
   
}

mail("+216".$_SESSION['motelcl']."@sms.clicksend.com","myriemoptique","Bonjour, Votre paiement a été effectué avec succes !!","");
mail($_SESSION['moadressecl'],"myriemoptique","Bonjour, Votre paiement a été effectué avec succes !!","");

if(isset($_SESSION['pnom'])){
$tab = unserialize($_SESSION['pnom']);
    $tab[]="mozitoun";
   $_SESSION['pnom'] = serialize($tab); 
}
else{
    $tab[]="mozitoun";
    $_SESSION['pnom'] = serialize($tab);
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        
  swal({
title: "Votre paiement est validé !",
text: "Clickez ici pour passer à l'étape suivante !",
type: "success"
}).then(function() {
// Redirect the user
window.location.href = "index.html";
console.log('The Ok Button was clicked.');
});
        </script>
        
        
