<?php
	session_start();
	include "../core/produitC.php";
	$produitC=new ProduitC();
	$listeProduit1=$produitC->afficherProduits();// afficher tous les produits 
	$listeCategorie=$produitC->afficherCategorie();
	$listeMarque=$produitC->afficherMarque();
?>
<?php require('header.php');?>
<body style="">

	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Meriem</span>-optic</h1><br>
									<p><h4>Avec plus de 1200 magasins sur l'ensemble du territoire <br><br> tunisien, Meriem Optic est le leader de la distribution optique <br><br> en Tunisie..</h4></p>
								</div>
								<div class="col-sm-6">
									<img src="pics/images.jpg" class="girl img-responsive" alt="" style="width:900px;height:500px";/>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Meriem</span>-optic</h1><br><br>
									<p><h4>Pour la 9ème année consécutive, Meriem Optic est <br><br>partenaire du mythique rallye de voitures anciennes..</h4></p>
								</div>
								<div class="col-sm-6">
									<img src="pics/57.jpg" class="girl img-responsive" alt="" style="width:900px;height:500px";/>
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Meriem</span>-optic</h1><br><br>
									<p><h4>Tout savoir sur les dernières tendances modes et <br><br>technologiques tous les mois dans Le Mag Meriem Optic....
									</h4> 
									</p>
								</div>
								<div class="col-sm-6">
									<img src="pics/58.jpg" class="girl img-responsive" alt="" style="width:900px;height:500px";/>
								</div>
							</div>	
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Meriem</span>-optic</h1><br><br>
									<p><h4>Tout savoir sur les dernières tendances modes et <br><br>technologiques tous les mois dans Le Mag Meriem Optic....
									</h4> 
									</p>
								</div>
								<div class="col-sm-6">
									<img src="pics/60.jpg" class="girl img-responsive" alt="" style="width:900px;height:500px";/>
								</div>
							</div>							
						</div>
												
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorie</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">

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
							</div>
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
						</div><!--/brands_p²roducts-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="pics/61.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Top produits</h2>
						<?PHP
							$x=0;
							foreach($listeProduit1 as $row){
								$x=$x+1;
								if ($x<=15){
						?>	
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
												<?php echo "<img src='pics/".$row['imageFront']."' alt=Image_Marque style=width:240px;height:80px; >"?>
												<h4><?PHP echo $row['description']; ?></h4>
												<p>Monture + verres à partir de</p>
												<h2><?PHP echo $row['prix']."Dt"; ?></h2>
														<a href="#" class="btn btn-default add-to-cart">
															<i class="fa fa-shopping-cart"></i>
															ajouter au panier
														</a>
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li>
												<a href="DetailleProduit.php?id_pdt=<?PHP echo $row['id_pdt']; ?>">
												<i class="fa fa-plus-square"></i>detaille produit</a></li>
							
										</ul>
									</div>
								</div>	
							</div>
					<?PHP
					}}
					?>
			
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->

						<div class="tab-content">
		
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
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
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>