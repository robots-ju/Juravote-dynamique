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
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        
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
                                        <div class="uk-card uk-width-1-1@m">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img class="uk-border-circle" width="50" height="50" src="<?php echo $inconnu ?>">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">MAD</div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom">Gabriel M. Chappuis</h3>
                                                        <p class="uk-text-meta uk-margin-remove-top">Maire de Develier</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body uk-text-justify">
                                                <p>Juravote, site internet au design simple et plaisant, informe la population, de
                                                manière indépendante et concise, sur les votations. Les arguments pour et contre,
                                                ainsi que les prises de positions des partis, sont mentionnés de façon totalement
                                                neutre. JuraVote renseigne également sur les autorités, les élections à venir, ainsi
                                                que sur les activités politiques. Les résultats des votations et élections sont
                                                consignés.</p>

                                                <p>Concentrées sur un seul site, ces informations sont accessibles en tout temps et
                                                assurent une partialité et neutralité, tant estimées par la population suisse. Cet
                                                avantage permet à tout un chacun d'être informé de façon claire et objective. Cette
                                                source d'informations fiable devrait aussi intéresser les communes et autres
                                                instances politiques, aujourd'hui uniquement jurassiennes, à la mise en place d'outils
                                                informatiques communs permettant de faire des économies d'échelles substantielles.
                                                Peut-être un futur "SwissVote".</p>

                                                <p>Nous félicitons vivement toute cette jeune équipe pour leur intérêt à la chose
                                                publique et la mise en oeuvre de ce formidable support et leur souhaitons plein succès.</p>
                                            </div>      
                                        </div>

                                        <!--<div class="uk-card uk-width-1-1@m">
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
                                        <div class="uk-card uk-width-1-1@m">
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
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="uk-width-1-4@m uk-flex-first@m">
                        <div class="uk-card uk-card-body uk-padding-remove">
                            <h3 class="uk-heading-divider">Prochains événements</h3>
                            <a href="<?php echo $PHPvotationsCHaccueil ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations fédérales</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPvotationsDelemont ?>">   
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votation Delémont</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionLajoux ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Lajoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPvotationValTerbiAccueil ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations Val-Terbi</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionsJUaccueil ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Jura</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionBonfol ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Bonfol</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionChatillon ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Election Châtillon</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionCourtedoux ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Courtedoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionMovelier ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Movelier</h3>
                                    </div>
                                </div>
                            </a>
                            <!--<a href="<?php echo $PHPelectionsJUGouvernement2 ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">08.11</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections Jura</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $fichier ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">29.11</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations fédérales</h3>
                                    </div>
                                </div>
                            </a>-->
                        </div>
                    </div>


                    <div class="uk-width-1-4@m">
                        <div class="uk-card uk-card-body uk-padding-remove">
                            <h3 class="uk-heading-divider">Législatifs communaux</h3>
                            <a href="<?php echo $siteBure ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">21.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Bure</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteHauteSorne ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">21.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Haute-Sorne</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteBourrignon ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">22.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Bourrignon</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteCoeuve ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">22.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Coeuve</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteValTerbi ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">22.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Val-Terbi</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteRossemaison ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">28.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Rossemaison</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteCourgenay ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">28.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Courgenay</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteSoyhieres ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">29.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Soyhières</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteBreuleux ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">05.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Les Breuleux</h3>
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