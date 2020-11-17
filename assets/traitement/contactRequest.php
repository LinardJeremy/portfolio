<?php 
if (isset($_POST['firstname']) AND isset($_POST['lastname']) AND isset($_POST['mail'])
AND isset($_POST['subject']) AND isset($_POST['message'])){
$firstname = utf8_decode(filter_var($_POST['firstname'], FILTER_SANITIZE_STRING));
$lastname =  utf8_decode(filter_var($_POST['lastname'], FILTER_SANITIZE_STRING));
$mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
$subject = utf8_decode(filter_var($_POST['subject'], FILTER_SANITIZE_STRING));
$message = utf8_decode(filter_var($_POST['message'], FILTER_SANITIZE_STRING));
$headers =  $mail;
$myMail = "linard.jeremy.5@gmail.com";
$corpTxt = $message."\n Prenom : ".$firstname." Nom : ".$lastname ;

if (mail($myMail, $subject, $corpTxt, $headers)) {
    header('Location: http://localhost/NewPortefolio/index.php?checkSend=checked');
    exit();

  
    } else {
      echo "Échec de l'envoi de l'email...";
    }
}



?>