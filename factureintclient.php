<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   session_start();

$_SESSION['moidcl']=$_SESSION['id'];
$_SESSION['monomcl']=$_SESSION['nom'];
$_SESSION['moprenomcl']=$_SESSION['prenom'];
$_SESSION['moadressecl']=$_SESSION['mail'];
$_SESSION['motelcl']=$_SESSION['telephone'];


   



echo $_SESSION['adresse'];


?>
 
<?php

include "../core/facturecommandec.php";
 include "../core/commandec.php";
require_once('evaluercommande.php');
 //include "C:/xampp/htdocs/mozitoun/config.php";

//require(dirname(__FILE__).'/fpdf.php');

require('fpdf/fpdf.php');

$facture = new facturecommandec;
$var = 1;
$liste1 = $facture->recherche("idclient",$_SESSION['moidcl']);
$liste = $liste1->fetchAll();


$id=array();
$moid1=array();
$qte=array();
$ipdf=0;
  
$totspecefact="";


foreach($liste as $mo8){
               $totspecefact= $mo8['id'];    
    if(isset($_POST['moprofpdf'.$ipdf])){
    
    
 
   




$mo = new facturecommandec;
        
 //$mo->modifieretat("etat","payee",1);
$liste = $mo->recherche("idclient",$_SESSION['moidcl']);

    $str="";
    
    foreach($liste as $mozitoun){
        if($mozitoun['id']==$mo8['id'])
        $str=$str.$mozitoun['idcommandes']; 
        
    }
    
    //echo $str;
$capt=0;
$capt1=0;
$k=0;
$j=0;
$strk="";
    
$stridprod="";
    
    
for($i=0;$i<strlen($str);$i++){
    if($str[$i]==";"){
       if($capt==0){
           $j=0;
            $capt++;
       }
        
           
            for($j;$j<$i;$j++){
                if($capt1==0){
               $k=0;
                    $capt1++;
                }
                
                $strk[$k]=$str[$j];
                
                $k++;
               
                
            }
        $capt1=0;
        //$k=0;
            $j=$i+1;
           //substr($strk, 0, -1);
         //echo $strk."<br>";
         $mo1 = new Commandec;

        /////////////////////////////////////  produit ///////////////////////////////////
        
        $liste1=$mo1->recherche("id",$strk);
        
        foreach($liste1 as $moon){
        
           
        $stridprod=$moon['idproduits'];
        
    }
        
        
        $captprod=0;
        $capt1prod=0;
        $kk=0;
$jj=0;
$strkprod="";
    for($ii=0;$ii<strlen($stridprod);$ii++){
        
        if($stridprod[$ii]==";"){
            if($captprod==0){
           $jj=0;
            $captprod++;
       }
          
            for($jj;$jj<$ii;$jj++){
                if($capt1prod==0){
               $kk=0;
                    $capt1prod++;
                }
                
                $strkprod[$kk]=$stridprod[$jj];
                
                $kk++;
               
                
            }  
            $capt1prod=0;
        //$k=0;
            $jj=$ii+1;
            echo "<br>";
            //echo $strkprod;
               echo "<br>";   
            echo "<br>";   
            echo "<br>";
            $qte[]=  substr($strkprod, ($p = strpos($strkprod, '(')+1), strrpos($strkprod, ')')-$p);
            $id[] = strstr($strkprod, '(', true);
            $moid1[] = strstr($strkprod, '(', true);
           
            
            
          

           
            
        }
        
       
        
    }
        
        
        
    
        
        ///////////////////////////////////////////////////////////////////////////////////
        //$mo1->modifier("etat","payee",$strk);
    }
   
}
      
        
      

    
            
    //$pdf->Cell(40,10,$_POST['motaagriba']." DT",0,1);

    }
    
        
    
    

    
                 $ipdf++;  
    
    
    

    

                }




$_SEESION['tabmoid']=$moid1;

$capt=0;
$ippf=0;
$liste5 = $facture->recherche("idclient",$_SESSION['moidcl']);
$liste6 = $liste5->fetchAll();
    foreach($liste6 as $m){
                    
    if(isset($_POST['moprofpdf'.$ippf])){
$pdf1 = new FPDF();
$pdf1->AddPage();
        
        $pdf1->Cell(150,30,"",0,1);
 $pdf1->SetFont('Arial','I',90);
    $pdf1->Cell(150,20,"MYRIEM",0,0,'C');
       $pdf1->SetFont('Arial','I',12);
    $pdf1->Cell(40,10,"Merci pour voter fidalite",0,1);
     $pdf1->SetFont('Arial','I',90);
    $pdf1->Cell(150,5,"",0,1);
    $pdf1->Cell(150,20,"OPTIQUE",0,1,'C');
     $pdf1->Cell(150,30,"",0,1);
    
    
$pdf1->SetFont('Arial','I',9);
    $pdf1->Cell(150,10,"Myriamoptique, Inc",0,0);
    $pdf1->Cell(40,10,"Nom  : ".$_SESSION['monomcl'],0,1);
    
    
   
    $pdf1->Cell(150,10,"rue habib bourgiba 8050 Hammamet",0,0);
    $pdf1->Cell(40,10,"Prenom  : ".$_SESSION['moprenomcl'],0,1);
    
    $pdf1->Cell(150,50,"",0,1);
    
        
        $compteurpos=0;
        
        
        for($m1=0;$m1<count($id);$m1++){
      
        

        //////////////////////////////////////////////////////////////////  recherche    doucha ////////////////////////////////
            
            $sql=" select * from produit  WHERE id_pdt = '".$id[$m1]."'  ";
        
        
        $db = config::getConnexion();
        
       
        
     $infoprod=$db->query($sql);
            
            $infoprod1 = $infoprod->fetchAll();
            
            foreach($infoprod1 as $mozitounfaded){
                $image=$mozitounfaded['imageFront'];
           
           
       $pdf1->Image("C:/xampp/htdocs/projet_web_22222222222/G_stock/views/pics/".$image, 95, 150+$compteurpos, 30);
               
                 $pdf1->SetFont('Arial','I',20);
    $pdf1->Cell(150,20,$mozitounfaded['nom_pdt'],0,1,'C');
                  
                $pdf1->SetFont('Arial','I',15);
    $pdf1->Cell(150,0,$mozitounfaded['prix']." DT  'unitaire'",0,1,'C');
                   $pdf1->Cell(150,30,"",0,1);
                $compteurpos=$compteurpos+50;
                 }
            
        }
        $pdf1->SetFont('Arial','U',20);
         $pdf1->Cell(40+$compteurpos,10,"totale :  ".$m['tatale']."   DT",0,1);

     $capt=1;
      
        
        
    }
        $ippf++;
    }

 
ob_clean(); 

if($capt==1){
     $pdf1->Output(); 
}









///////////////////////////////////////repeat //////////////////////////////////////////////////////////////////////////////////

















if(isset($_POST['printpdf'])){
    
    
  
$pdf = new FPDF();
$pdf->AddPage();

    
     $pdf->Cell(150,30,"",0,1);
 $pdf->SetFont('Arial','I',90);
    $pdf->Cell(150,20,"MYRIEM",0,0,'C');
       $pdf->SetFont('Arial','I',12);
    $pdf->Cell(40,10,"Merci pour voter fidalite",0,1);
     $pdf->SetFont('Arial','I',90);
    $pdf->Cell(150,5,"",0,1);
    $pdf->Cell(150,20,"OPTIQUE",0,1,'C');
     $pdf->Cell(150,30,"",0,1);
    
    
$pdf->SetFont('Arial','I',9);
    $pdf->Cell(150,10,"Myriamoptique, Inc",0,0);
    $pdf->Cell(40,10,"Nom  : ".$liste[0]['nomcl'],0,1);
    
    
   
    $pdf->Cell(150,10,"rue habib bourgiba 8050 Hammamet",0,0);
    $pdf->Cell(40,10,"Prenom  : ".$liste[0]['prenomcl'],0,1);
    
    $pdf->Cell(150,50,"",0,1);
    
    
  $pdf->SetFont('Arial','B',10);  
    $pdf->Cell(70,10,"id",1,0);
    $pdf->Cell(40,10,"totale",1,0);
    $pdf->Cell(40,10,"date",1,0);
    $pdf->Cell(40,10,"etat",1,1);
   
    
foreach ($liste as $mopdf) { 
    $pdf->Cell(70,10,$mopdf['id'],1,0);
    $pdf->Cell(40,10,$mopdf['tatale'],1,0);
    $pdf->Cell(40,10,$mopdf['date'],1,0);
    $pdf->Cell(40,10,$mopdf['etat'],1,1);
    }
    
    $pdf->Cell(150,10,"TOALE :",0,0,'R');
    $pdf->Cell(40,10,$_POST['motaagriba']." DT",0,1);
    
$pdf->Output();
    
    
    
}



if(isset($_POST['momail'])){
    
    
         
   $header="MIME-Version: 1.0\r\n";
$header.='From:"myriamoptique.com"<myryamoptique@mozitoun.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
    
   
     $message='<h1 style =" background-color:orange;">MYRIAM OPTIQUE</h1>'.'<strong>Bonjour</strong> mr  '.$_SESSION['nom'].' '.$_SESSION['prenom']."<br><br><br>"." <h3>les information sur tes factures : </h3>";
        
         
         
     $message1='
<html>
	<body>
		<div align="center">
			 <img src="images/cart/one.png">  
			<br />
			<table style="width: 600px; height: 300px;" border="man">
            <tbody>
            ';
             
       $message2='     </tbody>
            </table>
			<br />
			<img src="http://www.primfx.com/mailing/separation.png"/>
		</div>
	</body>
</html>
'; 
         $messagehead ='<tr style="color:white;background-color:olive; font-size:20px;" ><td>Id</td><td>Date</td><td>Totale</td><td>Etat</td></tr>';
         
         
         $message3='';
       foreach($liste as $mozitounmail){
           
        $message3=$message3.'<tr><td>'.$mozitounmail['id'].'</td><td>'.$mozitounmail['date'].'</td><td>'.$mozitounmail['tatale'].'</td><td>'.$mozitounmail['etat'].'</td></tr>';
         }
         

mail($_POST['abdressemailmo'], "Salut tout le monde !", $message.$message1.$messagehead.$message3.'<tr style="color:white;background-color:olive; font-size:20px;" ><td colspan"4>TOTALE : '.$_POST['motaagriba'].' DT</td></tr>'.$message2, $header);

     }
    





    for($ev=0;$ev<5;$ev++){
        
        if(isset($_POST['evaluer'.$ev])){
            insert($ev,$_SESSION['moidcl']);
        }

    }



?>
  
   
    
     
       <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
<link href="path/to/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
 
<!-- optionally if you need to use a theme, then include the theme file as mentioned below -->
<link href="path/to/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
<script src="path/to/js/star-rating.js" type="text/javascript"></script>
 
<!-- optionally if you need to use a theme, then include the theme file as mentioned below -->
<script src="path/to/themes/krajee-svg/theme.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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

 
<!-- optionally if you need translation for your language then include locale file as mentioned below -->
<script src="path/to/js/locales/{lang}.js"></script>
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
        
        
        
        
        
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);

.body {

}

.jumbotron-flat {
  background-color: solid white;
  height: 100%;
  border: 1px solid #4DB8FF;
  background: white;
  width: 100%;
text-align: center;
overflow: auto;
    background: url(images/cart/factback.png);

}

.paymentAmt {
    font-size: 80px; 
}

.centered {
    text-align: center;
}

.title {
 padding-top: 15px;   
}
        
        
       img# {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
} 
      img#bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
          display : block;
}
  
        
    </style>
    
    
    
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

        
  <script src="C:/Users/asus/Desktop/zitfont/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.js"></script>

<script defer src="C:/Users/asus/Desktop/zitfont/fontawesome-free-5.0.9/web-fonts-with-css/css/fa-v4-shim.js"></script>

<script>
    
    
    function  fn(){
        if(document.getElementById('momail').style.display == 'none'){
            
            document.getElementById('momail').style.display = 'inline';  
            document.getElementById('momail1').style.display = 'inline';  
           
        }
        else{
           
            document.getElementById('momail').style.display = 'none';  
            document.getElementById('momail1').style.display = 'none';  
             
        }
    
    
    }
    
    </script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body style="width: 100%;">
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <?php
    
    require('header.php');
    
    ?>
   
   
   
 
   
   
   
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
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>MYRIEM OPTIQUE</h1>
								
								
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
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
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <div class="invoice-box" style="background-color: white;">
       <form method="post" action="factureintclient.php">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h1 style="background-color: darkorange;">MYRIAM OPTIQUE</h1>
                            </td>
                            
                            <td>
                                 <h4>Merci pour votre fidalité !</h4>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Myriamoptique, Inc.<br>
                                
rue habib bourgiba
8050 Hammamet<br>
                              
                            </td>
                            
                            <td>
                              <?php 
                                if(!empty($liste)){
                               foreach($liste as $mo1){
                              $nom =  $mo1['nomcl'];
                              $prenom= $mo1['prenomcl'];
                            }
                                echo "Nom : ".$_SESSION['monomcl']."<br>";
                                echo "Prenom : ".$_SESSION['moprenomcl'];
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
          
            <tr style="background-color: black;">
                <td style="color: white;">
                    Id
                </td>
                
                <td style="color: white;">
                    Totale
                </td>
                <td style="color: white;">
                   Date
                </td>
                   <td style="color: white;">
                    Etat
                </td>
            </tr>
            
            
                
                
                <?php
                
                $totale=0;
                 $ipdf=0;
                foreach($liste as $mo){
                    
                   echo "<tr class='"."item"."'>";
    
        echo "<td>".$mo['id']."</td>";
        echo "<td>".$mo['tatale']."</td>";
                    if($mo['etat']=="non-payee"){
        $totale=$totale+$mo['tatale'];
                    }
        echo "<td>".$mo['date']."</td>";
        echo "<td>".$mo['etat']."</td>";
                  echo "<td>"  ?>
                     <input  type="submit" name="moprofpdf<?php echo $ipdf;  ?>" id="mosubmittmo<?php echo $ipdf;  ?>" style="display : none;"><label for="mosubmittmo<?php echo $ipdf;  ?>"><img src="images/cart/pdf-2.png" style="width: 60px; height: 60px;" ></label> 
                     
                     
                    <?php
         echo "</td>";
echo "</tr>"; 
                    
                    
                 $ipdf++;   
                }
                
                
                ?>
                
                
                
                
     
            
            <tr class="total">
                <td></td>
                
                <td>
                  <?php echo "Total à payé : ".$totale."  £";
                    $_SESSION['totalesprite']=$totale*100; ?>
                   
                </td>
            </tr>
        </table>
       <input type="text" value="<?php echo $totale; ?>" name="motaagriba" style="display: none;">
       <label for="mosubmitt"><img src="images/cart/pdf-2.png" style="width: 60px; height: 60px;" ></label>  <input type="submit" name="printpdf" value="imprimerpdf" id="mosubmitt" style="background-color: orangered; border: none; color: white; width: 100px; height: 40px; margin-top: 0px; margin-bottom: 10px;display: none;" >
       
       
       
       
       
       <label for="clickmail"><img src="images/cart/mail.png" style="width: 60px; height: 60px;" ></label>  
       
              <input type="button" value="imprimerpdf" id="clickmail" style="background-color: orangered; border: none; color: white; width: 100px; height: 40px; margin-top: 0px; margin-bottom: 10px;display: none;" onclick="fn()" >
              
               <br>
       
       <input type="submit" name="momail" value="Envoyer" id="momail" style="background-color: orangered; border: none; color: white; width: 100px; height: 40px; margin-top: 0px; margin-bottom: 10px; display : none;" >
       <input type="text" name="abdressemailmo" placeholder="Entrez votre email" id="momail1" style="display :none;" value="<?php echo  $_SESSION['moadressecl'] ; ?>" >
      
              
               <br> <br> <br>
              <center>
<div class="container">
    			
		<div class="row">
			<div class="col-sm-3">
				<div class="rating-block">
				<h4>evaluer notre service de commande</h4>
    <p> </p>
    <?php
    $captev = 0;
    $noteev = 0;
    $compteur = 0;
    
    $note = getevaluercommande();
    
    foreach($note as $evaluer){
        if($evaluer['id_cl']==$_SESSION['moidcl']){
            $captev = 1;
        }
        $noteev=$noteev+$evaluer['note'];
        $compteur++;
    }
    
    ?>
    	<h2 class="bold padding-bottom-7"><?php echo $noteev/$compteur; ?><small>/ 4</small></h2>
     
    <?php
    
    if($captev == 0){
    for($ev=0;$ev<5;$ev++){
     
?>
    
    <button type="submit" name="evaluer<?php echo $ev ?>" value = "<?php echo $ev ?> " class="btn btn-warning btn-sm" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    
    <?php
    }
    }
                    
    else
    {
       ?>
       <p>Merci pour votre evaluation</p>
       <?php 
    }
    
    ?>
    
    
    
</div>
            </div>
    </div>
          
           </div>
           
           </center>  
      
    -------->
      
    <!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIIaQYJKoZIhvcNAQcEoIIIWjCCCFYCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCc2aOUcLdTfEEX6JCucvhL4RwA17V3W2/BQPO48zybYlAXybR7IkTPqVZooQJ8tgpY5wHaBe7DuExa5tvJpcGbIxY98BM8rWekS6hvy0qha3WwnjHOFM5y43oBjnE0dG0oN3cgEiNarEJ2nXfhjCU3LGud/APF0rhpBZMSpgO6XzELMAkGBSsOAwIaBQAwggHlBgkqhkiG9w0BBwEwFAYIKoZIhvcNAwcECK6KoEHQ8Z21gIIBwG+aZLXQxMFx2g2HKZEZhIBgmglCZfgnW0P58yexczDkqSORTSCREY61G1GBDXMGsuaBBsKG6m05BM4wlDnXbzxuLFhrswWblULM3KKQxsHKVpItjjGSNyu5rXn49b1WfyTJrzoIRRjGa9j0a3gYajE0qqg8vB3WnQvd939r7ZztrsK09JA3BAsB1Eh5zIOy1/oh/q2MJQVhtVJG3UiMjglwjOCnbE0c4DGklr2fe5naKD5vVBRwwnvH1R5PwAxUS6AlQhKLgwlRaaNq23AYX8dLCjifjK8jAaGcFU4ek69fWyeatTNsRVF2odwryldJCxLlcTrB0Gp+6/Ie1iymB6SXdzSiTtkRj3i3uMBKXWWRh7OOXFEu863viM38NyMmBmrbKdbssVnlOo1KL69YlXFc2hbBx0qOrpjqAv1sj2gYqcXfFcmcPW4abCfqQXWTvk6uKynDlU30XHIujBm6hndDGeTvNwhAxfbhUAlP/6Y1zk3R7gt39bodOtTgZArH861t5bBgmcu4ueCMiFJNBg4j2RqFY4oIyK9Azlv8YsfM0/xme4cJFnh9hHgmO5E1OCdCAU+3GSbOEorKIzz9u2OgggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xODAzMzAyMDIwMzJaMCMGCSqGSIb3DQEJBDEWBBTIifrQEBP3YNns4ezLaZYrjQX9wjANBgkqhkiG9w0BAQEFAASBgJ81bNMtcilqd3AM6SKFX/2j7aFMBbpdCAjjg0S6LfwiELrEpHcp0Bz3JiJjtI4zgQTKJuKA8/ObTz4dX16ZssZ4bsEmeFNX7eZVIwtDkBjbsEKaKnflM1cEGdk1i5EZPV/Dan1kvSZJ2vnr0KnjFJ3bM99m4/wCiGWmTIVDP8c7-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>


      <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=CBSCMU7U5ZKEJ&lc=FR&item_name=mozitoun&item_number=mozitoun&amount=%2e00&currency_code=EUR&button_subtype=services&no_note=0&cn=Ajouter%20des%20instructions%20particuli%c3%a8res%20pour%20le%20vendeur%20%3a&no_shipping=2&rm=1&return=http%3a%2f%2flocalhost%2fmozitoun%2fviews%2findex%2ehtml&cancel_return=http%3a%2f%2flocalhost%2fmozitoun%2fviews%2findex%2ehtml&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted&notify_url=http%3a%2f%2flocalhost%2fmozitoun%2fviews%2ffactureintclient%2ephp"> link</a>
       
       
       -->
       
       <!--
       <form action="https://www.sandbox.paypal.com/cgi-bin/websrc" method="post">
           
           
           <input name="amount" type="hidden" value="10"/>
           <input name="currency_code" type="hidden" value="EUR"/>
           <input name="shipping" type="hidden" value="0.00"/>
           <input name="tax" type="hidden" value="0.00"/>
           <input name="return" type="hidden" value="http://127.0.0.1/mozitoun/views/success.php"/>
           <input name="cancel_return" type="hidden" value="http://127.0.0.1/mozitoun/views/cancel.php"/>
           <input name="notify_url" type="hidden" value="http://127.0.0.1/mozitoun/views/ipn.php"/>
           <input name="cmd" type="hidden" value="_xclick"/>
           <input name="business" type="hidden" value="mohamedsofien.zitoun-facilitator@esprit.tn"/>
           <input name="item_name" type="hidden" value="Compte premium"/>
           <input name="no_note" type="hidden" value="1"/>
           <input name="lc" type="hidden" value="FR"/>
           <input name="bn" type="hidden" value="PP-BuyNowBF"/>
           <input name="custom" type="hidden" value="user_id=1"/>
           
           
           
           <input type="submit" value="payer" style="display:none;">
           
           
           
           
           
       </form>
       
       
       
       <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="MMWRUWXT8BMVA">
<input type="hidden" name="lc" value="FR">
<input type="hidden" name="item_name" value="moprr">
<input type="hidden" name="item_number" value="moprr">
<input type="hidden" name="amount" value=<?php //echo "2"; ?>>
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://127.0.0.1/mozitoun/views/success.php">
<input type="hidden" name="cancel_return" value="http://127.0.0.1/mozitoun/views/cancel.php">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
<input type="hidden" name="notify_url" value="http://127.0.0.1/mozitoun/views/ipn.php">
<input type="image" src="https://www.sandbox.paypal.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.sandbox.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

       
       -->
       
        </form>
        
       
     <!--   <form action="process.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_IBrdzUFOW45Y0Hu7VF5cqhOP"
    data-amount="1"
    data-name="MYRIAM OPTIQUE"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
  
</form>-->
       <!--
<form action="payement.php" method="post" id="payment_form">
    
    <div class="field">
        <input type="text" name="name" >
    </div>
    <div class="field">
         <input type="email" name="email" >
    </div>
    
    <div class="field">
         <input type="text" placeholder="votre code de carte blue" data-stripe="number"  >
    </div>
    <div class="field">
         <input type="text" placeholder="MN" data-stripe="exp_month" >
    </div>
    <div class="field">
         <input type="text" placeholder="AA" data-stripe="exp_year" >
    </div>
    <div class="field">
         <input type="text" placeholder="code de verification" data-stripe="cvc"  >
    </div>
    
    <button class="ui button" type="submit">Payer</button>
    
</form>

<script type="text/javascript"  src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v6/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
    
    Stripe.setPublishableKey('pk_test_IBrdzUFOW45Y0Hu7VF5cqhOP');
    var $form = $('#payment_form')
    $form.submit(function(e){
        e.preventDefault()
        $form.find('button').attr('desabled',true)
        Stripe.card.createToken($form,function(status,response){
         
            if(response.error){
                $form.find('.message').remove();
                $form.prepend('<p>'+response.error.message+'</p>')
            }
            else{
               var token = response.id
               $form.append($('<input type="hidden" name="stripeToken">').val(token))
                $form.get(0).submit()
            }
        })
    })
    </script>

        -->
        
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                            <!--------------------------       payer      ------------------------>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="container" style="background-color : white; width : 80%; margin-top: 20px;">
    <div class="container">
       
        <div class="centered title"><h1>Bienvenue à notre caisse.</h1></div>
     </div>
    <hr class="featurette-divider">
    
    <table style="width:100%;">
        <tbody>
           
           <tr>
                 <td><center><img src="images/cart/paypalimage.jpg" style="width:60%;"></center></td>
               <td style="width:50%;"><center><img src="images/cart/stripecard.png" style="width:30%;"></center></td>
            
           </tr>
           
           
            <tr>
                <td>
                    
                    
                    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="MMWRUWXT8BMVA">
<input type="hidden" name="lc" value="FR">
<input type="hidden" name="item_name" value="moprr">
<input type="hidden" name="item_number" value="moprr">
<input type="hidden" name="amount" value=<?php echo $totale; ?>>
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://127.0.0.1/mozitoun/views/success.php">
<input type="hidden" name="cancel_return" value="http://127.0.0.1/mozitoun/views/cancel.php">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
<input type="hidden" name="notify_url" value="http://127.0.0.1/mozitoun/views/ipn.php">
<center><input type="image" src="images/cart/paypalbut.jpg" style="width : 40%; padding: 8px; border-width: 5px; border-color: darkblue;" border="2" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne"></center>
<img alt="" border="0" src="https://www.sandbox.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

                    
                    
                </td>
                
                
                
                
                
                <td>
                    
                    
                    
                    
          
           
<form action="payement.php" method="post" id="payment_form">
    
    <div class='form-row'>
   <div class='form-group cvc required'>
                <label class='control-label'>Nom</label>
        <input type="text" class='form-control card-cvc' name="name" >
    </div>
    </div>
    
    <div class='form-row'>
   <div class='form-group cvc required'>
                <label class='control-label'>E-mail</label>
         <input type="email" class='form-control card-cvc' name="email" >
    </div>
    </div>
    
    <div class='form-row'>
   <div class='form-group cvc required'>
                <label class='control-label'>Code-bancaire</label>
         <input type="text" class='form-control card-cvc' placeholder="votre code de carte blue" data-stripe="number"  >
    </div>
    </div>
    
    
 <div class='form-row'>
   <div class='form-group cvc required'>
                <label class='control-label'>Expiration</label>
         <input type="text" class='form-control card-cvc' placeholder="MN" data-stripe="exp_month" >
    </div>
    </div>
    
    
    <div class='form-row'>
   <div class='form-group cvc required'>
                <label class='control-label'>Year</label>
         <input type="text" class='form-control card-cvc' placeholder="AA" data-stripe="exp_year" >
    </div>
    </div>
    
    
    
    <div class='form-row'>
   <div class='form-group cvc required'>
                <label class='control-label'>CVC</label>
         <input type="text" class='form-control card-cvc' placeholder="code de verification" data-stripe="cvc"  >
    </div>
    </div>
    
    <div class='form-row'>
              <div class='form-group'>
                         <label class='control-label'></label>
    <button class='form-control btn btn-primary' type="submit">Payer →</button>
        </div>
        </div>
</form>

<script type="text/javascript"  src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v6/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
    
    Stripe.setPublishableKey('pk_test_IBrdzUFOW45Y0Hu7VF5cqhOP');
    var $form = $('#payment_form')
    $form.submit(function(e){
        e.preventDefault()
        $form.find('button').attr('desabled',true)
        Stripe.card.createToken($form,function(status,response){
         
            if(response.error){
                $form.find('.message').remove();
                $form.prepend('<p>'+response.error.message+'</p>')
            }
            else{
               var token = response.id
               $form.append($('<input type="hidden" name="stripeToken">').val(token))
                $form.get(0).submit()
            }
        })
    })
    </script>

                    
                    
                </td>
                
                
                
                
                
                
            </tr>
        </tbody>
    </table>
    
       
          
          
          
          
       
    </div>
    
    
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
    
</body>
</html>