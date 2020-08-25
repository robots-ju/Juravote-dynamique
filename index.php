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
    </head>

    <body>
        <header>
            <div class="navbar-normal">
                <?php include "./Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
            <?php include "./Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
        
        <main>
            <section style="padding: 5%">
                <div class="uk-card uk-grid-collapse uk-child-width-1-2@m uk-child-width-1-1@s uk-padding" uk-grid>
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
                <div class="uk-grid-match uk-flex" uk-grid>
                    <div class="uk-width-expand@m">
                        <div class="uk-text-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-card uk-card-body">
                                    <h3 class="uk-heading-divider">Soutiens de Juravote</h3>
                                    <div class="uk-text-center" uk-grid>
                                        <div class="uk-card uk-width-1-2@m">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h3 class="uk-card-title uk-margin-remove-bottom">Gabriel Chappuis</h3>
                                                        <p class="uk-text-meta uk-margin-remove-top">Maire de Develier</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>      
                                        </div>

                                        <div class="uk-card uk-width-1-2@m">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
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
                                        <div class="uk-card uk-width-1-2@m">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h3 class="uk-card-title uk-margin-remove-bottom">François Brahier-Jeckelmann</h3>
                                                        <p class="uk-text-meta uk-margin-remove-top">Maire de Lajoux</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>      
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="uk-width-1-4@m uk-flex-first@m">
                        <div class="uk-card uk-card-body uk-padding-remove">
                            <h3 class="uk-heading-divider">Prochains événements</h3>
                            <a href="Pages/Votations et Elections/Votations/VotationsCH/accueil.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations fédérales</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Votations/VotationsCO/Delemont_20200927/ComplexeScolaire.php">   
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votation Delémont</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Elections/ElectionsCO/Lajoux_20200927/Accueil.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Lajoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Votations/VotationsCO/ValTerbi_20200927/Accueil.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations Val-Terbi</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Votations/VotationsCO/LesBois_20200927/Accueil.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votation Les Bois</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Elections/ElectionsJU/Accueil.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Jura</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Elections/ElectionsCO/Bonfol_20201018/VicePresidentAssemblee.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Bonfol</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Elections/ElectionsCO/Chatillon_20201018/MembreCommissionEcole.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Châtillon</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Elections/ElectionsCO/Courtedoux_20201018/VicePresidentAssemblee.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Courtedoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Elections/ElectionsCO/Movelier_20201018/MembreCercleScolaire.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Movelier</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="Pages/Votations et Elections/Elections/ElectionsJU/Gouvernement_20201108.php">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">08.11</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Jura</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">29.11</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations fédérales (à venir)</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="uk-width-1-4@m">
                        <div class="uk-card uk-card-body uk-padding-remove">
                            <h3 class="uk-heading-divider">Législatifs communaux</h3>
                            <a href="http://www.courchapoix.ch/cpx/" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">31.08</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Courchapoix</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="https://www.boncourt.ch/ADMINISTRATION/ORGANISATION/Assemblee-communale-et-commissions" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">01.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Boncourt</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">01.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">La Chaux-des-Breuleux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">01.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Fahy</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">03.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Châtillon</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">03.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Pleigne</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">03.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Cornol</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">07.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Mettembert</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">16.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Movelier</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
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