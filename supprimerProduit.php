<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
echo "<br> IDPDT + ".$_GET['id_pdt']."<br>";

$produitC=new ProduitC();
	$produitC->supprimerProduit($_GET['id_pdt']);
	header('Location: afficherproduitApresAjout.php');



/*
if (isset($_GET['cin'])){
	$employeC=new EmployeC();
    $result=$employeC->recupererEmploye($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$nbH=$row['nbHeures']; 
		$tarifH=$row['tarifHoraire'];*/
?>