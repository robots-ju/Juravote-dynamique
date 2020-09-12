<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Modification de la loi sur la chasse</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        <script src="//cdn.amcharts.com/lib/4/core.js"></script>
        <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>


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
        <h1 class="uk-heading-large">Modification de la loi sur la chasse</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <h1>Description de la votation</h1>
                    <p>La loi actuelle remonte à 1985 et la situation a évolué depuis cette année-là. La loi révisée sur la chasse permet de mieux
                    protéger différents animaux sauvages et leurs biotopes. Elle offre par ailleurs une solution pragmatique pour gérer la cohabitation
                    avec le loup, de retour en Suisse depuis 1995. La loi révisée a pour objectif d'atténuer les conflits liés à la population de
                    loups en expansion.</p>
                    <p>Pour les opposants, cette révision a suscité un débat sans fin et des oppositions dans tous les partis. Ce que cela signifie
                    qu'elle ne satisfait à peu près personne. La révision initialement prévue devait être modérée et ne porter que sur quelques
                    points de la loi. Or, elle compromet l'ensemble du dispositif de protection des espèces.</p>
                <h1>La question qui vous est posée :</h1>
                    <b><p>Acceptez-vous la modification du 27 septembre 2019 de la loi fédérale sur la chasse et la protection des
                    mammifères et oiseaux sauvages (loi sur la chasse, LChP) ?</p></b>
            </li>
            <li>
                <h2>Partis fédéraux</h2>
                <div>
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">Verts</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PS</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PEV</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PVL</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PDC</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PBD</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PLR</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">UDC</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2>Partis jurassiens</h2>
                <div>
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">CS-POP Jura</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">Verts Jura</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PEV Jura</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PVL Jura</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PDC Jura</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PCSI Jura</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PLR Jura</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">UDC Jura</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>  
            <li>            
            <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les animaux sauvages seront mieux protégés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La Confédération apporte un soutien financier aux cantons pur la valorisation des biotopes d'animaux sauvages.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Certaines espèces sauvages d'animaux ne pourront plus être chassées.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La loi imposera aux cantons et aux paysans de construire des clotûres respectueuses afin d'éviter les accidents
                        et les blessures d'animaux.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les mesures contribuent à la cohabitation à long terme de l'homme et du loup.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La loi garantir équilibre et sécurité entre les animaux, les paysages et l'humain.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Elle promeut la diversité des espèces.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Elle protège le paysage rural.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Elle permet le maintien de pratiques nécessaires.</p>
                    </div>
                </div>               
            </li>
            <li>
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Il serait désormais possible de tuer des animaux protégés considérés
                        comme indésirables avant même qu’ils n’aient causé le moindre dommage.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les cantons pourraient dorénavant ordonner des tirs sans avoir à en référer à quiconque.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le Conseil fédéral serait en droit d’élargir à tout moment la liste des animaux protégés
                        qui peuvent être régulés, sans avoir à obtenir l’aval du Parlement ou du peuple.</p>
                    </div>
                </div>                

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La bécasse des bois, le lièvre brun et le tétras lyre peuvent ainsi être chassés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La révision de loi est inutile et compliquée.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le lynx et le loup empêchent un abroutissement excessif des jeunes arbres par les cerfs et les chevreuils.
                        Ils font partie de l’écosystème et contribuent à l’existence de forêts de protection diversifiées et stables.
                        Une régulation préventive de ces animaux porte atteinte à la forêt et s’avère contreproductive du point de
                        vue de la gestion forestière.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Un NON à la loi révisée garantit la protection des espèces et permet d’éviter que l’on assiste à un
                        foisonnement de solutions cantonales entraînant une gestion disparate et incohérente de la faune sauvage.</p>
                    </div>
                </div>
            </li>
        </ul>
</main>
</body>

<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>