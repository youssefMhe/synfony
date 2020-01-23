
<?php
include_once "../core/Session.php";
include_once "../core/ClientC.php";
include_once "../Entities/Client.php";
?>
<?php
$cl=new session();


if(isset($_POST['mailll'])&& isset($_POST['mdppp'])) {
    $k = $cl->veriflogin($_POST['mailll'], $_POST['mdppp']);
    //echo $k;


    if (empty($k)) {

        $a = $cl->ReturnFirstname($_POST['mailll']);
        $b = $cl->ReturnLastname($_POST['mailll']);
        $c= $cl->ReturnMail($_POST['mailll']);
        $d=$cl->ReturnMdp($_POST['mailll']);
        $e=$cl->ReturnIdentifiant($_POST['mailll']);
        $f=$cl->ReturnTelephone($_POST['mailll']);
        $g=$cl->ReturnAdresse($_POST['mailll']);

        session_start();
        $_SESSION['nom'] = $a;
        $_SESSION['prenom'] = $b;
        $_SESSION['mail'] = $c;
        $_SESSION['mdp'] = $d;
        $_SESSION['id'] = $e;
        $_SESSION['telephone']=$f;
        $_SESSION['adresse']=$g;

        header('Location: Moncompte.php');
        //echo $_SESSION['nom'];

    }

    if (($_POST['mailll']=="Admin@Admin.com")&&($_POST['mdppp']="Admin"))
    {
        header('Location: test.php');
    }

}
?>

<?php require('header.php');?>



<?php
//include "../entities/Client.php";
include_once "../core/ClientC.php";
include_once "../core/Session.php";
//include "../Views/index.php";



          	     ?>




<center>
<div class="ab"> NOUVEAUX CLIENTS :
    En créant un compte sur notre boutique, vous pourrez passer vos commandes plus rapidement, enregistrer plusieurs adresses de livraison, consulter et suivre vos commandes, et plein d'autres choses encore.</div>
</center>
<center>
   <p class="ab"> CLIENTS ENREGISTRÉS :
    Si vous avez déjà un compte, veuillez vous identifier.</p>
</center>
<?php



	if( isset($_POST ['ide']) && isset($_POST ['nom']) &&  isset($_POST ['prenom']) && isset( $_POST ['mail'] ) && isset($_POST ['mdp']) &&  isset($_POST ['mdpp']) && isset($_POST['telephone']) && isset($_POST['adresse']) )
	{
		$ClientC=new ClientC();
          	     $errors=$ClientC->verif($_POST ['nom'],$_POST ['prenom'],$_POST ['mail'],$_POST ['mdp'],$_POST ['mdpp'],$_POST ['ide']);

$e= $ClientC->str_random(60);
if (!empty($errors))
{
foreach($errors as $error)
{ ?>
<center>
<p class="abcd"> <?php echo $error; ?>  </p>

    </center>

</ul>
<?php
          	     	}
          	     }

          	     else
          	     {
          	     	$a=$_POST['nom'];
          	     	$b=$_POST['prenom'];
          	     	$c=$_POST['mdp'];
          	     	$d=$_POST['mail'];
          	     	$l=$_POST['telephone'];
          	     	$f=$_POST['adresse'];
          	     	$g=$_POST['ide'];

          	     	$ClientC=new ClientC();
                $client=new client($g,$a,$b,$c,$d,$e,$l,$f);




                    $ClientC->ajouterClient($client);



//$_SESSION['auth']=$a;
//header('Location: login.php');
//header('Location: index.php');


?>

                  <center> <p class="abcd"> <?php echo "BRAVO"; ?>  </p> </center>

<?PHP
          	     }




          }

?>

<?php
$cl=new session();

if(isset($_POST['mailll'])&& isset($_POST['mdppp'])) {
    $k = $cl->veriflogin($_POST['mailll'], $_POST['mdppp']);
    //echo $k;


    if (!empty($k)) {
?>

<center> <p class="abcd"> <?php echo $k; ?>  </p> </center>

<?php
}






    }



?>











<section id="form"><!--form-->
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
          <h2>Connexion</h2>
          <form  method="post">
              <input type="email" placeholder="Email" name="mailll" required="required" />
            <input type="password" placeholder="Mot de passe" name="mdppp" required="required" />

            <span>
								<p><a href="recuperer.php" title="mot de passe oublié" target="_blank">Mot de passe oublié ?</a> </p>
							</span>
            <button type="submit" name="sub" class="btn btn-default">Se connecter</button>
          </form>
        </div><!--/login form-->
      </div>
      <div class="col-sm-1">
        <h2 class="or">Ou</h2>
      </div>
      <div class="col-sm-4">
        <div class="signup-form"><!--sign up form-->
          <h2>S'inscrire </h2>

          <form method="POST" >
              <input type="text" placeholder="identifiant" name="ide" required="required" />
            <input type="text" placeholder="Nom" name="nom" required="required" />
            <input type="text" placeholder="Prenom" name="prenom" required="required"/>
            <input type="email" placeholder="Email" name="mail" required="required"/>
            <input type="password" placeholder="Mot de Passe" name="mdp" required="required" />
            <input type="password" placeholder="Confirmer votre mot de passe" name="mdpp" required="required" />
              <input type="text" placeholder="telephone" name="telephone" required="required" />
              <input type="text" placeholder="adresse" name="adresse" required="required" />
            <button type="submit" class="btn btn-default">S'inscrire</button>
          </form>


        </div><!--/sign up form-->
      </div>
    </div>
  </div>
</section><!--/form-->
<?php require('footer.php');?>

