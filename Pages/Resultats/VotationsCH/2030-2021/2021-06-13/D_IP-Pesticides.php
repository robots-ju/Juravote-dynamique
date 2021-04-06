<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire "Pour une Suisse libre de pesticides de synthèse"</title>
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
            <h1 class="uk-heading-large">Initiative populaire "Pour une Suisse libre de pesticides de synthèse"</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>                    
                    <h3>Que veut l'initiative ?</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <p class="uk-text-justify" style="padding-bottom: 2%">L'initiative veut interdire les pesticides de synthèse en Suisse.
                        L'interdiction concernerait l'agriculture, la production et la transformation des denrées
                        alimentaires, l'entretien des espaces verts publics et des jardins privés, et la protection
                        d'infrastructures telles que les voies de chemin de fer.
                        </p>
                        <p class="uk-text-justify">L’importation de denrées alimentaires produites à l’étranger à 
                        l’aide de pesticides de synthèse ou contenant de tels pesticides serait elle aussi interdite. 
                        L’interdiction devrait être totalement mise en œuvre dans un délai de dix ans. Durant ce délai, 
                        le Conseil fédéral pourrait autoriser des exceptions si l’agriculture, la population ou la 
                        nature étaient gravement menacées, par exemple en cas de pénurie extraordinaire.</p>
                    </div>

                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Pesticides de synthèse: définition/délimitation</h3>
                        <hr>
                        <p class="uk-text-justify">L'initiative vise les pesticides de synthèse, qui contiennent des
                        compositions chimiques qui n'existent pas à l'état naturel. Les agents biologiques, les
                        pesticides biologiques, les insectes bénéfiques, les pesticides organiques, mécaniques,
                        électriques ou thermiques, ainsi que toutes les alternatives qui ne contiennent pas de
                        toxiques chimiques, ne sont pas concernés par le champ d'application de l'initiative.
                        </p>

                        <h3>Importations/protection de l’agriculture suisse</h3>
                        <hr>
                        <p class="uk-text-justify">L’interdiction d’utilisation des pesticides de synthèse est claire 
                        et cohérente, et s’applique également aux importations. L’initiative met fin à l’usage de 
                        pesticides de synthèse par les agriculteurs, mais aussi par les particuliers, les entreprises 
                        et les pouvoirs publics. Le texte de l’initiative couvre également les produits importés dans 
                        leur intégralité, garantissant ainsi des conditions équitables pour l’agriculture suisse, qui 
                        est désavantagée par la législation actuelle.
                        </p>

                        <h3>Période de transition de 10 ans</h3>
                        <hr>
                        <p class="uk-text-justify">L’initiative prévoit une période de transition de dix ans. 
                        Ce délai permet à l’agriculture de faire une transition en douceur et donne aux acteurs 
                        individuels suffisamment de temps pour prendre les mesures nécessaires pour se passer des 
                        pesticides de synthèse. Ces dix années peuvent être utilisées politiquement pour repenser 
                        le système agricole et alimentaire et pour adapter la législation pertinente, et en même temps 
                        la recherche peut développer une agriculture qui prend davantage en compte la biodiversité et 
                        la santé.
                        </p>
                    </div>

                    <h3>La question qui vous est posée :</h3>
                    <hr>
                    <b><p class="uk-text-justify">Acceptez-vous l'initiative populaire
                    "Pounr une Suisse libre de pesticides de synthèse" ?</p></b>                    
                </li>

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_Initiative Pesticides2021" aria-label="chart" id="datawrapper-chart-QfATH" src="https://datawrapper.dwcdn.net/QfATH/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU IP Pesticides 2021" aria-label="chart" id="datawrapper-chart-Xkb9c" src="https://datawrapper.dwcdn.net/Xkb9c/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="AutoritesCH_IP Pesticides 2021" aria-label="chart" id="datawrapper-chart-Eoa4E" src="https://datawrapper.dwcdn.net/Eoa4E/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous renforçons une agriculture écologique et équitable, car les mêmes règles 
                                s’appliquent aux importations et aux agriculteurs suisses.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous rendons une alimentation saine accessible et abordable pour l’ensemble 
                                de la population.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous enrayons la disparition des insectes et promouvons la biodiversité – pour une 
                                biodiversité suisse renforcée et durable.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous protégeons notre santé, notre environnement et notre eau potable et donc 
                                les moyens de subsistance des générations futures.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous accordons une période de transition de 10 ans pour la mise en œuvre de 
                                notre revendication, à savoir l’interdiction des pesticides de synthèse.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour la protection de l’environnement et de la santé : chaque année, 2’000 tonnes 
                                de pesticides empoisonnent nos nappes phréatiques et notre eau potable. Les pesticides 
                                nuisent à la santé, aux insectes et rendent les sols durablement infertiles.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’économie agro-alimentaire suisse doit changer de paradigme : les VERT-E-S militent 
                                pour une agriculture paysanne et un système alimentaire équitable et climat-compatible, 
                                garantissant à chaque personne une nourriture saine et sans pesticide. Cette initiative 
                                et celle pour l’eau potable sont nécessaires afin de surmonter les blocages bourgeois 
                                sur la politique agricole.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le contre-projet du Parlement est insuffisant : il ne vise qu’à réduire les risques, 
                                sans engagement, ce qui est cependant nécessaire si l’on veut une stratégie contraignante 
                                pour en sortir.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Malgré toutes les directives et les prétendus efforts déployés jusqu'à présent, 
                                2000 tonnes de pesticides, 110 000 tonnes d'excédents d'azote et 6000 tonnes d'excédents 
                                de phosphore sont rejetées dans l'environnement par l'agriculture suisse chaque année. 
                                Ces énormes quantités polluent la biodiversité, l'eau et le sol. Bien que ces chiffres 
                                soient connus depuis longtemps, le monde politique a entrepris bien peu de mesures jusqu’à 
                                ce jour pour s'attaquer à ces problèmes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L'initiative sur les pes­ti­cides vise éga­le­ment à pro­té­ger la popu­la­tion contre les 
                                risques sani­taires liés aux pes­ti­cides pro­duits arti­fi­ciel­le­ment et à enrayer le déclin 
                                de la bio­di­ver­sité. Tant que les majo­ri­tés au Par­le­ment empêchent l'agriculture de deve­nir 
                                plus éco­lo­gique, ce qui est urgent, il est néces­saire de pour­suivre sur la voie pro­po­sée 
                                par les ini­tia­tives.</p>
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
                                <p class="uk-text-justify">L’interdiction des pesticides de synthèse affaiblirait l’approvisionnement de la 
                                population en denrées alimentaires produites en Suisse et réduirait le choix de denrées 
                                alimentaires importées.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’interdiction des pesticides de synthèse rendrait les règles d’hygiène plus 
                                difficiles à respecter lors de la production.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le Conseil fédéral et le Parlement ont déjà pris plusieurs mesures allant dans le 
                                sens de l’initiative, sans pour autant limiter exagérément la marge de manœuvre de 
                                l’agriculture et du secteur agro-alimentaire. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Ces deux initiatives abordent des questions importantes, car le PLR veut réduire 
                                l'utilisation de produits phytosanitaires. Cependant, le chemin emprunté pour atteindre 
                                l'objectif devrait être différent. Du point de vue du PLR, les deux initiatives vont 
                                clairement trop loin : la mise en œuvre de ces initiatives mettrait en danger non 
                                seulement l'agriculture suisse, mais aussi notre approvisionnement alimentaire national. 
                                C'est pourquoi l'Assemblée des délégués a privilégié l’approche actuelle qui vise à 
                                ajuster la législation existante au moyen d’actions parlementaires.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les deux initiatives populaires de la gauche sont dangereuses pour notre pays. 
                                Leur entrée en vigueur détruirait l’agriculture productrice et compromettrait donc 
                                gravement notre approvisionnement en denrées alimentaires saines et régionales. Ces 
                                projets sont de surcroît en opposition avec l’article constitutionnel sur la sécurité 
                                alimentaire que le souverain a approuvé en 2017. Leur application renchérirait 
                                notablement les denrées alimentaires et encouragerait l’importation de produits 
                                d’origine douteuse.</p>
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