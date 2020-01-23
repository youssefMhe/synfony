<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 28/03/2018
 * Time: 11:57
 */
?>
<?php
include_once "../core/Session.php";
?>

<?php

$cl=new session();

if(isset($_POST['mailll'])&& isset($_POST['mdppp'])) {
    $k = $cl->veriflogin($_POST['mailll'], $_POST['mdppp']);
    echo $k;


    if (empty($k)) {

        $a = $cl->ReturnFirstname($_POST['mailll']);
        $b = $cl->ReturnLastname($_POST['mailll']);
        $c = $cl->verification(1);

        session_start();

        $_SESSION['nom'] = $a;
        $_SESSION['prenom'] = $b;

        //echo $_SESSION['nom'];
        header('Location: Moncompte.php');
        //header('Location: header.php');
        //header('Location: Moncompte.php');
        echo 'Salut';
        //echo $_SESSION['nom'];

    }

}
?>
