<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations Haute-Sorne 21.06.2020</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        
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
        <main>
            <section style="padding: 2%;">
                <h1 class="uk-heading-large">Haute-Sorne - Votations du 7 mars 2021</h1>
                <h3 class="uk-text-center">Les informations seront bientôt disponibles !</h3>
                <!--<hr>         
                <div class="conteneur-cartes">
                    <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="Parc.php">
                                    <div class="uk-card-header">
                                        <div class="uk-width-auto">
                                            <img class="illustration" src="../../../../../img/Votations/Communales/HauteSorne/21.06.2020/placesParc.jpg" alt="Introduction d'une taxe pour les places de parc">
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-flex-column" uk-grid>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                                    Modifications des règlements sur les constructions</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="FCB.php">
                                    <div class="uk-card-header">
                                        <div class="uk-width-auto">
                                            <img class="illustration" src="../../../../../img/Votations/Communales/HauteSorne/21.06.2020/buvetteFCB.jpg" alt="FC Bassecourt votations">
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-flex-column" uk-grid>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                                   Stade des Grands-Prés à Bassecourt</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="Creche.php">
                                    <div class="uk-card-header">
                                        <div class="uk-width-auto">
                                            <img class="illustration" src="../../../../../img/Votations/Communales/HauteSorne/21.06.2020/UAPE.jpg" alt="Nouvelle crèche/UAPE Courfaivre">
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-flex-column" uk-grid>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                                   Accueil d’une antenne crèche/UAPE à Courfaivre</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="CSCC.php">
                                    <div class="uk-card-header">
                                        <div class="uk-width-auto">
                                            <img class="illustration" src="../../../../../img/Votations/Communales/HauteSorne/21.06.2020/centreSportif.jpg" alt="Centre de Culture et de Sport à Courfaivre">
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-flex-column" uk-grid>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                                    Centre de Culture et de Sport à Courfaivre</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>  --> 
            </section>
        </main>
        <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
    </body>
</html>
