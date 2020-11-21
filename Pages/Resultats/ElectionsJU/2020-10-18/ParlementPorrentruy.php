<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Elections au Parlement jurassien</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-firestore.js"></script>
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
<header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
    <h1 class="uk-heading-large">Résultats des élections cantonales du 18 octobre 2020</h1>
        <hr>
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Informations de la votation</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-left">
                        <p><b>Objet : </b>Election au Parlement Jurassien</p>
                        <p><b>Participation : </b>52.14 %</p>
                        <p><b>Type de la votation : </b>Election cantonale jurassienne</p>
                        <p><b>Mode de votation : </b>Election à un tour</p>
                        <p><a href="<?php echo $PHPelectionsJUParlementA ?>">Lien vers les informations d'élection</a></p>
                        <p><a href="<?php echo $PHPParlementJU20212025 ?>">Composition du nouveau Parlement</a></p>
                        <p><b>Résultats par communes : </b></p>   
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats district de Porrentruy</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <iframe title="Parlement jurassien (district de Porrentruy)" aria-label="chart" id="datawrapper-chart-Qsvc9" src="https://datawrapper.dwcdn.net/Qsvc9/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </div>
            </div>
            </div>
        <div>
        
        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">PLRJ</button>
            <button class="uk-button uk-button-default" type="button">PSJ-JSJ</button>
            <button class="uk-button uk-button-default" type="button">PDC-JDC</button>
            <button class="uk-button uk-button-default" type="button">UDC</button>
            <button class="uk-button uk-button-default" type="button">Verts</button>
            <button class="uk-button uk-button-default" type="button">PCSI</button>
            <button class="uk-button uk-button-default" type="button">PVL</button>
        </div>  
        <ul class="uk-switcher uk-margin">
        <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Porrentruy - PLRJ" aria-label="Histogramme" id="datawrapper-chart-ItVvP" src="https://datawrapper.dwcdn.net/ItVvP/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="598"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li> 
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Porrentruy - PS" aria-label="Histogramme" id="datawrapper-chart-q4NMY" src="https://datawrapper.dwcdn.net/q4NMY/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="598"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Porrentruy - PDC" aria-label="Histogramme" id="datawrapper-chart-H38Yx" src="https://datawrapper.dwcdn.net/H38Yx/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="598"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Porrentruy - UDC" aria-label="Histogramme" id="datawrapper-chart-JZSyz" src="https://datawrapper.dwcdn.net/JZSyz/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="598"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Porrentruy - Vert-e-s" aria-label="Histogramme" id="datawrapper-chart-r3g7v" src="https://datawrapper.dwcdn.net/r3g7v/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="598"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Porrentruy - PCSI" aria-label="Histogramme" id="datawrapper-chart-YJTGc" src="https://datawrapper.dwcdn.net/YJTGc/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="598"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Porrentruy - PVL" aria-label="Histogramme" id="datawrapper-chart-CJOQc" src="https://datawrapper.dwcdn.net/CJOQc/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="550"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
        </ul>
    </div>        
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>