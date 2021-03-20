<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '../../variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Equipe</title>
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
        <div class="conteneur">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-1-3@m">

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-top">L'équipe Juravote</h3>
                                    <hr>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card uk-margin-remove-top">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $MEMBRE_RenaudDaniel ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Daniel Renaud</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Administration et finances - Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div> 

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $MorySelena ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Selena Mory</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Marketing et design - Développeuse</p>
                                </div>
                            </div>
                        </div>  
                    </div>                   

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Gwenaël Girard</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Marketing et design - Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $HouserSam ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Sam Houser</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Marketing et design - Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Morgan Chételat</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Informatique et développement - Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $FleuryGael ?>">
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
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $FrelechouxAntoine ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Antoine Freléchoux</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="uk-card">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?php echo $inconnu ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Sylvain Lovis</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Développeur</p>
                                </div>
                            </div>
                        </div>  
                    </div>                 
                </div>

                <div class="uk-width-expand@m">
                    <div class="uk-card uk-card-body">

                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Contactez-nous</h3>
                            <hr>
                        </div>
                        <form class="uk-grid-small" uk-grid method="post" action="form.php">
                                <div class="uk-width-1-2@s">
                                    <input name="prenom" class="uk-input" type="text" placeholder="Prénom">
                                </div>

                                <div class="uk-width-1-2@s">
                                    <input name="nom" class="uk-input" type="text" placeholder="Nom">
                                </div>

                                <div class="uk-width-2-3@s">
                                    <input name="email" class="uk-input" type="mail" placeholder="Adresse email">
                                </div>

                                <div class="uk-width-1-3@s">
                                    <input name="sujet" class="uk-input" type="text" placeholder="Sujet du mail">
                                </div>

                                <div class="uk-width-1-1@s">
                                    <textarea name="message" class="uk-textarea" rows="8" placeholder="Message"></textarea>
                                </div>

                                <div class="uk-width-1-1@s">
                                    <button type="submit" class="uk-button uk-button-secondary uk-width-1-1@s">Envoyer</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
    </body>
</html>