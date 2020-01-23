<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
	session_start();

				 

	echo "Ajouter_Produit.phpaaaaaaaa<br>" ; 
	if (isset($_POST['reference']) and  isset($_POST['qte']) and isset($_POST['prix']) and isset($_POST['description'])and isset($_POST['categorie']) 
		and isset($_POST['marque']) and isset($_POST['couleur'])  and isset($_POST['taille']) and isset($_POST['style'])
		and isset($_POST['forme'])and isset($_POST['largeurBranche']) and isset($_POST['hauteurBranche']) and isset($_POST['largeurVerre']) 
		and isset($_POST['hauteurVerre'])and isset($_POST['typeSolution']) and isset($_POST['imageFront'])
		and isset($_POST['imageBack'])	and isset($_POST['imageLeft'])and isset($_POST['imageRight'])and isset($_POST['date_expiration'])){	
		$Attribuer="" ; 
		if (isset($_POST['H'])){
			$Attribuer=$Attribuer."H" ;
		}
		if (isset($_POST['F'])){
			$Attribuer=$Attribuer.";F" ;
		}
		if (isset($_POST['E'])){
			$Attribuer=$Attribuer.";E" ;
		}
		$folder="pics/";
		$pi = 'gestionArticles.png' ; 
		$piGIF = 'crud.gif' ; 
		echo "<br><img src='pics/".$pi."' alt=Girl_in_a_jacket style=width:300px;height:200px; >";
		echo "<br><img src='pics/".$piGIF."' alt=Girl in a jacket style=width:300px;height:200px;     >";	



		$produit1=new ProduitE($_POST['reference'],$_POST['qte'],$_POST['prix'],$_POST['description'],$Attribuer,
		$_POST['categorie'],$_POST['marque'],$_POST['couleur'],$_POST['largeurBranche'],$_POST['hauteurBranche'],$_POST['largeurVerre'],
		$_POST['hauteurVerre'],$_POST['typeSolution'],$_POST['taille'],$_POST['style'],$_POST['forme'],$_POST['imageFront'],$_POST['imageBack'],
		$_POST['imageLeft'],$_POST['imageRight'],$_POST['date_expiration']);
		$produit1C=new ProduitC();
		$produit1C->ajouterProduit($produit1);
		header('Location:afficherproduitApresAjout.php');
	}
	//header('Location:afficherproduitApresAjout.php');
	else{
		//header('Location:InterfacePagePdt.php');
	}

?>