<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 30/03/2018
 * Time: 23:50
 */
?>z

<?php

function supprimerEmploye($date){
$sql="DELETE FROM rendezvous where da='$date'";
$db = config::getConnexion();
$req=$db->prepare($sql);
$req->bindValue(':de',$date);
try{
$req->execute();
// header('Location: index.php');
}
catch (Exception $e){
die('Erreur: '.$e->getMessage());
}
}

?>