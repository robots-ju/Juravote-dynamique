<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>Votations fédérales du 05 juin 2016</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultat des votations fédérales du 05 juin 2016</h1>
        <hr>
        <section>
            
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="<?php echo $PHPvotationsCHServicePublic ?>">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto ">
                                        <img  class="illustration" src="<?php echo $Justice ?>" alt="Initiative en faveur du service public">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                    Initiative populaire du 30.05.2013 «En faveur du service public»</h3>
                            </div>
                            </a>
                        </div>
                    </div>    
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="<?php echo $PHPvotationsCHrbi ?>">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="illustration" src="<?php echo $Sous ?>" alt="Initiative pour un revenu de base inconditionnel»">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 04.10.2013
                                    «Pour un revenu de base inconditionnel»</h3>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="<?php echo $PHPvotationsCHTransports ?>">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="illustration" src="<?php echo $Gare ?>" alt="Initiative pour un financement équitable des transports">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 10.03.2014
                                    «Pour un financement équitable des transports»</h3>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="<?php echo $PHPvotationsCHlpma ?>">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="illustration" src="<?php echo $Enceinte ?>" alt="Modification de la loi fédérale sur
                                        la procréation médicalement assistée">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Modification du 12.12.2014 de la
                                    loi fédérale sur la procréation médicalement assistée (LPMA)</h3>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="<?php echo $PHPvotationsCHLAsi ?>">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="illustration" src="<?php echo $pouvoirFederal ?>" alt="Modification de la loi sur l'asile">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Modification du 25.09.2015 de la loi
                                    sur l'asile (LAsi)</h3>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>