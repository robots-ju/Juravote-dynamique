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
            <h3 class="uk-text-center" style="padding-bottom: 10%">Les informations seront bientôt disponibles !</h3>
            <!--<div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h1>Extension des écoles de Courrendlin, un pari pour l'avenir</h1>
                    <p>Texte</p>

                    <h1>De la nécessité de l'extension des écoles de Courrendlin</h1>                   
                    <p>Texte</p>
                    
                    <div class="uk-column-1-2@m" style="padding-top: 2%">    
                        <h1>Le site dans le détail</h1>                        
                        <p>Texte</p>

                        <h1>Choix du projet</h1>                        
                        <p>Texte</p>
                    </div>                    

                    <h1>La question qui vous est posée :</h1>
                    <b><p>Texte</p></b>
                </li>
                <li>
                    <h2>Autorités et partis</h2>
                    <iframe title="Recommandations de vote des autorités et des partis communaux" aria-label="chart" id="datawrapper-chart-slXyQ" src="https://datawrapper.dwcdn.net/slXyQ/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                    </script>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>