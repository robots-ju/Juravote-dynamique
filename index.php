<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include './variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="./index.css"/>
        
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

        <style>
            body{
                background-color: #F5F5F5;
            }
        </style>
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
            <section style="padding: 5%">
                <div class="uk-card uk-card-hover uk-grid-collapse uk-child-width-1-2@m uk-child-width-1-1@s uk-padding" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="<?php echo $juravoteTwitter ?>" alt="Juravote">
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Bienvenue sur Juravote !</h3>
                            <p>Nous vous souhaitons une agréable visite et restons à disposition pour toute proposition ou question !</p>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-match" uk-grid>
                    <div class="uk-width-1-1@m"></div>
                    <div class="uk-width-auto">
                        <div class="uk-card uk-card-hover uk-card-body">
                            <h3 class="uk-heading-divider">Prochains événements</h3>
                            <a href="#">
                                <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Votations fédérales</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#">   
                                <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Votation Delémont</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Elections Lajoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Elections Jura</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Elections Jura</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="uk-width-expand@m">
                        <div class="uk-text-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-card uk-card-hover uk-card-body">
                                <h3 class="uk-heading-divider">Soutiens Juravote</h3>
                                <div class="uk-text-center" uk-grid>
                                    <div class="uk-card uk-card-hover uk-width-1-2@m">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $ChappuisGabrielM ?>">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Gabriel M. Chappuis</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top">Maire de Develier</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        </div>      
                                    </div>

                                    <div class="uk-card uk-card-hover uk-width-1-2@m">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="50" height="50" src="<?php echo $ChappuisGabrielM ?>">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Jean-Bernard Vallat</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top">Maire de Haute-Sorne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        </div>      
                                    </div>  
                                </div>
                            </div>
                            <hr class="uk-divider-icon">  
                            <div class="uk-width-1-1@m">
                                <div class="uk-card uk-card-hover uk-card-body">
                                <h3 class="uk-heading-divider">Actualités</h3>
                            </div>
                        </div>
                    </div>  
                </div>
                </div>                                                 

                <div class="uk-width-auto@m">
                    <div class="uk-card uk-card-hover uk-card-body">
                        <h3 class="uk-heading-divider">Législatifs communaux</h3>
                        <a href="http://www.courrendlin.ch/Decouvrez-le-site-internet-de-la-Municipalite-de-Courrendlin-Canton-du-Jura-Suisse.html" target="blank">
                            <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">17.08</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Courrendlin</h3>
                                </div>
                            </div>
                        </a>
                        <a href="https://www.develier.ch/fr/Vivre/Actualites/News/Assemblee-communale-du-lundi-17-aout-2020.html" target="blank">
                            <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">17.08</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Develier</h3>
                                </div>
                            </div>
                        </a>
                        <a href="https://muriaux.ch/officiel/assemblee/" target="blank">
                            <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.08</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Muriaux</h3>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.damphreux.ch/index.html" target="blank">
                            <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">20.08</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Damphreux</h3>
                                </div>
                            </div>
                        </a>
                        <a href="https://www.lesbois.ch/fr/Autorites-politiques/Conseil-general/Ordres-du-jour-des-seances.html" target="blank">
                            <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">24.08</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Les Bois</h3>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.courchapoix.ch/cpx/" target="blank">
                            <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">31.08</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Courchapoix</h3>
                                </div>
                            </div>
                        </a>
                        <a href="https://www.boncourt.ch/ADMINISTRATION/ORGANISATION/Assemblee-communale-et-commissions" target="blank">
                            <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">01.09</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Boncourt</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </body>

    <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>