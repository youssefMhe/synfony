<?php
include_once "../config.php";
include_once "../core/Session.php";
include_once "../core/ClientC.php";
include_once "../Entities/Client.php";
require 'PHPMailer-master/PHPMailerAutoload.php';
class ClientC
{

    function ajouterClient($clt)
    {
        $sql = "insert into inscription (id,nom,prenom,email,mdp,Confirmation_t,telephone,adresse) values (:id,:nom,:prenom,:email,:mdp,:Confirmation_t,:telephone,:adresse)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $id = $clt->getID();
            $nom = $clt->getNom();
            $prenom = $clt->getPrenom();
            $email = $clt->getMail();
            $mdp = $clt->getMdp();
            $confirmation_t = $clt->getCt();
            $telephone = $clt->getTelephone();
            $adresse = $clt->getAdresse();


            //$ClientC=new ClientC();


            //$ClientC->debug($confirmation_t);
            //die();
            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':email', $email);
            $req->bindValue(':mdp', $mdp);
            $req->bindValue(':mdp', $mdp);
            $req->bindValue(':Confirmation_t', $confirmation_t);
            $req->bindValue(':telephone', $telephone);
            $req->bindValue(':adresse', $adresse);
            $req->execute();
            $user_id = $db->lastInsertId();

            $mail = new PHPMailer;

            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'footnews1@gmail.com';          // SMTP username
            $mail->Password = '12345678910Azerty'; // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, ssl also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail->setFrom('footnews1@gmail.com', 'Confirmation Mail');
//$mail->addReplyTo('info@example.com', 'CodexWorld');
            $mail->addAddress($email);   // Add a recipient
            /*$mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            $mail->isHTML(true);  // Set email format to HTML
            $user_id = $db->lastInsertId();
            $bodyContent = '<h1>Cliquez sur ce lien</h1>';
            $bodyContent .= "http://localhost/ProjetWebFinal/Views/confirm.php?id=$user_id&token=&$confirmation_t";
//$mail->addAttachment('C:\Users\ASUS\Desktop\THINGS\PIC\1.png', 'new.jpg');

            $mail->Subject = 'Email from Localhost by CodexWorld';
            $mail->Body    = $bodyContent;
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
            //$b = "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost/ProjetWebFinal/Views/confirm.php?id=$user_id&token=&$confirmation_t";



            //ini_set("SMTP","ssl://smtp.gmail.com");
//ini_set("smtp_port","465");
            //mail($email,'Confirmation de votre compte',"Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost/ProjetWebFinal/Views/confirm.php?id=$user_id&token=&$confirmation_t");

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }

    function debug($variable)
    {
        echo '<pre>' . print_r($variable, true) . '</pre>';
    }

    function recherchermail($main)
    {

        /*$sql=$instance->prepare('SELECT id FROM inscription WHERE email = ?');
        $db = config::getConnexion();

        $sql->execute($main);
        $a=$sql->fetch();
        return $a;*/
        $sql = "SELECT email FROM inscription WHERE email='$main' ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);

            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }




    function rechercher($main)
    {

        /*$sql=$instance->prepare('SELECT id FROM inscription WHERE email = ?');
        $db = config::getConnexion();

        $sql->execute($main);
        $a=$sql->fetch();
        return $a;*/
        $sql = "SELECT * FROM inscription WHERE email='$main' ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);

            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recherche($main)
    {

        /*$sql=$instance->prepare('SELECT id FROM inscription WHERE email = ?');
        $db = config::getConnexion();

        $sql->execute($main);
        $a=$sql->fetch();
        return $a;*/
        $sql = "SELECT * FROM inscription WHERE email='$main' ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);

            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function verif($v, $v2, $v3, $v4, $v5, $v6)
    {
        $errors = array();

        if (!preg_match('/^[a-zA-Z_]+$/', $v)) {
            $errors['nom'] = 'Votre nom nest pas valide';
        }


        $ClientC = new ClientC();
        $resultat = $ClientC->recherchermail($v3);
        $resultate = $resultat->fetch();
        if ($resultate) {
            $errors['mail'] = 'Ce mail existe dêja';
        }


        if (!preg_match('/^[a-zA-Z_]+$/', $v2)) {
            $errors['prenom'] = 'Votre prenom nest pas valide';
        }


        $ClientC = new ClientC();
        $resultat = $ClientC->rechercher($v3);
        $resultate = $resultat->fetch();
        if ($resultate) {
            $errors['mail'] = 'Ce mail existe dêja';
        }


        if ($v4 != $v5) {
            $errors['mdp'] = 'Veuillez rentrez un mot de passe valide';
        }

        $ClientC = new ClientC();
        $resultat = $ClientC->recherche($v6);
        $resultate = $resultat->fetch();
        if ($resultate) {
            $errors['id'] = 'Cet identifiant existe dêja';
        }
        //$ClientC=new ClientC();
        //$ClientC->debug($errors);

        return $errors;
    }


    function verifi($v, $v2)
    {
        $errors = array();

        if (!preg_match('/^[a-zA-Z_]+$/', $v)) {
            $errors['nom'] = 'Votre nom nest pas valide';
        }
        if (!preg_match('/^[a-zA-Z_]+$/', $v2)) {
            $errors['prenom'] = 'Votre prenom nest pas valide';
        }
        //$ClientC=new ClientC();
        //$ClientC->debug($errors);

        return $errors;
    }


    function str_random($length)
    {
        $alphabet = "0123456789azertyuiopqsddfghjklmwxcvbnAZERTYUIOPQSFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }


    function modifierClient($clt, $id)
    {


        $sql = "UPDATE inscription SET id=:id,nom=:nom,prenom=:prenom,email=:email,mdp=:mdp,telephone=:telephone,adresse=:adresse WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try {

            $req = $db->prepare($sql);
            $id = $clt->getId();
            $nom = $clt->getNom();
            $prenom = $clt->getPrenom();

            $email = $clt->getMail();
            $mdp = $clt->getMdp();
            $telephone = $clt->getTelephone();
            $adresse = $clt->getAdresse();
            //$datas = array(':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email,':mdp'=>$mdp,':telephone'=>$telephone,':adresse'=>$adresse);
            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':email', $email);
            $req->bindValue(':mdp', $mdp);
            $req->bindValue(':telephone', $telephone);
            $req->bindValue(':adresse', $adresse);


            $req->execute();

            // header('Location: index.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";
            //print_r($datas);
        }

    }
    function compter($id)
    {
        $sql="SELECT count(*) From rendezvous WHERE id=:id ";
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