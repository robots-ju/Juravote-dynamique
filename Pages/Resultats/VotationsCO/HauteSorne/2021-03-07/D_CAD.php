<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
        <main>
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Votations Haute-Sorne du 7 mars 2021 : Nouvelle chaufferie alimentant les bâtiments de l'administration
        communale et le complexe scolaire de Bassecourt</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <div>
                    <h3>Préambule</h3>
                    <hr>
                    <p>En 2015, le Canton du Jura a adopté sa « Stratégie énergétique 2035 », totalement compatible avec la Stratégie 
                    fédérale 2050 acceptée par le peuple et les cantons en mai 2017. L’installation d’un chauffage à distance utilisant 
                    les copeaux de bois produits dans nos forêts est en parfaite adéquation avec les objectifs énergétiques visés par 
                    cette stratégie et est une des mesures pour les atteindre. La volonté communale de Haute-Sorne figurant dans le 
                    programme de législature dans les axes écologiques vise, entre autres, à minimiser l’impact de notre approvisionnement 
                    énergétique sur l’environnement.</p>
                </div>
                
                <div>
                    <h3>Situation actuelle</h3>
                    <hr>
                    <p>L’administration communale ainsi que le complexe scolaire de Bassecourt possèdent chacun une installation de chauffage
                    individuelle au mazout qui est en fin de vie.
                    </p>
                </hr>
                <div class="uk-column-1-2@m uk-column-1-1@s">
                    <h5>Administration communale</h5>
                    <p>La chaudière de l’administration communale date de 1991 et dispose d’une puissance de 300 kW. Elle est alimentée
                    par une citerne d’une contenance de 27’500 litres et date de 1969, située dans un local souterrain. Une ancienne
                    citerne enterrée est également présente à proximité. La chaufferie se trouve au sous-sol de l’administration communale.
                    </p>
                    
                    <h5>Complexe scolaire</h5>
                    <p>Le chauffage du complexe scolaire est centralisé en un endroit et alimenté par deux chaudières à mazout datant de 1992.
                    Deux citernes alimentent l’installation. L’eau chaude pour les douches de la salle de gym est produite par 2 chauffe-eaux
                    alimentés par les chaudières. La distribution de chaleur interne au site est considérée comme fonctionnelle.
                    </p>                 
                </div>

                <h3>Description du projet</h3>
                <hr>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                    <p>Le concept proposé consiste en la création d’une nouvelle chaufferie dans l’abri PC, situé au Nord du bâtiment de 
                    l'administration communale, qui permet la mise en place de 2 chaudières, assurant ainsi une redondance partielle en 
                    cas de panne. Un silo sera créé dans le local adjacent où se trouvent les anciens tableaux électriques et les serveurs 
                    informatiques. Celui-ci serait rempli via le déversement dans le saut-de-loup existant, situé au pied du bâtiment. 
                    La place de parc devrait être adaptée afin de permettre au camion de livraison des plaquettes de manoeuvrer sans encombre.
                    </p>

                    <p>La chaufferie du complexe scolaire sera transformée en une simple sous-station. Celle-ci comportera un échangeur 
                    afin d’isoler les réseaux complexe scolaire/chauffage à distance. Les chaudières et chauffe-eau actuels seront démontés 
                    et remplacés par un chauffe-eau d’une capacité de 1’000 litres. Celui-ci sera équipé en plus d’une résistance afin de 
                    permettre un fonctionnement électrique durant les vacances d’été. Cela favorisera l’autoconsommation du courant produit 
                    par les cellules photovoltaïques et évitera un inutile maintien en température du réseau de chauffage à distance durant 
                    cette période, alors que les besoins en chaleur sont minimes.
                    </p>

                    <img src="<?php echo $CAD_Bassecourt ?>" width="900px">
                    <p>Figure 1 : Situation générale de la conduite de chauffage à distance projetée.</p>
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                    <h3>Coûts des travaux</h3>
                    <hr>
                    <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                            <tr>
                                <th>Rubriques</th>
                                <th class="uk-text-right">Montant en CHF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Travaux de génie civil pour conduite chauffage à distance</td>
                                <td class="uk-text-right">136'582</td>
                            </tr>
                            <tr>
                                <td>Travaux de génie civil pour modifications accès pour livraisons plaquettes</td>
                                <td class="uk-text-right">47'992</td>
                            </tr>
                            <tr>
                                <td>Travaux de maçonnerie et béton armé pour chaufferie dans bâtiment N° 14</td>
                                <td class="uk-text-right">64'840</td>
                            </tr>
                            <tr>
                                <td>Travaux de tuyauterie pour conduite chauffage à distance</td>
                                <td class="uk-text-right">63'000</td>
                            </tr>
                            <tr>
                                <td>Travaux de tuyauterie et d'installations techniques dans bâtiment N° 14</td>
                                <td class="uk-text-right">417'000</td>
                            </tr>
                            <tr>
                                <td>Sous-station pour EFEJ</td>
                                <td class="uk-text-right">22'000</td>
                            </tr>
                            <tr>
                                <td>Sous-station pour administration communale</td>
                                <td class="uk-text-right">33'000</td>
                            </tr>
                            <tr>
                                <td>Sous-station pour complexe scolaire</td>
                                <td class="uk-text-right">152'000</td>
                            </tr>
                            <tr>
                                <td>Prestations particulières</td>
                                <td class="uk-text-right">22'400</td>
                            </tr>
                            <tr>
                                <td>Divers et imprévus</td>
                                <td class="uk-text-right">95'881</td>
                            </tr>
                            <tr>
                                <td>Honoraires d'ingénieurs</td>
                                <td class="uk-text-right">147'500</td>
                            </tr>
                            <tr>
                                <td><b>Total</b></td>
                                <td class="uk-text-right"><b>1'202'195</b></td>
                            </tr>
                            <tr>
                                <td>Déduction du financement par le crédit du complexe scolaire</td>
                                <td class="uk-text-right">- 426'380</td>
                            </tr>
                            <tr>
                                <td><b>Solde du crédit</b></td>
                                <td class="uk-text-right"><b>775'815</b></td>
                            </tr>
                        </tbody>
                    </table> 

                    <h3>Financement</h3>
                    <hr>
                    <p>Le projet de chaufferie centralisée (administration communale, complexe scolaire et réseau de distribution de chaleur) 
                    est chiffré en TTC selon le tableau des coûts, en fonction des estimations de notre mandataire, pour les phases selon les 
                    normes SIA 103 et SIA 108.
                    </p>

                    <p>Dans le cadre du crédit de rénovation du complexe scolaire en lien avec la partie chauffage, un montant de CHF 
                    428'600.- TTC avait été prévu en 2016. Une nouvelle installation à pellets avait été prévue pour remplacer les 2 
                    chaudières à mazout. Les éléments en relation avec la conduite de chauffage à distance qui sert exclusivement à 
                    raccorder le complexe scolaire ont donc été considérés dans "à financer par crédit complexe scolaire", en remplacement 
                    de l'installation prévue initialement.
                    </p>

                    <h3>Délai de réalisation et procédure</h3>
                    <hr>
                    <p>Les travaux pour la chaufferie centralisée (administration communale, complexe scolaire et réseau de distribution
                     de chaleur) pourraient débuter en été 2021, sous réserve de l'octroi du présent crédit et des approbations cantonales.
                     Pour pouvoir réaliser les travaux de tuyauterie et d'installations techniques dans le bâtiment de l'administration 
                     communale, une demande de permis de construire devra être adressée à la section des permis de construire du service du
                     développement territorial. Quant à la construction de la conduite de chauffage à distance, un plan spécial d'équipement 
                     devra être approuvé par la section de l'aménagement du territoire du service du développement territorial.
                    </p>

                    <h3>La question qui vous est posée :</h3>
                    <hr>
                    <b><p>Acceptez-vous, selon le message n°159 du Conseil général, le crédit d’investissement de CHF 1'202'195.- 
                    pour la mise en place d’une nouvelle chaufferie alimentant les bâtiments de l’administration communale et le 
                    complexe scolaire de Bassecourt et donner compétence au Conseil communal pour se procurer les fonds ?</p></b>
                </div>
            </li>
            <li>
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div>
                        <h2>Autorités</h2>
                        <iframe title="Recommandations de vote des autorités et des partis communaux" aria-label="chart" id="datawrapper-chart-OytXV" src="https://datawrapper.dwcdn.net/OytXV/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>

                    <div>
                        <h2>Partis politiques de Haute-Sorne</h2>
                        <iframe title="Recommandations de vote des partis communaux_HauteSorne" aria-label="chart" id="datawrapper-chart-Wu4rJ" src="https://datawrapper.dwcdn.net/Wu4rJ/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </div>                                  
            </li>  
            <li>     
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
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
                </div>
            </li>
            <li>
                <h4 style="padding-bottom: 10%">Il n'y a pas d'oppositions au projet !</h4>
            </li>
        </ul>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>