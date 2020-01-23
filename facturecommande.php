 



<?php

class facturecommande{
    
    
    private $id;
    private $idcommandes;
    private $idclient;
    private $nomcl;
    private $prenomcl;
    private $totale;
    private $date;
    private $etat;
    
    
    
    public function __construct($id,$idcommandes,$idclient,$nomcl,$prenomcl,$totale,$date,$etat){
      
        
        $this->id=$id;
        $this->date=$date;
        $this->idcommandes=$idcommandes;
        $this->idclient=$idclient;
        $this->nomcl=$nomcl;
        $this->prenomcl=$prenomcl;
        $this->totale=$totale;
        $this->etat=$etat;
        
    }
    public function getid(){return $this->id; }
    public function getdatee(){return $this->date; }
    public function getidcommandes(){return $this->idcommandes; }
    public function getidclient(){return $this->idclient; }
    public function gettotale(){return $this->totale; }
    public function getnomcl(){return $this->nomcl; }
    public function getprenomcl(){return $this->prenomcl; }
    public function getetat(){return $this->etat; }
    
    public function setid($idproduit){$this->idproduit=$idproduit;}
    public function setidcommandes($idcommandes){  $this->idcommandes=$idcommandes;}
    public function setidclient($idclient){ $this->idclient=$idclient;}
    public function setdatee($nom){ $this->date=$nom;}
    public function settotale($totale){ $this->totale=$totale;}
    public function setnomcl($nomcl){ $this->nomcl=$nomcl;}
    public function setprenomcl($prenomcl){ $this->prenomcl=$prenomcl;}
    public function setetat($etat){ $this->etat=$etat;}
    
    
    
    
    
    
    
    
}




?>