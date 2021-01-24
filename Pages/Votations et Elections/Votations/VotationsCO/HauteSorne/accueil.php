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
                <hr>         
                <div class="conteneur-cartes">
                    <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="Eau.php">
                                    <div class="uk-card-header">
                                        <div class="uk-width-auto">
                                            <img class="illustration" src="<?php echo $Eau ?>" alt="Création d'une colonne principale d'alimentation en eau potable entre
                                                    Bassecourt et Courtételle">
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-flex-column" uk-grid>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                                    Création d'une colonne principale d'alimentation en eau potable entre
                                                    Bassecourt et Courtételle</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="CAD.php">
                                    <div class="uk-card-header">
                                        <div class="uk-width-auto">
                                            <img class="illustration" src="<?php echo $Bassecourt ?>" alt="Mise en place d'une nouvelle chaufferie alimentant les bâtiments de l'administration
                                                   communale et le complexe scolaire de Bassecourt">
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-flex-column" uk-grid>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                                   Mise en place d'une nouvelle chaufferie alimentant les bâtiments de l'administration
                                                   communale et le complexe scolaire de Bassecourt</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="MPZ.php">
                                    <div class="uk-card-header">
                                        <div class="uk-width-auto">
                                            <img class="illustration" src="<?php echo $ClaireFontaine ?>" alt="Modification du plan de zones à proximité du home médicalisé Claire-Fontaine et
                                                   modification du règlement sur les constructions.">
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-flex-column" uk-grid>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                                   Modification du plan de zones à proximité du home médicalisé Claire-Fontaine et
                                                   modification du règlement sur les constructions.</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
    </body>
</html>
