 <?php 

include "C:/xampp/htdocs/projet_web_22222222222/G_stock/config.php";

class Commandec{
    
    public function ajoutercommande($var){
        //$sql = "insert into commande (id,idproduits,totale,qte,description) values (".$var->getid().",".$var->getidproduits().",".$var->gettotale().",".$var->getqte().",'".$var->getdescription().")";
        //$var->setid(10);
        $str = "non-payee";
        $sql = "insert into commande (idproduits,totale,qte,description,date,etat) values ('".$var->getidproduits()."',".$var->gettotale().",".$var->getqte().",'".$var->getdescription()."', CURDATE() ,'".$str."' )";
        
        //$sql = "insert into commande (idproduits,totale,qte,description,date,etat) values (id,totale,qte,description, CURDATE() ,str )";
        
        $db = config::getConnexion();
        
        
        /*
             $sql->bindValue(':id', $var->getidproduits());
             $sql->bindValue(':totale', $var->gettotale());
             $sql->bindValue(':qte', $var->getqte());
             $sql->bindValue(':description', $var->getdescription());
             $sql->bindValue(':str', $str);
             $sql->execute();
             */
        
        
        
       try{
       
     $db->query($sql);
      $id = $db->lastInsertId();
     //session_start();
     $_SESSION['idcommande']=$id;
             }catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
     
     
        
    }
    
    public function affichercommande(){
         //session_start();
        if((!empty($_SESSION['seletcommande']))){
        
									 
        $sql = "select * from commande ".$_SESSION['seletcommande']; 
        }
        else{
                    $sql = "select * from commande "; 
        }
        $db = config::getConnexion();
        
        
        try{
        
        $liste = $db->query($sql);
            
       
        return $liste;
             }catch(Exception $e){
            die('Erreur');
        }

    
        
        
    }
    
    
    
    
    
    
    public function Tri($par,$type){
        $sql = "select * from commande order by ".$par." ".$type; 
        
        $db = config::getConnexion();
        
        
        try{
        
        $liste = $db->query($sql);
            
       
        return $liste;
             }catch(Exception $e){
            die('Erreur');
        }
    }
    
    
    
    
    
    
    
    
    public function supprimer($var){
        
        
               /* $sql = "  r AS
(
  SELECT *, rn = ROW_NUMBER() OVER (ORDER BY (SELECT 0))
  FROM commande
)
DELETE
FROM r
WHERE r = 2 ";*/
        $sql="delete from commande where id = '".$var."' ";
        
        
        $db = config::getConnexion();
        
       try{
        
     $db->query($sql);
      
     
    
             }catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
     
        
    }
    
    
    
    
    
    public function supprimerpar($par,$var){
        
        
               /* $sql = "  r AS
(
  SELECT *, rn = ROW_NUMBER() OVER (ORDER BY (SELECT 0))
  FROM commande
)
DELETE
FROM r
WHERE r = 2 ";*/
        $sql="delete from commande where ".$par." = '".$var."' ";
        
        
        $db = config::getConnexion();
        
       try{
        
     $db->query($sql);
      
     
    
             }catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
     
        
    }
    
    
    
    
    
    
    
    
    
    public function modifier($par,$var,$id){
        
        
               /* $sql = "  r AS
(
  SELECT *, rn = ROW_NUMBER() OVER (ORDER BY (SELECT 0))
  FROM commande
)
DELETE
FROM r
WHERE r = 2 ";*/
        $sql="UPDATE commande SET ".$par." = '".$var."' WHERE id = '".$id."'  ";
        
        
        $db = config::getConnexion();
        
       try{
        
     $db->query($sql);
      
     
    
             }catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
     
        
    }
    
    
     public function recherche($par,$var){
         
         
          
                    $sql = "select * from commande where ".$par." = '".$var."' "; 
        
        $db = config::getConnexion();
        
        
        try{
        
        $liste = $db->query($sql);
            
       
        return $liste;
             }catch(Exception $e){
            die('Erreur');
        }

    
        
         
         
         
         
         
     }
    
    
    
    
    
    
    
}




?>