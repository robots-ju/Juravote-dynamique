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
            <h3 style="padding-bottom: 15%">Les informations seront bientôt disponibles !
            <!--<div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <div class="uk-alert-primary" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <h3>Séance d'information</h3>
                        <p>Une séance d'informations est prévue le jeudi 22 avril 2021 à 19 h 30 à la salle de l'Inter.
                        En raison des restrictions sanitaires, merci de vous inscrire :
                        <a href="mailto:prestations.population@porrentruy.ch">prestations.population@porrentruy.ch</a>
                        ou 032 465 77 77.</p>
                    </div>
                    <h3>Préambule</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify">Ce projet figure en bonne 
                        place du programme de législature 2018-2022 du Conseil municipal. En effet, pour offrir 
                        durablement des prestations de qualité aux familles, Porrentruy se 
                        doit d'investir dans ses infrastructures dédiées aux enfants. Après la construction de l'école 
                        primaire au début des années 2000, de premiers aménagements avaient été consentis en 2008 pour 
                        la Maison de l'enfance pour répondre à l'évolution des modes de garde. La société a continué sa 
                        mutation et un nouvel investissement est nécessaire pour répondre à la demande.
                        </p>

                        <p class="uk-text-justify">La Maison de l'enfance accueille environ 300 enfants de 4 mois à 
                        12 ans. Avec les sites de Coeuve, Fontenais et La Baroche, ce sont plus de 450 enfants qui 
                        fréquentent l'institution.</p>

                        <p class="uk-text-justify">Dans notre ville, l'institution est actuellement répartie 
                        sur 3 sites (rue des Tilleuls, Chemin de la Condemène, école St-Paul) considérant que 
                        le site initial de la rue des Tilleuls est depuis plusieurs années 
                        largement trop exigu au vu de la progression du nombre d'enfants. Le projet d'agrandissement de 
                        la Maison de l'enfance est conçu pour répondre aux objectifs suivants :</p>

                        <ul>
                            <li>Avoir une structure dimensionnée pour répondre à la demande actuelle et future.</li>
                            <li>Rassembler l'ensemble des enfants sur un même site afin de permettre un
                            fonctionnement optimal et une suppression des pertes de synergie existantes.</li>
                        </ul>

                        <img src="<?php echo $MaisonEnfancePorrentruy ?>" alt="Maison de l'Enfance Porrentruy">
                        <figcaption class="uk-text-right">Source : Municipalité de Porrentruy</figcaption>
                    </div>

                    <h3>Etapes réalisées</h3>  
                    <hr>
                    <p class="uk-text-justify" style="padding-bottom: 2%">Le projet a démarré début 2018 et différentes étapes se sont succédées
                    jusqu'à ce jour, validées chacune par la Commission de gestion de la Maison de l'enfance, le Conseil 
                    municipal et le Conseil de Ville :</p>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">  
                        <h5>Choix du site</h5>                 
                        <p class="uk-text-justify">7 variantes ont été étudiées à travers d'une analyse multicritères. La
                        solution consistant à rassembler tous les enfants à un seul endroit (soit le site des Tilleuls)
                        a obtenu le score le plus important.</p>

                        <p class="uk-text-justify">Pour commencer, d'un point de vue financier, la surface à construire
                        est moins importante étant donné que le bâtiment existe déjà. D'un second point de vue, fonctionnel,
                        le regroupement sur un seul site permettra un accueil optimal et contribuera à limiter les charges
                        de fonctionnement. Enfin, cette solution comporte d'autres avantages : terrain communal disponible
                        et prévu pour ce type de construction, espaces verts à proximité, proximité des écoles, accessibilité
                        aisée en transports publics ou privés.</p>

                        <h5>Définition du nombre de places d'accueil</h5>                 
                        <p class="uk-text-justify">A l'heure actuelle, il est autorisé d'accueillir 121 enfants sur
                        les 3 sites de Porrentruy (moyenne annuelle à respecter). En réalité, l'institution dépasse
                        parfois le nombre de 150 enfants fréquentant l'institution en même temps. Pour rappel, en
                        2008, le bâtiment des Tilleuls était autorisé à accueillir 73 enfants. L'augmentation à
                        121 places s'est faite grâce à l'utilisation de locaux externes.</p>

                        <p class="uk-text-justify">La mise à disposition de nouvelles zones à bâtir laisse envisager
                        une évolution de la population. Ainsi, le Conseil communal est d'avis que le bâtiment doit
                        être dimensionné pour permettre l'accueil de 210 enfants (déterminé selon divers critères,
                        particulièrement par le nombre d'enfants attribués à un éducateur). Ce nombre permet
                        d'envisager l'acueil d'écoliers supplémentaires si la journée à horaire continu devenait
                        d'actualité à l'école primaire.</p>
                    </div>
                    
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 2%">  
                        <h5>Rédaction d'un cahier des charges</h5>                 
                        <p class="uk-text-justify">Le cahier des charges détermine le nombre de salles, 
                        les surfaces et équipements nécessaires pour assurer un fonctionnement optimisé.</p>

                        <p class="uk-text-justify">Le site des Tilleuls offrira donc des surfaces suffisantes pour
                        les 140 places dont disposera la Maison de l'enfance. Le projet permet non seulement de
                        regrouper sur un seul site les places existantes, mais également de doubler la capacité
                        d'accueil du site des Tilleuls.</p>

                        <h5>Etude de faisabilité</h5>                 
                        <p class="uk-text-justify">Une bureau d'architecture a été mandaté pour une réaliser
                        une étude de faisabilité, qui avait pour objectifs la schématisation de différentes
                        variantes d'implantation ou la réalisation d'un nouveau bâtiment sur le site des
                        Tilleuls. Ceci dans le respect des besoins exprimés dans le cahier des charges afin
                        d'obtenir un chiffrage à +/- 20 %.</p>

                        <h5>Appel d'offres d'honoraires à un groupement multidisciplinaire de mandataires</h5>                 
                        <p class="uk-text-justify">Il a ensuite été publié un appel d'offres d'honoraires à un 
                        groupement pluridisciplinaire de mandataires (architecte, ingénieur civil, ingénieur 
                        CVSE, etc. ) selon une procédure ouverte internationale conformément aux normes des 
                        marchés publics. Le bureau MBR Architecture SA de Saint-lmier s'est vu octroyer le mandat
                        comprenant une tranche ferme jusqu'au vote du crédit de réalisation, puis une tranche 
                        conditionnelle pour la phase d'exécution.</p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s">                         
                        <h5>Crédit d'études</h5>                 
                        <p class="uk-text-justify">Un crédit d'études d'un montant de CHF 475'QOO. - 
                        (dont le mandat à MBR Architecture SA) pour l'élaboration du projet, y compris 
                        les appels d'offres et les adjudications pour une précision optimale des
                        coûts, a été approuvé par le Conseil de Ville en juillet 2019.</p>

                        <h5>Permis de construire</h5>                 
                        <p class="uk-text-justify">La demande de permis de construire a été déposée en décembre 2019. 
                        Au terme de la procédure et après la levée d'une opposition, le permis de construire a été 
                        délivré par le Canton à fin mai 2020.</p> 

                        <h5>Appels d'offre</h5>                 
                        <p class="uk-text-justify">Les appels d'offres ont été lancés de manière à avoir une estimation 
                        des coûts la plus précise possible au jour du vote du crédit de réalisation. Avec 90% de coûts 
                        reposant sur des offres adjugées (évidemment sous réserve de l'acceptation du projet en votation 
                        populaire) l'estimation financière est solide et permet de garantir le respect de l'enveloppe du 
                        crédit sollicité.</p>

                        <p class="uk-text-justify">Parmi ces offres adjugées, près de CHF 3'000'OOQ.- de travaux seront 
                        réalisés par des entreprises sises à Porrentruy, ce qui consiste en un soutien fort à l'économie 
                        locale. Relativement à l'acceptation d'un postulat par le Conseil de Ville concernant la nécessité 
                        de porter une attention particulière pour éviter les effets des perturbateurs endocriniens sur les 
                        enfants qui fréquentent la Maison de l'enfance, un volet y est consacré dans les appels d'offres.</p>                     
                    </div>

                    <h5>Elaboration du projet de réalisation</h5>     
                    <div class="uk-column-1-2@m uk-column-1-1@s">           
                        <p class="uk-text-justify">Le projet consiste en la construction d'un bâtiment, plus ou moins 
                        parallèle à l'actuel, du côté sud, qui accueillera l'ensemble des groupes de crèches. Ce 
                        nouveau bâtiment d'une surface d'environ 1700 m2 comporte deux étages qui sont partiellement 
                        décalés l'un de l'autre permettant un accès de plain-pied au jardin également pour les groupes 
                        situés à l'étage supérieur.</p>

                        <p class="uk-text-justify">Une labellisation Minergie-P est nécessaire pour le nouveau bâtiment 
                        selon les dispositions légales, ce qui permettra un fonctionnement énergétique optimal. Ceci 
                        signifie notamment de tendre à l'auto-consommation électrique pour ce nouveau bâtiment par la 
                        pose de panneaux solaires photovoltaïques. Une réflexion est actuellement en cours pour augmenter 
                        la surface de panneaux photovoltaïques pour ainsi tendre à une auto-consommation pour les deux 
                        bâtiments. Parallèlement, une étude est réalisée pour évaluer les possibilités d'opter pour un 
                        financement participatif de cette installation. En cas de concrétisation, il s'agirait d'un projet 
                        ad hoc qui n'influencerait pas celui de la Maison de l'enfance.</p>

                        <p class="uk-text-justify">Un couloir de liaison permettra de « connecter » les deux bâtiments, 
                        surface non-chauffée qui accueillera différents locaux de rangements. Le bâtiment actuel, d'une 
                        surface de 800 m2 environ, accueillera l'unité d'accueil pour écoliers (UAPE), ainsi que la 
                        cuisine professionnelle. Celle-ci, déjà existante, sera agrandie et mise aux normes. Hormis la 
                        cuisine, diverses modifications mineures des locaux de ce bâtiment sont prévues, principalement 
                        au niveau des équipements sanitaires.</p>

                        <p class="uk-text-justify" style="padding-bottom: 3%">Des aménagements pour les accès et le stationnement sont également 
                        inclus dans te projet, tout comme la création de plusieurs zones de jeux extérieurs pour les
                        diverses tranches d'âge d'enfants.</p>

                        <img width="900" height="900" src="<?php echo $MaisonEnfancePorrentruyExterieur ?>" alt="Maison de l'Enfance Porrentruy">
                        <figcaption class="uk-text-right" style="padding-bottom: 3%">Source : Municipalité de Porrentruy</figcaption>
                    </div>                                         

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 3%">     
                        <h3>Enveloppe financière</h3>
                        <hr>
                        <table class="uk-table uk-table-striped uk-table-hover">
                            <thead>
                                <tr>
                                    <th>Objets et parties d'ouvrage</th>
                                    <th class="uk-text-right">Montants TTC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gros oeuvre</td>
                                    <td class="uk-text-right">2'187'000</td>
                                </tr>
                                <tr>
                                    <td>Second oeuvre</td>
                                    <td class="uk-text-right">2'418'000</td>
                                </tr>
                                <tr>
                                    <td>Cuisine professionnelle</td>
                                    <td class="uk-text-right">240'000</td>
                                </tr>
                                <tr>
                                    <td>Aménagements extérieurs</td>
                                    <td class="uk-text-right">370'000</td>
                                </tr>
                                <tr>
                                    <td>Honoraires</td>
                                    <td class="uk-text-right">365'000</td>
                                </tr>
                                <tr>
                                    <td>Crédits d'études (votés par le Conseil de Ville en 2019)</td>
                                    <td class="uk-text-right">475'000</td>
                                </tr>
                                <tr>
                                    <td>Frais annexes</td>
                                    <td class="uk-text-right">125'000</td>
                                </tr>
                                <tr>
                                    <td>Divers et réserves (env. 6 % du montant total)</td>
                                    <td class="uk-text-right">320'000</td>
                                </tr>
                                <tr>
                                    <td><b>Sous-total</b></td>
                                    <td class="uk-text-right"><b>6'500'000</b></td>
                                </tr>
                                <tr>
                                    <td>./. Subvention</td>
                                    <td class="uk-text-right">./. 200'000</td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td class="uk-text-right"><b>6'300'000</b></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h3>Financement</h3>  
                        <hr>                      
                        <p class="uk-text-justify">La planification financière prévoit un montant de CHF 5'765'OQO.- 
                        réparti sur les années 2021 à 2024 auquel s'ajoutent les dépenses déjà réalisées et votées 
                        de 2018 à 2020 pour CHF 475'OO0. -, soit un total de CHF 6'240'O0O. -. Le projet est donc 
                        conforme à la planification financière.</p>

                        <p class="uk-text-justify">Le crédit de réalisation sera couvert par voie d'emprunt. Ceci 
                        aura un effet sur l'endettement municipal, mais il est à relever que ce type de projets 
                        augmentera aussi les actifs au bilan. La charge financière annuelle moyenne et théorique 
                        relative à cet investissement se montera à CHF 315'QOO. - en prenant en compte un 
                        amortissement sur 25 ans et un taux de 1.75%.</p>

                        <h3>Coûts de fonctionnement</h3>    
                        <hr>                    
                        <p class="uk-text-justify">L'évolution des coûts de fonctionnement annuels est cruciale.
                        Les coûts seront supérieurs de 52'000 vis-à-vis de la situation actuelle (future ventilation,
                        futur ascenseur, futures chambres froides, etc...). En revanche, le regroupement sur un seul
                        site permet plusieurs économies (optimisation de l'organisation du personnel, suppression des
                        locations externes) pour un montant de 103'000.- par année.</p>

                        <p class="uk-text-justify">En vu de l'augmentation du nombre de places autorisées par le Canton,
                        un subventionnement fixe correspondant à 146'000.- par an sera perçu. Les coûts nets de
                        fonctionnement seraient en baisse d'environ 197'000.- par année.</p>

                        <p class="uk-text-justify">Les coûts d'amortissement se montent à 118'000.- annuellement.
                        Ceci provoque un déficit de 118'000 par année. On constate en effet que le mode de subventionnement 
                        par le canton en vigueur depuis mi-2016 ne permet pas d'équilibrer les comptes des structures 
                        de l'enfance. Des démarches communes avec la Ville de Delémont ont été entreprises à plusieurs 
                        reprises auprès du Canton (lettres, rencontre avec la Ministre) et sont poursuivies.
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s">                       
                        <h3>Développement durable</h3>    
                        <hr>                    
                        <p class="uk-text-justify">La pose de panneaux photovoltaïques pour couvrir au mieux les besoins 
                        du nouveau bâtiment est un réel atout du point de vue du développement durable. Il est également 
                        probable, comme mentionné, que la Municipalité étende la surface obligatoire et lance son premier 
                        projet de financement participatif pour une centrale solaire considérant son souhait d'intensifier 
                        ses actions en matière de politique énergétique.</p>

                        <p class="uk-text-justify">Tout comme le bâtiment actuel, le nouveau sera raccordé au Thermoréseau. 
                        La récupération de l'eau de pluie pour alimenter les wc du nouveau bâtiment est également à relever 
                        tout comme le fait que le nouveau bâtiment soit conçu à partir d'une ossature bois.</p>
                        
                        <h3>Planning</h3> 
                        <hr>
                        <p class="uk-text-justify">En cas d'acceptation, les travaux pourront démarrer mi-juin 2021. 
                        La fin des travaux est prévue pour la fin de l'année 2022.</p>

                        <h3>La question qui vous est posée :</h3>
                        <hr>
                        <b><p class="uk-text-justify">Approuvez-vous un crédit maximal de CHF 6'300'O0O. -, à couvrir par voie d'emprunt,
                        en vue de la réalisation de l'agrandissement de la Maison de l'enfance ?</p></b>
                    </div>
                </li>
                <li>
                    <div class="uk-column-1-2@m uk-column-1-1@s">  
                        <h2>Autorités communales</h2>
                        <iframe title="Recommandations de vote des autorités_Maison de l'Enfance" aria-label="chart" id="datawrapper-chart-OVFeP" src="https://datawrapper.dwcdn.net/OVFeP/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h2>Partis politiques</h2>
                        <iframe title="Recommandations de vote des partis_Maison de l'Enfance" aria-label="chart" id="datawrapper-chart-kqNHM" src="https://datawrapper.dwcdn.net/kqNHM/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>    
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le projet d'agrandissement de la maison de l'enfance est un des enjeux majeurs 
                                de la présente législature. Pour que la municipalité de Porrentruy puisse proposer 
                                une politique familiale moderne, des infrastructures adaptées, répondant aux besoins 
                                actuels et futurs, sont nécessaires.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Ce projet permet de mieux concilier vie familiale et vie professionnelle tout 
                                en augmentant l'attractivité de la région pour les familles. Il s'agit donc d'un 
                                moteur de développement important.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Un tel investissement est avantageux à plusieurs niveaux :
                                    <ul>
                                        <li class="uk-text-justify">La proximité du site avec l'école primaire permet de simplifier 
                                        l'organisation des familles.</li>
                                        <li class="uk-text-justify">Des infrastructures adaptées aux besoins valorisent et simplifient 
                                        le travail du personnel.</li>
                                        <li class="uk-text-justify">Pour une durée d'amortissement de 50 ans, le bilan financier serait 
                                        quasiment à l'équilibre. Ce projet est donc financièrement intéressant 
                                        pour la commune.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Cet investissement, primordial pour le développement futur de la ville de Porrentruy, 
                                doit permettre de répondre aux besoins des familles en offrant des possibilités de garde 
                                plus nombreuses rassemblées sur un seul site au lieu de 3 actuellement.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Après étude du projet, force est de constater que celui-ci est de qualité répondant 
                                aux besoins identifiés tout en étant en adéquation avec les attentes des professionnels 
                                de la petite enfance pour exercer leur travail correctement. De surcroît, nous relevons 
                                à satisfaction que de nombreux choix ont été effectués afin d’avoir un projet mesuré qui 
                                s’inscrit dans la planification financière de la commune.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Certes, l’investissement de 6'300'000 CHF reste conséquent pour notre ville surtout 
                                dans sa situation financière actuelle. Nous sommes bien entendu soucieux de cette 
                                situation, mais nous tenons à rappeler que ce projet est attendu et qu’il répond à un 
                                besoin réel. Nous invitons donc la population à voter OUI et ainsi investir pour l’avenir 
                                des familles bruntrutaines.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                <p>Il n'y a pas d'arguments contre ce projet.</p>
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>                    
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
                    </div>
                </li>
            </ul>-->
        </section>
    </main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>