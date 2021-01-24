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
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-top: 2%;">
                        <h3>Contexte</h3>
                        <hr>
                        <p class="uk-text-justify">L’interdiction de se dissimuler le visage fait débat depuis plusieurs années en Suisse. 
                        Le Conseil fédéral et les Chambres fédérales se sont toujours opposés à une interdiction 
                        applicable dans tout le pays. Deux cantons, Saint-Gall et le Tessin, interdisent la dissimulation
                        du visage sur leur territoire. D’autres cantons ont rejeté une telle interdiction. 
                        De  nombreux cantons, enfin, interdisent aux manifestants de se dissimuler le visage.
                        </p>

                        <p class="uk-text-justify">La dissimulation du visage peut déjà avoir des conséquences à l’heure actuelle. Les autorités peuvent 
                        refuser d’octroyer une autorisation de séjour ou d’établissement à la personne concernée, ou de la naturaliser.
                        </p>

                        <h3>L'initiative</h3>
                        <hr>
                        <p class="uk-text-justify">L'initiative veut interdire toute forme de dissimulation du visage en Suisse, dans tous les lieux
                        accessibles au public (rues, services administratifs, transports publics, stades, restaurants, magasins, ...).
                        En plus de la contrainte, une infraction figurant dans le droit pénal actuel, les auteurs de l’initiative veulent 
                        inscrire dans la Constitution que nul ne peut contraindre une personne de se dissimuler le visage en raison de son sexe.
                        </p>

                        <p class="uk-text-justify">
                        Des exceptions ne seront admises que dans les lieux de cultes ou lorsqu'elles seront justifiées par des raisons
                        de santé ou de sécurité, des raisons climatiques ou des coutumes locales. Aucune autre exception (par ex. en 
                        faveur des touristes voilées) ne sera admise.
                        </p>

                        <h3>Le contre-projet indirect</h3>
                        <hr>
                        <p class="uk-text-justify">
                        Le Conseil fédéral et le Parlement estiment que l’initiative va trop loin. Ils lui opposent un 
                        contre-projet indirect qui comble de manière ciblée une lacune du droit fédéral : une personne sera désormais 
                        tenue de montrer son visage aux autorités si celles-ci doivent vérifier son identité. Le contre-projet propose
                        en outre des mesures destinées à renforcer les droits des femmes.
                        </p>

                        <p class="uk-text-justify">
                        Il prévoit, dans les domaines de l’intégration, 
                        de l’égalité et de la coopération au développement, des modifications de loi qui permettront à la Confédération de 
                        soutenir des programmes d’encouragement et de contribuer ainsi à améliorer l’égalité entre les sexes.
                        Le contre-projet entrera en vigueur à condition que l’initiative soit rejetée et qu’il ne soit pas lui-même rejeté 
                        à la suite d’un référendum.
                        </p>
                    </div>

                    <h3>La situation dans les Cantons</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <p class="uk-text-justify">En Suisse, c’est aux cantons qu’il appartient de réglementer l’utilisation de l’espace public.
                        Les cantons du Tessin et de Saint-Gall l’ont fait, alors que d’autres cantons, tels que Zurich, 
                        Schwyz et Glaris, s’y sont opposés. Quinze cantons, enfin, interdisent la dissimulation du visage 
                        lors de manifestations ou d’événements sportifs.
                        </p>

                        <h3>La question qui vous est posée :</h3>
                        <hr>
                        <b><p>Acceptez-vous l'initiative populaire "Oui à l'interdiction de se dissimuler le visage" ?</p></b>

                        <iframe title="Situation dans les cantons" aria-label="map" id="datawrapper-chart-lOlsi" src="https://datawrapper.dwcdn.net/lOlsi/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="477"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>

                    
                </li>
                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="Recommandations de vote des partis fédéraux_Initiative populaire &quot;Oui à l'interdiction de se dissimuler le visage&quot;" aria-label="chart" id="datawrapper-chart-hci1E" src="https://datawrapper.dwcdn.net/hci1E/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>  

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="Recommandations de vote des partis jurassiens_Initiative populaire &quot;Oui à l'interdiction de se dissimuler le visage&quot;" aria-label="chart" id="datawrapper-chart-exTuv" src="https://datawrapper.dwcdn.net/exTuv/6/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="Recommandations de vote des Autorités_Initiative populaire &quot;Oui à l'interdiction de se dissimuler le visage&quot;" aria-label="chart" id="datawrapper-chart-edwBv" src="https://datawrapper.dwcdn.net/edwBv/5/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="199"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>            
                    <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
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
                                <p>Dans un arrêt rendu en 2014, la Cour européenne des droits de l’homme (CEDH) indique que l’interdiction 
                                du port de la burqa et du niqab en public est proportionnée et n’est contraire ni à la liberté de religion, 
                                ni à la liberté d’opinion.</p>
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

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La Confédération et les cantons ont, comme on le sait, ordonné le port de masques d’hygiène dans certains lieux, 
                                en vue d’endiguer la propagation du COVID-19. Cette mesure, limitée dans le temps, n’a aucune incidence sur notre initiative.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
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
                                <p>Contrairement à l’initiative, qui prévoit une mesure inutile et trop rigide à l’échelle nationale, 
                                le contre-projet respecte les prérogatives des cantons, dans un système de répartition des compétences 
                                qui a fait ses preuves et comble une lacune de manière ciblée : le visage devra être montré lors de toute 
                                d’identité.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les cantons peuvent légiférer dès qu’ils le jugent opportun. Chacun d’entre eux peut interdire 
                                la dissimulation du visage s’il le souhaite. Le Conseil fédéral et le Parlement n’entendent pas 
                                remettre en question ce principe éprouvé. Ce sont les cantons qui connaissent le mieux les attentes 
                                de la population.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’initiative veut combattre l’oppression des femmes. Mais interdire la dissimulation du visage 
                                n’améliorera pas la condition des femmes voilées. Au contraire, une telle interdiction risquera de 
                                les exclure de la vie publique.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le port du voile intégral peut avoir des conséquences juridiques aujourd’hui déjà. S’il est le 
                                signe d’un manque d’intégration, les autorités peuvent refuser d’octroyer une autorisation de séjour 
                                ou d’établissement à la femme concernée, ou de la naturaliser.</p>
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