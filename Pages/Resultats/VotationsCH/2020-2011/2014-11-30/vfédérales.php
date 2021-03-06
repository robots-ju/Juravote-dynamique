<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>Résultats des votations fédérales du 30 novembre 2014</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>


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
        <!-- Barre de navigation -->
        <header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
        <main>
            <section style="padding: 2%">
                <h1 class="uk-heading-large">Résultat des votations fédérales du 30 novembre 2014</h1>
                <section>                    
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="<?php echo $PHPvotationsCHForfaitsFiscaux ?>">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                        <div class="uk-width-auto ">
                                            <img src="<?php echo $Sous ?>" class="illustration" alt="Initiative contre les privilèges fiscaux des millionnaires">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                        Initiative populaire du 19.10.2012 «Halte aux privilèges fiscaux des millionnaires
                                        (abolition des forfaits fiscaux)»</h3>
                                </div>
                                </a>
                            </div>
                        </div>    
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="<?php echo $PHPvotationsCHSurpopulation ?>">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                        <div class="uk-width-auto">
                                            <img src="<?php echo $Surpopulation ?>" class="illustration" alt="Initiative halte à la surpopulation">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 02.11.2012
                                        «Halte à la surpopulation – Oui à la préservation durable des ressources naturelles»</h3>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <a href="<?php echo $PHPvotationsCHOr ?>">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                        <div class="uk-width-auto">
                                            <img src="<?php echo $Or ?>" class="illustration" alt="Initiative sur l'or">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 20.03.2013
                                        «Sauvez l'or de la Suisse (Initiative sur l'or)»</h3>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </main>
        <footer>
            <div class="footer">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
            </div>
        </footer>
    </body>
</html>