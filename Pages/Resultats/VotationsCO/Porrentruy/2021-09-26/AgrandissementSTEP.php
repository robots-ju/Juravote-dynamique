<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Porrentruy 26.09.2021</title>
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
            <h1 class="uk-heading-large">Modernisation du traitement des boues de la STEP</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *">
                <button class="uk-button uk-button-default" type="button">Résultats</button>    
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                                        <h2>Informations de la votation</h2>
                                    </div>
                                </div>
                                <div class="uk-card-body uk-text-left">
                                    <p><b>Objet : </b>Modernisation du traitement des boues de la STEP</p>
                                    <p><b>Participation : </b>---</p>
                                    <p><b>Résultat : </b>---</p>
                                    <p><b>Type de la votation : </b>Votation communale (Porrentruy)</p>
                                    <p><b>Mode de votation : </b>Scrutin populaire</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                                        <h2>Résultats communaux</h2>
                                    </div>
                                </div>
                                <section style="padding: 2%;">                        
                                    <iframe title="Modernisation du traitement des boues de la STEP" aria-label="chart" id="datawrapper-chart-Ak4jj" src="https://datawrapper.dwcdn.net/Ak4jj/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="323"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                                    </script>                     
                                </section>
                            </div>
                        </div> 
                    </div>
                </li>

                <li> 
                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 5%">      
                        <h3>Préambule</h3>    
                        <hr>              
                        <p class="uk-text-justify">La station d'épuration des eaux usées (STEP), sise en zone industrielle de Porrentruy,
                            traite les eaux de neuf communes et 16'500 habitants. Elle a été mise en service en 1987.
                        </p>

                        <p class="uk-text-justify">Cela fait donc 34 années que la STEP est en service. Les 9 communes membre du SEPE
                            (Syndicat intercommunal pour l'épuration des eaux usées) considèrent que la STEP a besoin de travaux de
                            modernisation, ceci dans le but de répondre aux exigences actuelles, car celles-ci évoluent sans cesse.
                        </p>

                        <p class="uk-text-justify">C'est notamment pour cela que la STEP a été équipée pour éliminer les micro-polluants
                            en 2020. D'autres travaux seront à envisager dans les années à venir, selon le SEPE.</p>

                        <h3>Etat des ouvrages</h3>    
                        <hr>  
                        <p class="uk-text-justify">La durée de vie d'une STEP est de 33 ans, mais certains ouvrages ont pu être
                            exploités plus longtemps, grâce au travail réalisé par les exploitants.</p>

                        <p class="uk-text-justify">C'est la raison pour laquelle le traitement des boues, qui est une composante
                            importante du traitement des eaux usées, doit être changé : il arrive en fin de vie. D'importants
                            défauts sont constatés dans le système, avec l'apparition de fuites de biogaz et de corrosions sur
                            les équipements, mais aussi des problèmes d'isolation et de fuites dans les réacteurs.</p>

                        <iframe title="Plan de situation" aria-label="map" id="datawrapper-chart-i8VFn" src="https://datawrapper.dwcdn.net/i8VFn/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="535"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>

                    <h3>Objectifs</h3>  
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">  
                        <p class="uk-text-justify" style="padding-bottom: 5%">Afin d'éviter des accidents pour le personnel, il convient dès lors de moderniser
                            les installations de traitement des boues. Les travaux permettront également de simplifier le système et
                            sécuriser les ouvrages, tout comme l'optimisation énergétique de l'infrastructure. 
                        </p>

                        <p class="uk-text-justify">La contrainte majeure sera le maintien de l'exploitation durant les travaux.
                            En conséquence, les travaux se dérouleront en trois phases :
                            <ul>
                                <li>Réhabilitation du stockeur</li>
                                <li>Réhabilitation du digesteur</li>
                                <li>Réfection de l'ancien flottateur</li>
                            </ul> 
                        </p>
                    </div>                                     

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 3%">     
                        <h3>Enveloppe financière</h3>
                        <hr>
                        <table class="uk-table uk-table-striped uk-table-hover">
                            <thead>
                                <tr>
                                    <th>Montants devisés par objets</th>
                                    <th class="uk-text-right">Montants TTC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Frais administratifs</td>
                                    <td class="uk-text-right">5'000</td>
                                </tr>
                                <tr>
                                    <td>Travaux de maçonnerie</td>
                                    <td class="uk-text-right">370'100</td>
                                </tr>
                                <tr>
                                    <td>Travaux de résine</td>
                                    <td class="uk-text-right">444'350</td>
                                </tr>
                                <tr>
                                    <td>Travaux de peinture</td>
                                    <td class="uk-text-right">37'200</td>
                                </tr>
                                <tr>
                                    <td>Travaux de serrurerie</td>
                                    <td class="uk-text-right">145'500</td>
                                </tr>
                                <tr>
                                    <td>Travaux de chauffage, ventilation, sanitaire</td>
                                    <td class="uk-text-right">30'000</td>
                                </tr>
                                <tr>
                                    <td>Travaux d'automatisation</td>
                                    <td class="uk-text-right">239'500</td>
                                </tr>
                                <tr>
                                    <td>Travaux d'électricité</td>
                                    <td class="uk-text-right">133'000</td>
                                </tr>
                                <tr>
                                    <td>Equipements électromécaniques</td>
                                    <td class="uk-text-right">1'024'900</td>
                                </tr>
                                <tr>
                                    <td>Etudes spécifiques</td>
                                    <td class="uk-text-right">31'200</td>
                                </tr>
                                <tr>
                                    <td>Honoraires d'ingénieurs</td>
                                    <td class="uk-text-right">255'000</td>
                                </tr>
                                <tr>
                                    <td>Divers et imprévus</td>
                                    <td class="uk-text-right">246'000</td>
                                </tr>
                                <tr>
                                    <td><b>Sous-total</b></td>
                                    <td class="uk-text-right"><b>2'961'750</b></td>
                                </tr>
                                <tr>
                                    <td>TVA 7.70 %</td>
                                    <td class="uk-text-right">228'055</td>
                                </tr>
                                <tr>
                                    <td><b>Total arrondi</b></td>
                                    <td class="uk-text-right"><b>3'190'000</b></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h3>Coûts</h3>  
                        <hr>                      
                        <p class="uk-text-justify">Les chiffres indiqués ci-contre ont déjà fait l'objet d'appels d'offres,
                            ce qui permet une évaluation précise des coûts. Excepté les travaux spécifiques, l'ensemble des
                            prestations sera réalisé par des entreprises jurassiennes.
                        </p>

                        <p class="uk-text-justify">A noter que les travaux permettront un gain en efficience des productions
                            de gaz, et par conséquent de production d'électricité. Cela permettra donc une réduction des frais
                            d'électricité et de chauffage, avec à la clé une réduction des frais d'entretien.
                        </p>

                        <h3>Processus décisionnel</h3>    
                        <hr>                    
                        <p class="uk-text-justify">La décision finale appartient aux communes membres du SEPE.
                            Porrentruy est la seule à se prononcer par voie de votation communale, les 8 autres
                            communes doivent passer par l'Assemblée communale. Au final, il faut la majorité des communes,
                            qui doivent représenter 50 % de la population, y soit favorable.
                        </p>

                        
                        <h3>Calendrier</h3>    
                        <hr> 
                        <p><ul>
                            <li>Mai à septembre 2021 : décision des communes</li>
                            <li>Octobre 2021 à avril 2022 : projet d'exécution</li>
                            <li>Avril 2022 à mai 2023 : réalisation des travaux</li>
                        </ul></p>

                        <h3>Développement durable</h3>    
                        <hr>                    
                        <p class="uk-text-justify">Ce projet permet le développement économique de la région par recours à des
                            entreprises locales et permet d'améliorer la qualité du traitement des boues. L'autoconsommation du
                            système sera renforcée et une production plus importante de biogaz et d'électricité est attendue.
                            Tout ceci contribue au développement durable.
                        </p>
                    
                        <h3>La question qui vous est posée :</h3>
                        <hr>
                        <b><p class="uk-text-justify">Approuvez-vous un crédit de CHF 3'190'000.-, financé par voie d'emprunt par
                            le SEPE, pour le projet de modernisation du traitement des boues de la STEP ?
                        </p></b>
                    </div>
                </li>
                <li>
                    <div class="uk-column-1-2@m uk-column-1-1@s">  
                        <h2>Autorités communales</h2>
                        <iframe title="Recommandations de vote des autorités_Maison de l'Enfance (Copy)" aria-label="Anneau de choix" id="datawrapper-chart-X6xWp" src="https://datawrapper.dwcdn.net/X6xWp/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h2>Partis politiques</h2>
                        <iframe title="Recommandations de vote des partis_AgrandissementSTEP2021" aria-label="Anneau de choix" id="datawrapper-chart-QKB1K" src="https://datawrapper.dwcdn.net/QKB1K/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>
                </li>  
                <li>    
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les ouvrages de la STEP sont âgés de plus de 30 ans, plusieurs équipements 
                                    sont en fin de vie. Une modernisation et un assainissement sont nécessaires afin d’assurer un 
                                    traitement des boues et supprimer tout danger pour les exploitants. Cet investissement n’a 
                                    aucune influence sur les comptes communaux.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <p style="padding-bottom: 10%">Il n'y a pas d'arguments contre ce projet !</p>
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