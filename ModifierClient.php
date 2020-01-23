<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 29/03/2018
 * Time: 16:39
 */
?>


<?php


if( isset($_POST ['no']) &&  isset($_POST ['pr']) && isset( $_POST ['ad'] ) && isset($_POST ['md']) &&  isset($_POST ['te']) && isset($_POST['adr'])  ) {
    $ClientC = new ClientC();

    $errors = $ClientC->verif($_POST ['no'], $_POST ['pr'], $_POST ['ad'], $_POST ['md'], $_POST ['md']);


    if (!empty($errors)) {
        foreach ($errors as $error) { ?>

            <ul>
                <li> <?php echo $error; ?> </li>


            </ul>
            <?php
        }
    }
    header('Location: Moncompte.php');

}








?>



