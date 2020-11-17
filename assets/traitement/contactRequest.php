<?php 
if (!empty($_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST['mail'])
AND !empty($_POST['subject']) AND !empty($_POST['message'])){
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
else {
  echo "Echec";
}



?>