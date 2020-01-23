 <?php 


class facturecommandec{
    
    
   public function Afficher(){
        $sql = "select * from facturecommande "; 
        
        $db = config::getConnexion();
        
        
        try{
        
        $liste = $db->query($sql);
            
       
        return $liste;
             }catch(Exception $e){
            die('Erreur');
        }
    }
    
    
    public function Tri($par,$type){
        $sql = "select * from facturecommande order by ".$par." ".$type; 
        
        $db = config::getConnexion();
        
        
        try{
        
        $liste = $db->query($sql);
            
       
        return $liste;
             }catch(Exception $e){
            die('Erreur');
        }
    }
    
    
    
    
    
    
    public function ajouterfacture($var){
        
        $sql = "insert into facturecommande (id,tatale,idclient,nomcl,prenomcl,idcommandes,date,etat) values ('".$var->getid()."',".$var->gettotale().",".$var->getidclient().",'".$var->getnomcl()."','".$var->getprenomcl()."', '".$var->getidcommandes()."', CURDATE() ,'".$var->getetat()."' )";
        
        
        
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
        $sql="delete from facturecommande where ".$par." = '".$var."' ";
        
        
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
        $sql="UPDATE facturecommande SET ".$par." = '".$var."' WHERE id = '".$id."'  ";
        
        
        $db = config::getConnexion();
        
       try{
        
     $db->query($sql);
      
     
    
             }catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
     
        
    }
    
    public function modifieretat($par,$var,$id){
        
        
               /* $sql = "  r AS
(
  SELECT *, rn = ROW_NUMBER() OVER (ORDER BY (SELECT 0))
  FROM commande
)
DELETE
FROM r
WHERE r = 2 ";*/
        $sql="UPDATE facturecommande SET ".$par." = '".$var."' WHERE idclient = '".$id."'  ";
        
        
        $db = config::getConnexion();
        
       try{
        
     $db->query($sql);
            
       
       
     
    
             }catch(Exception $e){
            die('Erreur'.$e->getMessage());
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
        $sql="delete from facturecommande where id = '".$var."' ";
        
        
        $db = config::getConnexion();
        
       try{
        
     $db->query($sql);
      
     
    
             }catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
     
        
    }
    
    
    
    
    public function recherche($par,$var){
         
         
          
                    $sql = "select * from facturecommande where ".$par." = '".$var."' "; 
        
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