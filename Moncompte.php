<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 28/03/2018
 * Time: 22:50
 */
?>

<?php
include_once "../core/Session.php";
include_once "../core/ClientC.php";
include_once "../Entities/Client.php";
?>
<?php
if ((session_status()== PHP_SESSION_NONE)) { ?>

    <?php session_start(); ?>

<?php } else { ?>


<?php } ?>

<?php require('header.php'); ?>











<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<?php


if( isset($_POST ['no']) &&  isset($_POST ['pr']) && isset( $_POST ['ad'] ) && isset($_POST ['md']) &&  isset($_POST ['te']) && isset($_POST['adr'])  ) {

    $ClientC = new ClientC();

    $errors = $ClientC->verifi($_POST ['no'], $_POST ['pr']);


    if (!empty($errors)) {
        foreach ($errors as $error) { ?>
<center>

             <p class="abcd">   <?php echo $error; ?></p>
                </center>


            <?php
        }
    }
    if (empty($errors)) {



            $ClientC = new ClientC();
            $token = $ClientC->str_random(60);
            $cl = new session();
            $e = $_SESSION['id'];

            $client = new client($e,$_POST['no'], $_POST['pr'], $_POST['md'], $_POST['ad'], $token, $_POST['te'], $_POST['adr']);
            $ClientC->modifierClient($client,$e);
            ?>

            <center> <p class="abcd"> <?php   echo "Modifier avec succés"; ?>  </p> </center>
<?php
            $_SESSION['nom'] = $_POST['no'];
            $_SESSION['prenom'] = $_POST['pr'];
            $_SESSION['mail'] = $_POST['ad'];
            $_SESSION['mdp'] = $_POST['md'];
            //$_SESSION['id'] = $e;
            $_SESSION['telephone'] = $_POST['te'];
            $_SESSION['adresse'] = $_POST['adr'];





    }


}

?>

<br align="center">
    <br>
<div class="container" style="al">
    <div class="row">



        <div >

            <div class="panel panel-default">
                <div class="panel-heading">  <h4 >Mon Profil</h4></div>
                <div class="panel-body">

                    <br class="box box-info">

                        <br class="box-body">
                            <div class="col-sm-6">
                                <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

                                    <input id="profile-image-upload" class="hidden" type="file">
                                    <div style="color:#999;" >Cliquez ici pour télécharger une image</div>
                                    <!--Upload Image Js And Css-->







                                </div>

                                <br>

                                <!-- /input-group -->
                            </div>
                            <div class="col-sm-6">
                                <h4 style="color:#00b1b1;"> <?php echo $_SESSION['id'] ?> </h4></span>
                                <span><p>Identifiant</p></span>
                            </div>
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">

<form method="POST">

                            <div class="col-sm-5 col-xs-6 tital " >Nom :</div><div class="col-sm-7 col-xs-6 "><input type="text"  name="no" value="<?php echo $_SESSION['nom'] ?>"  /></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Prenom :</div><div class="col-sm-7 col-xs-6"><input type="text"  name="pr" value="<?php echo $_SESSION['prenom'] ?>"  /></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Adresse Mail</div><div class="col-sm-7 col-xs-6"><input type="email"  name="ad" value="<?php echo $_SESSION['mail'] ?>"  /></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >Mot de passe</div><div class="col-sm-7 col-xs-6"><input type="password"  name="md" value="<?php echo $_SESSION['mdp'] ?>"  /></div> </br> </br >


                            <div class="col-sm-5 col-xs-6 tital " >Telephone</div><div class="col-sm-7 col-xs-6"><input type="text"  name="te" value="<?php echo $_SESSION['telephone'] ?>"  /></div></br> </br >


    <div class="col-sm-5 col-xs-6 tital " >Adresse</div><div class="col-sm-7 col-xs-6"><input type="text"  name="adr" value="<?php echo $_SESSION['adresse'] ?>"  /></div>      </br></br> </br>


                    <center>  <button type="submit" class="btn btn-default">Enregistrer</button> </center>
</form>
                            <div class="clearfix"></div>

                            <div class="bot-border"></div>




                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>


                </div>
            </div>
</div>



</br></br></br>


















    <script>
            $(function() {
                $('#profile-image1').on('click', function() {
                    $('#profile-image-upload').click();
                });
            });
        </script>









    </div>
</div>
</div>


<?php require('footer.php');?>







