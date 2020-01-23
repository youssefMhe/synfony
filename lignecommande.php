 <?php

class lignecommande{
    
    protected $idproduit;
    protected $nom;
    protected $color;
    protected $qte;
    protected $totale;
    protected $image;
   
    
    public function __construct($idproduit,$color,$qte,$nom,$totale)
    {
        $this->idproduit=$idproduit;
        $this->color=$color;
        $this->qte=$qte;
        $this->nom=$nom;
        $this->totale=$totale;
    }
    
    public function getidproduit(){return $this->idproduit; }
    public function getnom(){return $this->nom; }
    public function getcolor(){return $this->color; }
    public function getqte(){return $this->qte; }
    public function gettotale(){return $this->totale; }
    public function getimage(){return $this->image; }
    
    public function setidproduit($idproduit){$this->idproduit=$idproduit;}
    public function setcolor($color){  $this->color=$color;}
    public function setqte($qte){ $this->qte=$qte;}
    public function setnom($nom){ $this->nom=$nom;}
    public function settotale($totale){ $this->totale=$totale;}
    public function setimage($image){ $this->image=$image;}
    
}















class lignecommadelentille extends lignecommande  {
    
    private $rayon;
    private $diametre;
    private $cylendre;
    private $axe;
    private $sphere;
    
    
    
    public function __construct($idproduit,$color,$qte,$nom,$totale,$rayon,$diametre,$cylendre,$axe,$sphere)
    {
        
        $this->idproduit=$idproduit;
        $this->color=$color;
        $this->qte=$qte;
        $this->nom=$nom;
        $this->totale=$totale;
        $this->rayon=$rayon;
        $this->diametre=$diametre;
        $this->cylendre=$cylendre;
        $this->axe=$axe;
        $this->sphere=$sphere;
        
    }
    
    
    
    
    
    
    
    public function getrayon(){return $this->rayon; }
    public function getdiametre(){return $this->diametre; }
    public function getcylendre(){return $this->cylendre; }
    public function getaxe(){return $this->axe; }
    public function getsphere(){return $this->sphere; }
    
    public function setrayon($rayon){$this->rayon=$rayon;}
    public function setdiametre($diametre){$this->diametre=$diametre;}
    public function setcylendre($cylendre){ $this->cylendre=$cylendre;}
    public function setaxe($axe){ $this->axe=$axe;}
    public function setsphere($sphere){ $this->sphere=$sphere;}
    
}






class lignecommandelunettevue extends lignecommande {
    
    private $verre;
    private $marquedeverre;
    private $type;
    private $typeteinte;
    
    public function __construct($idproduit,$color,$qte,$verre,$marquedeverre,$type,$typeteinte,$nom,$totale)
    {
        $this->idproduit=$idproduit;
        $this->color=$color;
        $this->qte=$qte;
        $this->nom=$nom;
        $this->verre=$verre;
        $this->marquedeverre=$marquedeverre;
        $this->type=$type;
        $this->typeteinte=$typeteinte;
        $this->totale=$totale;
        
    }
    
    
    public function getverre(){return $this->verre; }
    public function getmarquedeverre(){return $this->marquedeverre; }
    public function gettypee(){return $this->type; }
    public function gettypeteinte(){return $this->typeteinte; }
    
    public function setverre($verre){$this->verre=$verre;}
    public function setmarquedeverre($marquedeverre){  $this->marquedeverre=$marquedeverre;}
    public function settypee($type){ $this->type=$type;}
    public function settypeteinte($typeteinte){ $this->typeteinte=$typeteinte;}
    
    
    
    
    
}








?>