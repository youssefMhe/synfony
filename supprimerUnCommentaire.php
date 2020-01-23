<?php
	session_start();
	include "../core/produitC.php";
	$produitC=new ProduitC();
	echo "
		<script>

			alert('ahhhhhhhhhhhhhhhhhhhhh');

		</script>

	";
	$top=$_POST['id_du_produit'];
		echo "suppression avec succes 88888888888888" ;
		$y=$produitC->SupprimersCommentaire($_POST['Suppression_Coommennts']);
		echo "suppression avec succes " ;
		/*	echo "<script>
					window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$top   ';
				  </script>	";	*/
	
?>