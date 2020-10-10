<?php

    function erreur($motif) {
        return 'ERREUR ! Motif : '.$motif;
    }

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    if ($prenom == '' || $nom == '' || $email == '' || $sujet == '' || $message == '') {
        echo erreur("donnée incomplètes");
    } else {

        $masque = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
        if(!preg_match($masque, $email))  {
          echo erreur("L'adresse email '$email' est invalide.");
        } else {

            $message = wordwrap($message, 70, "\r\n");

            $to      = 'gwenou.girard@gmail.com';
            $subject = 'Mail de contact';
            $headers = array(
                'De' => $prenom.' '.$nom,
                'Répondre à ' => $mail,
                'X-Mailer' => 'PHP/' . phpversion()
            );

            mail($to, $subject, $message, $headers);

            if (mail($to, $subject, $message, $headers)) {
                echo "Message envoyé";
            } else {
                echo "Erreur d'envoi";
            }
        }
    }
?>
