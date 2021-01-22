<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire du 15.09.2017 «Oui à l’interdiction de se dissimuler le visage»</title>
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
            <h1 class="uk-heading-large">Initiative populaire du 15.09.2017 «Oui à l’interdiction de se dissimuler le visage»</h1>
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
                    <p>L’interdiction de se dissimuler le visage fait débat depuis plusieurs années en Suisse. 
                    Le Conseil fédéral et les Chambres fédérales se sont toujours opposés à une interdiction 
                    applicable dans tout le pays. Deux cantons, Saint-Gall et le Tessin, interdisent la dissimulation
                    du visage sur leur territoire. D’autres cantons ont rejeté une telle interdiction. 
                    De  nombreux cantons, enfin, interdisent aux manifestants de se dissimuler le visage.
                    </p>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                        <h3>L'initiative</h3>
                        <hr>
                        <p>L'initiative veut interdire toute forme de dissimulation du visage en Suisse, dans tous les lieux
                        accessibles au public (rues, services administratifs, transports publics, stades, restaurants, magasins, ...).
                        Des exceptions ne seront admises que dans les lieux de cultes ou lorsqu'elles seront justifiées par des raisons
                        de santé ou de sécurité, des raisons climatiques ou des coutumes locales.
                        </p>

                        <h3>Le contre-projet indirect</h3>
                        <hr>
                        Le Conseil fédéral et le Parlement estiment que l’initiative va trop loin. Ils lui opposent un 
                        contre-projet indirect qui prévoit que toute personne doit montrer son visage aux autorités 
                        lorsque celles-ci doivent vérifier son identité. Le contre-projet propose en outre des mesures 
                        destinées à renforcer les droits des femmes. Il ne pourra entrer en vigueur que si l’initiative est rejetée.
                        </p>
                    </div>

                    <h3>La question qui vous est posée :</h3>
                    <hr>
                    <b><p>Acceptez-vous l'initiative populaire "Oui à l'interdiction de se dissimuler le visage" ?</p></b>
                </li>
                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <!--<h2>Partis fédéraux</h2>-->
                        <iframe title="Recommandations de vote des partis fédéraux" aria-label="chart" id="datawrapper-chart-hci1E" src="https://datawrapper.dwcdn.net/hci1E/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>   

                        <!--<h2>Partis jurassiens</h2>-->
                        <iframe title="Recommandations de vote des partis jurassiens" aria-label="chart" id="datawrapper-chart-exTuv" src="https://datawrapper.dwcdn.net/exTuv/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    

                        <!--<h2>Autorités</h2>-->
                        <iframe title="Recommandations de vote des Autorités" aria-label="chart" id="datawrapper-chart-71tcb" src="https://datawrapper.dwcdn.net/71tcb/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>            
                    <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Dans les États éclairés tels que la Suisse, les femmes et les hommes libres se parlent à visage découvert. 
                                La dissimulation du visage dans l’espace public est contraire à l’esprit libéral du vivre-ensemble.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le principe de l'égalité – élémentaire s’iI en est – veut que les femmes aient le droit de montrer en
                                tout temps l’intégralité de leur visage en public, comme les hommes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’interdiction de se dissimuler le visage dans tout le pays permettra d’assurer la sécurité juridique :
                                eIle renforcera la position des organes de sécurité et leur permettra de lutter résolument contre les
                                délinquants masqués.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’initiative n’est contraire ni à la liberté de religion ni à la liberté d’opinion.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le texte de l'initiative prévoit exceptions justifiées par des raisons de santé ou de sécurité,
                                par des raisons climatiques (par ex. pour la pratique des sports d’hiver) ou par des coutumes
                                locales (carnaval, traditions populaires).</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La dissimulation du visage est un phénomène marginal. L’interdire dans tout le pays 
                                rognera les droits des cantons, nuira au tourisme et n’aidera pas les femmes concernées.</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le contreprojet comble une lacune de manière ciblée : le visage devra être montré lors de toute 
                                 d’identité.</p>
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