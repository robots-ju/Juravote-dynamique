<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire "Pour une eau potable propre et une alimentation saine"</title>
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
            <h1 class="uk-heading-large">Initiative populaire "Pour une eau potable propre et une alimentation saine"</h1>
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
                    <p class="uk-text-justify">L’initiative veut améliorer la protection de l’environnement 
                    et de l’eau potable. Elle prévoit que les paiements directs de la Confédération ne seront
                    versés plus qu’aux conditions suivantes : les exploitations agricoles devront produire en
                    se passant de pesticides, bannir l’utilisation préventive ou régulière d’antibiotiques dans
                    l’élevage et être en mesure de nourrir leurs animaux exclusivement avec le fourrage qu’elles
                    produisent elles-mêmes. Elle veut donc éviter une surproduction de purin. Enfin, si l’initiative
                    est acceptée, elle n’aura aucune conséquence pour les exploitations agricoles qui ne reçoivent 
                    pas de paiements directs.
                    </p>

                       
                    <h3>La question qui vous est posée : </h3>        
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 10%">Acceptez-vous l'initiave populaire 
                    "Pour une eau potable propre et une alimentation saine"</p></b>
                </li>        

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_Initiative EauPotable2021" aria-label="chart" id="datawrapper-chart-ps356" src="https://datawrapper.dwcdn.net/ps356/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>  

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU IP Eau Potable 2021" aria-label="chart" id="datawrapper-chart-0EZ4J" src="https://datawrapper.dwcdn.net/0EZ4J/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="AutoritesCH_IP Eau Potable 2021" aria-label="chart" id="datawrapper-chart-Z6zH8" src="https://datawrapper.dwcdn.net/Z6zH8/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  

                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’initiative pour une eau potable propre exige qu’à l’avenir, nos milliards d’impôts
                                soient investis dans une production alimentaire sans pesticides, qui n’utilise pas d’antibiotiques
                                à titre préventif et qui élève le bétail qu’elle peut nourrir avec du fourrage local. En plus des
                                milliards de subventions, les agricultrices et agriculteurs devront être soutenus par la recherche,
                                la formation et les aides à l’investissement. Pour protéger notre santé, la biodiversité, les sols,
                                l’eau et le climat – car ce sont les bases de notre production alimentaire.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les pesticides utilisés dans l’agriculture se retrouvent dans notre eau potable. Un million$
                                 de Suisses consomment de l’eau potable contaminée par des résidus de pesticides au-delà de la
                                  limite légale. Cela met notre santé en danger. Dans de nombreux endroits, cela signifie que
                                   l’approvisionnement en eau potable pure n’est plus possible.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’utilisation excessive d’antibiotiques dans les élevages conduit au développement
                                 de bactéries résistantes aux antibiotiques. Ces bactéries potentiellement mortelles 
                                 parviennent dans les champs par le biais du fumier et du lisier et, de là, dans nos aliments
                                 et notre eau potable.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le nombre d’animaux élevés pour la production de viande et d’œufs en Suisse est aujourd’hui 
                                artificiellement augmenté par l’importation massive de 1,2 million de tonnes de fourrage par an.
                                Il en résulte un excédent de lisier, qui entraîne la présence de nitrates cancérigènes dans
                                l’eau potable.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La plupart des produits agricoles indonésiens, tels que les fruits exotiques, complètent l’offre locale 
                                suisse sans la con currencer. Les concessions dans ce domaine sont en outre aménagées de façon à ne pas 
                                menacer les producteurs suisses.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le compromis trouvé est tout à fait acceptable pour la Suisse, car il n’y aura pas de libre-échange 
                                pour l’huile de palme. Ainsi, l’accord tient compte des préoccupations sociales et environnementales, 
                                et notre production nationale d’huile de colza et de tournesol n’est pas en danger.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Des contrôles efficaces seront mis en place pour vérifier que seule de l’huile de palme durable, 
                                c’est-à-dire produite dans le respect strict des exigences sociales et environnementales, peut être 
                                importée aux conditions douanières plus avantageuses qu’offre l’accord.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’accord profite autant à la Suisse qu’à l’Indonésie. Il améliore l’accès au marché, renforce 
                                la sécurité juridique et permet une meilleure planification. Il prend en compte l’objectif de 
                                développement durable et apporte une contribution importante aux efforts mondiaux pour parvenir à 
                                une production d’huile de palme plus durable.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                   <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Déjà bien protégée, l’eau potable peut être consommée sans problème en Suisse. Sa protection peut
                                 être encore améliorée, mais le Conseil fédéral et le Parlement trouvent que l’initiative va trop
                                 loin. L’acceptation de celle-ci aurait un impact énorme sur la production de denrées alimentaires
                                 en Suisse. Comme beaucoup d’exploitations agricoles en produiraient moins, il faudrait en importer
                                 plus, d’où un transfert de la pollution à l’étranger. La principale demande de l’initiative a du 
                                 reste déjà été prise en compte par le Parlement.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les conséquences de l’initiative sur l’eau potable toucheraient de plein fouet l’agriculture, la
                                 production de denrées alimentaires et les emplois générés en Suisse par ces activités.Sans protection spécifique contre les maladies et les ravageurs des cultures, la production
                                 nationale de denrées alimentaires, telles que les fruits, les légumes et les pommes de terre,
                                  chuterait, et il faudrait accroître la part des importations pour satisfaire les besoins de la
                                   consommation nationale.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Ces importations sont aussi la cible de l’initiative contre les pesticides, qui prévoit de limiter
                                ces importations aux seules denrées produites sans pesticides de synthèse. Le choix des produits
                                disponibles en serait fortement réduit. ’interdiction des produits phytosanitaires affaiblirait encore
                                plus nos exportateurs en renchérissant les matières premières de production suisse, comme le sucre 
                                et les huiles végétales. Ces exportateurs subiraient alors un préjudice par rapport à la concurrence
                                étrangère.
                                 
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