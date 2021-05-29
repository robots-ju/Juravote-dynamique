<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Haute-Sorne</title>
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
        <h1 class="uk-heading-large">Création de quatre classes supplémentaires à l’école primaire de Bassecourt</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis et autorités</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <h3>Préambule</h3>
                <hr>
                <p>La Commune de Haute-Sorne fait face à une augmentation de sa démographie. En parallèle à une augmentation
                des besoins spécifiques du Service de l'enseignement du Jura (classes Haut-Potentiel, allophone, informatique),
                le nombre de places pouvant accueillir dans de bonnes conditions les enfants est amené à être augmenté.</p>

                <p style="padding-bottom: 2%">Le bâtiment principal a été construit en 1952 et un agrandissement du côté Est a été réalisé en 1968. En
                conséquence, un projet de rénovation a été lancé en 2016 et est en phase d'être terminé.</p>

                <h3>Introduction</h3>
                <hr>
                <div class="uk-column-1-2@m uk-column-1-1@s">
                    <p>De nouvelles méthodes d'enseignement sont mises en place et la multiplication des classes requièrent une
                    adaptation du volume actuel. De nombreuses jeunes familles sont venues habiter en Haute-Sorne, ce qui fait
                    augmenter les effectifs. Le site de l'école primaire de Bassecourt est celui qui a été retenu, en raison
                    des critères d'efficience et du site le mieux adapté pour les enseignants.</p>

                    <p>De plus, l'intégration d'un bâtiment à l'intérieur de la partie en retrait de l'école s'y prête particulièrement
                    bien et permet de conserver la place de jeux.</p>

                    <img src="<?php echo $PlanAjoutBatimentEcoleBassecourt ?>" width="900px" style="padding-bottom: 3%">

                    <img src="<?php echo $ImageEcoleBassecourt ?>" width="900px">
                    <figcaption class="uk-text-right" style="padding-bottom: 3%">Source des illustrations : Commune de Haute-Sorne</figcaption>
                    
                </div>
                
                <h3>Considérations générales</h3>
                <hr>
                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 3%">
                    <p>4 classes supplémentaires, avec les infrastructures nécessaires, sont comprises dans ce projet.
                    Ce dernier consiste à réaliser un nouveau corps de bâtiment relié à l'école existante par 2 paliers.
                    Ce nouveau bâtiment sera toutefois séparé du reste de l'édifice, ce qui permet de conserver les acquis effectué
                    lors de la rénovation de 2016 (éclairage naturel, façade, etc...).</p>    

                    <p>Tout ceci permet de bénéficier des accès, de l'ascenseur, des sanitaires, du chauffage, de l'électricité et d'une
                    partie de la ventilation existante du bâtiment actuel. Les nuisances seront ainsi réduites au maximum, ce qui a pour
                    avantage de na pas pertuber les classes actuelles lors des travaux. Les interventions sur la façade seront restreintes.</p>

                    <p>Les aspects d'architecture du bâtiment existant sont conservés dans le but d'intégrer cette construction de façon
                    optimale. D'autant plus que l'ajout futur d'étages reste possible pour d'éventuels besoins.</p>
                    <img src="<?php echo $FacadeNordEcoleBassecourt ?>" width="900px" style="padding-bottom: 3%">
                </div>          

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">
                    <img src="<?php echo $ImageEcoleBassecourt1 ?>" width="900px" style="padding-bottom: 3%">

                    <img src="<?php echo $ImageEcoleBassecourt2 ?>" width="900px" style="padding-bottom: 3%">
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 3%">
                    <p>Une classe allophone, une classe d'informatique, une classe Haut Potentiel et une autre classe
                    se trouveront dans cette nouvelle structure. Cela évite de réaliser un étage supplémentaire au
                    bâtiment existant, ce qui obligerait de modifier la charpente. De plus, la toiture plate permet
                    de conjserver l'éclarage naturel et la visiblité de la partie supérieure de l'école. Les couloirs
                    existants seront ouverts pour permettre aux élèves d'accéder au hall et au vestiaire avant d'entrer
                    en classe.</p>
                   
                   <p style="padding-bottom: 2%">La structure du bâtiment est prévu en béton armé dans sa partie inférieure et en maçonnerie
                   dans sa partie supérieure, afin de conserver une unité avec la construction existante. Le tout sera
                   enveloppé avec une isolation périphérique crépie pour être extrêmement efficace au niveau énergétique.
                   Cette structure a l'avantage d'avoir des murs en durs à l'intérieur, ce qui facilite la fixation des
                   ameublements.</p>

                   <p>Pour ce qui est du second oeuvre, le projet reprend en tous points le standing mis en place lors
                   de la rénovation. Les fenêtres seront en bois-alu, les portes plaquées chêne sur cadre, les stores en toiles
                   gérés de manière électrique, les sols seront en PVC avec résistance adaptée aux fortes sollicitations,
                   un faux-plafond dans les couloirs permettra d'intégrer les aspects techniques du projet (ventilation,
                   électricité, éclairage LED, etc...)</p>

                   <p>Tous les raccordements électriques nécessaires au fonctionnement des classes seront reliés aux installations
                   existantes et un monobloc de ventilation sera installé sur le toit afin d'avoir une diffusion de l'air adéquat
                   dans les locaux. Un chauffage de sol sera installé dans les classes et raccordé à l'installation existante.
                   Tables, chaises, étagères, panneaux d'affichage, tableaux d'enseignement, beamers, haut-parleurs et
                   garnitures pour les 4 vestiaires seront installés. Les accès extérieurs disposeront d'éléments de serruerie
                   afin d'éviter aux élèves de se rendre entre les deux bâtiments et également de sécuriser l'accès aux locaux
                   des concierges, qui sera conservé.</p>
                </div>
                
                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 3%">
                    <h3>Procédure</h3>
                    <hr>
                    <p>Le projet est en consultation auprès du Canton du Jura pour déterminer la subvention allouée.
                    Lors de la votation, si le oui sort des urnes, une demande de permis devra être adressée au service
                    concerné. Finalement, une soumission des corps de métiers principaux représentés dans cet agrandissement
                    sera organisée.</p>  

                    <h3>Délai de réalisation</h3>
                    <hr>
                    <p>Les travaux pour la réalisation des 4 classes supplémentaires à l’école primaire de Bassecourt
                    pourrait débuter en automne 2021, sous réserve des décisions politiques et populaires. Les classes
                    devront être opérationnelles pour la rentrée d’août 2022 au plus tard.</p>
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s">
                    <h3>Coûts du projet</h3>
                    <hr>
                    <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                            <tr>
                                <th>Désignation</th>
                                <th class="uk-text-right">Montant en CHF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Travaux préparatoires (sous-sol, rez, étage 1)</td>
                                <td class="uk-text-right">17'000</td>
                            </tr>
                            <tr>
                                <td>Bâtiment</td>
                                <td class="uk-text-right">1'173'000</td>
                            </tr>
                            <tr>
                                <td>Aménagements extérieurs</td>
                                <td class="uk-text-right">30'000</td>
                            </tr>
                            <tr>
                                <td>Frais secondaires</td>
                                <td class="uk-text-right">20'000</td>
                            </tr>
                            <tr>
                                <td>Ameublement</td>
                                <td class="uk-text-right">160'000</td>
                            </tr>
                            <tr>
                                <td>TVA (7.70 %)</td>
                                <td class="uk-text-right">107'800</td>
                            </tr>
                            <tr>
                                <td>Réserve</td>
                                <td class="uk-text-right">42'200</td>
                            </tr>
                           <tr>
                                <td><b>Total général</b></td>
                                <td class="uk-text-right"><b>1'550'000</b></td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Financement</h3>
                    <hr>
                    <p>L'investissement brut et la demande de crédit portent sur un montant de 1'550'000.-. Comme mentionné
                    ci-dessus, le montant des subventions n'est pas encore déterminé. Lors de la consolidation de l'emprunt
                    de 1'550'000.-, les subventions seront portées en déductions de l'emprunt initial.</p>  

                    <p>Selon les règles d'amortissements prévues par le décret concernant l'administration financière des
                    communes (RSJU 190.611), le bâtiment a une durée de vie de 25 ans et le mobilier de 10 ans. Les taux
                    d'amortissement sont respectivement de 4.00 % (57'600.- par année) et 10.00 % (11'000.- par année).
                    Avec les charges d'intérêts (calculées sur un taux moyen de 1.00 %), la charge annuelle se monte à
                    87'700.-, hors subventions, à charge du compte général.

                    <h3>La question qui vous est posée :</h3>
                    <hr>
                    <b><p>Approuvez-vous un crédit de CHF 1'550'000. - pour la création de quatre classes supplémentaires
                    à l'école primaire de Bassecourt ?</p></b>
                </div>
            </li>
            <li>
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div>
                        <h2>Autorités</h2>
                        <iframe title="Recommandations de vote des autorités Haute-Sorne_13 juin 2021" aria-label="Anneau de choix" id="datawrapper-chart-miCMI" src="https://datawrapper.dwcdn.net/miCMI/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>

                    <div>
                        <h2>Partis politiques de Haute-Sorne</h2>
                        <iframe title="Recommandations de vote des partis communaux_HauteSorne_20210613_Ecole" aria-label="Anneau de choix" id="datawrapper-chart-S2z45" src="https://datawrapper.dwcdn.net/S2z45/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>
                </div>                                  
            </li>  
            <li>     
                <h3>Les arguments seront bientôt disponibles !</h3>
                <!--<div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Ce projet permet une certaine marge au cas où une extension du réseau serait réalisée d’ici quelques années,
                             par exemple afin d’alimenter l’école enfantine en chaleur.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le nouveau chauffe-eau favorisera l'autoconsommation du courant produit par les cellules photovoltaïques
                            et évitera un inutile maintien en température du réseau de chauffage à distance durant les vacances d'été.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le volume utile du silo d'environ 70 mètres cubes permettra une autonomie entre 1 et 4 semaines, selon 
                            les conditions météorologiques.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La réalisation de la chaufferie centralisée permettra d'abandonner totalement le mazout (économie de 250 tonnes de CO2 par an)
                            et de valoriser une ressource locale en abondance et créatrice d'emplois.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI-RC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La création d'un chauffage à distance permettant de relier 2 infrastructures communales importantes, 
                            bâtiment administratif et écoles, pouvant permettre d'utiliser de l'énergie renouvelable provenant de notre
                            propre production (forêts), est judicieux pour pouvoir s'adapter aux nouvelles normes écologiques et ne plus 
                            être dépendant des énergies fossiles. Cette nouvelle installation va aussi dans le sens des économies de coûts 
                            de production de chaleur.</p>
                        </div>
                    </div>
                </div>-->
            </li>
            <li>
                <h3>Les arguments seront bientôt disponibles !</h3>
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