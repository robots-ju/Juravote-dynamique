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
        <h1 class="uk-heading-large">Votations Haute-Sorne du 7 mars 2021 : Modification du plan de zones à proximité du home médicalisé
        Claire-Fontaine et du règlement sur les constructions</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <h3>Le projet</h3>
                <hr>                

                <div class="uk-column-1-2@m uk-column-1-1@s">   
                    <h5>Modification de l'affectation</h5>
                    <hr>
                    <p>La Résidence Claire-Fontaine est un établissement médico-social (EMS) qui accueille des personnes
                    en âge de retraite, dont un maintien à domicile n'est plus possible. Aujourd’hui, 50 résidents sont hébergés
                     dans cette structure. Une nouvelle construction est en projet dans le secteur des Jardins de la Tuilerie.
                    </p>

                    <p>En parallèle, le Conseil de fondation souhaite diversifier son activité et répondre à une demande de plus
                    en plus importante, en proposant la prise en charge de personnes dont la dépendance est très
                    importante (malades type Alzheimer, démence sénile, etc.). Dans ce but, il souhaite réhabiliter les
                    locaux de l’actuelle Résidence Claire-Fontaine en créant une unité de vie psycho-gériatrique (UVP) de
                    28 lits.
                    </p>

                    <p>Cette nouvelle activité s’accompagnera d’un besoin accru en personnel soignant et donc en places de
                    parcs. Ce besoin en stationnement nécessite l’extension de l’affectation en zone d’utilité publique du
                    secteur à partir du home actuel en direction de l’Est. En effet, l’affectation actuelle en zone d’habitation
                    n’est pas adaptée au projet de stationnement du Conseil de fondation. L’accès à ce parking est prévu
                    par la rue Champ Hulay.
                    </p>          

                    <h5>Modification du règlement communal sur les constructions (RCC)</h5>
                    <hr>
                    <p>En parallèle à cette modification, les autorités communales souhaitent adapter le règlement communal
                    de la zone MAe (zone mixte) située a proximité. Il s’agit de pouvoir accueillir en zone MAe de l’activité commerciale
                    non liée à une activité afin de pouvoir accueillir de nouveaux commerçants et ainsi créer des synergies
                    avec le Jura Centre. Il s’agit également de modifier l’indice d’utilisation lié à cette zone et de rendre
                    l’indice maximum admis « sans objet ». Les autorités estiment que la maitrise du volume à construire
                    est assurée par les dispositions de hauteurs et hauteur totale.
                    </p>  
                    
                    <p>Cette modification est accompagnée d’une mise en conformité du RCC avec les nouvelles dispositions
                    du plan directeur cantonal qui fixent un minimum à l’indice d’utilisation de 0,4 pour la zone mixte, qui
                    limitent les aires de stationnement à 1800m2 et qui imposent un plan de mobilité obligatoire pour les
                    entreprises de plus de 20 équivalents plein temps.
                    </p>
                </div>

                <h3>La question qui vous est posée :</h3>
                    <b><p>Acceptez-vous, selon le message n° 151 du Conseil général, la modification du plan de
                    zones (MPZ) à proximité du home médicalisé Claire-Fontaine et la modification du
                    règlement sur les constructions (RCC) pour la zone MAe (zone mixte) ?</p></b>
            </li>
            <li>
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div>
                        <h2>Autorités</h2>
                        <iframe title="Recommandations de vote des autorités Haute-Sorne" aria-label="chart" id="datawrapper-chart-dzoWI" src="https://datawrapper.dwcdn.net/dzoWI/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>

                    <div>
                        <h2>Partis politiques Haute-Sorne</h2>
                        <iframe title="Recommandations de vote des partis communaux_HauteSorne_20210307_MPZ" aria-label="chart" id="datawrapper-chart-fPcMS" src="https://datawrapper.dwcdn.net/fPcMS/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </div>                                  
            </li>  
            <li>     
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de fondation Claire-Fontaine</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Nous souhaitons mettre à disposition des résidents de nouveaux locaux et leur offrir un lieu
                            de vie agréable, convivial et adapté à leurs besoins.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le nouveau bâtiment respectera les nouvelles prescriptions (chambre à 1 lit) et permettra d'offrir
                            aux résidents de l'EMS une structure d'accueil mdoerne et efficace.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La modification du RCC permettra de créer des synergies avec JuraCentre, et donc de pouvoir
                            accueillir de l'activité commerciale non liée à une activité.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les nouvelles dispositions cantonales en la matière seront intégrées dans les modifications du RCC (limite
                            des aires de stationnement à 1800 mètres carrés et imposition d'un plan de mobilité pour les entreprises de
                            plus de 20 équivalents plein temps.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les nouvelles dispositions cantonales en la matière seront intégrées dans les modifications du RCC (limite
                            des aires de stationnement à 1800 mètres carrés et imposition d'un plan de mobilité pour les entreprises de
                            plus de 20 équivalents plein temps.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI-RC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La modification du plan de zone aux alentours du Home médicalisé permettra l'extension futur des 
                            infrastructures et la création de places de parc pour le personnel. Cela va dans le sens d'un développement 
                            de lieux d'accueil des ainés de notre Commune et de notre région. </p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <h4>Il n'y a pas d'oppositions à ce projet !</h4>                
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