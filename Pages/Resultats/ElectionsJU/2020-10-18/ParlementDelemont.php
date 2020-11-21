<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
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
                        <p><b>Participation : </b>47.15 %</p>
                        <p><b>Type de la votation : </b>Election cantonale jurassienne</p>
                        <p><b>Mode de votation : </b>Election à un tour</p> 
                        <p><a href="<?php echo $PHPelectionsJUParlementD ?>">Lien vers les informations d'élection</a></p>                       
                        <p><a href="<?php echo $PHPParlementJU20212025 ?>">Composition du nouveau Parlement</a></p>
                        <p><b>Résultats par communes : </b></p>   
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats district de Delémont</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <iframe title="" aria-label="chart" id="datawrapper-chart-f1z3r" src="https://datawrapper.dwcdn.net/f1z3r/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
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
            <button class="uk-button uk-button-default" type="button">CS-POP</button>
            <button class="uk-button uk-button-default" type="button">PEV-Jura</button>
            <button class="uk-button uk-button-default" type="button">UDC</button>
            <button class="uk-button uk-button-default" type="button">Verts</button>
            <button class="uk-button uk-button-default" type="button">PCSI</button>
            <button class="uk-button uk-button-default" type="button">PVL</button>
            <button class="uk-button uk-button-default" type="button">AB</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - PLR" aria-label="Histogramme" id="datawrapper-chart-b6sOh" src="https://datawrapper.dwcdn.net/b6sOh/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li> 
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - PS" aria-label="Histogramme" id="datawrapper-chart-4is3Z" src="https://datawrapper.dwcdn.net/4is3Z/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - PDC" aria-label="Histogramme" id="datawrapper-chart-ljTad" src="https://datawrapper.dwcdn.net/ljTad/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - CS-POP" aria-label="Histogramme" id="datawrapper-chart-pctJu" src="https://datawrapper.dwcdn.net/pctJu/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - PEV" aria-label="Histogramme" id="datawrapper-chart-SWeXt" src="https://datawrapper.dwcdn.net/SWeXt/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - UDC" aria-label="Histogramme" id="datawrapper-chart-1Pyoz" src="https://datawrapper.dwcdn.net/1Pyoz/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - Vert-e-s" aria-label="Histogramme" id="datawrapper-chart-ORyqf" src="https://datawrapper.dwcdn.net/ORyqf/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - PCSI" aria-label="Histogramme" id="datawrapper-chart-9nSvx" src="https://datawrapper.dwcdn.net/9nSvx/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="840"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - PVL" aria-label="Histogramme" id="datawrapper-chart-JZdKt" src="https://datawrapper.dwcdn.net/JZdKt/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="838"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <iframe title="Election 2020 du Parlement jurassien - District de Delémont - AV" aria-label="Histogramme" id="datawrapper-chart-rPdYu" src="https://datawrapper.dwcdn.net/rPdYu/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="288"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>