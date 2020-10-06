<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire « Pour une interdiction du financement des producteurs de matériel de guerre »</title>
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
            <h1 class="uk-heading-large">Initiative populaire « Pour une interdiction du financement des producteurs de matériel de guerre »</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h1>Description de la votation</h1>
                        <p>Comme la plupart des pays, la Suisse participe à la fabrication de matériel de guerre,
                        et ce de deux manières : des entreprises suisses produisent des armes ou des composants
                        d’armes, et des investisseurs suisses participent au financement de producteurs de
                        matériel de guerre en Suisse et à l’étranger. Dans notre pays, les règles sont strictes :
                        il faut une autorisation pour fabriquer ou exporter du matériel de guerre. Les armes
                        nucléaires, biologiques et chimiques, les mines antipersonnel et les armes à sous-munitions
                        sont prohibées. Il est interdit de les fabriquer ou d’en faire le commerce. Il est également
                        interdit d’en financer la production (interdiction de financement).</p>
                        <p>Le comité d’initiative estime que l’interdiction de financement ne va pas assez loin.
                        Il veut donc l’étendre au financement du matériel de guerre quel qu’il soit, en englobant
                         par exemple les fusils d’assaut, les véhicules blindés et leurs composants. Il sera interdit
                         d’octroyer des crédits aux producteurs et également de détenir des actions de ces producteurs
                         ou des produits d’investissement comme des fonds contenant de telles actions. L’interdiction 
                         s’appliquera à la Banque nationale suisse, aux fondations, à l’AVS/AI et aux caisses de pension.</p>
                        <p>La Suisse devra en outre s’engager dans le monde entier afin que l’interdiction de financement
                        s’applique aussi aux banques et aux assurances. L’impact économique se fera ressentir non seulement
                        sur les groupes d’armement mais aussi sur les sous-traitants, parmi lesquels de nombreuses petites
                        et moyennes entreprises (PME).</p>
                
                    <h1>La question qui vous est posée :</h1>
                        <b><p>Acceptez-vous l’initiative populaire « Pour une interdiction du financement des producteurs de matériel de guerre » ?</p></b>
                </li>
                <li>
                <h2>Partis fédéraux</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PBD</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                        <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Partis jurassiens</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">CS-POP</th>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PCSI</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">A venir</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Autorités</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Conseil fédéral</th>
                            <th class="uk-text-center">Conseil des Etats</th>
                            <th class="uk-text-center">Conseil national</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                        </tr>
                    </tbody>
                </table> 
                </li>  
                <li>            
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'initiative contre le commerce de guerre est un pas vers un monde plus pacifique.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'initiative contre le commerce de guerre combat les causes d'exil.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'initiative contre le commerce de guerre protège la neutralité et la crédibilité de la Suisse.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'initiative contre le commerce de guerre est sensée économiquement.</p>
                        </div>
                    </div>
                </li>
                <li>
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