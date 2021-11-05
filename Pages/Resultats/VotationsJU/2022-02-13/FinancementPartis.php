<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation jurassienne 13.02.2022</title>
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
            <h1 class="uk-heading-large">Initiative cantonale « Partis politiques : place à la transparence »</h1>
            <hr>
            <h3 class="uk-text-center" style="padding-bottom: 15%">Les informations seront bientôt disponibles !</h3>
            <!--<div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 5%">
                        <h1>L'initiative</h1>
                        <p>Le syndicat Unia Transjurane lance une initiative pour que l'égalité salariale
                        hommes-femmes soit enfin concrètement réalisée dans le Canton du Jura. Ce principe
                        est évoqué dans la Constitution jurassienne, mais rien de concret n'a été entrepris
                        jusqu'à présent pour le traduire en réalité, tant que le Jura est le Canton où l'on
                        enregistre le taux le plus élévé d'inégalités.</p>

                        <p>Maintenant il est temps de passer des belles paroles aux actes.
                        L'égalité salariale, doit être une coutume courante de notre canton !</p>
                        
                        <h1>Le texte de l'initiative</h1>
                        <p>Les citoyennes et les citoyens de la République et canton du Jura soussignés, conformément
                        à l’article 75 alinéa 1 de la Constitution cantonale ainsi qu’aux articles 85 ss et 91 de la
                        loi sur les droits politiques du 26.10.1978 demandent :</p>

                        <p><b>une modification de la loi cantonale portant introduction à la loi fédérale sur l’égalité
                        entre femmes et hommes, dans le sens de l’instauration de mesures permettant la concrétisation
                        effective du principe d’égalité en matière de salaires.</p></b>

                        <h1>Situation de l'égalité salariale</h1>
                        <ul>
                            <li>Un homme en Suisse touche 5’000.- / mois</li>

                            <li>Une femme en Suisse touche 4’100.- / mois (- 18 %)</li>

                            <li>Une femme dans le Jura touche 3’850.- / mois (- 23 %)</li>

                            <li>21,3 % de différences dans le secteur privé en Suisse</li>
                            <li>16,5 % de différences dans le secteur public en Suisse</li>
                            <li>0,5 % de différences dans le secteur public dans le Jura</li>
                        </ul>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s">                       
                       <h1>Contraintes du droit fédéral</h1> 
                        <p>L’initiative ne pourrait être réalisée totalement qu’à travers une révision du droit fédéral,
                        car c'est à l'échélon fédéral que peuvent être prises les décisions à ce sujet.</p>

                        <h1>La question qui vous est posée :</h1>
                        <b><p>Acceptez-vous l'initiative populaire "Egalité salariale ? Concrétisons !" ?</p></b>
                        
                        <h1>Actions du Gouvernement jurassien</h1>
                        <p>Le Gouvernement jurassien souhaite que la votation du 13 juin donne un signal fort
                        sur le fait que les inégalités salariales ne doivent plus perdurer en Suisse.</p>

                        <ul>
                            <li>Le Gouvernement veut garantir l’égalité salariale entre femmes et hommes dans les entreprises et entités subventionnées par l’Etat.</li>

                            <li>Il propose également d’abaisser le seuil fixé par le droit fédéral pour l’analyse obligatoire de l’égalité salariale de 100 à 50 employés-es.</li>

                            <li>Le Parlement jurassien sera appelé à se prononcer prochainement sur ces mesures.</li>
                        </ul>
                    </div>                    
                </li>

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">  
                        <h2>Autorités cantonales</h2>
                        <iframe title="Recommandations de vote des autorités_Initiative populaire &quot;Egalité salariale&quot; " aria-label="chart" id="datawrapper-chart-G4kAD" src="https://datawrapper.dwcdn.net/G4kAD/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h2>Partis politiques</h2>
                        <iframe title="Recommandations de vote des partis jurassiens_Initiative populaire &quot;Egalité salariale&quot;" aria-label="chart" id="datawrapper-chart-mdCu7" src="https://datawrapper.dwcdn.net/mdCu7/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h2>Partis politiques (sections jeunes)</h2>
                        <iframe title="Recommandations de vote des jeunes partis jurassiens_Initiative populaire &quot;Egalité salariale&quot;" aria-label="chart" id="datawrapper-chart-isNGY" src="https://datawrapper.dwcdn.net/isNGY/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  

                <li>            
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Unia</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les discriminations, quelques qu’elles soient, ne peuvent plus être tolérées dans une
                            société moderne et riche. Que la discrimination soit basée sur la race, la religion, 
                            l’orientation sexuelle ou le genre, elle constitue une atteinte à l’intégrité des personnes. 
                            Elle est une question fondamentale de respect et de dignité. C’est un droit pour les femmes 
                            et une obligation pour les entreprises (publiques ou privées). En 2017, plus rien ne justifie 
                            des différences de salaires si grandes, si ce n’est l’exploitation économique des femmes…
                            parce qu’elles sont des femmes ! </p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Unia</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le maintien des inégalités salariales entre hommes et femmes permet aux milieux économiques, 
                            aux entreprises, d’avoir à disposition une main-d’œuvre à moindre coup. Il s’agit ni plus ni 
                            moins que de dumping salarial pratiqué à large échelle sur 46% de la population active.
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Unia</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Pour la société, les coûts des inégalités sont énormes ! Non seulement les milliards 
                            d’heure (et de francs) que représentent les activités non rémunérées assumées essentiellement 
                            par des femmes ne sont pas reconnues (tâches éducatives, activités dans le ménage, etc..), 
                            mais les inégalités liées à un emploi occasionnent des pertes colossales pour les assurances 
                            sociales (cotisations), les collectivités publiques (impôts) et l’économie (consommation). 
                            Pas le moindre des paradoxes !</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Unia</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’égalité salariale ne serait pas une catastrophe économique comme les milieux économiques
                            l’affirment. Au contraire, cette perspective donnerait un nouveau souffle au développement
                            économique et social de notre canton et du pays. </p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Unia</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les places de travail les moins bien rémunérées sont occupées majoritairement par des 
                            femmes, que ce soit dans certains métiers de service (nettoyage), dans les métiers du 
                            commerce de détail (vente, coiffure, restauration, etc…) ou dans les fonctions non-qualifiées 
                            de l’industrie. </p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Unia</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le Jura connait une augmentation de la pauvreté alarmante, en particulier chez des 
                            personnes travaillant à temps plein mais ne gagnant pas assez pour vivre. De plus en plus 
                            souvent, l’aide sociale complète ces revenus dérisoires. Les femmes sont particulièrement 
                            touchées par cette évolution révoltante.</p>
                        </div>
                    </div>
                </li>
                <li>
                <h3>Les arguments contre l'initiative seront bientôt disponibles !</h3>
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