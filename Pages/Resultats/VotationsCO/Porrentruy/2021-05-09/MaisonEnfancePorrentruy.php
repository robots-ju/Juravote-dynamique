<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Porrentruy 09.05.2021</title>
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
            <h1 class="uk-heading-large">Agrandissement de la Maison de l’enfance</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h3>Préambule</h3>
                    <p>Texte</p>

                    <h3>Etapes réalisées</h3>     
                    <h5>Choix du site</h5>                 
                    <p>Texte</p>

                    <h5>Définition du nombre de places d'accueil</h5>                 
                    <p>Texte</p>
                    
                    <h5>Rédaction d'un cahier des charges</h5>                 
                    <p>Texte</p>

                    <h5>Etude de faisabilité</h5>                 
                    <p>Texte</p>

                    <h5>Appel d'offres d'honoraires à un groupement multidisciplinaire de mandataires</h5>                 
                    <p>Texte</p>

                    <h5>Crédit d'études</h5>                 
                    <p>Texte</p>

                    <h5>Elaboration du projet de réalisation</h5>                 
                    <p>Texte</p>

                    <h5>Permis de construire</h5>                 
                    <p>Texte</p>

                    <h5>Appels d'offre</h5>                 
                    <p>Texte</p>

                    <h3>Enveloppe financière</h3>
                    <table class="uk-table uk-table-striped uk-table-hover">
                        <thead>
                            <tr>
                                <th>Objets et parties d'ouvrage</th>
                                <th>Montants TTC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td><b>TEXTE</b></td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td>TEXTE</td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                            <tr>
                                <td><b>TEXTE</b></td>
                                <td class="uk-align-right">0000</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <h3>Financement</h3>                        
                    <p>Texte</p>

                    <h3>Coûts de fonctionnement</h3>                        
                    <p>Texte</p>

                    <h3>Planning</h3>                        
                    <p>Texte</p>

                    <h3>Développement durable</h3>                        
                    <p>Texte</p>
                    

                    <h3>La question qui vous est posée :</h3>
                    <b><p>Approuvez-vous un crédit maximal de CHF 6'300'O0O. -, à couvrir par voie d'emprunt,
                    en vue de la réalisation de l'agrandissement de la Maison de l'enfance ?</p></b>
                </li>
                <li>
                    <div class="uk-column-1-2@m uk-column-1-1@s">  
                        <h2>Autorités communales</h2>
                        <iframe title="Recommandations de vote des autorités_Maison de l'Enfance" aria-label="chart" id="datawrapper-chart-OVFeP" src="https://datawrapper.dwcdn.net/OVFeP/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h2>Partis politiques</h2>
                        <iframe title="Recommandations de vote des partis_Maison de l'Enfance" aria-label="chart" id="datawrapper-chart-kqNHM" src="https://datawrapper.dwcdn.net/kqNHM/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>    
                    <p>Les arguments seront bientôt disponibles !</p>
                    <!--<div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
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
                    </div>-->
                </li>
                <li>
                <p>Les arguments seront bientôt disponibles !</p>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>