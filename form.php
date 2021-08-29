<link href="style.css" rel="stylesheet">
<link rel="icon" href="LOGO.ico">
<?php

$nom = $_POST['nom'];        						
$prenom = $_POST['prenom'];                       
$numero = $_POST['numero'];
$email = $_POST['email'];
$message = $_POST['message'];
       

$mail_entete  = 'MIME-Version: 1.0'."\n";
$mail_entete .= 'From: "$nom et $prenom" <mahieurobin2@gmail.com>'."\n";
$mail_entete .= 'Reply-To: mahieurobin2@gmail.com'."\r\n";
$mail_entete .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
$mail_entete .= 'Content-Transfer-Encoding: 8bit';


$mail_corps = "$nom $prenom\n";
$mail_corps .= "$email $numero\n";
$mail_corps .= "$message\n";


if (mail('mahieurobin2@gmail.com','Reponses Formulaire-Sondage',$mail_corps,$mail_entete)) {

    echo "Votre message a bien etait envoyé nous vous répondrons dans des delais les plus breves, merci par avance pour votre patience. Bien cordialement L'équipe rec avenue";


} else {

 echo "Une erreur est survenue lors de l'envoi du message veuillez reesayer dans quelques minutes";

}

?>