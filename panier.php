<?php 
include "../entities/lignecommande.php";
session_start();
///////////////////////////////////////    ms      //////////////////////////////////////////
$_SESSION['moidcl']=$_SESSION['id'];
$_SESSION['monomcl']=$_SESSION['nom'];
$_SESSION['moprenomcl']=$_SESSION['prenom'];
$_SESSION['motelcl']=$_SESSION['telephone'];


///////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////////////////////////////////////////////////////////////////






//if(isset($_COOKIE['mozitoun'])){
if(isset($_COOKIE['mozitoun'.$_SESSION['moidcl']])){
$tabcoo = unserialize($_COOKIE['mozitoun'.$_SESSION['moidcl']]);
}
//print_r($tabcoo);
//}
if(isset($_COOKIE['mozitounlentille'.$_SESSION['moidcl']])){

$tabcool = unserialize($_COOKIE['mozitounlentille'.$_SESSION['moidcl']]);
//print_r($tabcoo);
}
if(isset($_COOKIE['mozitounsol'.$_SESSION['moidcl']])){

$tabcoosol = unserialize($_COOKIE['mozitounsol'.$_SESSION['moidcl']]);
//print_r($tabcoo);
}


  
  $_SESSION['mo'] = 0;

$somme=0;
$sommel=0;
$sommesol=0;





////////////////////////////////////////////////////////







/////////////////////////////////////
?>
   
    
     
      
       
         <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>



	<?php require('header.php'); ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					
					
					
					
					
					
					<form method="post" action="panierphp.php">
					
					<?php 
                        
                        if(isset($tabcoo)){
                       
                        for($i=0;$i<count($tabcoo);$i++){
                        
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo $tabcoo[$i]->getimage(); ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $tabcoo[$i]->getnom(); ?></a></h4>
								<p><?php echo $tabcoo[$i]->getcolor(); ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $tabcoo[$i]->gettotale()." DT"; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<p><?php echo $tabcoo[$i]->getqte(); ?></p>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $tabcoo[$i]->getqte()*$tabcoo[$i]->gettotale()." DT"; ?></p>
							</td>
							<td class="cart_delete">
							    <div class="fa fa-times">
								<input type="submit" name="delete"  class="cart_quantity_delete" value="">
								<?php
                                  /*  if(isset($_POST['delete'])){
                                unset($tabcoo[$i]);
                               setcookie('mozitoun', '', time()-15 , '/');
                                $tab_ser = serialize($tabcoo);
                                       setcookie('mozitoun',$tab_ser,time()+15);
                                 }*/
                                
                         
     
                 
                    $_SESSION['mo']=$i;
                    
                        
                                    ?>
                                  
								</div>
							</td>
						</tr>

                    
                    <?php $somme= $somme+$tabcoo[$i]->gettotale(); }}
                    
                        ?>
                    
                    
                    
                    
                    
                    
                    
                    <?php 
                        
                        if(!empty($tabcool)){
                       
                        for($i=0;$i<count($tabcool);$i++){
                        
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo $tabcool[$i]->getimage(); ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $tabcool[$i]->getnom(); ?></a></h4>
								<p><?php echo $tabcool[$i]->getcolor(); ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $tabcool[$i]->gettotale()." DT"; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<p><?php echo $tabcool[$i]->getqte(); ?></p>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $tabcool[$i]->getqte()*$tabcool[$i]->gettotale()." DT"; ?></p>
							</td>
							<td class="cart_delete">
							    <div class="fa fa-times">
								<input type="submit" name="deletel"  class="cart_quantity_delete" value="">
								<?php
                                  /*  if(isset($_POST['delete'])){
                                unset($tabcoo[$i]);
                               setcookie('mozitoun', '', time()-15 , '/');
                                $tab_ser = serialize($tabcoo);
                                       setcookie('mozitoun',$tab_ser,time()+15);
                                 }*/
                                
                         
     
                 
                    $_SESSION['mol']=$i;
                    
                        
                                    ?>
                                    
                                    
                                  
								</div>
							</td>
						</tr>

                    <?php $tabcool[$i]->settotale($tabcool[$i]->gettotale()*$tabcool[$i]->getqte()); ?>
                    <?php $sommel= $sommel+$tabcool[$i]->gettotale(); }}
                    
                        ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     <?php 
                        
                        if(!empty($tabcoosol)){
                       
                        for($i=0;$i<count($tabcoosol);$i++){
                        
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo $tabcoosol[$i]->getimage(); ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $tabcoosol[$i]->getnom(); ?></a></h4>
								<p><?php echo $tabcoosol[$i]->getcolor(); ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $tabcoosol[$i]->gettotale()." DT"; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<p><?php echo $tabcoosol[$i]->getqte(); ?></p>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $tabcoosol[$i]->gettotale()*$tabcoosol[$i]->getqte()." DT"; ?></p>
							</td>
							<td class="cart_delete">
							    <div class="fa fa-times">
								<input type="submit" name="deletesol"  class="cart_quantity_delete" value="">
								<?php
                                  /*  if(isset($_POST['delete'])){
                                unset($tabcoo[$i]);
                               setcookie('mozitoun', '', time()-15 , '/');
                                $tab_ser = serialize($tabcoo);
                                       setcookie('mozitoun',$tab_ser,time()+15);
                                 }*/
                                
                         
     
                 
                    $_SESSION['mosol']=$i;
                    
                        
                                    ?>
                                    
                                    
                                  
								</div>
							</td>
						</tr>

    <?php $tabcoosol[$i]->settotale($tabcoosol[$i]->gettotale()*$tabcoosol[$i]->getqte()); ?>

                    <?php $sommesol= $sommesol+$tabcoosol[$i]->gettotale(); }}
                        ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     <tr>
                       
                        <td colspan="6" style="text-align: right;">
                        <p style="font-size: 30px; font-family: monospace;">Totale  : <?php echo $somme+$sommel+$sommesol; ?> DT </p>
                        <hr style="color: black"> 
                        </td>
                    </tr>
                    
                    
                      <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td > 
                       
                        <input type="submit" value=" Valider Panier " class="btn btn-default" name="passercommande" style="background-color:olive; color: white ; width: 100% ; height: 100% ;  " onclick="return confirm('Etes-vous sure?')" >
                   
                        </td>
                    </tr>
                    
                   
                    </form>
                    
                    
                  
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	!--/#do_action-->

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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>