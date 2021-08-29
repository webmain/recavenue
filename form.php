<link href="style.css" rel="stylesheet">
<link rel="icon" href="LOGO.ico">
<?php
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $numero = $_POST['numero'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     
$mail_entete  = 'MIME-Version: 1.0'."\n";
$mail_entete .= 'From: "Nom" <mahieurobin2@gmail.com>'."\n";
$mail_entete .= 'Reply-To: mahieurobin2@gmail.com'."\r\n";
$mail_entete .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
$mail_entete .= 'Content-Transfer-Encoding: 8bit';


// préparation du corps du mail
$mail_corps = "Message de : $Prenom $Nom\n";
$mail_corps .="Numero de telephone : $numero Adresse mail : $email\n";
$mail_corps .="$message";

if (mail('mahieurobin2@gmail.com','Message du formulaire de presentation',$mail_corps,$mail_entete)) {
echo "ok";
} else {
echo "erreur";
}
?>
