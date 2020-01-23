<?php
/**
 * Created by PhpStorm.
 * User: MON ASUS
 * Date: 14/04/2018
 * Time: 00:52
 */
?>
<?php
include_once "../core/ClientC.php";
if (isset($_POST['mail'])) {

        $ClientC = new ClientC();
        $resultat = $ClientC->recherchermail($_POST['mail']);
        $resultate = $resultat->fetch();
        if ($resultate) {

            $Client = new ClientC();
            $liste = $Client->rechercher($_POST['mail']);
            foreach ($liste as $row) {
                $mdp = $row['mdp'];
            }
            $mail = new PHPMailer;

            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'footnews1@gmail.com';          // SMTP username
            $mail->Password = '12345678910Azerty'; // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, ssl also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail->setFrom('footnews1@gmail.com', 'Recupération de ton mot de passe');
//$mail->addReplyTo('info@example.com', 'CodexWorld');
            $mail->addAddress($_POST['mail']);   // Add a recipient
            /*$mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            $mail->isHTML(true);  // Set email format to HTML

            $bodyContent = '<h1>Ton mot de passe est :</h1>';
            $bodyContent .= "$mdp";
//$mail->addAttachment('C:\Users\ASUS\Desktop\THINGS\PIC\1.png', 'new.jpg');

            $mail->Subject = 'Email from Localhost by CodexWorld';
            $mail->Body = $bodyContent;
            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

        } else {
            echo "Ce mail n'existe pas";
        }


}
    ?>
<form method="POST">
<label>Mail :</label>
<input type="email" placeholder="Email" name="mail" required="required"/>
    <input type="submit" value="Confirmer" name="a">
</form>




