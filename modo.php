<?php 

   session_start();

?>
 <!DOCTYPE>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>Document</title>
     
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
  	
  	<style>
     
     input[type=radio]{
    display: none;
}

label{
 margin-right: 20px;   
}

label::before{
    content: '';
    display: inline-block;
    vertical-align: middle;
    height: 35px;
    width: 35px;
    border: 1px solid #fff;
    border-radius: 100%;
    margin-right: 5px;
}
input[type=radio]:checked + label::before{
    
    background-color:darkorange;
    animation: bounceIn 1s;
    
    
}
        
        
        #ajouter{
            background-color: olive;
            color:white;
        }
        
       
        
        
        
        

     </style>
     
     
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
    
    
    
     <form method="post" action="modophp.php">
        <center>
         <table style="width: 60%; height: 80%; color: black; background-color:lightgrey; font-family: monospace; font-size: 200%;">
             <tbody>
                 
             <tr>
             <td style="width: 33.33%; height:33.33%;">
         <p>Couleur monture  : </p>  <input type="radio"  name="color" id="color1" value="black"><label for="color1"> black </label>
         <input type="radio" name="color" id="color2" value="orange" > <label for="color2"> orange </label>  <input type="radio"  name="color" id="color3" value="red"><label for="color3"> red </label>
         </td>
         </tr>
         <tr>
            <td style="width: 33.33%; height:33.33%;">
             <select name="verre" style="height:100%;width: 100%">
                 <option value="Verres Simples">Verres simples</option>
                 <option value="Verre Progressif">Verres Progressif</option>
             </select>
             
             </td>
         </tr>
         <tr>
             <td style="width: 33.33%; height:33.33%;">
                 <input type="submit" value="Ajouter au panier et choisir mes verres" name="ajouter" id="ajouter" style="height: 100%;width: 100%" >
             </td>
         </tr>
         
         
         </tbody>
         </table>
         </center>
     </form>
     
     
     
 </body>
 </html>