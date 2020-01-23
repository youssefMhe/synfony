 
 <?php
include "../entities/lignecommande.php";


session_start();
    
    $obj = unserialize($_SESSION['lunettevue']);
    

    


?>
   
    
      <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	
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
  	
  	
  	
  	
  	
  	<link rel="stylesheet" type="text/css" href="commande.css">
  </head>
  <body>
  
 
  <?php 
     if(array_key_exists('errors',$_SESSION)):
     
     ?>
    <center>
     <div style="width:50%;">
     <div class="alert alert-danger">
  <strong>!</strong> <?= implode('<br>',$_SESSION['errors']); ?>

</div>
    </div>
    </center>
    <?php unset($_SESSION['errors']); endif; ?>
  
  
  
  
  <form method="post" action="commande2php.php">
  
  
  <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<table style="width: 100%; background-color:whitesmoke; color: black;">
    <tbody>
        <tr>
           
            <td colspan="2" rowspan="2" style="background-color:ghostwhite;">
              <center>
  <div style="width: 100%; margin: 0 0 400px;">
 <h2>CHOISISSEZ LE TYPE DE TEINTE POUR VOS VERRES</h2>
 
 
 <div class="col" style="width: 33.33%">
     <ul class="price-box">
        <li class="header">Sans teinte</li>
        <li></li>
        <li class="emph1"><strong>INCLUS</strong></li>
        <li class="emph2"><input type="submit" class="button" value="Choisir" name="sansteinte"></li>
         
     </ul>
 </div>
 
 
 
 <div class="col" style="width: 33.33%">
     <ul class="price-box">
        <li class="header">Teinté</li>
        <li class="emph">Pour proteger vos yeux du soleil</li>
        <li class="emph">
            GRIS : Idéal pour les hypermetropes
            <br>
            BRUN : idéal pour les myopes 
            <br>
            VERT : Conduite de nuit
        </li>
        <li>
          
               GRIS <input type="radio"  name="teinte" value="gris">
               BRUN <input type="radio"  name="teinte" value="brun">
               VERT <input type="radio"  name="teinte" value="vert">
           
        </li>
        
        <li class="emph1"><strong>+15£</strong></li>
        <li class="emph2"><input type="submit" class="button" value="Choisir" name="teinteb"></li>
         
     </ul>
 </div >
      
      <div class="col" style="width: 33.33%">
     <ul class="price-box">
        <li class="header">Photoch-romique</li>
        <li class="emph">Se teinte alumiere du soleil en exterieur</li>
        
        <li class="emph">
            GRIS : Idéal pour les hypermetropes
            <br>
            BRUN : idéal pour les myopes 
            <br>
            
        </li>
        <li>
            
               GRIS <input type="radio"  name="photoch" value="gris">
               BRUN <input type="radio" name="photoch" value="brun">
             
            
        </li>
        
        <li class="emph1"><strong>+40£</strong></li>
        <li class="emph2"><input type="submit" class="button" value="Choisir" name="photoc"></li>
         
     </ul>
 </div>
 
 
 
 
 
 
 
 
</div>
  </center>
  
  
            </td>
            <td style="color:black; font-size: 14px; background-color:beige; font-style: italic;">
            NOTRE EQUIPE D4EXPERT AVOTRE ECOUTE <br><br><br>            <hr style="height: 2px; border-color:black; padding: 0; margin: 0;">            <hr style="height: 2px; border-color:darkorange; padding: 0; margin: 0;"><br>


            <strong>tél.:52925466</strong><br>Du lundi au vendredi de 9h a 18h30<br>(prix d'un appel local)<br><br><br>             <hr style="height: 2px; border-color:black; padding: 0; margin: 0;">
               <hr style="height: 2px; border-color:darkorange; padding: 0; margin: 0;">

               Par e-mail <a href="#">en clicant ici!</a> <br>
            
              </td>
        </tr>
        
        
        
        <tr>

            <td style="color: black; background-color:#fbfafa; vertical-align: text-top">
            <hr style="height: 2px; border-color:black; padding: 0; margin: 0;">
               
               
                <h3 style="font-family: monospace;"> MA RÉSERVATION !</h3>
                			<hr style="height: 2px; border-color:darkorange; padding: 0; margin: 0; width: 100%;"> 

                
                <img src="<?php if(isset($_SESSION['moimageprodprod'])) echo$_SESSION['moimageprodprod'];  ?>" style="width: 300px; height: 90px; padding: 15px 0 15px 0;">
                <p style="font-family:monospace; font-size: 18px;"><strong>description: </strong></p>
              <p style="font-family:inherit; font-size: 15px;"><?php 
                  echo " <BR> Color : ".$obj->getcolor();
                  echo " <BR> Verres : ".$obj->getverre(); 
                  if($obj->getmarquedeverre()!=""){
                  echo " <BR> Marque De Verres : ".$obj->getmarquedeverre(); 
                  }
                  echo " <br> Type De Verres : ". $obj->gettypee();  
                  ?>
                  </p>
                  <p style="text-align: right;font-family: monospace; font-size: 25px;">
                  <?php 
                  echo " <br><strong> Totale : ". $obj->gettotale()." £ </strong>";
                      
                      
                      //$_SESSION['lunettevue'] = serialize($ligne);
                      
                  ?></p>
                <hr style="height: 2px; border-color:black; padding: 15px; margin: 15px;">
            </td>
            
            
            
            
            
        </tr>
        
        
        
    </tbody>
</table>
			
				
			
			
			<div class="review-payment" style="padding: 250px 0 0 0; margin: auto;">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info" >
				<table class="table table-condensed" style="background-color: white;">
					<thead>
						<tr class="cart_menu" style="background-color: black;">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section>
  
  </form>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </body>
  </html>