<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election au Gouvernement jurassien</title>
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
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js%22%3E"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-firestore.js%22%3E"></script>
        <script src="../../../../JS/db.js" type="module"></script>

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
        <h1 class="uk-heading-large">Résultats des élections cantonales du 08 novembre 2020</h1>
        <hr>
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Informations sur l'élection</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-justify">
                        <p><b>Objet : </b>Election au Gouvernement Jurassien (2e tour)</p>
                        <p><b>Participation : </b>xx.xx %</p>
                        <p><a href="<?php echo $PHPelectionsJUGouvernement2 ?>">Lien vers les présentations des candidats-es</a></p>
                        <p><a href="<?php echo $PHPresultatGouvernementJU20201018 ?>">Lien vers les résultats du 1er tour</a></p>
                        <p><b>Communes qui ont livré les résultats : </b></p>                        
                            <!--<a class="uk-button uk-button-link" href="#modal-container1" uk-toggle>Boécourt</a>
                            <div id="modal-container1" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Boécourt.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container2" uk-toggle>Bourrignon</a>
                            <div id="modal-container2" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Bourrignon.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container3" uk-toggle>Châtillon</a>
                            <div id="modal-container3" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Châtillon.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container4" uk-toggle>Courchapoix</a>
                            <div id="modal-container4" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Courchapoix.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container5" uk-toggle>Courrendlin</a>
                            <div id="modal-container5" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Courrendlin.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container6" uk-toggle>Courroux</a>
                            <div id="modal-container6" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Courroux.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container7" uk-toggle>Courtételle</a>
                            <div id="modal-container7" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Courtételle.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container8" uk-toggle>Delémont</a>
                            <div id="modal-container8" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Delémont.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container9" uk-toggle>Develier</a>
                            <div id="modal-container9" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Develier.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container10" uk-toggle>Ederswiler</a>
                            <div id="modal-container10" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Ederswiler.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container11" uk-toggle>Haute-Sorne</a>
                            <div id="modal-container11" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Haute-Sorne.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container12" uk-toggle>Mervelier</a>
                            <div id="modal-container12" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Mervelier.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container13" uk-toggle>Mettembert</a>
                            <div id="modal-container13" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Mettembert.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container14" uk-toggle>Movelier</a>
                            <div id="modal-container14" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Movelier.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container15" uk-toggle>Pleigne</a>
                            <div id="modal-container15" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Pleigne.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container16" uk-toggle>Rossemaison</a>
                            <div id="modal-container16" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Rossemaison.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container17" uk-toggle>Saulcy</a>
                            <div id="modal-container17" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Saulcy.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container18" uk-toggle>Soyhières</a>
                            <div id="modal-container18" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Soyhières.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container19" uk-toggle>Val-Terbi</a>
                            <div id="modal-container19" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Val-Terbi.png">
                                </div>
                            </div>

                        <p></p>
                            <a class="uk-button uk-button-link" href="#modal-container20" uk-toggle>Alle</a>
                            <div id="modal-container20" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Alle.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container21" uk-toggle>La Baroche</a>
                            <div id="modal-container21" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/La Baroche.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container22" uk-toggle>Basse-Allaine</a>
                            <div id="modal-container22" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Basse-Allaine.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container23" uk-toggle>Beurnevésin</a>
                            <div id="modal-container23" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Beurnevésin.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container24" uk-toggle>Boncourt</a>
                            <div id="modal-container24" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Boncourt.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container25" uk-toggle>Bonfol</a>
                            <div id="modal-container25" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Bonfol.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container25" uk-toggle>Bure</a>
                            <div id="modal-container25" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Bure.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container26" uk-toggle>Clos-du-Doubs</a>
                            <div id="modal-container26" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Clos-du-Doubs.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container27" uk-toggle>Coeuve</a>
                            <div id="modal-container27" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Coeuve.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container28" uk-toggle>Cornol</a>
                            <div id="modal-container28" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Cornol.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container29" uk-toggle>Courchavon</a>
                            <div id="modal-container29" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Courchavon.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container30" uk-toggle>Courgenay</a>
                            <div id="modal-container30" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Courgenay.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container31" uk-toggle>Courtedoux</a>
                            <div id="modal-container31" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Courtedoux.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container32" uk-toggle>Damphreux</a>
                            <div id="modal-container32" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Damphreux.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container33" uk-toggle>Fahy</a>
                            <div id="modal-container33" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Fahy.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container34" uk-toggle>Fontenais</a>
                            <div id="modal-container34" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Fontenais.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container35" uk-toggle>Grandfontaine</a>
                            <div id="modal-container35" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Grandfontaine.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container36" uk-toggle>Haute-Ajoie</a>
                            <div id="modal-container36" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Haute-Ajoie.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container37" uk-toggle>Lugnez</a>
                            <div id="modal-container37" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Lugnez.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container38" uk-toggle>Porrentruy</a>
                            <div id="modal-container38" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Porrentruy.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container39" uk-toggle>Vendlincourt</a>
                            <div id="modal-container39" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Vendlincourt.png">
                                </div>
                            </div>

                        <p></p>
                            <a class="uk-button uk-button-link" href="#modal-container40" uk-toggle>Le Bémont</a>
                            <div id="modal-container40" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Le Bémont.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container41" uk-toggle>Les Bois</a>
                            <div id="modal-container41" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Les Bois.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container42" uk-toggle>Les Breuleux</a>
                            <div id="modal-container42" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Les Breuleux.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container43" uk-toggle>La Chaux-des-Breuleux</a>
                            <div id="modal-container43" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/La Chaux-des-Breuleux.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container44" uk-toggle>Les Enfers</a>
                            <div id="modal-container44" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Les Enfers.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container45" uk-toggle>Les Genevez</a>
                            <div id="modal-container45" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Les Genevez.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container46" uk-toggle>Lajoux</a>
                            <div id="modal-container46" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Lajoux.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container47" uk-toggle>Montfaucon</a>
                            <div id="modal-container47" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Montfaucon.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container48" uk-toggle>Muriaux</a>
                            <div id="modal-container48" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Muriaux.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container49" uk-toggle>Le Noirmont</a>
                            <div id="modal-container49" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Le Noirmont.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container50" uk-toggle>Saignelégier</a>
                            <div id="modal-container50" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Saignelégier.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container51" uk-toggle>Saint-Brais</a>
                            <div id="modal-container51" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Saint-Brais.png">
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container52" uk-toggle>Soubey</a>
                            <div id="modal-container52" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <img src="../../../../IMG/Elections/JURA_20200811/Soubey.png">
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <h2>Résultats cantonaux</h2>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-align-right" id="chartECGouvernement" style="width: 100%; height: 500px;"></div>
                            <script>
                                var chartECGouvernement = am4core.create("chartECGouvernement", am4charts.XYChart);

                                chartECGouvernement.data = [{
                                    "candidat": "C. Linder",
                                    "Suffrages": 1,
                                    "Elu": "Non élue",
                                    "color": am4core.color("#ff4242")
                                }, {
                                    "candidat": "D. Eray",
                                    "Suffrages": 1,
                                    "Elu": "Non élu",
                                    "color": am4core.color("#ff4242")
                                }, { 
                                    "candidat": "S. Babey",
                                    "Suffrages": 1,
                                    "Elu": "Elu",
                                    "color": am4core.color("#89ff6a")
                                }, { 
                                    "candidat": "J. Gerber",
                                    "Suffrages": 1,
                                    "Elu": "Elu",
                                    "color": am4core.color("#89ff6a")
                                }, {
                                    "candidat": "R. Beuret",
                                    "Suffrages": 1,
                                    "Elu": "Elue",
                                    "color": am4core.color("#89ff6a")
                                }, {
                                    "candidat": "N. Barthoulot",
                                    "Suffrages": 1,
                                    "Elu": "Elue",
                                    "color": am4core.color("#89ff6a")
                                }, {
                                    "candidat": "M. Courtet",
                                    "Suffrages": 1,
                                    "Elu": "Elu",
                                    "color": am4core.color("#89ff6a")
                                }];

                                // Create axes
                                var categoryAxis = chartECGouvernement.yAxes.push(new am4charts.CategoryAxis());
                                categoryAxis.dataFields.category = "candidat";
                                categoryAxis.title.text = "Candidats";
                                categoryAxis.renderer.minGridDistance = 4;
                                

                                var valueAxis = chartECGouvernement.xAxes.push(new am4charts.ValueAxis());
                                valueAxis.title.text = "Suffrages";
                                

                                // Create series
                                var series = chartECGouvernement.series.push(new am4charts.ColumnSeries());
                                series.dataFields.valueX = "Suffrages";
                                series.dataFields.categoryY = "candidat";
                                series.name = "Suffrages";
                                series.columns.template.tooltipText = "{candidat}, {Suffrages} suffrages, {Elu}";
                                series.columns.template.propertyFields.fill = "color";
                            </script>
                        </div>
                    </div>
                </div>            
            </div>
        </section>
    </main>
    <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>