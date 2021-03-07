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
        <h1 class="uk-heading-large">Votation du 7 mars 2021 : Création d’une colonne principale d’alimentation en eau potable entre Bassecourt et Courtételle</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <div class="uk-column-1-2@m uk-column-1-1@s">
                    <h3>Préambule</h3>
                    <p>Lors de la votation populaire du 7 mars 2021, les citoyens de Courtételle et de Haute-Sorne se prononceront
                    sur le crédit de CHF 2'100'000.- qui permettra de financer la construction d’une conduite d’alimentation en eau
                    potable entre Bassecourt et Courfaivre et de renouveler la conduite entre Courfaivre et Courtételle. Ces deux
                    ouvrages formeront une colonne d’interconnexion entre Bassecourt et Courtételle. La clé de réparation dudit crédit
                    est régie par une convention fixant la charge financière à 60% pour Courtételle et à 40 % pour Haute-Sorne.
                    </p>

                    <p>Aujourd’hui, les deux communes sont confrontées à deux défis majeurs. Le premier challenge est d’assurer la
                    quantité et la qualité des ressources en eau. De plus, des solutions devront être apportées concernant la vétusté
                    et le diamètre insuffisant de la conduite de transport entre Courfaivre et Courtételle. Une situation ne permettant
                    plus à Courtételle et à Haute-Sorne de répondre aux dispositions légales en vigueur.
                    </p>

                    <p>Pour remédier à cette situation, les deux communes ont opté pour deux projets distincts. Il est ainsi prévu de
                    construire une conduite entre Bassecourt et Courfaivre et de renouveler la conduite entre Courfaivre et Courtételle.
                    </p>

                    <img src="<?php echo $ReseauEau_HauteSorneCourtetelle ?>" width="650px">
                    <p>Figure 1 : Schéma de principe de l'interconnexion Bassecourt-Courfaivre, tracé définif restant à définir.</p>
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                    <h3>Etat des lieux des ressources du Service des eaux Courtételle - Haute-Sorne</h3>
                    <p>Actuellement, la qualité de l’eau provenant de deux sources est jugée problématique. A commencer par le puits
                    des Petites Aingles (qui se situe entre Bassecourt et Courfaivre, derrière la station électrique), qui présente
                    depuis plusieurs années des traces de polluants industriels. Plus récemment, une campagne de mesure de micropolluants
                    a relevé la présence de traces de chlorothalonil à la source du Noir Bois. Les normes sanitaires sont ici dépassées.
                    </p>

                    <h3>Conséquences des faiblesses des ressources en eau</h3>
                    <p>Il est impératif de pallier le manque de production découlant de l’abandon des deux ressources. La construction d’une
                    nouvelle conduite de transport entre Bassecourt et Courfaivre remédiera à la situation pour de nombreuses années.
                    Cette conduite permettra d’alimenter le village de Courfaivre par le réservoir Côte de la Chaux (à Berlincourt), noeud
                    central de l’alimentation en eau potable de Haute-Sorne.
                    </p>
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                    <h3>Conduite de transport entre Courfaivre et Courtételle</h3>
                    <p>Cette conduite a aujourd’hui dépassé sa durée de vie (environ 80 ans). Récemment, elle a dû être mise définitivement
                    hors service sur une partie de sa longueur. Une situation provisoire a pu être mise en place en faisant transiter l’eau
                    à travers le réseau de Courfaivre. Cette situation n’est viable qu’à court terme, car elle sollicite excessivement le
                    réseau du village.
                    </p>
                    <p>Pour remédier aux problèmes techniques et trouver une solution durable, il est impératif de réaliser à très courte
                    échéance le renouvellement de la conduite entre Courfaivre et Courtételle. Construite en 1956, elle a été maintes fois
                    déviée pour permettre la construction de bâtiments. Elle se trouve aujourd’hui dans un état vétuste.
                    <p>

                    <img src="<?php echo $ReseauEau_CourfaivreCourtetelle ?>" width="600px">
                    <p>Figure 2 : Nouveau tracé proposé en rouge (variante retenue) et tracé actuel en bleu.</p>
                </div>

                <h3>Description du projet</h3>
                <hr>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                    <h5>Conduite de transport Bassecourt - Courfaivre</h5>
                    <p>Pour assurer la robustesse du système d’alimentation en eau, les interconnexions sont nécessaires. Le village
                    de Courtételle et les villages de Haute-Sorne bénéficieront des avantages de ce système d’interconnexions performant.

                    La localisation du réservoir de la Côte de la Chaux permettra d’assurer une pression d’alimentation et une défense
                    incendie adéquate pour l’ensemble du village de Courfaivre. Un ouvrage de pompage existant, situé sur le haut du
                    village de Courfaivre, dont l’exploitation est onéreuse et problématique, pourra ainsi être abandonné.

                    Une fois cette interconnexion réalisée, le service des eaux de Haute-Sorne alimentera en partie le service intercommunal
                    des eaux de Courfaivre et de Courtételle. Lesdits services sont financièrement séparés. Les conditions relatives seront
                    traitées dans la convention qui lie les deux communes.
                    </p>

                    <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                            <tr>
                                <th>Rubriques</th>
                                <th class="uk-text-right">Montant en CHF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nouvelle conduite Bassecourt Courfaivre, longueur de 1'200 m</td>
                                <td class="uk-text-right">500'000</td>
                            </tr>
                            <tr>
                                <td>Bouclage secondaire du réseau à Courfaivre (Dauvie-Bruye), long. 140 m</td>
                                <td class="uk-text-right">50'000</td>
                            </tr>
                            <tr>
                                <td>Augmentation du diamètre dans route cantonale à Bassecourt, long. 135m</td>
                                <td class="uk-text-right">220'000</td>
                            </tr>
                            <tr>
                                <td>Courfaivre, ajustement de la tuyauterie au réservoir du Moré</td>
                                <td class="uk-text-right">40'000</td>
                            </tr>
                            <tr>
                                <td>Bassecourt, ajustement de la tuyauterie au réservoir Côte de la Chaux</td>
                                <td class="uk-text-right">12'000</td>
                            </tr>
                            <tr>
                                <td>Suppression du surpresseur de la route de Soulce</td>
                                <td class="uk-text-right">30'000</td>
                            </tr>
                            <tr>
                                <td>Automatisation des ouvrages et ajustement des commandes à distance</td>
                                <td class="uk-text-right">70'000</td>
                            </tr>
                            <tr>
                                <td>Réserve pour divers et imprévus</td>
                                <td class="uk-text-right">100'000</td>
                            </tr>
                            <tr>
                                <td><b>Total</b></td>
                                <td class="uk-text-right"><b>1'022'000</b></td>
                            </tr>
                            <tr>
                                <td>A charge de la Commune de Courtételle (60 %)</td>
                                <td class="uk-text-right">613'200</td>
                            </tr>
                            <tr>
                                <td>A charge de la Commune de Haute-Sorne (40 %)</td>
                                <td class="uk-text-right">408'800</td>
                            </tr>
                        </tbody>
                    </table>    

                    <h5>Conduite de transport Courfaivre - Courtételle</h5>
                    <p>Ce projet date de quelques années déjà. En juillet 2017, la consommation d’eau a dépassé le débit maximal de
                    la conduite de transport. Cette situation s’est encore péjorée en raison de la mise en place du fonctionnement
                    provisoire. En effet, le transit des volumes nécessaires à l’alimentation de Courtételle par les conduites – 
                    possédant des diamètres trop étroits – du réseau de Courfaivre réduit les volumes transportables. Aujourd’hui,
                    une partie de la conduite de transport entre Courfaivre et Courtételle a été désactivée, puisque l’infrastructure
                    était endommagée à plusieurs endroits.

                    Le réservoir du Moré à Courfaivre est idéalement situé pour assurer l’alimentation du village de Courtételle,
                    ainsi que sa défense incendie. La proximité du réservoir avec les ressources justifie son emplacement historique.
                    </p>

                    <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                            <tr>
                                <th>Rubriques</th>
                                <th class="uk-text-right">Montant en CHF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Etudes réalisées à ce jour</td>
                                <td class="uk-text-right">59'376</td>
                            </tr>
                            <tr>
                                <td>Travaux de génie-civil</td>
                                <td class="uk-text-right">294'700</td>
                            </tr>
                            <tr>
                                <td>Travaux sanitaires et d’appareillage</td>
                                <td class="uk-text-right">468'900</td>
                            </tr>
                            <tr>
                                <td>Sécurité CFF pour travaux à proximité des voies</td>
                                <td class="uk-text-right">15'000</td>
                            </tr>
                            <tr>
                                <td>Frais notariés</td>
                                <td class="uk-text-right">10'000</td>
                            </tr>
                            <tr>
                                <td>Paysagiste, indemnités diverses et honoraires</td>
                                <td class="uk-text-right">137'400</td>
                            </tr>
                            <tr>
                                <td>Réserve pour divers et imprévus</td>
                                <td class="uk-text-right">92'600</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td class="uk-text-right">-</td>
                            </tr>
                            
                            <tr>
                                <td><b>Total</b></td>
                                <td class="uk-text-right"><b>1'077'976</b></td>
                            </tr>
                            <tr>
                                <td>A charge de la Commune de Courtételle (60 %)</td>
                                <td class="uk-text-right">646'786</td>
                            </tr>
                            <tr>
                                <td>A charge de la Commune de Haute-Sorne (40 %)</td>
                                <td class="uk-text-right">431'190</td>
                            </tr>
                        </tbody>
                    </table>  
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">                
                    <h3>Financement</h3>
                    <p>La commune de Courtételle va gérer l’ensemble de l’emprunt. La répartition de la charge financière étant faite
                    selon la convention intercommunale.
                    </p>

                    <h3>Déroulement des travaux</h3>
                    <p>Sous réserve de l’octroi du présent crédit, le planning ci-dessous est envisagé pour la suite du projet :
                    </p>

                    <ul>
                        <li>Octobre 2021 à avril 2022 : construction de la conduite entre Courfaivre et Courtételle, avec mise en service</li>
                        <li>Avril 2021 : début de l'étude pour l'interconnexion entre Bassecourt et Courfaivre, avec une mise en service en 2023</li>
                    </ul>
                </div>
            
                <h3>La question qui vous est posée :</h3>
                    <b><p>Acceptez-vous, selon le message n° 156 du Conseil général, un crédit d’investissement de CHF 2'100'000.-
                    pour la création d’une colonne principale d’alimentation en eau potable entre Bassecourt et Courtételle et
                    donner compétence au Conseil communal pour se procurer les fonds ?</p></b>
            </li>
            <li>
                <div class="uk-child-width-1-3@m" uk-grid>
                    <div>
                        <h2>Autorités communales</h2>
                        <iframe title="Recommandations de vote des autorités et des partis communaux" aria-label="chart" id="datawrapper-chart-WERFd" src="https://datawrapper.dwcdn.net/WERFd/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>

                    <div>
                        <h2>Partis politiques de Haute-Sorne</h2>
                        <iframe title="Recommandations de vote des partis communaux_HauteSorne" aria-label="chart" id="datawrapper-chart-JvyMO" src="https://datawrapper.dwcdn.net/JvyMO/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>

                    <div>
                        <h2>Partis politiques de Courtételle</h2>
                        <iframe title="Recommandations de vote des partis communaux_Courtetelle" aria-label="chart" id="datawrapper-chart-UpBxE" src="https://datawrapper.dwcdn.net/UpBxE/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
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
                            <p>Les deux communes collaborent ensemble afin d'améliorer la distribution d'eau potable et d'optimiser les coûts.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le projet permettra d'assurer la quantité et la qualité des ressources en eau.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les conduites actuelles ont dépassé leurs durées de vie et il faut les renouveller.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Une subvention de 40% maximum est attendue pour la conduite Bassecourt-Courfaivre, ainsi
                            qu'une subvention de l'Etablissement cantonal d'assurances (ECA).</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Effectivement, la création d’une nouvelle conduite entre Bassecourt et Courfaivre approvisionnera le 
                            village de Courfaivre et la commune de Courtételle avec une eau de qualité assurée et en quantité nécessaire.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le renouvellement de la conduite de transport entre Courfaivre et Courtételle est aussi indispensable afin 
                            d’assurer la protection incendie et l’approvisionnement de Courtételle. Sa vétusté et son diamètre insuffisant, 
                            aujourd’hui, justifient ces travaux.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les sections locales du PDC saluent la collaboration étroite entre nos communes. Cette collaboration permet 
                            de réduire les coûts de distribution, mais aussi d’améliorer la distribution d’eau potable.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les différentes problématiques liées à l’eau potable nous obligent à agir ; ces investissements sont 
                            indispensables pour assurer une eau saine et en quantité suffisante.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI-RC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'assainissement et la création de nouvelles conduites d'eau potable est primordiale pour assurer un 
                            approvisionnement sûr, de qualité et suffisant sur l'ensemble de nos villages et permettre l'interconnexion 
                            entre les communes voisines.</p>
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