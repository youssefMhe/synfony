<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	session_start();

	include "../entities/produit.php";
	include "../core/produitC.php";
$id_refrech=$_GET['id_pdt'] ;
	if (isset($_SESSION['mdp']) ){

		if (isset($_GET['id_pdt']) ){
			$produitC=new ProduitC();
			$nombreExsistence_Client_Pdt = $produitC->Nombre_De_Ligne_jaime($_SESSION['id'],$_GET['id_pdt']);
			foreach ($nombreExsistence_Client_Pdt as $row){
				if ($row['Nb']==0){
					$ajouterJ=$produitC->ajouterJaime($_SESSION['id'],$_GET['id_pdt']);
					$id_refrech=$_GET['id_pdt'] ; 
					echo "<script>	        
							window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$id_refrech';			
						 </script>";	
				}
				else {
					$ajouterJ=$produitC->supprimer_jaime($_SESSION['id'],$_GET['id_pdt']);
					//echo "il y ' a deja une j'aime " ;
					echo "<script>	        
							window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$id_refrech';			
						 </script>";
				}	
			}
		}
	}else{
				$id_refrech=$_GET['id_pdt'] ;
				echo "<script>	        
						window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$id_refrech';
					 </script>";



	}
?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>