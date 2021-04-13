<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Moutier</title>
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
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Libération d'un crédit indexable de CHF 1'313'097.-
        pour le réaménagement du secteur du carrefour de Graitery, des réseaux souterrains et du ruisseau de la Combe Allerie.</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques de Moutier</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>            
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>L'objet en résumé</h3>
                        <hr>
                        <p>Depuis de nombreuses années, l'aménagement de surface du carrefour de Graitery est provisoire. Le dernier projet,
                        datant de 2001, n'a pas abouti. Durant l'hiver 2018-2019, d'importantes fuites d'eau de boisson sont survenues dans
                        ce secteur et ont fortement mis à mal la quasi-totalité de la surface du carrefour. Actuellement, une signalisation
                        provisoire indiquant les déformations de la chaussée est en place.
                        </p>

                        <p>Les différents problèmes rencontrés dans cette zone ont conduit les services techniques à l’élaboration d’un 
                        nouveau projet incluant non seulement l’assainissement de la surface du carrefour, mais également l’ensemble des 
                        réseaux souterrains, dont une partie de ceux qui se situent dans les rues adjacentes. De nouveaux agencements et 
                        réalisations sont prévus afin de réaménager globalement le secteur du carrefour, soit :
                        <ul>
                            <li>un rêvetement bitumineux ;</li>
                            <li>une signalisation routière ;</li>
                            <li>des passages piétonniers ;</li>
                            <li>des trottoirs ;</li>
                            <li>des îlots modérateurs de trafic permettant d’abaisser la vitesse.</li>
                        </ul>
                        </p>

                        <p>L’ensemble des réseaux souterrains comprenant l’évacuation des eaux usées et pluviales, le ruisseau canalisé de 
                        la Combe Allerie, les conduites d’adduction d’eau de boisson, le réseau électrique ainsi que l’éclairage public 
                        seront assainis dans différentes proportions. Des travaux de plus grande ampleur seront nécessaires pour les 
                        conduites d’eau de boisson (réfection complète) et le tuyau canalisant le ruisseau de la Combe Allerie dont la 
                        capacité hydraulique sera augmentée.</p>

                        <p> Le trafic piétonnier sera en outre amélioré par la création d’un chemin en lieu 
                        et place du sentier traversant les jardins potagers. Ce nouveau passage permettra de relier le chemin de Graitery à 
                        la rue du Viaduc tout en évitant le carrefour.
                        </p>

                        <p>Les travaux qui devront être entrepris sont importants tant techniquement que financièrement. Un nouveau report 
                        serait très problématique. Il apparaît que la réalisation de cet objet est désormais impérative. Le crédit global, 
                        indexable, à libérer est de Fr. 1’313’097.—, dont le détail figure ci-dessous.</p>

                        <h3>Financement</h3>
                        <hr>
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Désignation</th>
                                    <th>Montant (en CHF)</th>
                                    <th>Source de fonds</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Route et trottoirs</td>
                                    <td>190'847.00</td>
                                    <td>Investissements 2021</td>
                                </tr>

                                <tr>
                                    <td>Chemin piéton</td>
                                    <td>27'938.00</td>
                                    <td>Investissements 2021</td>
                                </tr>

                                <tr>
                                    <td>Canalisation des eaux claires</td>
                                    <td>694'684.00</td>
                                    <td>Investissements 2021</td>
                                </tr>

                                <tr>
                                    <td>Eaux</td>
                                    <td>282'235.00</td>
                                    <td>Investissements 2021 (partiellement)</td>
                                </tr>

                                <tr>
                                    <td>Electricité</td>
                                    <td>117'393.00</td>
                                    <td>Investissements 2021</td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>1'313'097.00</b></td>
                                    <td><b>---</b></td>
                                </tr>
                            </tbody>
                        </table>

                        <h3>La question qui vous est posée :</h3>
                        <b><p style="padding-bottom: 10%;">Acceptez-vous, selon message du Conseil de Ville, le crédit de CHF 1'313'097.- destiné au réaménagement du secteur
                        du carrefour du Graitery, des réseaux souterrains et du ruisseau de la Combe Allerie ?</p></b>
                    </div>

                    <div style="padding-top: 2%;">
                        <h3>Estimation des coûts</h3>
                        <hr>
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Désignation</th>
                                    <th class="uk-text-right">Routes</th>
                                    <th class="uk-text-right">Chemin piéton</th>
                                    <th class="uk-text-right">Canalisations</th>
                                    <th class="uk-text-right">Service de l'eau</th>
                                    <th class="uk-text-right">Service électrique</th>
                                    <th class="uk-text-right"><b>Total</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Travaux en régie</td>
                                    <td class="uk-text-right">3'413.00</td>
                                    <td class="uk-text-right">575.00</td>
                                    <td class="uk-text-right">18'355.00</td>
                                    <td class="uk-text-right">2'652.00</td>
                                    <td class="uk-text-right">1'320.00</td>
                                    <td class="uk-text-right"><b>26'315.00</b></td>
                                </tr>

                                <tr>
                                    <td>Installation de chantier et démolition</td>
                                    <td class="uk-text-right">20'876.10</td>
                                    <td class="uk-text-right">2'666.00</td>
                                    <td class="uk-text-right">97'649.50</td>
                                    <td class="uk-text-right">15'295.05</td>
                                    <td class="uk-text-right">8'011.70</td>
                                    <td class="uk-text-right"><b>144'498.35</b></td>
                                </tr>

                                <tr>
                                    <td>Réseau d'eau (génie civil)</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">62'062.60</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right"><b>62'062.60</b></td>
                                </tr>

                                <tr>
                                    <td>Réseau électrique (génie civil)</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">3'483.00</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">24'510.30</td>
                                    <td class="uk-text-right"><b>27'993.30</b></td>
                                </tr>

                                <tr>
                                    <td>Terrassements</td>
                                    <td class="uk-text-right">4'301.10</td>
                                    <td class="uk-text-right">2'423.00</td>
                                    <td class="uk-text-right">14'686.30</td>
                                    <td class="uk-text-right">5'986.20</td>
                                    <td class="uk-text-right">3'053.50</td>
                                    <td class="uk-text-right"><b>30'450.10</b></td>
                                </tr>

                                <tr>
                                    <td>Couches de fondation</td>
                                    <td class="uk-text-right">9'724.75</td>
                                    <td class="uk-text-right">3'362.65</td>
                                    <td class="uk-text-right">45'210.05</td>
                                    <td class="uk-text-right">18'954.80</td>
                                    <td class="uk-text-right">9'986.75</td>
                                    <td class="uk-text-right"><b>87'239.00</b></td>
                                </tr>

                                <tr>
                                    <td>Paysages et bordures</td>
                                    <td class="uk-text-right">65'998.50</td>
                                    <td class="uk-text-right">12'875.00</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right"><b>78'873.50</b></td>
                                </tr>

                                <tr>
                                    <td>Couches de rêvetement</td>
                                    <td class="uk-text-right">24'695.00</td>
                                    <td class="uk-text-right">359.40</td>
                                    <td class="uk-text-right">56'896.30</td>
                                    <td class="uk-text-right">21'104.05</td>
                                    <td class="uk-text-right">11'871.30</td>
                                    <td class="uk-text-right"><b>114'926.55</b></td>
                                </tr>

                                <tr>
                                    <td>Evacuation des eaux</td>
                                    <td class="uk-text-right">17'282.80</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">381'653.80</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right"><b>398'936.60</b></td>
                                </tr>

                                <tr>
                                    <td>Signalisation et marquage + travaux d'élagage</td>
                                    <td class="uk-text-right">2'000.00</td>
                                    <td class="uk-text-right">800.00</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right"><b>2'800.00</b></td>
                                </tr>

                                <tr>
                                    <td>Réseau d'eau (installation)</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">125'000.00</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right"><b>125'000.00</b></td>
                                </tr>

                                <tr>
                                    <td>Luminaires</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">49'000.00</td>
                                    <td class="uk-text-right"><b>49'000.00</b></td>
                                </tr>

                                <tr>
                                    <td>Frais de géomètre</td>
                                    <td class="uk-text-right">10'000.00</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right"><b>10'000.00</b></td>
                                </tr>

                                <tr>
                                    <td>Honoraires ing. civil</td>
                                    <td class="uk-text-right">10'460.00</td>
                                    <td class="uk-text-right">1'630.00</td>
                                    <td class="uk-text-right">43'650.00</td>
                                    <td class="uk-text-right">17'730.00</td>
                                    <td class="uk-text-right">4'040.00</td>
                                    <td class="uk-text-right"><b>77'510.00</b></td>
                                </tr>

                                <tr>
                                    <td>Divers et imprévus (5.00 %)</td>
                                    <td class="uk-text-right">8'450.00</td>
                                    <td class="uk-text-right">1'250.00</td>
                                    <td class="uk-text-right">33'100.00</td>
                                    <td class="uk-text-right">13'450.00</td>
                                    <td class="uk-text-right">5'600.00</td>
                                    <td class="uk-text-right"><b>61'850.00</b></td>
                                </tr>

                                <tr>
                                    <td><b>Total HT</b></td>
                                    <td class="uk-text-right"><b>177'201.75</b></td>
                                    <td class="uk-text-right"><b>25'941.05</b></td>
                                    <td class="uk-text-right"><b>694'683.95</b></td>
                                    <td class="uk-text-right"><b>282'234.70</b></td>
                                    <td class="uk-text-right"><b>117'393.55</b></td>
                                    <td class="uk-text-right"><b>1'297'455.00</b></td>
                                </tr>

                                <tr>
                                    <td>TVA (7.70 %)</td>
                                    <td class="uk-text-right">13'645.00</td>
                                    <td class="uk-text-right">1'997.00</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right">---</td>
                                    <td class="uk-text-right"><b>15'642.00</b></td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td class="uk-text-right"><b>190'846.75</b></td>
                                    <td class="uk-text-right"><b>27'938.05</b></td>
                                    <td class="uk-text-right"><b>694'683.95</b></td>
                                    <td class="uk-text-right"><b>282'234.70</b></td>
                                    <td class="uk-text-right"><b>117'393.55</b></td>
                                    <td class="uk-text-right"><b>1'313'097.00</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                      
                </li>
                <li>         
                    <div class="uk-child-width-1-2@m" uk-grid>
                        <div>
                            <h2>Autorités</h2>             
                            <iframe title="Recommandations de vote des autorités Moutier_20210307" aria-label="chart" id="datawrapper-chart-X7DXo" src="https://datawrapper.dwcdn.net/X7DXo/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>

                        <div>
                            <h2>Partis politiques de Moutier</h2>
                            <iframe title="Recommandations de vote des partis de Moutier_20210307" aria-label="chart" id="datawrapper-chart-LhW1V" src="https://datawrapper.dwcdn.net/LhW1V/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>   
                    </div>               
                </li>  
                <li>            
                <div class="uk-child-width-1-1@m uk-grid-small uk-grid-match" uk-grid>
                    <h4>Les arguments seront bientôt disponibles !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>#</p>
                        </div>
                    </div>-->
                </li>
                <li>
                <div class="uk-child-width-1-1@m uk-grid-small uk-grid-match" uk-grid>
                    <h4>Les arguments seront bientôt disponibles !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>-->
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