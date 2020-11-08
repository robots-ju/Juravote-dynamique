<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
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
                        <p><b>Participation : </b>48.31 %</p>
                        <p><a href="<?php echo $PHPelectionsJUGouvernement2 ?>">Lien vers les présentations des candidats-es</a></p>
                        <p><a href="<?php echo $PHPresultatGouvernementJU20201018 ?>">Lien vers les résultats du 1er tour</a></p>                                            
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
                        <iframe title="Election au Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-wgEEe" src="https://datawrapper.dwcdn.net/wgEEe/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <h2>Résultats par communes</h2>
                            </div>
                        </div>
                        <div class="uk-card-body">
                        <a class="uk-button uk-button-link" href="#modal-container1" uk-toggle>Boécourt</a>
                            <div id="modal-container1" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Election du Gouvernement jurassien (2e tour) - Boécourt" aria-label="Histogramme" id="datawrapper-chart-omWpb" src="https://datawrapper.dwcdn.net/omWpb/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container2" uk-toggle>Bourrignon</a>
                            <div id="modal-container2" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Election du Gouvernement jurassien (2e tour) - Bourrignon" aria-label="Histogramme" id="datawrapper-chart-WDDlJ" src="https://datawrapper.dwcdn.net/WDDlJ/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                           <a class="uk-button uk-button-link" href="#modal-container3" uk-toggle>Châtillon</a>
                            <div id="modal-container3" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <iframe title="Châtillon - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-34L3j" src="https://datawrapper.dwcdn.net/34L3j/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                        </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container4" uk-toggle>Courchapoix</a>
                            <div id="modal-container4" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Courchapoix - élection du Gouvernement jurassien (2e tour) (Copy)" aria-label="Histogramme" id="datawrapper-chart-fTeUe" src="https://datawrapper.dwcdn.net/fTeUe/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <!--<a class="uk-button uk-button-link" href="#modal-container5" uk-toggle>Courrendlin</a>
                            <div id="modal-container5" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Courrendlin- élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-9SPVE" src="https://datawrapper.dwcdn.net/9SPVE/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>-->

                            <a class="uk-button uk-button-link" href="#modal-container6" uk-toggle>Courroux</a>
                            <div id="modal-container6" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Courroux - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-EbFhb" src="https://datawrapper.dwcdn.net/EbFhb/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container7" uk-toggle>Courtételle</a>
                            <div id="modal-container7" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Courtételle - élection du Gouvernement jurassien (2e tour) " aria-label="Histogramme" id="datawrapper-chart-YLUPM" src="https://datawrapper.dwcdn.net/YLUPM/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <!--<a class="uk-button uk-button-link" href="#modal-container8" uk-toggle>Delémont</a>
                            <div id="modal-container8" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Delémont - élection du Gouvernement jurassien (2e tour) " aria-label="Histogramme" id="datawrapper-chart-qXuNe" src="https://datawrapper.dwcdn.net/qXuNe/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>-->

                            <a class="uk-button uk-button-link" href="#modal-container9" uk-toggle>Develier</a>
                            <div id="modal-container9" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Develier - élection du Gouvernement jurassien (2e tour) " aria-label="Histogramme" id="datawrapper-chart-QDXB8" src="https://datawrapper.dwcdn.net/QDXB8/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container10" uk-toggle>Ederswiler</a>
                            <div id="modal-container10" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Ederswiler- élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-K4GRq" src="https://datawrapper.dwcdn.net/K4GRq/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <!--<a class="uk-button uk-button-link" href="#modal-container11" uk-toggle>Haute-Sorne</a>
                            <div id="modal-container11" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Haute-Sorne - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-WnVG0" src="https://datawrapper.dwcdn.net/WnVG0/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>-->

                            <a class="uk-button uk-button-link" href="#modal-container12" uk-toggle>Mervelier</a>
                            <div id="modal-container12" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Mervelier - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-arI7x" src="https://datawrapper.dwcdn.net/arI7x/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container13" uk-toggle>Mettembert</a>
                            <div id="modal-container13" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Mettembert - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-QVVwP" src="https://datawrapper.dwcdn.net/QVVwP/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container14" uk-toggle>Movelier</a>
                            <div id="modal-container14" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Movelier - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-0BFUF" src="https://datawrapper.dwcdn.net/0BFUF/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container15" uk-toggle>Pleigne</a>
                            <div id="modal-container15" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Pleigne- élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-6RIo8" src="https://datawrapper.dwcdn.net/6RIo8/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container16" uk-toggle>Rossemaison</a>
                            <div id="modal-container16" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Rossemaison - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-D6a5d" src="https://datawrapper.dwcdn.net/D6a5d/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container17" uk-toggle>Saulcy</a>
                            <div id="modal-container17" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Saulcy- élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-GqGR8" src="https://datawrapper.dwcdn.net/GqGR8/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container18" uk-toggle>Soyhières</a>
                            <div id="modal-container18" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Soyhières - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-tcLoE" src="https://datawrapper.dwcdn.net/tcLoE/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container19" uk-toggle>Val-Terbi</a>
                            <div id="modal-container19" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Val-Terbi - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-suWs1" src="https://datawrapper.dwcdn.net/suWs1/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                        <p></p>
                            <a class="uk-button uk-button-link" href="#modal-container20" uk-toggle>Alle</a>
                            <div id="modal-container20" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Alle - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-IZATQ" src="https://datawrapper.dwcdn.net/IZATQ/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container21" uk-toggle>La Baroche</a>
                            <div id="modal-container21" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="La Baroche - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-qNXBc" src="https://datawrapper.dwcdn.net/qNXBc/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container22" uk-toggle>Basse-Allaine</a>
                            <div id="modal-container22" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Basse-Allaine - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-O9eYW" src="https://datawrapper.dwcdn.net/O9eYW/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container23" uk-toggle>Beurnevésin</a>
                            <div id="modal-container23" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Beurnevésin - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-e3y8G" src="https://datawrapper.dwcdn.net/e3y8G/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container24" uk-toggle>Boncourt</a>
                            <div id="modal-container24" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Boncourt - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-32NgF" src="https://datawrapper.dwcdn.net/32NgF/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container25" uk-toggle>Bonfol</a>
                            <div id="modal-container25" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Bonfol - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-8B3ci" src="https://datawrapper.dwcdn.net/8B3ci/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container25" uk-toggle>Bure</a>
                            <div id="modal-container25" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Bure - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-UH6yF" src="https://datawrapper.dwcdn.net/UH6yF/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container26" uk-toggle>Clos-du-Doubs</a>
                            <div id="modal-container26" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Clos-du-Doubs - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-TYZed" src="https://datawrapper.dwcdn.net/TYZed/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container27" uk-toggle>Coeuve</a>
                            <div id="modal-container27" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Coeuve - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-85Rwg" src="https://datawrapper.dwcdn.net/85Rwg/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container28" uk-toggle>Cornol</a>
                            <div id="modal-container28" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Cornol - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-UP340" src="https://datawrapper.dwcdn.net/UP340/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container29" uk-toggle>Courchavon</a>
                            <div id="modal-container29" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Courchavon - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-b1VV8" src="https://datawrapper.dwcdn.net/b1VV8/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container30" uk-toggle>Courgenay</a>
                            <div id="modal-container30" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Courgenay - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-0cHQi" src="https://datawrapper.dwcdn.net/0cHQi/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container31" uk-toggle>Courtedoux</a>
                            <div id="modal-container31" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Courtedoux - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-LL2C5" src="https://datawrapper.dwcdn.net/LL2C5/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container32" uk-toggle>Damphreux</a>
                            <div id="modal-container32" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Damphreux - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-kQmKZ" src="https://datawrapper.dwcdn.net/kQmKZ/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container33" uk-toggle>Fahy</a>
                            <div id="modal-container33" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Fahy - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-C1kAd" src="https://datawrapper.dwcdn.net/C1kAd/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <!--<a class="uk-button uk-button-link" href="#modal-container34" uk-toggle>Fontenais</a>
                            <div id="modal-container34" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Fontenais - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-kO29j" src="https://datawrapper.dwcdn.net/kO29j/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>-->

                            <a class="uk-button uk-button-link" href="#modal-container35" uk-toggle>Grandfontaine</a>
                            <div id="modal-container35" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Grandfontaine - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-V8B4S" src="https://datawrapper.dwcdn.net/V8B4S/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container36" uk-toggle>Haute-Ajoie</a>
                            <div id="modal-container36" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Haute-Ajoie - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-eLehl" src="https://datawrapper.dwcdn.net/eLehl/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container37" uk-toggle>Lugnez</a>
                            <div id="modal-container37" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Lugnez - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-fTFRC" src="https://datawrapper.dwcdn.net/fTFRC/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container38" uk-toggle>Porrentruy</a>
                            <div id="modal-container38" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Porrentruy - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-eGxx6" src="https://datawrapper.dwcdn.net/eGxx6/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container39" uk-toggle>Vendlincourt</a>
                            <div id="modal-container39" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Vendlincourt- élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-312Wt" src="https://datawrapper.dwcdn.net/312Wt/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                        <p></p>
                            <a class="uk-button uk-button-link" href="#modal-container40" uk-toggle>Le Bémont</a>
                            <div id="modal-container40" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Le Bémont - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-eUXfT" src="https://datawrapper.dwcdn.net/eUXfT/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container41" uk-toggle>Les Bois</a>
                            <div id="modal-container41" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Les Bois - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-WJ45i" src="https://datawrapper.dwcdn.net/WJ45i/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container42" uk-toggle>Les Breuleux</a>
                            <div id="modal-container42" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Les Breuleux - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-KH0yF" src="https://datawrapper.dwcdn.net/KH0yF/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container43" uk-toggle>La Chaux-des-Breuleux</a>
                            <div id="modal-container43" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="La Chaux-des-Breuleux - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-6hgaR" src="https://datawrapper.dwcdn.net/6hgaR/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container44" uk-toggle>Les Enfers</a>
                            <div id="modal-container44" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Les Enfers - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-jmtjf" src="https://datawrapper.dwcdn.net/jmtjf/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container45" uk-toggle>Les Genevez</a>
                            <div id="modal-container45" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Les Genevez - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-d7Fi9" src="https://datawrapper.dwcdn.net/d7Fi9/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container46" uk-toggle>Lajoux</a>
                            <div id="modal-container46" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Lajoux - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-ad6D6" src="https://datawrapper.dwcdn.net/ad6D6/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container47" uk-toggle>Montfaucon</a>
                            <div id="modal-container47" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Montfaucon- élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-aHCYz" src="https://datawrapper.dwcdn.net/aHCYz/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container48" uk-toggle>Muriaux</a>
                            <div id="modal-container48" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Muriaux - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-QpocM" src="https://datawrapper.dwcdn.net/QpocM/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container49" uk-toggle>Le Noirmont</a>
                            <div id="modal-container49" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Le Noirmont - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-mCm76" src="https://datawrapper.dwcdn.net/mCm76/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container50" uk-toggle>Saignelégier</a>
                            <div id="modal-container50" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Saignelégier - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-xpy5y" src="https://datawrapper.dwcdn.net/xpy5y/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container51" uk-toggle>Saint-Brais</a>
                            <div id="modal-container51" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Saint-Brais - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-tcNq0" src="https://datawrapper.dwcdn.net/tcNq0/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="261"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>

                            <a class="uk-button uk-button-link" href="#modal-container52" uk-toggle>Soubey</a>
                            <div id="modal-container52" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <iframe title="Soubey - élection du Gouvernement jurassien (2e tour)" aria-label="Histogramme" id="datawrapper-chart-vmcZr" src="https://datawrapper.dwcdn.net/vmcZr/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="234"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <h2>Comparaison entre le 1er tour et le 2e tour</h2>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <iframe title="Election au Gouvernement jurassien - comparaison entre 1er et 2e tour" aria-label="grouped bars" id="datawrapper-chart-nHfkZ" src="https://datawrapper.dwcdn.net/nHfkZ/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="557"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
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