<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 26/03/2018
 * Time: 21:28
 */
?>
<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');


?>