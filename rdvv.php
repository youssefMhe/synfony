<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 29/03/2018
 * Time: 22:30
 */
?>


<?php
class rvd {
function ajouterRdv($rdv)
{
$sql="insert into rendezvous (idd,emaill,da,heure,raison,confirmation) values (:idd,:emaill,:da,:heure,:raison,:confirmation)";
$db = config::getConnexion();
try{
$req=$db->prepare($sql);
$idd=$rdv->getid();
$emaill=$rdv->getEmail();
$da=$rdv->getDate();
$heure=$rdv->getHeure();
$raison=$rdv->getRaison();
$confirmation=$rdv->getC();





//$ClientC=new ClientC();


//$ClientC->debug($confirmation_t);
//die();
$req->bindValue(':idd',$idd);
$req->bindValue(':emaill',$emaill);
$req->bindValue(':da',$da);
$req->bindValue(':heure',$heure);
$req->bindValue(':raison',$raison);
$req->bindValue(':confirmation',$confirmation);



$req->execute();


}
catch (Exception $e){
echo 'Erreur: '.$e->getMessage();
}

}
    function AfficherRdv($a)
    {
        $sql="select * from rendezvous WHERE emaill='$a'";
        $db = config::getConnexion();
        try{
            $liste= $db->query($sql);
            //var_dump($liste);
            return $liste;

        }catch(Exception $e)
        {
            die ("Erreur".$e->getMessage());
        }
        }

    function AfficherRdv1()
    {
        $sql="select * from rendezvous ";
        $db = config::getConnexion();
        try{
            $liste= $db->query($sql);
            //var_dump($liste);
            return $liste;

        }catch(Exception $e)
        {
            die ("Erreur".$e->getMessage());
        }
    }

    

    function supprimerRdv($date){
        $sql="DELETE FROM rendezvous where da='$date'";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':da',$date);
        try{
            $req->execute();
// header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }

    function compter1($id)
    {
        $sql="SELECT count(*) From rendezvous WHERE idd='$id' ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
?>