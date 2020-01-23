<?php
	include "../entities/marque.php";
	include "../core/marqueC.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MODIFIER_MAR</title>
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
		.tabStyle{
			width: 100%;
			height:100px;

		}
		.tab_Btn_Modif_Annuler{
			margin-left: 110px; 
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
				<li class="active">Stock / Gestion de marque </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" id="titre">Modifier une marque</h1>
			</div>
		</div><!--/.row-->
				
		
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
				if (isset($_GET['idMarque'])){	
					$marqueC=new MarqueC();
				    $result=$marqueC->recupererMarque($_GET['idMarque']);
					foreach($result as $row){
						$idMarque = $row['idMarque'];
						$nomMarque=$row['nomMarque'];
						$email=$row['email'];
						$tel=$row['tel'];
						$adresse=$row["adresse"]; 
						$imageMarque=$row['imageMarque'];//c'est une chaine de caractere
					}
				}
				?>

				<!--<a href="modifierProduit.php?cin=<?PHP echo $row['largeurVerre']; ?>">-->
			<form method="POST" name="f" action="modfierMarqueREQ.php">	 
			<!--<form method="POST" action="Ajouter_Produit22.php" enctype="multipart/form-data">	-->	
				<?php
					$folder="pics/";
				?>
				<div class="panel panel-default">
					<div class="panel-body" class="couelur_panel_body" bgcolor="#E6E6FA">
						<div class="col-md-6">
							<a href="http://localhost/mes_tests/views/afficherMarque.php" class="btn btn-default" id="boutonAjout_pdt">Retour</a>
							<br><br>
							<form role="form">    					
								<input type="hidden" value="<?PHP echo $_GET['idMarque']; ?>" name="idMarque">
								<div class="form-group">	
									<table border="1" class="TabModif">	
										<tr>
											<th><center>nom Marque</center></th>					
											<td>
												<input class="form-control" placeholder="nom Marque" name="nomMarque" 
												value="<?PHP echo $nomMarque ?>" style="height: 50px  ; width: 250px"> 
											</td>
										</tr>		
										<tr>
											<th><center>Email</center> </th>						
											<td>
												<input type="email" class="form-control" name="email" value="<?PHP echo $email ?>" id="email" placeholder=".email" style="height: 50px ; width: 250px">
											</td>
										</tr>					
										<tr>
											<th><center>Num tel</center>   </th>
											<td>
												<input type="text" class="form-control"  name="tel" value="<?PHP echo $tel ?>" placeholder="Num tel" style="height: 50px  ; width: 250px">	
											</td>
										</tr>

										<tr>
											<th><center>Adresse</center>   </th>
											<td>
												<input type="text" class="form-control"  name="adresse" value="<?PHP echo $adresse ?>" placeholder="Adresse" 
												style="height: 50px  ; width: 250px">	
											</td>
										</tr>

										<tr>
											<th><center>image Marque</center>   </th>
											<td>
												<input type="file" name="imageMarque" accept="image/*" placeholder="image Marque" value=""/>
											
																							
												<?php 
													echo "<br><img src='pics/".$imageMarque."' alt=Girl_in_a_jacket style=width:150px;height:80px;>";
												;?>			
											</td>
										</tr>
								</table>


								<!-- ****************************************************************************************************

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

								<br><br>
									<table class="tab_Btn_Modif_Annuler">
										<tr>
											<td><button type="submit" class="btn btn-primary">Modifie</button></td>
											<td>&nbsp;&nbsp;&nbsp;</td>
											<td><button type="reset" class="btn btn-default">Annuler</button></td>									
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
