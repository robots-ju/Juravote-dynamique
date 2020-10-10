<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
        <div class="conteneur">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-1-3@m">

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">L'équipe Juravote</h3>
                                    <hr>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Morgan Chételat</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Informatique / Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Gael Fleury</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Gwenaël Girard</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Design / Marketing / Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Sam Houser</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Finances / Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Sylvain Lovis</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Administration</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Daniel Renaud</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Chef de projet / Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                </div>

                <h2 class="uk-align-center" style="padding-top: 2%">Le formulaire de contact sera bientôt disponible !</h2>
                <!--<div class="uk-width-expand@m">
                    <div class="uk-card uk-card-body">

                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Contactez-nous</h3>
                            <hr>
                        </div>
                        <form class="uk-grid-small" uk-grid method="post" action="">
                                <div class="uk-width-1-2@s">
                                    <input name="prenom" class="uk-input" type="text" placeholder="Prénom">
                                </div>

                                <div class="uk-width-1-2@s">
                                    <input name="nom" class="uk-input" type="text" placeholder="Nom">
                                </div>

                                <div class="uk-width-2-3@s">
                                    <input name="email" class="uk-input" type="mail" placeholder="Adresse mail">
                                </div>

                                <div class="uk-width-1-3@s">
                                    <input name="sujet" class="uk-input" type="text" placeholder="Sujet du mail">
                                </div>

                                <div class="uk-width-1-1@s">
                                    <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-select">Votre Message :</label>
                                    <textarea name="message" class="uk-textarea" rows="8"></textarea>
                                </div>

                                <div class="uk-width-1-1@s">
                                    <input type="submit" name="valider" value="OK"/>
                                </div>
                        </form>

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

                                    $mail = "Mail de ".$prenom." ".$nom."\r\n".
                                            "(".$email.")"."\r\n".
                                            "\r\n".
                                            "Sujet : ".$sujet."\r\n".
                                            $message;


                                    $to      = 'gwenou.girard@gmail.com';
                                    $subject = 'Contact';
                                    mail($to, $subject, $mail);
                                }
                            }
                        ?>


                    </div>
                </div>-->
            </div>
        </div>
    <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
    </body>
</html>