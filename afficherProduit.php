<?PHP
include "../core/produitC.php";
	$produitC=new ProduitC();
	$listeProduit1=$produitC->afficherProduits();
//var_dump($listeEmployes->fetchAll());
?>
<head>aaaaaaaaaaaaaaaaaaaaaaaaa</head>



<!--LES SCRIPTS CSS ET JAVASCRIPT-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<table id="example" class="display" style="width:100%">
	<thead>
		<tr>
			<td>Id produit</td>
			<td>Reference</td>
			<td>Designation</td>
			<td>Qte</td>
			<td>Prix</td>
			<td>Designation</td>
			<td>Couleur</td>
			<td>Chemain</td>
			<td>Categori</td>
			<td>Marque</td>
			<!--<td>Supprimer</td>
			<td>modifier</td>-->
		</tr>
	</thead>

	<tbody>
	<?PHP
		foreach($listeProduit1 as $row){
	?>	
			<tr>
				<td><?PHP echo $row['id_pdt']; ?></td>
				<td><?PHP echo $row['reference']; ?></td>		
				<td><?PHP echo $row['designation']; ?></td>
				<td><?PHP echo $row['qte']; ?></td>
				<td><?PHP echo $row['prix']; ?></td>
				<td><?PHP echo $row['description']; ?></td>
				<td><?PHP echo $row['image']; ?></td>

				<td><?PHP echo $row['attribuer']; ?></td>
				<td><?PHP echo $row['idCategorie']; ?></td>
				<td><?PHP echo $row['idMarque']; ?></td>
				<td><?PHP echo $row['couleur']; ?></td>
				<!--<td>
					<form method="POST" action="supprimerEmploye.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
					</form>
				</td>
				<td><a href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">Modifier</a></td>-->
			</tr>
	<?PHP
	}
	?>

	</tbody>
</table>

