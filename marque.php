<?PHP
class MarquetE{
	private $idMarque;
	private $nomMarque;
	private $email;
	private $tel;
	private $adresse;
	private $imageLogos;
	/****/
	function __construct($nomMarque,$email,$tel,$adresse,$imageLogos){

		$this->nomMarque=$nomMarque;
		$this->email=$email;
		$this->tel=$tel;
		$this->adresse=$adresse;
		$this->imageLogos=$imageLogos;
	}
	/*LES GETTERS */
	function getNomMarque(){
		return $this->nomMarque;
	}
	function getEmail(){
		return $this->email;
	}
	function getTel(){
		return $this->tel;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getImageMarque(){
		return $this->imageLogos;
	}	
	/*LES SETTERS*/
	function setNomMarque($nomMarque){
		$this->nomMarque=$nomMarque;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setImageMarque($imageLogos){
		$this->imageLogos=$imageLogos;
	}	
}

?>