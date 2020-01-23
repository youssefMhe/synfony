 <?php


require_once ("C:/xampp/htdocs/projet_web_22222222222/G_stock/config.php");





 function getevaluercommande(){
    
     
                    $sql = "select * from evaluercommande "; 
        
        $db = config::getConnexion();
        
        
        try{
        
        $liste = $db->query($sql);
            
       
        return $liste;
             }catch(Exception $e){
            die('Erreur');
        }

    
    
    
}


 function insert($note,$id_cl)
{
    
    
    
     $sql = "insert into evaluercommande (note,id_cl) values (".$note.",".$id_cl.") "; 
        
        $db = config::getConnexion();
        
        
        try{
        
        $db->query($sql);
            
       
     
             }catch(Exception $e){
            die('Erreur');
        }
    
    
}










?>