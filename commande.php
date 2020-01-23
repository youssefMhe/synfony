 <?php


class Commande{
    
    private $id;
    private $date;
    private $idproduits;
    private $totale;
    private $qte;
    private $description;
    private $idclient;
    private $etat;
    
    public function __construct($id,$date,$idproduits,$totale,$qte,$description){
      
        
        $this->idproduits=$idproduits;
        $this->date=$date;
        $this->qte=$qte;
        $this->id=$id;
        $this->totale=$totale;
        $this->description=$description;
        $idclient="";
        $etat="non-payee";
    }
     public function getid(){return $this->id; }
    public function getdatee(){return $this->date; }
    public function getidproduits(){return $this->idproduits; }
    public function getqte(){return $this->qte; }
    public function gettotale(){return $this->totale; }
    public function getdescription(){return $this->description; }
    public function getidclient(){return $this->idclient; }
    public function getetat(){return $this->etat; }
    
    public function setid($idproduit){$this->idproduit=$idproduit;}
    public function setidproduits($idproduits){  $this->idproduits=$idproduits;}
    public function setqte($qte){ $this->qte=$qte;}
    public function setdatee($nom){ $this->date=$nom;}
    public function settotale($totale){ $this->totale=$totale;}
    public function setdescription($description){ $this->description=$description;}
    public function setidclient($idclient){ $this->idclient=$idclient;}
    public function setetat($etat){ $this->etat=$etat;}
    
    
}






?>