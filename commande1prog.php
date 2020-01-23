   
    
     <?php
include "../entities/lignecommande.php";


session_start();
    
    $obj = unserialize($_SESSION['lunettevue']);
    
 

if(isset($_COOKIE['mozitoun'])){

$tabcoo = unserialize($_COOKIE['mozitoun']);
//print_r($tabcoo);
}
  

   
    $somme = 0;

    


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
  	
  	
  	<script>
      
      function zeizz(){
         var divahide = document.getElementById('moahide');
      if (document.getElementById('zeizzradio').checked == true ){
         
          
          
          
          if(divahide.style.display!='none'){
              
             
              divahide.style.display='none';
          }
           
          
      }
          
          
          
         else if(document.getElementById('essilorradio').checked == true){
            
              divahide.style.display = 'block';
           
          }
          
            else if(document.getElementById('myriemoptiqueradio').checked == true){
            
              divahide.style.display = 'block';
           
          }
         
          
          
      }
      
      
      </script>
  	
  	
  	
  </head>
  <body>
  
 
  
  
  
  
  
  
  	
			
  
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
			
			
			
			
			<form method="post" action="commande1php.php" name="mozitoun">  
			
			
<table style="width: 100%; background-color:whitesmoke; color: black;">
    <tbody>
        <tr>
           
            <td colspan="2" style="background-color:ghostwhite;">
               <center>
                <h2>CHOISISSEZ LA MARQUE DE VOS VERRES</h2><br>
                <ul style="float: left;">
                    <li style="float: left; padding: 15px; margin: 66px 55px 55px 55px ;height: 100px;width: 100px"><div id="marq"><p style="color: black; font-style: italic;"><strong>Myriem optique</strong></p> <br><br><br><br>
                    <input  type="radio" name="marqueverre" id="myriemoptiqueradio" value="myriemoptique" onclick="zeizz()">
                    <strong>INCLUS</strong>
                    </div></li>
                    <li style="float: left;padding: 15px; margin: 55px;"><div id="marq"><img src="images/cart/zeizz.jpg" style="height: 100px;width: 100px">
                     <br><br><br>
                    <input  type="radio" name="marqueverre" id="zeizzradio" value="zeizz" onclick="zeizz()">
                    <strong>+130£</strong>
                    </div ></li>
                    <li style="float: left;padding: 15px; margin: 55px;"><div id="marq"><img src="images/cart/essilor.png" style="height: 100px;width: 100px">
                     <br><br><br>
                    <input  type="radio" name="marqueverre" id="essilorradio" value="essilor" onclick="zeizz()">
                    <strong>+150£</strong>
                    
                    </div></li>
                </ul>
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
            <td colspan="2"  style="background-color:ghostwhite;">
                
                
			 <center>
  <div style="width: 100%;">
 <h2>CHOISISSEZ LE TYPE DE VERRES</h2>
 
 
 <div class="col">
     <ul class="price-box">
        <li class="header">Basic</li>
        <li class="emph">Durcis</li>
        <li class="emph1"><strong>INCLUS</strong></li>
        <li class="emph2"><input type="submit" value="Choisir" name="basic" class="button" onclick="mo()"></li>
         
     </ul>
 </div>
 
 
 
 <div class="col">
     <ul class="price-box">
        <li class="header">Confort</li>
        <li class="emph">Durcis</li>
        <li class="emph">Anti-reflet</li>
        <li class="emph1"><strong>+50£</strong></li>
        <li class="emph2"><input type="submit" value="Choisir" name="confort" class="button" onclick="mo()"></li>
         
     </ul>
 </div>
      
      <div class="col">
     <ul class="price-box">
        <li class="header">Bronze</li>
        <li class="emph">Durcis</li>
        <li class="emph">Aminci</li>
        <li class="emph1"><strong>+20£</strong></li>
        <li class="emph2"><input type="submit" value="Choisir" name="bronze" class="button" onclick="mo()"></li>
         
     </ul>
 </div>
 
 
 
 <div class="col">
     <ul class="price-box">
        <li class="header">Silver</li>
        <li class="emph">Durcis</li>
        <li class="emph">Aminci</li>
        <li class="emph">Anti-reflet</li>
        <li class="emph1"><strong>+70£</strong></li>
        <li class="emph2"><input type="submit" value="Choisir" name="silver" class="button" onclick="mo()"></li>
         
     </ul>
 </div>
 
 
 
 <div class="col" id="moahide">
     <ul class="price-box best">
        <li class="header header-gold" style="background-color: firebrick;">Gold</li>
        <li class="emph">Durcis</li>
        <li class="emph">Très Aminci</li>
        <li class="emph">Anti-reflet</li>
        <li class="emph">Anti-salissure</li>
        <li class="emph1"><strong>+130£</strong></li>
        <li class="emph2"><input type="submit" value="Choisir" name="gold" class="button" onclick="mo()"></li>
         
     </ul>
 </div> 
 
 
 
 
</div>
  </center>
  
  
			
                
            </td>
            
            
            
            
            <td style="color: black; background-color:#fbfafa; vertical-align: text-top">
            <hr style="height: 2px; border-color:black; padding: 0; margin: 0;">
               
               
                <h3> MA RÉSERVATION !</h3>
                			<hr style="height: 2px; border-color:darkorange; padding: 0; margin: 0; width: 100%;"> 

                
                <img src="<?php if(isset($_SESSION['moimageprodprod'])) echo$_SESSION['moimageprodprod'];  ?>" style="width: 300px; height: 90px; padding: 15px 0 15px 0;">
                <p style="font-family:monospace; font-size: 18px;"><strong>description: </strong></p>
              <p style="font-family:inherit; font-size: 15px;"><?php 
                  echo " <BR> Color : ".$obj->getcolor();
                  echo " <BR> Verres : ".$obj->getverre(); 
            
                  ?>
                  </p>
                  <p style="text-align: right;font-family: monospace; font-size: 25px;">
                  <?php 
                  echo " <br><strong> Totale : ". $obj->gettotale()." £ </strong>";
                      
                      
                      //$_SESSION['lunettevue'] = serialize($ligne);
                      
                  ?></p>
                
              
                <hr style="height: 2px; border-color:black; padding: 15px; margin: 15px;;">
            </td>
            
            
            
            
            
        </tr>
        
        
        
    </tbody>
</table>
			
	<p style="color: black ; padding: 30px;"><strong>Une correction inférieure à -5 et supérieure à +3,50 exige des verres amincis (Bronze, Silver ou Gold). Les montures percées nécessitent également des verres amincis (Bronze, Silver ou Gold)</strong></p>	

			<hr style="height: 2px; border-color:darkorange; padding: 0; margin: 0; width: 50%;"> 
            <hr style="height: 2px; border-color:black; padding: 0; margin: 0;">
			
			
			
			
			
			
			
			
			
			
			</form>
			
			
			
			
			
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
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
						
						
						  
						
							<form method="post" action="panierphp.php">
					
					<?php 
                        
                        if(!empty($tabcoo)){
                       
                        for($i=0;$i<count($tabcoo);$i++){
                        
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $tabcoo[$i]->getnom(); ?></a></h4>
								<p><?php echo $tabcoo[$i]->getcolor(); ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $tabcoo[$i]->gettotale()." £"; ?></p>
							</td>
							<td class="cart_quantity" style="color: black;">
								<div class="cart_quantity_button">
									<p><?php echo $tabcoo[$i]->getqte(); ?></p>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $tabcoo[$i]->getqte()*$tabcoo[$i]->gettotale()." £"; ?></p>
							</td>
							<td class="cart_delete">
							    <div class="fa fa-times">
								
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

                    
                    <?php $somme= $somme+$tabcoo[$i]->gettotale(); }} ?>
                    
                     <tr>
                       
                        <td colspan="6" style="text-align: right;">
                        <p style="font-size: 30px; font-family: monospace; color: olive;">Totale  : <?php echo $somme; ?> £ </p>
                        <hr style="color: black"> 
                        </td>
                    </tr>
                    
                    
                     
                    
                   
                    </form>
                    
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
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
  


  
  
  
  
  
  
  
  
  
  
  
  
  
  </body>
  </html>
  