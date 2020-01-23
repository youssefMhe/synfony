<?PHP
session_start();
include "../entities/produit.php";
include "../core/produitC.php";


	echo "L client emte3 salemmmmm <br>" ; 
	if (isset($_POST['email']) and  isset($_POST['password'])         ){	
		$produit1C=new ProduitC();
		$Resultat=$produit1C->Recuperer_client($_POST['email'],$_POST['password']);
		$Resultat2=$produit1C->Recuperer_client($_POST['email'],$_POST['password']);
		$x=0 ; 
		foreach ($Resultat as  $valuerow) {
			$x++ ; 
		}
		if($x>0){
			foreach ($Resultat2 as $valuerow) {
		        $_SESSION['nom'] = $valuerow['nom'];
		        $_SESSION['prenom'] = $valuerow['prenom'];
		        $_SESSION['email'] = $valuerow['email'];
		        $_SESSION['mdp'] = $valuerow['mdp'];
		        $_SESSION['id'] = $valuerow['id'];
		        $_SESSION['telephone']=$valuerow['telephone'];
		        $_SESSION['adresse']=$valuerow['adresse'];		
			}			
		}
		//echo $_SESSION['email'] ;
		$ch = 'Location:DetailleProduit.php?id_pdt='.$_POST['id_pdt'] ; 
		header($ch);
	}
	
			//header('Location:DetailleProduit.php?id_pdt=');


?>