<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '../../variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166072477-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-166072477-1');
        </script>
    </head>
    
    <body>
        <header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>

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
                ?>

                <div class="uk-alert-danger uk-text-center" uk-alert>
                    <p>Certaines données sont incomplètes. Veuillez remplir tous les champs.</p>
                </div>

                <?php
                $success = false;
            } else {

                $masque = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
                if(!preg_match($masque, $email))  {
                    ?>
                    <div class="uk-alert-danger uk-text-center" uk-alert>
                        <p>L'adresse mail : "<?php echo $email ?>" n'est pas valide.</p>
                    </div>
                    <?php
                    $success = false;

                } else {

                    $message = wordwrap($message, 70, "\r\n");

                    $header = "Mail de ".$prenom." ".$nom." (".$email.")\r\n";

                    mail('contact@juravote.ch', $sujet, $message);

                    ?>
                    <div class="uk-alert-success uk-text-center" uk-alert>
                        <p>Votre message à bien été envoyé !</p>
                    </div>
                    <?php
                    $success = true;

                }
            }

            if ($success==true) {
                ?>
                <div class="uk-align-center uk-text-center">
                    <a href="<?php echo $PHPequipe?>">Retour</a>
                </div>
                <?php
            } else {
                ?>
                <div class="uk-align-center uk-text-center">
                    <a href="javascript:history.go(-1)">Retour</a>
                </div>
                <?php
            }

            ?>

    </body>
</html>
