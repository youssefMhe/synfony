<?PHP
include "../entities/marque.php";
include "../core/marqueC.php";
	if (    isset($_POST['nomMarque']) and  isset($_POST['email']) and isset($_POST['tel']) and isset($_POST['adresse']) and isset($_POST['imageMarque']) and 
		!empty(($_POST['nomMarque'])) and  !empty(($_POST['email'])) and !empty(($_POST['tel'])) and !empty(($_POST['adresse'])) and !empty(($_POST['imageMarque']))


	){	
		/*$folder="pics/";
		$pi = 'gestionArticles.png' ; 
		$piGIF = 'crud.gif' ; 
		echo "<br><img src='pics/".$pi."' alt=Girl_in_a_jacket style=width:300px;height:200px; >";
		echo "<br><img src='pics/".$piGIF."' alt=Girl in a jacket style=width:300px;height:200px;     >";*/
		$marque1=new MarquetE($_POST['nomMarque'],$_POST['email'],$_POST['tel'],$_POST['adresse'],$_POST['imageMarque']);
		$marque1C=new MarqueC();		
		$marque1C->modifierMarque($marque1,$_POST['idMarque']);
		header('Location:afficherMarque.php');
	}else {
		echo "verifier les champs " ; 
	}
	
	

?>