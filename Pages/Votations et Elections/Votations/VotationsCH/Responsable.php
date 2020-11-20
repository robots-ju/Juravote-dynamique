<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire « Entreprises responsables – pour protéger l’être humain et l’environnement »</title>
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
            <h1 class="uk-heading-large">Initiative populaire « Entreprises responsables – pour protéger l’être humain et l’environnement »</h1>
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
                        <p>On attend des entreprises suisses qu’elles respectent également à l’étranger les droits
                        de l’homme et les normes environnementales. La Suisse a participé activement à l’élaboration
                        de normes internationales uniformes et elle a pris des mesures pour les mettre en oeuvre.
                        Pour les auteurs de l’initiative, ces mesures ne vont cependant pas assez loin. C’est pourquoi
                        ils ont lancé l’initiative pour des multinationales responsables, qui prévoit d’imposer de
                        nouvelles obligations légales aux entreprises suisses.</p>
                        <p>L’initiative demande que les entreprises suisses vérifient si les droits de l’homme et les
                        normes environnementales inter -nationalement reconnus sont également respectés à l’étranger
                        dans le cadre de leurs activités. Cette vérification ne doit pas uniquement porter sur leurs
                        propres activités, mais également sur celles de leurs filiales, de leurs fournisseurs et de leurs
                        partenaires commerciaux.</p>
                        <p>Si nécessaire, les entreprises suisses doivent prendre des mesures et en rendre compte.
                        Par ailleurs, elles répondront désormais des dommages causés par les entreprises qu’elles contrôlent,
                        sauf si elles peuvent prouver qu’elles ont respecté leurs obligations de diligence. Le Parlement a
                        adopté un contre-projet indirect à l’initiative. Celui-ci impose également l’obligation de rendre
                        compte des mesures prises et de faire preuve de diligence et prévoit une amende en cas d’infraction.
                        Il entrera en vigueur si l’initiative est rejetée et, en cas de référendum, qu’il est accepté en votation.
                
                    <h1>La question qui vous est posée :</h1>
                        <b><p>Acceptez-vous l’initiative populaire « Entreprises responsables – pour protéger l’être humain et l’environnement » ?</p></b>
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
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
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
                            <th class="uk-text-center">PCSI</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">NEUTRE</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">NEUTRE</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
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
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité bourgeois d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Protéger la bonne réputation de la Suisse</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité bourgeois d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Liberté et responsabilité vont de pair.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité bourgeois d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le respect dans les affaires est une valeur suisse.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité bourgeois d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Tenir le cap sur le plan international.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité bourgeois d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Règlementation souple sans bureaucratie.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Lorsque des multinationales comme Glencore polluent des cours d’eau ou détruisent des 
                            régions entières, elles doivent être tenues responsables !</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les multinationales doivent répondre des violations des droits humains et des atteintes à l’environnement.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le Conseil fédéral reconnaît lui aussi la nécessité d’agir. Le contre-projet n’est toutefois qu’un simple alibi.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les PME ne sont pas concernées.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les milieux économiques et politiques disent OUI.</p>
                        </div>
                    </div>
                </li>
                <li>
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'initiative affaiblit la Suisse en met donc en danger nos emplois et notre prospérité.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'initiative aurait des conséquences contreproductives.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Non seulement notre système juridique en serait surchargé, mais la Suisse enfreindrait
                            des principes juridiques internationalement reconnus si elle soumettait explicitement ces
                            cas à sa propre juridiction.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral et Parlement</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le contre-projet vise comme l’initiative à encore mieux protéger l’homme et l’environnement.
                            Il ne contient cependant pas ses éléments dommageables et ne laisse pas la Suisse faire cavalier seul.</p>
                        </div>
                    </div>
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