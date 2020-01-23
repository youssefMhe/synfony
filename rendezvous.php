<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 29/03/2018
 * Time: 20:17
 */
?>

<?php
include_once "../core/Session.php";
include_once "../core/rdvv.php";
include_once "../Entities/rdv.php";
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



if( isset($_POST ['datee']) && isset( $_POST ['timee'] ) && isset($_POST ['raisonn']) )
//if (isset($_POST["ajout"]))
{
    //$l=0;
    $a=$_SESSION['id'];
    $b=$_SESSION['mail'];
    $c=$_POST['datee'];

    $l=$_POST['timee'];
    $f=$_POST['raisonn'];
    $n="non";


    $rvd=new rvd();
    $rdvv=new rdvv($a,$b,$c,$l,$f,$n);

    $Cl=$rvd->compter1($a);
    $Rdvvv1=$rvd->AfficherRdv1();

    foreach($Cl as $row) {


        $v = $row['count(*)'];
    }

    foreach($Rdvvv1 as $ro) {



        $j = $ro['heure'];
        $k= $ro['da'];

        $now = date("Y-m-d");
        $next = $k;

$now = new DateTime( $now );
$now = $now->format("Ymd");
$next = new DateTime( $next );
$next = $next->format("Ymd");

if( $now < $next ) {
    $rvd=new rvd();
    $rvd->supprimerRdv($k);
}


        if (($j == ($_POST ['timee']))&&($k== ($_POST ['datee'])))
        {
            $l=1;
        }


    }

    if ($v!=0){
        ?>

        <center>   <p class="abcd"> <?php echo "Vous pouvez ajouter un seul rendez vous"; ?>  </p>  </center>
        <?php
        }


        elseif ($l==1)
        {
       ?>
            <center>   <p class="abcd"> <?php echo "Cette date est dêja prise"; ?>  </p>  </center>
            <?php
        }
        else
        {

            $rvd->ajouterRdv($rdvv);
           
        }
    }






    ?>




<center>
    <div align="center">
<div >
    <div >
        <div class=>
            <div >
                <div >
                    <h2 class="a">Ajouter un rendez vous</h2>
                </div>

                    <!-- Form start -->
                    <div >
                        <div class="col-md-6">
                            <div >
                                <form method="POST">
                                <label class="control-label" for="name">Identifiant</label>
                                <input id="name" disabled="true" name="idd" type="text" placeholder="Name" value="<?php echo $_SESSION['id'] ?>" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <input id="email" disabled="true" name="emaill" type="text" placeholder="E-Mail" class="form-control input-md" value="<?php echo $_SESSION['mail'] ?>"  >
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="control-label" for="date">Date</label>
                                <input id="date" name="datee" type="Date" placeholder="Preferred Date" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="time">Heure</label>
                                <select id="time" name="timee" class="form-control">
                                    <option value="8:00 to 9:00">8:00 to 9:00</option>
                                    <option value="9:00 to 10:00">9:00 to 10:00</option>
                                    <option value="10:00 to 11:00">10:00 to 11:00</option>
                                    <option value="14:00 to 15:00">14:00 to 15:00</option>
                                    <option value="16:00 to 17:00">16:00 to 17:00</option>
                                    <option value="17:00 to 18:00">17:00 to 18:00</option>
                                </select>
                            </div>
                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="appointmentfor">Raison du Rendez vous</label>
                                <select id="appointmentfor" name="raisonn" class="form-control">
                                    <option value="Contrôler ma vue et me faire conseiller pour des lunettes">Contrôler ma vue et me faire conseiller pour des lunettes</option>
                                    <option value="Faire regler, netoyer ou reparer mes lunettes">Faire regler, netoyer ou reparer mes lunettes</option>
                                    <option value="Etre conseillé(e) pour passer aux lentilles de contact">Etre conseillé(e) pour passer aux lentilles de contact</option>
                                    <option value="Me faire conseiller pour mes lunettes">Me faire conseiller pour mes lunettes</option>
                                </select>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-md-12">
                            <div class="form-group">

                                <button id="singlebutton" name="singlebutton" class="btn btn-default" name="ajout">Ajouter le Rendez vous</button>


                            </div>
                        </div>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>	</div>
</div>
    </div>
</center>






    <hr width="1000%" color="red">




<p class="a">Afficher les Rendez vous</p>

<?php
$afficher=new rvd();
$Rdvvv=$afficher->AfficherRdv($_SESSION['mail']);



?>


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->

                    <span class="input-group-btn">

                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-9">
            <table class="table table-list-search">

                <tr>
                    <td>Identifiant</td>
                    <td>Email</td>
                    <td>Heure</td>
                    <td>Date</td>
                    <td>Raison</td>
                    <td>Confirmation</td>

                </tr>






                <?PHP
                foreach($Rdvvv as $row) {
                ?>
                <tr>
                    <td><?PHP echo $row['idd']; ?></td>
                    <td><?PHP echo $row['emaill']; ?></td>
                    <td><?PHP echo $row['heure']; ?></td>
                    <td><?PHP echo $row['da']; ?></td>
                    <td><?PHP echo $row['raison']; ?></td>
                    <td><?PHP echo $row['confirmation']; ?></td>



                        </form>


                       <?php }?>

                </tr>


            </table>
        </div>
    </div>
</div>
<?php
if( isset($_POST ['dateee']))

{



    $rvd=new rvd();
    $rvd->supprimerRdv($_POST ['dateee']);




    ?>


    <?php
}?>

<center>
<form method="POST">
<button id="singlebutton" class="btn btn-default" name="singlebutton" >Supprimer le Rendez vous</button>
<input id="date" name="dateee" type="Date" placeholder="Preferred Date">
</form>

</center>


</br></br>


<?php require('footer.php');?>