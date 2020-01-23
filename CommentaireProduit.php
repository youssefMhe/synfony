<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	session_start();

	include "../entities/produit.php";
	include "../core/produitC.php";
$id_refrech=$_POST["ref_prod"] ;
	if (isset($_SESSION['mdp']) and isset($_SESSION['id']) and isset($_POST['ref_prod']) and isset($_POST['comments']) ){
			$id_refrech=$_POST["ref_prod"] ;
			$produitC=new ProduitC();
			$nombreExsistence_Client_Pdt = $produitC->Nombre_De_Ligne($_SESSION['id'],$_POST['ref_prod']);
			foreach ($nombreExsistence_Client_Pdt as $row){
				if ($row['Nb']==0){
					$ajouterComm=$produitC->ajouterCommentaire($_SESSION['id'],$_POST['ref_prod'],$_POST['comments']);
					echo "<script>	        
							window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$id_refrech';	
						 </script>";	
				}
				else{
					echo "<script>	        
							window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$id_refrech';	
						 </script>";
				}	
			
			}
		}else{
					echo "<script>	        
							window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$id_refrech';	
						 </script>";
		}
?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



