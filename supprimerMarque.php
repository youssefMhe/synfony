<?PHP
include "../entities/marque.php";
include "../core/marqueC.php";
echo "<br> IDPDT + ".$_GET['idMarque']."<br>";

	$marqueC=new MarqueC();
	$marqueC->supprimerMarque($_GET['idMarque']);
	header('Location:afficherMarque.php');


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