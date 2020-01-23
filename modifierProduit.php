<?php
	session_start();
	include "../entities/produit.php";
	include "../core/produitC.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MODIFIER_PDT</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<script type="text/javascript" src="verif.js"></script>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>0
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.tabStyle{
			width: 100%;
			height:100px;

		}
		.tab_Btn_Modif_Annuler{
			margin-left: 490px; 
		}
		.TabModif{
			    background-color: #30a5ff;
		}
		.blue{
			background-color: #30a5ff;
		}
		.centrer{
			text-align: center ; 
		}
		#titre{
			color: red ; 
		}
		#boutonAjout_pdt{
			background-color: #30a5ff;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Meriem</span> Optic</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li class="active"><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Stock / Gestion de produit </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" id="titre">Modifier un produit</h1>
			</div>
		</div><!--/.row-->
			
		<?php 
			$ch2="MODIFICATIONNNNNNNNNNNNNN";
			$_SESSION['modif']	= $ch2 ; 

		?>

<?php
	/*
		   <?php 
     if(array_key_exists('modif',$_SESSION)):
     
     ?>
    <center>
		<div style="width:50%;">
		     <div class="alert alert-danger">
		  		<strong>!</strong><?php echo $_SESSION['modif'];  ?> 							
			</div>
		</div>
    </center>
/**/
 ?>
		<div class="row">
			<div class="col-lg-12">
				<!-- <div class="panel panel-default">
					<div class="panel-heading">Buttons</div>
					<div class="panel-body">
						<div class="col-md-12">
							<h5>Small</h5>
							<button type="button" class="btn btn-sm btn-primary">Primary</button>
							<button type="button" class="btn btn-sm btn-default">Default</button>
							<button type="button" class="btn btn-sm btn-success">Success</button>
							<button type="button" class="btn btn-sm btn-info">Info</button>
							<button type="button" class="btn btn-sm btn-warning">Warning</button>
							<button type="button" class="btn btn-sm btn-danger">Danger</button>
							<button type="button" class="btn btn-sm btn-link">Link</button>
							<br />
							<br />
							<h5>Medium</h5>
							<button type="button" class="btn btn-md btn-primary">Primary</button>
							<button type="button" class="btn btn-md btn-default">Default</button>
							<button type="button" class="btn btn-md btn-success">Success</button>
							<button type="button" class="btn btn-md btn-info">Info</button>
							<button type="button" class="btn btn-md btn-warning">Warning</button>
							<button type="button" class="btn btn-md btn-danger">Danger</button>
							<button type="button" class="btn btn-md btn-link">Link</button>
							<br />
							<br />
							<h5>Large</h5>
							<button type="button" class="btn btn-lg btn-primary">Primary</button>
							<button type="button" class="btn btn-lg btn-default">Default</button>
							<button type="button" class="btn btn-lg btn-success">Success</button>
							<button type="button" class="btn btn-lg btn-info">Info</button>
							<button type="button" class="btn btn-lg btn-warning">Warning</button>
							<button type="button" class="btn btn-lg btn-danger">Danger</button>
							<button type="button" class="btn btn-lg btn-link">Link</button>
							<br />
							<br />
						</div>
					</div>
				</div>/.panel-->


				<?php
				if (isset($_GET['id_pdt'])){	
					$produitC=new produitC();
				    $result=$produitC->recupererProduit($_GET['id_pdt']);
					foreach($result as $row){
						$id_pdt = $row['id_pdt'];
						$reference=$row['reference'];
						$qte=$row['qte'];
						$prix=$row['prix'];
						$description=$row["description"]; 
						$attribuer=$row['attribuer'];//c'est une chaine de caractere
						/////////////////////
						$largeurVerre=$row['largeurVerre'];
						$hauteurVerre=$row['hauteurVerre'];
						$largeurBranche=$row['largeurBranche'];
						$hauteurBranche=$row['hauteurBranche'];
						$typeSolution=$row['typeSolution'];
						//////////////////
						$idCat=$row['idCat'];
						$idMar=$row['idMar'];
						$idCou=$row['idCou'];
						$idTai=$row['idTai'];
						$idSty=$row['idSty'];
						$idFor=$row['idFor'];


						$imageFront=$row['imageFront'];
						$imageBack=$row['imageBack'];
						$imageRight=$row['imageRight'];
						$imageLeft=$row['imageLeft'];


						$date_expiration=$row['date_expiration'];
					}
				}
				?>
				<!--<a href="modifierProduit.php?cin=<?PHP echo $row['largeurVerre']; ?>">-->
			<form method="POST" name="f" action="Page_modifier_Req.php" id="form1">	 
			<!--<form method="POST" action="Ajouter_Produit22.php" enctype="multipart/form-data">	-->	
				<div class="panel panel-default">
					<div class="panel-body" class="couelur_panel_body" bgcolor="#E6E6FA">
						<div class="col-md-6">
							<a href="http://localhost/projet_web_22222222222/G_stock/views/afficherproduitApresAjout.php" class="btn btn-default" id="boutonAjout_pdt">Retour</a>












							<br><br>
							<form role="form">    					
								<input type="hidden" value="<?PHP echo $_GET['id_pdt']; ?>" name="id_pdt">
								<div class="form-group">	
									<table border="1" class="TabModif">	
										<tr>
											<th><center>Reference</center></th>					
											<td>
												<input class="form-control" placeholder="Reference" name="reference" id="reference"
												value="<?PHP echo $reference ?>" 
												style="height: 50px  ; width: 250px"> 
											</td>
										</tr>		
										<tr>
											<th><center>Qte</center> </th>						
											<td>
												<input type="number" class="form-control" name="qte" value="<?PHP echo $qte ?>" id="qte" placeholder="Qte" style="height: 50px ; width: 250px">
											</td>
										</tr>					
										<tr>
											<th><center>Prix</center>   </th>
											<td>
												<input type="number" class="form-control" step="0.0001" name="prix" id="prix" value="<?PHP echo $prix ?>" placeholder="Prix" style="height: 50px  ; width: 250px">	
											</td>
										</tr>
										<tr>
											<th><center>Description</center>   </th>
											<td>
												<input class="form-control" placeholder="description" name="description" id="description" 
												value="<?PHP 
												echo $description ?>" style="height: 50px  ; width: 250px"> 
											</td>
										</tr>
										<tr>
											<th><center>Date d'expiration</center> </th>
											<td>
												<input class="form-control" type="date" name="date_expiration" value="<?PHP echo $date_expiration ?>" placeholder="date d'expiration" style="height: 50px  ; width: 250px"	id="dateExp">
											</td>
										</tr>											
										<tr>
											<th><center>Largeur Branche</center></th>
											<td>
												<input class="form-control" type="number" step="0.001" name="largeurBranche"  id="largeurBranche"
												value="<?PHP echo $largeurBranche?>" placeholder="largeur Branche" style="height: 50px  ; width: 250px">	
											</td>
										</tr>					
										<tr>
											<th><center>Hauteur Branche</center></th>
											<td>
												<input class="form-control" type="number" step="0.001" name="hauteurBranche" id="hauteurBranche"
												value="<?PHP echo 
												$hauteurBranche ?>" placeholder="hauteur Branche" style="height: 50px  ; width: 250px">	
											</td>
										</tr>*


										<tr>
											<th><center>Largeur Verre</center></th>
											<td>
												<input class="form-control" type="number" step="0.001" name="largeurVerre" id="largeurVerre"
												value="<?PHP echo 
												$largeurVerre ?>" placeholder="largeur Verre" style="height: 50px  ; width: 250px">
											</td>
										</tr>

										<tr>
											<th><center>Hauteur Verre</center></th>
											<td>
													<input  class="form-control" type="number" step="0.001" name="hauteurVerre" id="hauteurVerre"
													value="<?PHP echo $hauteurVerre ?>" placeholder="hauteur Verre" style="height: 50px  ; width: 250px">
											</td>
										</tr>

										<tr>
											<th><center>Type Solution</center></th>
											<td>
												<input type="text" class="form-control"  placeholder="type Solution" name="typeSolution" id="typeSolution" value="<?PHP echo $typeSolution ?>"  style="height: 50px  ; width: 250px">
											</td>
										</tr>
								</table>

								</div>

								<div>
									<div class="form-group">
										<label>Attribuer: </label>&nbsp;
										<?php
											//$Attribuer                                        
											$pos = strpos($attribuer,"H");
											if ($pos===false){
												echo '<input type="checkbox" value="H" name="H" id="H">'; 
											}
											else{
												echo '<input type="checkbox" value="H" name="H" id="H" checked>';
											}
										?>	Homme
										<?php
											$pos1 = strpos($attribuer,"F");
											if ($pos1===false){	
												echo '<input type="checkbox" value="F" name="F" id="F">'; 
											}
											else{
												echo '<input type="checkbox" value="F" name="F" id="F" checked>';
											}
										?>	Femme
										<?php
											//$Attribuer                                        
											$pos2 = strpos($attribuer,"E");
											if ($pos2===false){		
												echo '<input type="checkbox" value="E" name="E" id="E">'; 
											}
											else{
												echo '<input type="checkbox" value="E" name="E" id="E" checked>';
											}
										?>	Enfant
									</div>
								<!-- *********************************************************************************************************** -->

								<div>
									<?php
										$folder="pics/";
									?>
									<table class="tabStyle" border="1">
										<tr>
											<th class="blue"><center>Image Front</center></th>
											<th class="blue"><center>Image Back</center></th>
											<th class="blue"><center>Image Left</center></th>
											<th class="blue"><center>Image Right</center> </th>
										</tr>
										<tr>
											<td>
												<?php 
													echo "<br><img src='pics/".$imageFront."' alt=Girl_in_a_jacket style=width:150px;height:80px;>";
												;?>
											</td>
											<td>
												<?php 
													echo "<br><img src='pics/".$imageBack."' alt=Girl_in_a_jacket style=width:150px;height:80px; >";
												;?>
											</td>
											<td>
												<?php 
													echo "<br><img src='pics/".$imageLeft."' alt=Girl_in_a_jacket style=width:150px;height:80px; >";
												;?>
											</td>
											<td>
												<?php 
													echo "<br><img src='pics/".$imageRight."' alt=Girl_in_a_jacket style=width:150px;height:80px; >";
												;?>	
											</td>																		
										</tr>
									</table>
								</div>
								<br><br>
								<!-- *************************************** 5ALIHA AKEKA *************************************************************** -->
								<div>
									<table class="tabStyle" border="1">
										<tr>
											<th class="blue"><center>Image Front</center></th>
											<th class="blue"><center>Image Back</center></th>
											<th class="blue"><center>Image Left</center></th>
											<th class="blue"><center>Image Right</center> </th>
										</tr>
										<tr>
											<td>
												<input type="file" name="imageFront" id="imageFront" accept="image/*" value=""/>	
											</td>
											<td>
												<input type="file" name="imageBack" id="imageBack" accept="image/*"  value=""/>	
											</td>
											<td>
												<input type="file" name="imageLeft"  id="imageLeft" accept="image/*"  value=""/>	
											</td>
											<td>
												<input type="file" name="imageRight" id="imageRight" accept="image/*" value=""/>	
											</td>																		
										</tr>
									</table>
								</div>

							<!--<div>
									<label>Image Back</label>************
									<input type="file" name="imageBack" accept="image/*" value="Upload" />	
									<p class="help-block"></p>
								</div>

								<div>
									<label>Image Right</label>************
									<input type="file" name="imageRight" accept="image/*" value="Upload" />	
									<p class="help-block"></p>
								</div>

								<div>
									<label>Image Left</label>************
									<input type="file" name="imageLeft" accept="image/*" value="Upload" />	
									<p class="help-block"></p>
								</div>-->
								<br>	
								


									<table class="tabStyle" border="1">
										<tr>
											<th class="blue"><center>Categorie</center></th>
											<th class="blue"><center>Marque</center></th>
											<th class="blue"><center>Couleur</center></th>
											<th class="blue"><center>Taille</center></th>
											<th class="blue"><center>Style</center></th>
											<th class="blue"><center>Forme</center></th>
										</tr>

										<tr>
<td>
	<select name="categorie" class="form-control" style="width: 210px; height: 50px" id="Selectcategorie">
		<option selected disabled>Choisir une categorie</option>
		<?php
			$sql="select idCategorie,nomCategorie from categorie";
			$db = config::getConnexion();
			$liste=$db->query($sql);
			foreach($liste as $row){ //$idCat
				if ($row["idCategorie"]==$idCat){ ?>
					<option selected='selected' value=<?php echo $row["idCategorie"]  ?>   >	<?php echo $row["nomCategorie"] ?>       </option>											
		<?php }
			else{
		?>
					<option value=<?php echo $row["idCategorie"]    ?>  >			<?php echo $row["nomCategorie"] ?>                       </option>	
		<?php }} ?>
	</select> 
</td>

<td>
		<select name ="marque" class="form-control" style="width: 210px; height: 50px" id="SelectMarque">
			<option selected disabled>Choisir une marque</option>
			<?php
				$sql="select idMarque,nomMarque from marque";
				$db = config::getConnexion();
				$liste=$db->query($sql);
				foreach($liste as $row){
				if ($row["idMarque"]==$idMar){ ?>
					<option selected='selected' value=<?php echo $row["idMarque"]?>><?php echo $row["nomMarque"] ?></option>										
				<?php }
				else{
				?>
					<option value=<?php echo $row["idMarque"]?>><?php echo $row["nomMarque"] ?></option>	
				<?php }} ?>
														
		</select> 
	</td>
<td>
	<select name ="couleur" class="form-control" style="width: 210px; height: 50px" id="Selectcouleur">
		<option selected disabled>Choisir un couleur</option>  		
		<?php  
			$sql="select idCouleur,nomCouleur from couleur";
			$db = config::getConnexion();
			$liste=$db->query($sql);
			foreach($liste as $row){
			if ($row["idCouleur"]==$idCou){ ?>
				<option selected='selected' value=<?php echo $row["idCouleur"]?>><?php echo $row["nomCouleur"] ?></option>										
			<?php }
			else{
			?>
				<option value=<?php echo $row["idCouleur"]?>><?php echo $row["nomCouleur"] ?></option>	
			<?php }} ?>

	</select> 
</td>							

<td>
	<select name ="taille" class="form-control" style="width: 210px; height: 50px" id="SelectTaille">
		<option selected disabled>Choisir un taille</option>
		<?php
			$sql="select idTaille,nomTaille from taille";
			$db = config::getConnexion();
			$liste=$db->query($sql);
			foreach($liste as $row){
			if ($row["idTaille"]==$idTai){ ?>
				<option selected='selected' value=<?php echo $row["idTaille"]?>><?php echo $row["nomTaille"] ?></option>										
			<?php }
			else{
			?>
				<option value=<?php echo $row["idTaille"]?>><?php echo $row["nomTaille"] ?></option>	
			<?php }} ?>									
	</select> 
</td>
<td>
	<select name ="style" class="form-control" style="width: 210px; height: 50px" id="SelectStyle">
		<option selected disabled>Choisir un style</option>
		<?php
			$sql="select idStyle,nomStyle from style";
			$db = config::getConnexion();
			$liste=$db->query($sql);
			foreach($liste as $row){
			if ($row["idStyle"]==$idSty){ ?>
				<option selected='selected' value=<?php echo $row["idStyle"]?>><?php echo $row["nomStyle"] ?></option>										
			<?php }
			else{
			?>
				<option value=<?php echo $row["idStyle"]?>><?php echo $row["nomStyle"] ?></option>	
			<?php }} ?>	
	</select> 
</td>
<td>
	<select name ="forme" class="form-control" style="width: 210px; height: 50px" id="SelectForme">
		<option selected disabled>Choisir une Forme</option>
		<?php
			$sql="select idForme,nomForme from forme";
			$db = config::getConnexion();
			$liste=$db->query($sql);
			foreach($liste as $row){
			if ($row["idForme"]==$idFor){ ?>
				<option selected='selected' value=<?php echo $row["idForme"]?>><?php echo $row["nomForme"] ?></option>										
			<?php }
			else{
			?>
				<option value=<?php echo $row["idForme"]?>><?php echo $row["nomForme"] ?></option>	
			<?php }} ?>	
	</select> 
</td>
								</tr>
							</table>
								<br><br>
									<table class="tab_Btn_Modif_Annuler">
										<tr>
											<td><input type="button" class="btn btn-primary" onclick="verifier_champ_produit_Modifier()" value="Modifier"></td>
											<td>&nbsp;&nbsp;&nbsp;</td>
										</tr>
									</table>
								</div>

							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</form>

			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->
	
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	
</body>
</html>
