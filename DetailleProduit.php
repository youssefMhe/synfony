<?php
	session_start();
	include "../core/produitC.php";
	$produitC=new ProduitC();
	$listeProduit1=$produitC->recupererProduit($_GET['id_pdt']); /// Le meme affichage pour les produits en detaille pour le moment 
	$listeCategorie=$produitC->afficherCategorie();
	$listeMarque=$produitC->afficherMarque();


	$listeProduit2=$produitC->recupererProduit($_GET['id_pdt']);

?>
<?php 
	foreach ($listeProduit2 as $Rows_2) {
	
		$_SESSION['imageFont'] = $Rows_2['imageFront'];
		$_SESSION['id_pdt'] = $Rows_2['id_pdt'];
		$_SESSION['prix'] = $Rows_2['prix'];
		$_SESSION['reference'] = $Rows_2['reference'];
		$_SESSION['description'] = $Rows_2['description'];
	/*echo "id_pdt = ";
	echo $_SESSION['id_pdt']."<br>" ;
	echo "prix = ";
	echo $_SESSION['prix']."<br>"  ;
	echo "reference = ";
	echo $_SESSION['reference']."<br>" ;
	echo "description = ";
	echo $_SESSION['description']."<br>"  ;
*/
	} 

?>

<?php require('header.php');?>
	<script>
		function myFunction(id_champ_checked){
		    var x = document.getElementById("check_me").checked;
		    if (x==true){
		    	document.getElementById(id_champ_checked).disabled = false; 
		    	y=document.getElementById(id_champ_checked).value;
		    	return 1;
		    }else {
		    	return 0 ;
		    }
	}
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <style type="text/css">
    	.spImage{
    		color: #FE980F;
    	}
    	.spImageInput{
    		background-color: #F0F0E9;;
    	}
    	#bouton_Submit_Commentaire{
    		margin-left: 680px; 
    	}
    	.seConnecter{
			margin-left: 680px; 
    	}
    	.orangerNomClientComment{
    		color: blue ; 
    	}
    	.tableauCommentaire{
    		margin-left:20px; 
    		background-color: #F0F0E9;
    	}
    	.logIN_OUT{
    		margin-left: 550px; 
    	}
    	/**/
		a.btn:hover {
		     -webkit-transform: scale(1.1);
		     -moz-transform: scale(1.1);
		     -o-transform: scale(1.1);
		 }
		 a.btn {
		     -webkit-transform: scale(0.8);
		     -moz-transform: scale(0.8);
		     -o-transform: scale(0.8);
		     -webkit-transition-duration: 0.5s;
		     -moz-transition-duration: 0.5s;
		     -o-transition-duration: 0.5s;
		 }
		 .tableauOfComments{
		 	/*border-color: blue ; 
		 	background-color: #FE980F ;*/
		 	border-color: white ; 
		 	/*border:none;*/
		 }
		 .xx{
		 	/*background-color: white ; */
		 width: 300px;
		 height: 100px;
		 background-color: red;
		 font-size: 1em;
		 font-weight: bold;
		 font-family: Verdana, Arial, Helvetica, sans-serif;
		 border: 1px solid black;
		 }
		 .jaimeMarginRED{
		 	margin-left: 0px ; 
		 	margin-right: 20px; 
		 	background-color: red;

		 }
		 .jaimeMarginRED2{
		 	margin-left: 0px ; 
		 	margin-right: 20px; 
		 	background-color: black;

		 }
		 #jaimeMargin{
		 	margin-left: 0px ; 
		 	margin-right: 20px;
		 }
		 .rq_Commentaire{
		 	text-align: right;
		 	color: blue;
		 	font-size: 20px;
		 }
		 .jaimeMarginsecond{
		 	text-align: right;
		 	color: red;
		 	font-size: 20px;
		  }
    	/**/
    </style>
    <script type="text/javascript" src="verif.js"></script>
<body>	
	<section>
		<div class="container"> 
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorie</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?PHP
									foreach($listeCategorie as $row){
										$NbreLigne =$produitC->GetNombreDeLigneCategorie($row['idCategorie']);
										foreach($NbreLigne as $Nbre){
								?>	
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="AfficherCategorie.php?nomCategorie=<?PHP echo $row['nomCategorie']; ?>">
												<span class="pull-right">(<?php echo $Nbre['compter']; ?>)
												</span>
												<?php echo $row['nomCategorie']; ?>
											</a>
										</h4>
									</div>
							<?PHP
								}}
							?>


						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Marque</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?PHP
									foreach($listeMarque as $row){
										$NbreLigne =$produitC->GetNombreDeLigneMarque($row['idMarque']);
										foreach($NbreLigne as $Nbre){									
											 
								?>		
								<li>
									<a href="AfficherMarque.php?nomMarque=<?PHP echo $row['nomMarque']; ?>">
										 <span class="pull-right">(<?php echo $Nbre['compter']; ?>)
										 </span>

										 <?php echo $row['nomMarque']; ?>
									</a>
								</li>					
								<?PHP
									}}
								?>
								</ul>
							</div>
						</div><!--/brands_products-->
						<br><br>
						<!--


						<div class="slidecontainer">
							<table width="100%">
									<tr>
										<td colspan="3">
											<h2>Prix lunette</h2> 
										</td>
									</tr>
									<tr>
											<td>0</td>
											<td><input type="range" min="0" max="1000" value="50" class="slider" id="myRange"></td>
											<td>5</td>
									</tr>
							</table>	
								<br>						  
							  <h2><p>Valeur: <span id="demo"></span> Dt</p></h2>
						</div>	
						<script>
							var slider = document.getElementById("myRange");
							var output = document.getElementById("demo");
							output.innerHTML = slider.value;

							slider.oninput = function() {
							  output.innerHTML = this.value;
							}
						</script>

					-->














						<div class="shipping text-center"><!--shipping-->
							<img src="pics/61.jpg" alt="" />
						</div><!--/shipping-->						
					</div>
				</div>				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<?PHP
								foreach($listeProduit1 as $row){

							?>	
							<div class="view-product">
			<?php echo "<img src='pics/".$row['imageFront']."' alt=Image_produit detaille style=width:220px;height:115px; >"?>
			<span class="spImage">Img de Front</span><br><br>
			<?php echo "<img src='pics/".$row['imageBack']."' alt=Image_produit detaille style=width:220px;height:115px; >"?>
			<span class="spImage">Img de dos</span><br><br>
			<?php echo "<img src='pics/".$row['imageRight']."' alt=Image_produit detaille style=width:220px;height:115px; >"?>
			<span class="spImage">Img à droite</span><br><br>
			<div>
			<?php echo "<img src='pics/".$row['imageLeft']."' alt=Image_produit detaille style=width:220px;height:115px; >"?>
			<span class="spImage">Img à gauche</span><br><br>
			</div>
							</div>
							<span class="spImage"><h4>Produit similaire : </h4></span>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->

			<div class="carousel-inner">
							<div class="item active">
								<?php  
									$listeProduirSimi=$produitC->afficherProduitSimilaire($row['idCat']) ;
									$x=0; 
									foreach($listeProduirSimi as $ligneSimilaire){
										$x++;
										if ($x<4){
								?>
							  <a href="DetailleProduit.php?id_pdt=<?PHP echo $ligneSimilaire['id_pdt']; ?>">
<?php echo "<img src='pics/".$ligneSimilaire['imageFront']."' alt=Image_produit_similaire style=width:65px;height:64px; >"?>
							  </a>
							  <?php
							  	}}
							  ?>
							  </div>

								<?php  
									$listeProduirSimi=$produitC->afficherProduitSimilaire($row['idCat']) ; ?>
									<div class="item">
									
									<?php 
									$x=0; 
									foreach($listeProduirSimi as $ligneSimilaire){
										$x++;
										if ($x>=4&&$x<=6){
								?>
							  <a href="DetailleProduit.php?id_pdt=<?PHP echo $ligneSimilaire['id_pdt']; ?>">
<?php echo "<img src='pics/".$ligneSimilaire['imageFront']."' alt=Image_produit_similaire style=width:65px;height:64px; >"?>
							  </a>
							  <?php
							  	}}
							  ?>
									</div>

							<?php  
									$listeProduirSimi=$produitC->afficherProduitSimilaire($row['idCat']) ; ?>
									<div class="item">
									
									<?php 
									$x=0; 
									foreach($listeProduirSimi as $ligneSimilaire){
										$x++;
										if ($x>=7&&$x<=9){
								?>

							  <a href="DetailleProduit.php?id_pdt=<?PHP echo $ligneSimilaire['id_pdt']; ?>">
<?php echo "<img src='pics/".$ligneSimilaire['imageFront']."' alt=Image_produit_similaire style=width:65px;height:64px; >"?>
							  </a>
							  <?php
							  	}}
							  ?>
									</div>

		<br><br>



									
			</div>

									
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>

						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?PHP echo $row['description']; ?></h2>
								<p>Reference: <?PHP echo $row['reference']; ?></p>
								<!--<img src="images/product-details/rating.png" alt="" />      le rating-->
								<span>
									<span>TN <?PHP echo $row['prix']; ?> DT</span>
									<label>Quantité:</label>
									<input type="number" value="1" />
									<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<button type="button" class="btn btn-fefault cart" id="jaimeMargin">
										<i class="fa fa-shopping-cart"></i>
										Ajouter au panier 
									</button>
								</span>
								<p>
									<b>Disponibilité:</b> 
									<?php 
										if ($row['qte']>0){
											$ch='En Stock' ;
										}else{
											$ch='Non Disponible' ;
										}
										echo $ch ; 
									?> 									 
								</p>
								<?php  
									$DateAjt="";
									$date_Ajout_Pdt= $row['dateA'] ;
									for($i=0;$i<10;$i++){
										$DateAjt=$DateAjt.$date_Ajout_Pdt[$i];
									}
								?> 
								<p><b>Date de creation :</b> <?php echo $DateAjt  ?></p>
								<?PHP
									$marque = $produitC->recupererMarque($row['idMar']) ;
									foreach($marque as $ligne){
								?>	
								<p><b>Marque:</b><?php echo $ligne['nomMarque']  ?></p>
								<?PHP
									}
								?>	
								<?php 
									$chaine=$row['attribuer'] ; 
									$Res="" ; 
									for($i=0;$i<strlen($chaine);$i++){
										if ($chaine[$i]=='H')
											$Res=$Res."Homme" ;
										else if ($chaine[$i]=='F')
											$Res=$Res."Femme" ;
										else if ($chaine[$i]=='E')
											$Res=$Res."Enfant" ; 
										else 
											$Res=$Res."|" ; 
									}
									$Res=$Res.'.' ; 
								?>
								<p><b>Genre:</b><?php echo $Res?></p>
								<?PHP
									$categorieNom = $produitC->recupererCategorieParId($row['idCat']) ;
									foreach($categorieNom as $ligne){
								?>	
								<p><b>Categorie:</b><?php echo $ligne['nomCategorie'] ?></p>
								<?PHP
									}
								?>
								<?php 
									if (isset($_SESSION['id'])){
									$ok = $produitC->Nombre_De_Ligne_jaime($_SESSION['id'],$_GET['id_pdt']);
									foreach ($ok as $okLigne) {
									}
									 

										if ($okLigne['Nb']!=0){
									?>
												<a href="jaime.php?id_pdt=<?php echo $_GET['id_pdt'] ?>" class="dislike"><i class="fa fa-thumbs-o-down"></i> 
													J'aime pas
											    </a>
										    <!--
												<a href="jaime.php?id_pdt=<?php echo $_GET['id_pdt'] ?>">
													J'aime red rouge 
												</a>	
											-->
									<?php
										}else{
											?>
												<a href="jaime.php?id_pdt=<?php echo $_GET['id_pdt'] ?>" class="dislike"><i class="fa fa-thumbs-o-up"></i> 
													J'aime
											    </a>
									<?php 
										}
									?>
									&nbsp;&nbsp;&nbsp;&nbsp;
								<?php 
									$Nb_like_2=$produitC->NbreLigneJaimeParProduit($_GET['id_pdt']);
									foreach ($Nb_like_2 as $RowLike2) {
										echo  "Nombre de j'aime  totale: ".$RowLike2['Nb'] ; 
									}	}else{

										$Nb_like_2=$produitC->NbreLigneJaimeParProduit($_GET['id_pdt']);
									foreach ($Nb_like_2 as $RowLike2) {
										echo  "Nombre de j'aime  totale: ".$RowLike2['Nb'] ; 
									}

									}
								?>

							</div><!--/product-information-->
						</div>					
						<?PHP
						}
						?>

					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Ecrire un commentaire</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
				
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>



<div class="rateit" data-rateit-resetable="false"><button id="rateit-reset-2" type="button" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2" style="display: none;"></button><div id="rateit-range-2" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="false" style="width: 80px; height: 16px;"><div class="rateit-selected" style="height: 16px; width: 64px; display: block;"></div><div class="rateit-hover" style="height: 16px; width: 0px; display: none;"></div></div></div>



							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">									
									<form action="CommentaireProduit.php" method="POST" id="form2">	
										<input type="hidden" name="ref_prod" value="<?php echo $_GET['id_pdt']?>">
										<table>	
											<tr>
												<td>
													<span class="spImage">Ecrire un commentaire :
													</span>
												</td>
											<tr>

											<tr>
												<td>
													<br><br>
													<center><span class="rq_Commentaire">* Vous devez se connecter pour pouvoir commenter/Modifier/supprimer les produit <br>* Vous pouvez commenter un seul commentaire par produit </span></center>
																		<br>									
												</td>
											<tr>
											<tr>
												<td>
													<input type="text" placeholder="Taper ici" class="spImageInput" 
													id="blanc" name="comments" style="width:750px;height:70px;">
												</td>
											</tr>	
											<tr>
												<td><br>
													<center>
														<div style="width:50%;">
														     <div class="">
														  		<strong></strong><p id="commentaire_Vide" style="color:red;"></p>							
															</div>
														</div>
												    </center>
												</td>
											</tr>	
										</table>
	<input type="button" name="Envoyer" value="Envoyer" id="bouton_Submit_Commentaire" class="btn btn-primary" 
	onclick="verif_bouton_commentaire()">

<br><br><br>
																
								    </form>

			<form method="POST" action="">
				<table class="" width="100%">
					<?php
						$ListeCommentaire=$produitC->afficherCommentaire($_GET['id_pdt']);
						$x=0 ;
						foreach($ListeCommentaire as $ligneC){ /*&nbsp;&nbsp;*/
							$x++ ;
					?>
					<tr>  	
						<td class=""><span style="color: orange"><?php  echo $ligneC['nom']." ".$ligneC['prenom'] ?></span></td>
						<td> 
							<br>
							&nbsp;&nbsp;&nbsp;
							<input type="text" id="<?php  echo $ligneC['id_comment'] ?>" name="LeNomdeInputComment" value="<?php  echo $ligneC['commentaire'] ?>"
							disabled="disabled" style="width:500px;height:70px;color: black">
						</td>
						<?php
							if (isset($_SESSION['id']) ){
								if ($ligneC['idClient_C']==$_SESSION['id']){
						?>
									<td>
										<table width="100%">
											<td>
												<br>

												<input type="checkbox" name="check_me" value="" id="check_me" 
												onclick="myFunction(<?php echo $ligneC['id_comment'] ?>)"> 
												 <?php /*echo $ligneC['id_comment']*/ ?>     
											</td>
											<td><!--MODIFIER -->
													<br>
													<input type="hidden" name="IdDuCommentaire" value="<?php  echo $ligneC['id_comment'] ?>">
													<!-- POUR MODIFIER -->
													        <span><strong>
													        		<input type="submit" name="submitMo" value="Modifier" style="width:65px;height: 40px;color: blue">
													        </strong></span>            
													<!-- POUR MODIFIER ////////////////// -->
													<?php 
														$top=$_GET['id_pdt'];
													?>
													
													<?php
														if (isset($_POST['submitMo'])){
															$y=$produitC->ModifiersCommentaire($_POST['LeNomdeInputComment'],$ligneC['id_comment']);
															echo "<script>														
																	window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$top   ';
																  </script>	";	



														}
													?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

											</td>	
											<td><!--SUPPRIMER --> 
												<br>
												<form action="" method="POST">
													<!-- POUR SUPPRIMER -->
													        <span><strong>
													        		<input type="submit" name="submitSu" value="Supprimer" onclick="confirma2()" 
													        		style="width:80px;height: 40px;color: blue">
													        </strong></span>            
													<!-- POUR SUPPRIMER ////////////////// -->



													<input type="hidden" name="abgh12" value="ab" id="abgh12">
														<?php
															if (isset ($_POST['submitSu']) and isset ($_POST['abgh12']) ){
																if (($_POST['abgh12'])!="123"){
																}else{
																	$y=$produitC->SupprimersCommentaire($ligneC['id_comment']);
																	echo "<script>
																			window.location.href = 'http://localhost/projet_web_22222222222/G_stock/views/DetailleProduit.php?id_pdt=$top   ';
																		 </script>	";
																}	
															}
														?>
												</form>
											</td>
												</table>
									</td>							
									
						<?php
								}
							}
						?>
					</tr>
					<?php
						}
					?>
				</table>
			</form>          
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"> <!--DEBUT RECOMMENDED ITEM-->
						<h2 class="title text-center">recommended items</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						<div class="item active"> <!--Ouverture du 1ere block-->
							<?php
								$listerecommend=$produitC->afficherProduitRecommender();
								$x=0 ;
								foreach ($listerecommend as $RowRecom) {
									$x++ ; 
									$id_pdt=$RowRecom['id_produit'] ; 
									if ($x<=3){
									$produit = $produitC->recupererProduit($id_pdt);
									foreach ($produit as $RowPdt) {
										$image=$RowPdt['imageFront'];
							?>									
									<div class="col-sm-4"> <!--partie tet3awed -->	
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src='pics/<?php echo $image ?>' alt=Image_Marque style="width:240px;height:130px"; >
													<h2><?php echo $RowPdt['prix']?> Dt</h2>
													<p><?php echo $RowPdt['description']?></p>
													<a href="DetailleProduit.php?id_pdt=<?PHP echo $RowPdt['id_pdt']; ?>">
														Voir detaille produit
													</a>
												</div>												
											</div>
										</div>
									</div> <!-- FERMETURE partie tet3awed -->
								<?php 
									}}}
								?>	
							</div> <!--Fermeture du 1ere block-->
								
								<div class="item">	<!--Le 2eme block  son declaration est differente que celle de la 1ere declaration-->
									<?php
										$listerecommend=$produitC->afficherProduitRecommender();
										$x=0 ;
										foreach ($listerecommend as $RowRecom) {
											$x++ ; 
											$id_pdt=$RowRecom['id_produit'] ; 
											if (($x>=4)and($x<=6)){
											$produit = $produitC->recupererProduit($id_pdt);
											foreach ($produit as $RowPdt) {
												$image=$RowPdt['imageFront'];
									?>	
									<div class="col-sm-4"> <!--partie tet3awed -->	
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src='pics/<?php echo $image ?>' alt=Image_Marque style="width:240px;height:130px"; >
													<h2><?php echo $RowPdt['prix']?> Dt</h2>
													<p><?php echo $RowPdt['description']?></p>
													<a href="DetailleProduit.php?id_pdt=<?PHP echo $RowPdt['id_pdt']; ?>">
														Voir detaille produit
													</a>
												</div>												
											</div>
										</div>
									</div> <!-- FERMETURE partie tet3awed -->
								<?php 
									}}}
								?>
								</div> <!--Fermeture de la 2eme blcok -->



								<div class="item">	<!--Le 2eme block  son declaration est differente que celle de la 1ere declaration-->
									<?php
										$listerecommend=$produitC->afficherProduitRecommender();
										$x=0 ;
										foreach ($listerecommend as $RowRecom) {
											$x++ ; 
											$id_pdt=$RowRecom['id_produit'] ; 
											if (($x>=7)and($x<=9)){
											$produit = $produitC->recupererProduit($id_pdt);
											foreach ($produit as $RowPdt) {
												$image=$RowPdt['imageFront'];
									?>	
									<div class="col-sm-4"> <!--partie tet3awed -->	
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src='pics/<?php echo $image ?>' alt=Image_Marque style="width:240px;height:130px"; >
													<h2><?php echo $RowPdt['prix']?> Dt</h2>
													<p><?php echo $RowPdt['description']?></p>
													<a href="DetailleProduit.php?id_pdt=<?PHP echo $RowPdt['id_pdt']; ?>">
														Voir detaille produit
													</a>
												</div>												
											</div>
										</div>
									</div> <!-- FERMETURE partie tet3awed -->
								<?php 
									}}}
								?>
								</div> <!--Fermeture de la 2eme blcok -->
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div> <!--FIN RECOMMENDED ITEM-->


				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>