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
        <h1 class="uk-heading-large">Référendum contre le budget 2021 de la Commune de Moutier</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis et des autorités</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>            
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>Historique</h3>
                        <hr>
                        <p class="uk-text-justify">En décembre dernier, le Conseil de ville a validé le budget 2021 de la Commune de Moutier,
                        sur proposition du Conseil communal. Par la suite, un comité référendaire composé de citoyens-nes
                        de la Commune a lancé le référendum. Ils ont réussi à récolter un nombre de suffisants de signatures
                        (en l'occurence 244) pour que la demande de référendum aboutisse. C'est la raison pour laquelle
                        le peuple est appelé à voter sur le budget 2021 de la Commune de Moutier le 9 mai prochain.
                        </p>    

                        <h3>La question qui vous est posée :</h3>
                        <hr>
                        <b><p style="padding-bottom: 10%;"  style="padding-bottom: 10%">Acceptez-vous le budget 2021 ?</p></b>           

                        <h3>Le budget en résumé</h3>    
                        <hr>
                        <p class="uk-text-justify"><b>Le budget détaillé est disponible ci-dessous.</b></p>
                        <ul>
                            <li>Quotité d'impôt de <b>1.94</b> (inchangée)</li>
                            <li>Taxe immobilière de <b>1,5 o/oo</b> (inchangée)</li>
                            <li>Taxe d’exemption pour le CRISM de :</li>
                                <ul>
                                    <li><b>2,65 %</b> (inchangée) de l’impôt d’Etat pour les contribuables concernés figurant 
                                    au registre ordinaire des impôts (minimum Fr. 20.— / maximum Fr. 400.—)</li>
                                    <li><b>1,0 %</b> (inchangée) du total des impôts encaissés pour les contribuables concernés 
                                    soumis à l’imposition à la source (minimum Fr. 20.— / maximum Fr. 400.—)</li>
                                </ul>
                            <li>Amortissement du patrimoine administratif enregistré au 1er janvier 2016 de manière 
                            linéaire, pendant les <b>16 prochaines années, à un taux de 6.25 % prévoyant un excédent de 
                            charges de Fr. 1'384’749.— du Compte global et prévoyant un excédent de charges de Fr. 
                            1'372’334.— du Compte général.</b></li>
                        </ul>   
                    </div> 

                    <h3>Compte de résultat selon les fonctions</h3>
                    <hr>
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h5>Budget 2021</h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>Récapitulation</th>
                                        <th class="uk-text-right uk-width-small">Charges</th>
                                        <th class="uk-text-right uk-width-small">Revenus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Administration générale</td>
                                        <td class="uk-text-right">3'989'520.00</td>
                                        <td class="uk-text-right">2'716'252.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-truncate">Ordre et sécurité publique, défense</td>
                                        <td class="uk-text-right">1'586'287.00</td>
                                        <td class="uk-text-right">931'376.00</td>
                                    </tr>
                                    <tr>
                                        <td>Formation</td>
                                        <td class="uk-text-right">6'651'047.00</td>
                                        <td class="uk-text-right">2'102'495.00</td>
                                    </tr>
                                    <tr>
                                        <td>Culture, sport, loisirs, Eglises</td>
                                        <td class="uk-text-right">2'098'526.00</td>
                                        <td class="uk-text-right">321'000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Santé</td>
                                        <td class="uk-text-right">48'675.00</td>
                                        <td class="uk-text-right">900.00</td>
                                    </tr>
                                    <tr>
                                        <td>Sécurité sociale</td>
                                        <td class="uk-text-right">24'294'997.00</td>
                                        <td class="uk-text-right">17'575'916.00</td>
                                    </tr>
                                    <tr>
                                        <td>Transports</td>
                                        <td class="uk-text-right">2'501'175.00</td>
                                        <td class="uk-text-right">263'705.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-truncate">Protection de l'environnement et aménagement du territoire</td>
                                        <td class="uk-text-right">5'913'889.00</td>
                                        <td class="uk-text-right">5'604'704.00</td>
                                    </tr>
                                    <tr>
                                        <td>Economie publique</td>
                                        <td class="uk-text-right">9'187'823.00</td>
                                        <td class="uk-text-right">8'989'800.00</td>
                                    </tr>
                                    <tr>
                                        <td>Finances et impôts</td>
                                        <td class="uk-text-right">4'540'203.00</td>
                                        <td class="uk-text-right">22'305'994.00</td>
                                    </tr>
                                    <tr>
                                        <td><b>Total</b></td>
                                        <td class="uk-text-right"><b>60'812'142.00</b></td>
                                        <td class="uk-text-right"><b>60'812'142.00</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5>Budget 2020</h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th class="uk-text-right uk-width-small">Charges</th>
                                        <th class="uk-text-right uk-width-small">Revenus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="uk-text-right">3'962'359.00</td>
                                        <td class="uk-text-right">2'595'702.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">1'640'025.00</td>
                                        <td class="uk-text-right">934'000.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">6'791'332.00</td>
                                        <td class="uk-text-right">2'102'106.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">2'161'176.00</td>
                                        <td class="uk-text-right">318'000.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">48'275.00</td>
                                        <td class="uk-text-right">900.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">22'271'346.00</td>
                                        <td class="uk-text-right">15'951'524.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">2'668'115.00</td>
                                        <td class="uk-text-right">266'705.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">6'350'450.00</td>
                                        <td class="uk-text-right">6'050'850.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">9'258'031.00</td>
                                        <td class="uk-text-right">8'984'553.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">4'516'850.00</td>
                                        <td class="uk-text-right">22'483'619.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right"><b>59'687'959.00</b></td>
                                        <td class="uk-text-right"><b>59'687'959.00</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5>Comptes 2019</h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th class="uk-text-right uk-width-small">Charges</th>
                                        <th class="uk-text-right uk-width-small">Revenus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="uk-text-right">5'239'973.55</td>
                                        <td class="uk-text-right">3'407'978.32</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">1'886'418.12</td>
                                        <td class="uk-text-right">1'117'061.20</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">7'646'100.32</td>
                                        <td class="uk-text-right">2'342'037.05</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">2'499'044.82</td>
                                        <td class="uk-text-right">675'499.28</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">59'741.80</td>
                                        <td class="uk-text-right">6'560.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">25'207'133.15</td>
                                        <td class="uk-text-right">19'076'542.14</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">2'867'501.12</td>
                                        <td class="uk-text-right">451'745.30</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">7'140'960.29</td>
                                        <td class="uk-text-right">6'961'616.25</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">10'844'211.68</td>
                                        <td class="uk-text-right">10'623'720.62</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">9'270'021.96</td>
                                        <td class="uk-text-right">27'998'346.65</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right"><b>72'661'106.81</b></td>
                                        <td class="uk-text-right"><b>72'661'106.81</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <iframe title="Evolution du résultat d'exploitation" aria-label="Interactive line chart" id="datawrapper-chart-xsq27" src="https://datawrapper.dwcdn.net/xsq27/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <iframe title="Budget 2021 : Comment est dépensé l'argent du contribuable ?" aria-label="chart" id="datawrapper-chart-w6Jme" src="https://datawrapper.dwcdn.net/w6Jme/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="437"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>

                    <h3>MCH2 : Aperçu du compte de résultat selon les groupes de matières</h3>
                    <hr>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h5>Budget 2021</h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>Récapitulation</th>
                                        <th class="uk-text-right uk-width-small">Charges</th>
                                        <th class="uk-text-right uk-width-small">Revenus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dépenses nettes</td>
                                        <td class="uk-text-right">60'250'488.00</td>
                                        <td class="uk-text-right"></td>
                                    </tr>
                                    <tr>
                                        <td>Revenus nets</td>
                                        <td class="uk-text-right"></td>
                                        <td class="uk-text-right">58'883'739.00</td>
                                    </tr>
                                    <tr>
                                        <td>Résultat net</td>
                                        <td class="uk-text-right">1'366'749.00</td>
                                        <td class="uk-text-right"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5>Budget 2020</h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th class="uk-text-right uk-width-small">Charges</th>
                                        <th class="uk-text-right uk-width-small">Revenus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="uk-text-right">58'983'699.00</td>
                                        <td class="uk-text-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right"></td>
                                        <td class="uk-text-right">58'762'273.00</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">221'426.00</td>
                                        <td class="uk-text-right"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5>Comptes 2019</h5>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th class="uk-text-right uk-width-small">Charges</th>
                                        <th class="uk-text-right uk-width-small">Revenus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="uk-text-right">61'070'106.04</td>
                                        <td class="uk-text-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right"></td>
                                        <td class="uk-text-right">59'926'311.70</td>
                                    </tr>
                                    <tr>
                                        <td class="uk-text-right">1'143'794.34</td>
                                        <td class="uk-text-right"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>

                <li>         
                    <div class="uk-child-width-1-2@m" uk-grid>
                        <div>
                            <h2>Autorités</h2>             
                            <iframe title="Recommandations de vote des autorités_Moutier_20210509" aria-label="chart" id="datawrapper-chart-5P4sP" src="https://datawrapper.dwcdn.net/5P4sP/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>

                        <div>
                            <h2>Partis politiques de Moutier</h2>
                            <iframe title="Recommandations de vote des partis de Moutier_20210509" aria-label="chart" id="datawrapper-chart-nWKg9" src="https://datawrapper.dwcdn.net/nWKg9/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
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