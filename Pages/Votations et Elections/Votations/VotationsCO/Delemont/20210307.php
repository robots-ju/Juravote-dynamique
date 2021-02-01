<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Delémont</title>
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
        <h1 class="uk-heading-large">Votation Delémont du 7 mars 2021</h1>
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
                    <p>Le changement  d'affectation  est prévu dans le  secteur des  Prés-Roses, à  proximité de  la  jonction  autoroutière A16
                    Delémont-Ouest, afin  d'élargir  la  zone  d'utilité  publique pour  permettre  la  réalisation  de  la  future  déchèterie.
                    Cela entraîne la modification du Plan de zones (PZ) et du Règlement communal sur les constructions (RCC).
                    </p>

                    <p>Après une étude de variantes, le choix s'est porté sur les terrains sis au Nord du centre d'entretien du canton. 
                    Le projet prévoit les adaptations requises pour l'accueil de la déchèterie dans un nouveau secteur de la zone
                    d'utilité publique. Ce changement d'affectation implique une adaptation du secteur destiné à des équipements d'importance 
                    cantonale ou en lien  avec l'exploitation du canton. Il pourrait le cas échéant recevoir l'aire d'accueil des Gens du voyage.
                    </p>

                    <p>Ce projet d'extension est déjà inscrit dans le Plan directeur communal de 2016. En lien direct avec ce projet, un 
                    itinéraire réservé à la mobilité douce est actuellement étudié par les Vies-Ste-Catherine et un nouvel accès routier
                    sera créé.</p>

                    <img src="<?php echo $CentreEntretienRCJU ?>" style="width: 550px" class="uk-align-left">
                    <span><i>Photo : République et Canton du Jura, 2009</i></span>
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                    <h3>Stratégie de gestion des déchets à l'échelle communale</h3>
                    <p>Le projet de déchèterie régionale a été repris suite à la votation de 2017, qui n'avait pas permis d'obtenir une majorité
                    d'avis favorables dans le district de Delémont. Pour rappel, le Corps électoral de Delémont avait accepté le projet, dont le
                    fonds ne sera pas changé. Une évaluation a été menée pour définir le site le plus propice à accueillir ce projet : Les Prés Roses.
                    </p>
                    
                    <p>Pour faire face à la gestion actuelle des déchets qui pose des problèmes et qui n'est plus maîtrisée,
                    le Conseil communal a défini un plan d'actions global, qui repose sur plusieurs piliers, pour toucher toutes les classes
                    d'âge, en particulier les jeunes et les personnes défavorisées. Ce plan d'actions passe par la mise en place des infrastructures
                    nécessaires :
                    <ul>
                        <li>Une déchèterie, indispensable à court terme</li>
                        <li>Des écopoints, qui seront maintenus, améliorés et développés.</li>
                        <li>Des moloks, qui seront mis en place.</li>
                        <li>Un nouveau lieu de collecte des déchets verts, pour alimenter un projet de biogaz.</li>
                        <li>La mise en place d'un système sur appel pour les personnes qui en ont besoin.</li>
                    </ul>
                    </p>

                    <h3>Plan climat communal pris en compte</h3>
                    <ol>
                        <li style="padding-bottom: 1%;">Réduire la consommation des bâtiments, logements et constructions, prévoir une production
                        d'énergie renouvelable, tenir compte des émissions grises, assurer une gestion durable de l'eau.</li>

                        <li style="padding-bottom: 1%;">Réduire la dépendance aux énergies fossiles, promouvoir et utiliser les énergies
                        renouvelables de manière durable et efficace.</li>

                        <li style="padding-bottom: 1%;">Favoriser une mobilité sobre en carbone, privilégier les distnaces courtes, remplaçer le
                        trafic motorisé par des véhicules légers et électriques.</li>

                        <li style="padding-bottom: 1%;">Prendre en compte et réduire au minimum les émissions liées à la consommation, privilégier
                        les investissements financiers neutres sur le plan climatique.</li>

                        <li style="padding-bottom: 1%;">Prendre en compte les changements climatiques avec des planifications cohérentes afin de
                        promouvoir un développement territorial durable.</li>

                        <li style="padding-bottom: 1%;">Protéger la population des effets néfastes du changement climatique dans le cadre des
                        constructions et aménagements réalisés.</li>

                        <li style="padding-bottom: 1%;">Protéger l'eau, la biodiversité, l'agriculture et les forêts face au changement climatique,
                        lutter contre les crues et revitaliser les cours d'eau, améliorer la gestion du patrimoine arboré, augmenter la végétalisation,
                        mettre en oeuvre le label Ville verte Suisse.</li>
                    </ol>                    
                </div>

                <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                    <h3>Dépôt public et suite du projet</h3>
                    <p>Les modifications du plan de zone et du règlement sur les constructions ont déposées publiquement le 5 novembre 2020.
                    Les oppositions ont fait l'objet de ocncilations et des accords ont pu être passés ou sont en voie de finalisation avec tous
                    les propriétaires et partenaires concernés.
                    </p>

                    <p>La  suite du processus en vue de la réalisation d'une déchèterie régionale sera prise en mains par le SEOD qui poursuit
                    le développement et qui prendra en charge les frais liés à toutes les démarches effectuées  par la Commune et à celles 
                    imputables au syndicat.
                    </p>

                    <p>Les  crédits y relatifs seront votés par les instances compétentes du SEOD. Si, contre toute attente, le SEOD ne 
                    devait pas aboutir dans son projet, les Autorités communales poursuivraient les démarches afin de réaliser une déchèterie
                    communale ou plus probablement intercommunale avec les communes intéressées qui se sont déjà annoncées partantes.
                    </p>

                    <h3>Modification de l'aménagement local</h3>
                    <p>La modification doit permettre l'accueil de la déchèterie, ce qui implique un changement d'affectation du secteur actuel.
                    Il sera inscrit dans le règlement communal des constructions (RCC) que, seule une déchèterie pourra être construire à cet
                    emplacement et, ce, dans les 3 ans qui suivent le changement d'affectation. Si la construction n'est pas réalisée, le secteur
                    redevient à son affectation antérieure automatiquement.
                    </p>

                    <p>Une procédure précise doit être suivie. Une phase d'information et de participation a été mise en place, avec les propriétaires
                    fonciers et le Canton. Une fois le dossier finalisé,. il a été déposé publiquement pendant 30 jours et est désormais soumis au peuple.
                    </p>

                    <iframe title="Plan de situation" aria-label="chart" id="datawrapper-chart-9V3Ti" src="https://datawrapper.dwcdn.net/9V3Ti/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="428"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
                </div>
            
                <h3>La question qui vous est posée :</h3>
                    <b><p>Acceptez-vous, selon message du Conseil de Ville, la modification du Plan d'aménagement local destiné
                    au projet de déchèterie aux Prés-Roses ?</p></b>
            </li>
            <li>
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div>
                        <h2>Autorités</h2>
                        <iframe title="Recommandations de vote des autorités" aria-label="chart" id="datawrapper-chart-NxQPK" src="https://datawrapper.dwcdn.net/NxQPK/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>

                    <div>
                        <h2>Partis politiques delémontains</h2>
                        <iframe title="Recommandations de vote des partis Delémontains" aria-label="chart" id="datawrapper-chart-PHdob" src="https://datawrapper.dwcdn.net/PHdob/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </div>                                  
            </li>  
            <li>     
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le projet répond à un besoin réel et lancinant.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le projet n'incommodera pas les voisins.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'emplacement est facile d'accès, également éventuellement à partir d'autres communes
                            du district.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La possibilité d'installer éventuellement à proximité et non loin des bâtiments de la police cantonale 
                            une zone d'accueil pour les gens du voyage est également un plus qui pourrait résoudre ultérieurement pour 
                            de bon un autre problème annuellement récurrent de la commune.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La gestion des déchets en ville de Delémont est actuellement insatisfaisante. Pour les habitant-e-s, 
                            la dispersion des lieux de collecte, leurs horaires d’ouverture limités et le calendrier de ramassage de 
                            certains types de déchets compliquent grandement le recyclage. Le système actuel représente également une 
                            charge financière importante pour la Municipalité et pose de nombreux problèmes, notamment pour la 
                            collecte des encombrants. Une déchetterie permettra d’améliorer nettement la situation. Le site retenu aux 
                            Prés-Roses est idéal, en raison de son accès aisé par tous les modes de transport et de son emprise limitée 
                            sur les terres agricoles. Un système de ramassage à domicile est aussi prévu pour les personnes ne pouvant 
                            pas se rendre sur le site de la déchetterie.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le parti socialiste delémontain appelle ainsi à soutenir la modification du Plan d’aménagement local proposée. 
                            Cela constitue la première étape en vue de la réalisation d’une déchetterie à cet emplacement, en laissant toutes 
                            les options ouvertes quant à la réalisation du projet, qui pourra être conduit soit par le SEOD, soit par la 
                            Ville de Delémont en collaboration ou non avec d’autres communes.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le PSD salue également le fait que cette votation puisse permettre de confirmer la parcelle voisine comme 
                            emplacement potentiel pour une aire d’accueil des gens du voyage, en fonction des intentions cantonales et fédérales.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <h4>Les arguments contre le texte seront bientôt disponibles !</h4>
                <!--<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
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
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>