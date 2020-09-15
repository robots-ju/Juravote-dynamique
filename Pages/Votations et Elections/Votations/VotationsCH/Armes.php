<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Référendum contre le financement d'armes</title>
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
            <h1 class="uk-heading-large">texte</h1>
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
                        <p>texte</p>
                
                    <h1>La question qui vous est posée :</h1>
                        <b><p>texte</p></b>
                </li>
                <li>
                <h2>Partis fédéraux</h2>
                    <div>
                        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">Verts</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PS</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PEV</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PVL</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PDC</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PBD</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PLR</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">UDC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Partis jurassiens</h2>
                    <div>
                        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">CS-POP Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">Verts Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PEV Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PS Jura</p>
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
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
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
                <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative combat les déplacements forcés de populations</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative contribue à rendre le monde plus pacifique</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative protège la neutralité de la Suisse</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative est la condition sine qua non d’une politique de sécurité nationale et d’une politique extérieure crédible</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative pousse la Suisse à avoir une politique de sécurité nationale et une politique extérieure crédible et cohérente</p>
                        </div>
                    </div>


                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pbd uk-border-rounded">PBD</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>
                </li>
                <li>
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
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