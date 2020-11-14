<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Develier 13.12.2020</title>
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
    <section style="padding: 2%;">
            <h1 class="uk-heading-large">Interconnexion du réseau d’eau de Develier avec celui de Delémont pour l’alimentation en eau de secours</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h1>Message du Conseil communal</h1>
                    <p>Chères concitoyennes, chers concitoyens,</p>
                    
                    <p>Le projet d'interconnexion vise à sécuriser l'alimentation en eau potable lors de pollution des
                    ressources ou lors d'une période de sécheresse.</p>

                    <p>En application du règlement d'organisation de la Commune, cet objet aurait dû être présenté pour
                    orientation à l’Assemblée communale. Toutefois, vu la situation sanitaire ainsi qu’à l’état de
                    nécessité décrété par le Gouvernement jurassien et compte-tenu des nombreuses personnes atteintes
                    par la Covid dans la Commune, le Conseil communal a renoncé à mettre sur pied une telle assemblée.</p>

                    <p>Il estime, d’une part, que la santé publique prévaut et passe avant toute chose. D’autre part, le
                    projet soumis au vote est clair ainsi que cela ressort du message ci-joint. Il est important pour la
                    collectivité. Il revêt en outre un certain caractère d’urgence car il est nécessaire de pouvoir le
                    réaliser en 2021 pour pouvoir obtenir une subvention de 40% des frais subventionnables, subvention qui,
                    en cas de retard, risquerait de devenir caduque. Pour le reste, les citoyens intéressés à connaître
                    davantage de précisions sur l’objet mis en votation ont la possibilité de se renseigner sur l’entier
                    de ce projet auprès de l’administration communale.</p>

                    <p><b>En conclusion, le Conseil communal vous recommande d’accepter cet objet et de vous prononcer de
                    préférence par la voie du vote par correspondance. Il vous rend également attentif au fait que ce vote
                    ne doit en aucun cas être envoyé dans la même enveloppe que le matériel de vote du scrutin fédéral du
                    29 novembre 2020.</b></p>

                    <h1>Coûts et financement</h1>                   
                    <p>Le montant total du crédit d’investissement est de
                    Fr. 1’600’000.00 et doit donc être soumis aux ayants-droit
                    par la voie des urnes, selon le Règlement d’organisation.
                    Il est à relever que cet investissement n’aura pas d’impact
                    sur la quotité d’impôt, ni sur la taxe liée au Règlement
                    relatif à l’approvisionnement en eau potable (RAEP), ladite
                    taxe ayant déjà été adaptée le 11 décembre 2017 pour
                    financer ce projet.</p>
                    <div class="uk-column-1-2@m">   
                        <p>Le coût annuel global est estimé à Fr. 64’700.00. Il inclut les
                        coûts d’exploitation, les frais financiers ainsi que les frais de
                        renouvellement. Ces coûts seront supportés par la taxe liée
                        au Règlement relatif à l’approvisionnement en eau potable
                        (RAEP), taxe qui a déjà fait l’objet d’une adaptation dans ce
                        sens à fin 2017.</p>

                        <p>Une convention avec les Autorités communales de Delémont
                        règle les détails de cette interconnexion et, notamment,
                        le prix d’achat de l’eau en cas de pollution ou de pénurie
                        (90 centimes / m3).</p>

                        <p>Ce projet pourra être subventionné par divers organes
                        étatiques. À ce stade, aucune promesse ferme de
                        subventionnement ne peut être faite par les autorités
                        compétentes, mais celui-ci devrait se monter à hauteur
                        de 40 % du montant subventionnable. Des demandes
                        d’octroi seront soumises dès que le crédit de construction
                        aura été accepté par la population.</p>

                        <p>Le dossier a été préavisé positivement par le Conseil
                        communal de Delémont en date 9 décembre 2016. Il a été
                        approuvé par les Instances cantonales à la suite d’un
                        examen préalable le 26 avril 2018.</p>

                        <p>L’Office fédéral des routes (OFROU) a accepté une utilisation
                        de sa conduite dans la galerie A16 pour le transport de
                        l’eau de secours et a accepté une entrée en matière pour
                        une participation financière à hauteur de Fr. 75’350.00
                        (participation de tiers).</p>

                        <p>Après la votation du crédit, le dossier complet sera mis
                        à l’enquête publique dans les Communes de Develier
                        et Delémont. Les décisions de subventions pourront être
                        établies et les travaux pourront ensuite débuter.</p>
                    </div> 
                    <table class="uk-table uk-table-striped uk-table-hover">
                        <thead>
                            <tr>
                                <th>Travaux</th>
                                <th>Coûts TTC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Station de pompage des 4-Faulx</td>
                                <td class="uk-align-right">312'000</td>
                            </tr>
                            <tr>
                                <td>Conduite de refoulement</td>
                                <td class="uk-align-right">752'000</td>
                            </tr>
                            <tr>
                                <td>Chambre de liaison des Viviers</td>
                                <td class="uk-align-right">22'000</td>
                            </tr>
                            <tr>
                                <td>Extension chambre de liaison des Quatre-Faulx</td>
                                <td class="uk-align-right">30'500</td>
                            </tr>
                            <tr>
                                <td>Extension chambre de liaison Pré-au-Maire</td>
                                <td class="uk-align-right">111'500</td>
                            </tr>
                            <tr>
                                <td>Modification station de partage de Develier-Dessus</td>
                                <td class="uk-align-right">30'000</td>
                            </tr>
                            <tr>
                                <td>Modification du réservoir du Pécal</td>
                                <td class="uk-align-right">12'000</td>
                            </tr>
                            <tr>
                                <td>Gestion électromécanique</td>
                                <td class="uk-align-right">45'000</td>
                            </tr>
                            <tr>
                                <td>Honoraires et frais</td>
                                <td class="uk-align-right">285'000</td>
                            </tr>
                            <tr>
                                <td><b>TOTAL TTC</b></td>
                                <td class="uk-align-right">1'600'000</td>
                            </tr>
                            <tr>
                                <td>./. Participation de tiers</td>
                                <td class="uk-align-right">75'350</td>
                            </tr>
                            <tr>
                                <td><b>TOTAL À CHARGE DE LA COMMUNE</b></td>
                                <td class="uk-align-right">1'524'650</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="uk-column-1-2@m" style="padding-top: 2%">    
                        <h1>Situation</h1>                        
                        <p>Les Autorités communales se doivent de répondre à la
                        Loi cantonale sur la gestion des eaux (LGEaux) qui stipule
                        que les Communes doivent disposer de ressources en
                        eau permettant d’alimenter la population en eau potable
                        de qualité irréprochable et en quantité suffisante en tout
                        temps. Afin de garantir l’alimentation, notamment lors de
                        pollutions ou de pénuries, elles doivent disposer de ressources
                        de substitution en interconnectant leurs réseaux.</p>

                        <p>Les sources d’origine karstique de la Combatte et de la
                        Tuf, situées à Develier-Dessus, sont les seules ressources
                        alimentant le réseau d’eau potable de Develier. Ces dernières,
                        propriétés de la Commune de Delémont, sont partagées
                        entre les Services industriels de Delémont et le
                        Service des eaux de Develier. Le Plan général d’alimentation
                        en eau (PGA) de Develier a mis en évidence la nécessité
                        de sécuriser l’alimentation en eau potable, notamment
                        lors de pollution d’une ressource ou de périodes sèches
                        de longue durée, par la réalisation d’une interconnexion
                        en eau de secours. Ce principe est confirmé par les Autorités
                        cantonales.</p>

                        <h1>Le projet</h1>                        
                        <p>Fort de ce constat, le bureau d’ingénieurs en charge du PGA
                        a étudié plusieurs variantes d’interconnexion. Les Autorités
                        communales ont opté pour la variante de l’interconnexion
                        avec Delémont via les Viviers, notamment en raison des
                        nombreuses ressources ainsi disponibles.
                        Toutes les instances cantonales concernées par cette
                        interconnexion ont donné un préavis favorable à ce projet
                        d’alimentation en eau de secours.Des discussions ont déjà été menées avec les propriétaires
                        fonciers concernés, afin d’obtenir les servitudes de passage,
                        et de garantir la faisabilité du projet.</p>
                        <img src="PlanDeSituation.JPG" alt="Carte Develier">
                    </div>
                    

                    <h1>La question qui vous est posée :</h1>
                    <b><p>Acceptez-vous l’ouverture d’un crédit de Fr. 1'600'000.00, à couvrir par voie d’emprunt,
                    pour la réalisation d’une interconnexion du réseau d’eau de Develier avec celui de Delémont pour
                    l’alimentation en eau de secours, sous réserve des subventions fédérales et cantonales et donner
                    la compétence au Conseil communal de contracter l’emprunt et de le consolider ?</p></b>
                </li>
                <li>
                
                <h2>Autorités et partis</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Conseil communal de Develier</th>
                            <th class="uk-text-center">Conseil communal de Delémont</th>
                            <th class="uk-text-center">Instances cantonales</th>
                            <th class="uk-text-center">Office fédéral des routes (OFROU)</th>
                            <th class="uk-text-center">Commission communale de gestion des Finances</th>
                            <th class="uk-text-center">Commission communale des Services industriels</th>
                            <th class="uk-text-center">PLR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        </tr>
                    </tbody>
                </table> 
                </li>  
                <li>            
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Cet investissement n’aura pas d’impact
                            sur la quotité d’impôt, ni sur la taxe liée au Règlement
                            relatif à l’approvisionnement en eau potable (RAEP)</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Une convention avec les Autorités communales de Delémont règle les détails de cette interconnexion.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Ce projet pourra être subventionné par divers organes étatiques.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’Office fédéral des routes (OFROU) a accepté une utilisation de sa conduite dans la galerie A16 pour le transport de
                            l’eau de secours et a accepté une entrée en matière pour une participation financière.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Ce projet permet de sécuriser l’alimentation en eau
                            potable de la Commune mixte de Develier lors de périodes
                            sèches de longue durée ou de pollution d’une ressource.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Ce projet est important pour sécuriser l'alimentation en eau potable de la Commune mixte de Develier
                            lors de périodes sèches de longue durée ou de pollution d'une ressource.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Un grand OUI pour s'assurer que le précieux liquide ne vient pas à manquer dans le village.</p>
                        </div>
                    </div>
                </li>
                <li>
                <h3>Il n'y a pas d'oppositions à ce projet !</h3>
                <!--<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>                    
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Une solution satisfaisante existe déjà.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La Suisse ne peut pas contraindre d’autres pays à prévoir une telle interdiction.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Une menace pour nos rentes et pour la place financière.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Un impact négatif sur l’industrie.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Une politique étrangère et une politique de sécurité responsables.</p>
                        </div>
                    </div>-->
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