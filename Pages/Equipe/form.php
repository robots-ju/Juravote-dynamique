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

            $mail = "Mail de ".$prenom." ".$nom."\r\n <br/>".
                    "(".$email.")"."\r\n <br/><br/>".
                    "<em>Sujet : ".$sujet."</em>\r\n </br>".
                    $message;


            $to      = 'gwenou.girard@gmail.com';
            $subject = 'Contact';
            mail($to, $subject, $mail);
        }
    }
?>
