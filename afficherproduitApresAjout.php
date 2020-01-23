<?php
	include "../core/produitC.php";
	$produitC=new ProduitC();
	$listeProduit1=$produitC->afficherProduits();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Afficher_Produit</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		table{
			width: 1500px;
			height:200px;

		}
		thead 
		{
    		text-align: center;
		}
		.couleur_head{
			background-color: #30a5ff;
		}
		#boutonAjout_pdt{
			background-color: #30a5ff;
		}
		#titre{
			color: red; 
		}
	</style>
>
<script type="text/javascript" src="verif.js"></script>

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
				<h1 class="page-header" id="titre">Afficher liste des produits</h1>
			</div>
		</div><!--/.row-->

		<!--<form method="POST" action="" name="f">	-->		
		<form>	 
			<!--<form method="POST" action="Ajouter_Produit22.php" enctype="multipart/form-data">	-->	
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<a href="http://localhost/projet_web_22222222222/G_stock/views/InterfacePagePdt.php" class="btn btn-default" id="boutonAjout_pdt">Ajouter un produit</a>


									







								<br><br>
								<table id="example" class="display" style="width:100%">
									<thead class="couleur_head">
										<tr>
											<th>id_pdt</th>
											<th>Image Produit</th>
											<th>Reference</th>
											<th>Qte</th>
											<th>Prix</th>
											<th>Description</th>
											<th>Attriuer</th>
											<th>Categorie</th>
											<th>Marque</th>
											<th>Couleur</th>
											<th>Note</th>
											<th>Date Expiration</th>
											<th>modifier</th>
											<th>Supprimer</th>
										</tr>
									</thead>

									<tbody>
									<?PHP
										foreach($listeProduit1 as $row){
									?>	
											<tr>
												<td><?PHP echo $row['id_pdt']; ?></td>
												<td>
	<?php echo "<img src='pics/".$row['imageFront']."' alt=Image_Produit style=width:240px;height:80px; >"?>
												</td>
												<td><?PHP echo $row['reference']; ?></td>		
												<td><?PHP echo $row['qte']; ?></td>
												<td><?PHP echo $row['prix']; ?></td>
												<td><?PHP echo $row['description']; ?></td>
												<td><?PHP echo $row['attribuer']; ?></td>
												<td><?PHP echo $row['idCat']; ?></td>
												<td><?PHP echo $row['idMar']; ?></td>
												<td><?PHP echo $row['idCou']; ?></td>
												<td><?PHP echo $row['note']; ?></td>
												<td><?PHP echo $row['date_expiration'];?></td>

		<td><a class="btn btn-default" href="modifierProduit.php?id_pdt=<?PHP echo $row['id_pdt']; ?>">Modifier</a></td>
		<td><a class="btn btn-default" href="supprimerProduit.php?id_pdt=<?PHP echo $row['id_pdt'];?>" onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}">supprimer</a></td>
											</tr>
			<?PHP
			}
			?>

									</tbody>
								</table>
						</div>
					</div>
				</div><!-- /.panel-->
			</form>
	
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>



			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
		$('#example').dataTable( {
		  "search": {
		    "smart": false
		  }
		} );
		</script>
	
</body>
</html>
