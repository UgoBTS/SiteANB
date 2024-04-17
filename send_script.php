<?php 
if (isset($_POST['send_message_btn'])) {
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];

  if (!empty($email) && !empty($subject) && !empty($msg)) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = $msg;
    $subject = $subject . ' (Auteur: ' . $email . ')';
    
	if (mail('amitiesnbclub@gmail.com', $subject, $message, 'From: amitiesnbclub@gmail.com')) {
     echo "Votre message a été envoyé et sera traité dans les plus brefs délais. Veuillez patienter, vous serez bientôt redirigés vers le site principal.";
    } else {
     echo "Erreur: veuillez vérifier que l'adresse mail est correcte, si c'est le cas, merci de réessayer plus tard. Veuillez patienter, vous serez bientôt redirigés vers le site principal.";
    }
  } else {
    echo "Erreur: Veuillez remplir tous les champs du formulaire.";
  }
  
  header("Refresh: 5; URL=contact.html");
  exit();
}
?>