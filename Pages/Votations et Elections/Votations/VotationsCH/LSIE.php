<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Loi fédérale du 27 septembre 2019 sur les services d’identification électronique (LSIE)</title>
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
        <script src="//cdn.amcharts.com/lib/4/core.js"></script>
        <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>

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
            <h1 class="uk-heading-large">Loi fédérale du 27 septembre 2019 sur les services d’identification électronique (LSIE)</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h3>Contexte</h3>
                    <hr>
                    <p>Pour faire des achats ou obtenir des services en ligne, il est généralement nécessaire de s’identifier. 
                    Il existe déjà différentes procédures, souvent au moyen d’un identifiant et d’un mot de passe. Toutefois, 
                    en Suisse, aucune d’entre elles n’est encadrée par la loi ou ne fait l’objet d’une garantie de la 
                    Confédération quant à sa sécurité et sa fiabilité. C’est pourquoi le Conseil fédéral et le Parlement ont 
                    préparé une loi instaurant un système d’identification reconnu par la Confédération : l’e-ID. La loi est 
                    soumise au vote, car une demande de référendum a abouti.</p>

                    <h3>Le projet</h3>
                    <hr>
                    <p>La nouvelle loi sur l’e-ID définit une procédure d’identification univoque utilisable pour faire des
                    achats ou obtenir des services sur Internet de manière simple et sûre (par ex. ouvrir un compte bancaire 
                    ou commander un document officiel). L’acquisition d’une e-ID est facultative. Les personnes intéressées 
                    doivent en faire la demande auprès d’un fournisseur d’e-ID reconnu par la Confédération.
                    </p>

                    <p>Celui-ci transmet la demande à la Confédération, qui vérifie l’identité de la personne puis autorise 
                    l’émission de l’e-ID. La Confédération confie la mise en oeuvre technique aux fournisseurs, qui peuvent 
                    être des entreprises, des cantons ou des communes, et surveille leur activité. L’émission et l’utilisation 
                    e-ID, comme toute procédure d’identification, impliquent le traitement de données personnelles. La nouvelle 
                    loi met donc un accent particulier sur la protection des données.
                    </p>
                
                    <h3>La question qui vous est posée : </h3>
                    <hr>
                    <b><p>Acceptez-vous la loi fédérale du 27 septembre 2019 sur les services d’identification électronique (LSIE) ?</p></b>
                </li>
                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <!--<h2>Partis fédéraux</h2>-->
                        <iframe title="Recommandations de vote des partis fédéraux_LSIE" aria-label="chart" id="datawrapper-chart-waHms" src="https://datawrapper.dwcdn.net/waHms/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script> 

                        <!--<h2>Partis jurassiens</h2>-->
                        <iframe title="Recommandations de vote des partis jurassiens_LSIE" aria-label="chart" id="datawrapper-chart-MNmh4" src="https://datawrapper.dwcdn.net/MNmh4/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <!--<h2>Autorités</h2>-->
                        <iframe title="Recommandations de vote des Autorités_LSIE" aria-label="chart" id="datawrapper-chart-C1uIL" src="https://datawrapper.dwcdn.net/C1uIL/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>            
                    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Comme beaucoup d’opérations se font aujourd’hui sur Internet, il est important de pouvoir 
                                s’identifier en ligne de manière sûre.</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La loi adoptée par le Conseil fédéral et le Parlement propose une procédure d’identification simple, 
                                sûre et reconnue par la Confédération.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La nouvelle loi permet à des acteurs privés de commercialiser et délivrer des pièces d’identité officielles.</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Des entreprises, notamment des banques et des assurances, géreront les données privées des citoyens. 
                                L’émission de pièces d’identité doit rester de la responsabilité de l’État.</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>