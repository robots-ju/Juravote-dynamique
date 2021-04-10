<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Courrendlin 13.06.2021</title>
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
            <h1 class="uk-heading-large">Projet d'extension des locaux scolaires</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h1>De la nécessité de l'extension des écoles de Courrendlin</h1>      
                    <hr>             
                    <p><b>La population de Courrendlin est passée de 2'500 en 3'600 habitants en cinq ans.</p></b>
                    <p>La loi sur l'aménagement du territoire (LAT), approuvée en 2014, ainsi que la
                    fusion entre Courrendlin, Vellerat et Rebeuvelier, ont eu des effets spectaculaires
                    pour la Commune, respectivement sa population qui, en moins de cinq ans, a crû de 
                    près de 40%, passant de 2500 à 3600 habitants.</p>

                    <p>D'autres facteurs ont aussi contribué à cette augmentation de population. Par
                    exemple, des plans d'aménagement de communes de l'agglomération ont
                    été bloqués par la LAT, les empêchant d'offrir de nouvelles parcelles constructibles.
                    Cela a provoqué un appel d'air en faveur de Courrendlin.</p>

                    <p style="padding-bottom: 2%">La bonne desserte de la Commune par les transports publics est un atout supplémentaire
                    dans le choix des familles de s'y installer et, bien sûr, le groupement
                    prévu, en un seul lieu, d'une crèche, d'une UAPE (unité d'accueil pour écoliers), d'une école 
                    enfantine, d'une école primaire, d'une école secondaire et d'un restaurant scolaire,
                    constitue un argument-massue pour tes parents.</p>

                    <div class="uk-column-1-4@m uk-column-1-1@s">
                        <div style="padding-bottom: 30%">  
                            <h3>Manque chronique de locaux</h3>
                            <hr>
                            <p>A la suite de l'augmentation de la
                            population et la construction de nombreux
                            logements à partir de 2015,
                            puis, en 2017, la fusion de Courrendlin,
                            Rebeuvelier et Vellerat, les besoins en
                            espaces scolaires se font clairement
                            sentir.</p>

                            <p>La direction des écoles de Courrendlin
                            doit réquisitionner des locaux souvent
                            exigus et mal équipés pour les activités
                            créatrices et manuelles (ACT), travaux
                            pratiques (TP), le soutien, le co-enseignement,
                            etc.</p>

                            <p>Pour faire face à un manque de place
                            chronique, deux containers sont par ailleurs
                            installés à l'école primaire en 2018
                            (location de 3000 fr. mensuels environ).</p>

                            <p>Il manque également des locaux spé"
                            cifiques pour l'infirmière scolaire, la
                            médiatrice, ('intervenante socio-éducative,
                            la conseillère en orientation et
                            le soutien à l'école secondaire.</p>
                        </div>

                        <div style="padding-bottom: 30%">
                            <h3>Situation actuelle pas satisfaisante</h3>
                            <hr>
                            <p>Les écoles de Courrendlin sont réparties
                            sur quatre sites:</p>
                            <ol>
                                <li>Courrendlin, rue du Cornat (école enfantine)</li>
                                <li>Courrendlin, rue du 23-Juin 44 (école primaire)</li>
                                <li>Rebeuvelier (école primaire)</li>
                                <li>Courrendlin, chemin des Ecoliers 4 (école secondaire)</li>
                            </ol>

                            <p>Les élèves du village de Courrendlin
                            entrant à l'école enfantine sont répartis
                            par tirage au sort dans une des quatre
                            classes de Courrendlin (trois au Cornat et
                            une dans le bâtiment de l'école primaire).</p>

                            <p>A partir de la 9e HarmoS, les élèves de
                            Rebeuvelier sont acheminés par CarPostal
                            à l'école secondaire de Courrendlin.</p>

                            <p>Dès le niveau secondaire également,
                            les élèves de Châtillon viennent à Courrendlîn
                            en transport privé (bus du Syndicat
                            scolaire).</p>
                        </div>
                        
                        <div style="padding-bottom: 65%">
                            <h3>Chiffres parlant</h3>
                            <hr>
                            <p>L'école primaire de Courrendlin comptait
                            282 élèves en 2014 et, avec la fusion,
                            351 aujourd'hui.</p>

                            <p>Les prévisions tablent sur environ 400
                            élèves au niveau primaire et quelque
                            18o au secondaire en 2024. L'effectif au primaire a été calculé sur la base du nombre
                            d'élèves scolarisés en fonction du nombre d'habitants:
                            quelque 10% sur 10 ans.</p>

                            <p>Le projet d'extension des écoles est basé
                            sur 600 élèves (primaire et secondaire).
                            Ce plateau durera sans doute quelques
                            années. Ensuite, l'effectif scolaire devrait
                            un peu diminuer pour se stabiliser
                            à quelque 550 élèves.</p>
                        </div>

                        <div>
                            <h3>Les bâtiments existants ne sont-ils pas adaptés ?</h3>
                            <hr>
                            <p>L'étude préalable au projet d'extension
                            des écoles menée par le bureau delémontain
                            Comamala Ismail a démontré que
                            les locaux de Courrendlin, Rebeuvelier
                            et Vellerat ne permettaient pas d'atteindre
                            les objectifs fixés en termes de besoins, sans tenir compte des problématiques liées aux
                            déplacements.</p>                        

                            <h3>Les écoles, une prérogative communale</h3>
                            <hr>
                            <p>La loi oblige les communes à mettre à disposition, en leur
                            sein, les locaux et installations nécessaires à renseignement.
                            Les communes doivent les aménager, les équiper, les entretenir
                            et en assurer la gestion courante.</p>
                        </div>
                    </div>                    
                    
                    <h1>Le site dans le détail</h1>      
                    <hr>                  
                    <p><b>Un projet qui correspond aux besoins.</p></b>
                    <p>Avec l'étude préalable, un cahier des
                    charges a été établi tenant compte
                    notamment des besoins actuels et
                    futurs.
                    L'extension des écoles de Courrendlin
                    a été validée par le Service jurassien
                    de l'enseignement, qui considère
                    leur dimensionnement conforme aux
                    besoins et à la loi sur renseignement.</p>

                    <div class="uk-column-1-2@m" style="padding-top: 2%">  
                        <h3>Bâtiment A</h3>
                        <hr>
                        <ul>
                            <li>2 classes d'activité manuelle</li>
                            <li>2 salles de sciences</li>
                            <li>1 salle polyvalente d'ACT/EV</li>
                            <li>1 salle d'économie familiale</li>
                            <li>Les classes de transition (actuellement à Vicques avec 13 élèves de Courrendlin !)</li>
                            <li>Les classes de soutien (actuellement dans un conteneur)</li>
                            <li>Le dispositif allophone (actuellement dans un conteneur)</li>
                            <li>1 médiathèque</li>
                            <li>La salle des maitres (remplacée actuellement par une salle de classe à l'école secondaire)</li>
                            <li>Le bureau de la Direction</li>
                            <li>Le bureau du secrétariat</li>
                            <li>Le bureau de l'infirmière scolaire</li>
                            <li>Le bureau de la médiatrice</li>
                            <li>La future classe de soutien pour l'école secondaire</li>
                            <li>Deux salles de classe prévues pour une organisation basée sur 10-12 classes</li>
                        </ul>

                        <h3>Bâtiment B</h3>
                        <hr>
                        <ul>
                            <li>5 classes enfantines, dont une de réserve pour les besoins futurs.</li>
                            <li>1 restaurant scolaire</li>
                            <li>Une salle de devoirs</li>
                            <li>Une salle de jeux pour l'UAPE</li>
                        </ul>

                        <p>Cette cinquième classe enfantine pourrait déjà
                        voir le jour l'année prochaine au vu des
                        prévisions en effectifs.</p>           

                        <p>Le regroupement des classes enfanfines
                        du village de Courrendlin sur
                        un site unique répond à la volonté de
                        centraliser le même type d'élèves à
                        un endroit identique pour des raisons
                        évidentes cPémulation et de simptification
                        du dispositif pour les parents
                        (cette centralisation ne concerne pas
                        les élèves de Rebeuvelier dont la scolarisation,
                        dans la mesure du possible,
                        sera maintenue dans leur village).</p>    

                        <p>L'édifice permettra ainsi de rassembler
                        l'ensemble des élèves sur le même site
                        et d'augmenter la capacité d'accueit
                        de FUAPE afin de répondre aux futures
                        demandes des parents.</p>     
                    </div> 

                    <div class="uk-column-1-2@m" style="padding-top: 2%">                         
                        <h1>Un projet devisé à 12.5 millions de francs</h1>  
                        <hr>                         
                        <p>Le projet tel que présenté et décrit engendre des coûts pour environ 12,5 millions
                        de francs. D'autres projets en cours d'étude représentent aussi des investissements
                        conséquents, soit:</p>
                        <ol>
                            <li>la traversée de Courrendlin</li>
                            <li>la réfection des berges de la Birse</li>
                        </ol>

                        <p>Les subventions fédérales et cantonales (plus de 10 millions de francs) affectées
                        à ces deux objets et réservées pour eux nécessitent ta planification de
                        ceux-ci à court terme (entre 2022 et 2024), sans quoi lesdites subventions
                        pourraient être perdues par notre Commune.</p>

                        <p>Afin de ne pas prétériter ces projets, le Conseil communal a pris l'option de
                        phaser, c'est-à-dire d'organiser par étapes l'extension des écoles en proposant
                        de réaliser rapidement la première étape, qui comprend le bâtiment A, et
                        le deuxième bâtiment, ultérieurement, soit dans environ 3 à 5 ans.</p>

                        <p>Le montant pour la réalisation de cette première étape s'élève à 8.5 millions
                        de francs et devrait bénéficier d'une subvention à hauteur de 2.5 millions.</p>   

                        <h1>Pourquoi un bureau d'architecture parisien ?</h1>  
                        <hr>
                        <p>Le projet retenu est le résultat d'un
                        concours ouvert et anonyme. Un procédé
                        obligatoire pour répondre aux
                        exigences légales. C'est ainsi que ce
                        concours devait obligatoirement être
                        ouvert à tout architecte établi dans un
                        pays signataire de l'accord sur les marchés
                        publics de ['Organisation mondiale
                        du commerce (OMC).</p>

                        <p>A l'issue de la procédure, l'auteur du
                        projet gagnant a été un cabinet parisien
                        : Daphne Karaiskaki Architecture.
                        L'un des critères d'appréciation du Jury
                        était l'économie générale du projet. Le
                        gagnant a donc aussi été choisi parce
                        que sa proposition était moins chère
                        que d'autres.
                        Une fois informé, le cabinet parisien a
                        immédiatement constitué une équipe
                        avec Stähelin Partner architectes, à Delémont</p>

                        <p>Plusieurs enseignants ont participé
                        avec une grande motivation à l'élaboration
                        des plans et au concept d'ameublement
                        pour les nouvelles classes
                        avec l'architecte Daphné Karaiskaki.
                        Il s'est agi d'un véritable processus
                        participatif.</p>

                        <p>Le prix devisé par les mandataires correspond
                        à celui, moyen, au m2 et au m3,
                        des constructions scolaires actuelles
                        en Suisse romande. Il est comparable
                        à celui du Collège de Delémont, par
                        exemple, réalisé il y a presque 10 ans.
                        On peut donc dire que c'est un prix
                        Juste pour une construction simple avec un
                        minimum d'exigences qualitatives.</p>
                    </div>              

                    <h1>La question qui vous est posée :</h1>
                    <hr>
                    <b><p>Acceptez-vous le projet d'extension des écoles de la Commune de Courrendlin ?</p></b>
                </li>
                <li>
                    <div class="uk-column-1-2@m" style="padding-top: 2%">  
                        
                        <h2>Autorités communales</h2>
                        <iframe title="Recommandations de vote des autorités_ExtensionEcolesCourrendlin2021" aria-label="chart" id="datawrapper-chart-QPSHA" src="https://datawrapper.dwcdn.net/QPSHA/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h2>Partis</h2>
                        <iframe title="Recommandations de vote des jeunes partis de Courrendlin_ExtensionEcoles2021" aria-label="chart" id="datawrapper-chart-ETsBm" src="https://datawrapper.dwcdn.net/ETsBm/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                    </div>
                </li>  
                <li>            
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les faits sont là. Courrendlin est confronté
                            à un manque de locaux dignes de
                            ce nom pour accueillir sa population scolaire
                            dans des conditions satisfaisantes.
                            La localisation d'enfants dans des conteneurs
                            n'est en effet pas acceptable à long
                            terme.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La clause du besoin, norme de référence
                            cantonale et communale, est reconnue
                            par les autorités responsables.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La jeunesse est notre avenir. Nous portons
                            collectivement la responsabilité de
                            lui préparer un avènement heureux. Alors qu'elle est aujourd'hui frappée de
                            plein fouet par une pandémie aux effets
                            catastrophiques pour la santé, l'économie,
                            mais aussi pour la formation, nous
                            nous devons d'être à la hauteur de la
                            responsabilité qui nous incombe envers
                            cette jeunesse aujourd'hui malmenée.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">UAPE</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'atout indéniabte de la
                            nouvelle unité d'accueil
                            pour écoliers (UAPE)</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Jacques Widmer, directeur des écoles</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Un site destiné à accueillir
                            une population scolaire en
                            expansion constante</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Loranne Jobin, présidente de l'APEC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'association
                            donne tout son soutien à ce
                            projet et invite ses membres, ainsi que
                            la population, à accepter le crédit pour
                            l'agrandissement.»</p>
                        </div>
                    </div>
                </li>
                <li>
                <h3>Les arguments seront bientôt disponibles !</h3>
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