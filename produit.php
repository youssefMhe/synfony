<?PHP
class ProduitE{
	private $reference;
	private $qte;
	private $prix;
	private $description;
	private $attribuer;
	private $idCategorie;
	private $idMarque;
	private $idCouleur;
	private $idTaille;
	private $idStyle;
	private $idForme;
	/****/
	private $largeurBranche;
	private $hauteurBranche;
	private $largeurVerre;
	private $hauteurVerre;
	private $typeSolution;
	private $imageFront;
	private $imageBack;
	private $imageLeft;
	private $imageRight;
	private $date_expiration;

	/****/
	function __construct($reference,$qte,$prix,$description,$attribuer,$idCategorie,$idMarque,$idCouleur,$largeurBranche,$hauteurBranche,
		$largeurVerre,$hauteurVerre,$typeSolution,$idTaille,$idStyle,$idForme,$imageFront,$imageBack,$imageLeft,$imageRight,$date_expiration){

		$this->reference=$reference;
		$this->qte=$qte;
		$this->prix=$prix;
		$this->description=$description;
		$this->attribuer=$attribuer;
		$this->idCategorie=$idCategorie;
		$this->idMarque=$idMarque;
		$this->idCouleur=$idCouleur;
		$this->largeurBranche=$largeurBranche;
		$this->hauteurBranche=$hauteurBranche;
		$this->largeurVerre=$largeurVerre;
		$this->hauteurVerre=$hauteurVerre;
		$this->typeSolution=$typeSolution;
		$this->idTaille=$idTaille;
		$this->idStyle=$idStyle;
		$this->idForme=$idForme;
		$this->imageFront=$imageFront;
		$this->imageBack=$imageBack;
		$this->imageLeft=$imageLeft;
		$this->imageRight=$imageRight;
		$this->date_expiration=$date_expiration;
	}
	/*LES GETTERS */
	function getdate_expiration(){
		return $this->date_expiration;
	}
	function getIdTaille(){
		return $this->idTaille;
	}
	function getReference(){
		return $this->reference;
	}
	function getQte(){
		return $this->qte;
	}
	function getPrix(){
		return $this->prix;
	}
	function getDescription(){
		return $this->description;
	}
	function getAttribuer(){
		return $this->attribuer;
	}
	function getIdCategorie(){
		return $this->idCategorie;
	}
	function getIdMarque(){
		return $this->idMarque;
	}
	function getIdCouleur(){
		return $this->idCouleur;
	}
	function getLargeurBranche(){
		return $this->largeurBranche;
	}
	function getHauteurBranche(){
		return $this->hauteurBranche;
	}
	function getLargeurVerre(){
		return $this->largeurVerre;
	}
	function getHauteurVerre(){
		return $this->hauteurVerre;
	}
	function getTypeSolution(){
		return $this->typeSolution;
	}
	function getIdStyle(){
		return $this->idStyle;
	}
	function getIdForme(){
		return $this->idForme;
	}
	function getImageFront(){
		return $this->imageFront;
	}
	function getImageBack(){
		return $this->imageBack;
	}
	function getImageLeft(){
		return $this->imageLeft;
	}
	function getImageRight(){
		return $this->imageRight;
	}
	/*LES SETTERS*/
	function setDate_expiration($date_expiration){
		$this->date_expiration=$date_expiration;
	}
	function setReference($reference){
		$this->reference=$reference;
	}
	function setQte($qte){
		$this->qte=$qte;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setAttribuer($attribuer){
		$this->attribuer=$attribuer;
	}
	function setIdCategorie($idCategorie){
		$this->idCategorie=$idCategorie;
	}
	function setIdMarque($idMarque){
		$this->idMarque=$idMarque;
	}
	function setIdCouleur($idCouleur){
		$this->idCouleur=$idCouleur;
	}	
	function setLargeurBranche($largeurBranche){
		$this->largeurBranche=$largeurBranche;
	}
	function setHauteurBranche($hauteurBranche){
		$this->hauteurBranche=$hauteurBranche;
	}
	function setLargeurVerre($largeurVerre){
		$this->largeurVerre=$largeurVerre;
	}
	function setHauteurVerre($hauteurVerre){
		$this->hauteurVerre=$hauteurVerre;
	}
	function setTypeSolution($typeSolution){
		$this->typeSolution=$typeSolution;
	}
	function setIdTaille($idTaille){
		$this->idTaille=$idTaille;
	}
	function setIdStyle($idStyle){
		$this->idStyle=$idStyle;
	}
	function setIdForme($idForme){
		$this->idForme=$idForme;
	}
	function setImageFront($imageFront){
		$this->imageFront=$imageFront;
	}
	function setImageBack($imageBack){
		$this->imageBack=$imageBack;
	}
	function setImageLeft($imageLeft){
		$this->imageLeft=$imageLeft;
	}
	function setImageRight($imageRight){
		$this->imageRight=$imageRight;
	}
}

?>