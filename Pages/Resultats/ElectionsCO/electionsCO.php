<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Elections communales (Jura)</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        
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
<!-- Barre de navigation -->
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
        <h1 class="uk-heading-large">Résultats des élections communales (JU)</h1>
        <hr>
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Les résultats des élections communales d'avant 2020 seront disponibles prochainement.</p>
            <p>Il existe déjà des informations pour les communes de :</p>
                <ul>
                    <li><b>Courtételle (29 juin 2020)</b></li>
                    <li><b>Lajoux (05 juillet 2020)</b></li>
                </ul>
        </div>
        <div class="conteneur-cartes">
            <div class="uk-child-width-1-3@m uk-grid-small" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="<?php echo $districtDelemont; ?>"
                                        alt="District de Delémont"/>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">District de Delémont</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-footer">
                                <div class="uk-width-1-1">
                                    <ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>
                                    <li class="uk-parent">
                                    <a href="#">Sélectionnez une commune</a>
                                    <ul class="uk-nav-sub">
                                        <!--<li><a href="#">Boécourt</a></li>
                                        <li><a href="#">Bourrignon</a></li>
                                        <li><a href="#">Châtillon</a></li>
                                        <li><a href="#">Courchapoix</a></li>
                                        <li><a href="#">Courrendlin</a></li>
                                        <li><a href="#">Courroux</a></li>-->
                                        <li><a href="<?php echo $PHPresultatsCourtetelle?>">Courtételle</a></li>
                                        <!--<li><a href="#">Delémont</a></li>
                                        <li><a href="#">Develier</a></li>
                                        <li><a href="#">Ederswiler</a></li>
                                        <li><a href="#">Haute-Sorne</a></li>
                                        <li><a href="#">Mervelier</a></li>
                                        <li><a href="#">Mettembert</a></li>
                                        <li><a href="#">Movelier</a></li>
                                        <li><a href="#">Pleigne</a></li>
                                        <li><a href="#">Rossemaison</a></li>
                                        <li><a href="#">Saulcy</a></li>
                                        <li><a href="#">Soyhières</a></li>
                                        <li><a href="#">Val Terbi</a></li>-->
                                    </ul>
                                </li>
                                </ul>
                                </div> 
                            </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="<?php echo $districtPorrentruy; ?>"
                                             alt="District de Porrentruy">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">District de Porrentruy</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-footer">
                                <div class="uk-width-1-1">
                                    <ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>
                                    <li class="uk-parent">
                                    <a href="#">A venir</a>
                                    <!--<ul class="uk-nav-sub">
                                        <li><a href="#">Alle</a></li>
                                        <li><a href="#">La Baroche</a></li>
                                        <li><a href="#">Basse-Allaine</a></li>
                                        <li><a href="#">Beurnevésin</a></li>
                                        <li><a href="#">Boncourt</a></li>
                                        <li><a href="#">Bonfol</a></li>
                                        <li><a href="#">Bure</a></li>
                                        <li><a href="#">Clos du Doubs</a></li>
                                        <li><a href="#">Coeuve</a></li>
                                        <li><a href="#">Cornol</a></li>
                                        <li><a href="#">Courchavon</a></li>
                                        <li><a href="#">Courgenay</a></li>
                                        <li><a href="#">Courtedoux</a></li>
                                        <li><a href="#">Damphreux</a></li>
                                        <li><a href="#">Fahy</a></li>
                                        <li><a href="#">Fontenais</a></li>
                                        <li><a href="#">Grandfontaine</a></li>
                                        <li><a href="#">Haute-Ajoie</a></li>
                                        <li><a href="#">Lugnez</a></li>
                                        <li><a href="#">Porrentruy</a></li>
                                        <li><a href="#">Vendlincourt</a></li>
                                    </ul>-->
                                </li>
                                </ul>
                                </div> 
                            </div>    
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="<?php echo $districtFranchesMontagnes; ?>" alt="District des Franches-Montagnes">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">District des Franches-Montagnes</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-footer">
                                <div class="uk-width-1-1">
                                    <ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>
                                    <li class="uk-parent">
                                    <a href="#">Sélectionnez une commune</a>
                                    <ul class="uk-nav-sub">
                                        <!--<li><a href="#">Le Bémont</a></li>
                                        <li><a href="#">Les Bois</a></li>
                                        <li><a href="#">Les Breuleux</a></li>
                                        <li><a href="#">Les Enfers</a></li>
                                        <li><a href="#">Les Genevez</a></li>-->
                                        <li><a href="<?php echo $PHPresultatsLajoux?>">Lajoux</a></li>
                                        <!--<li><a href="#">Montfaucon</a></li>
                                        <li><a href="#">Muriaux</a></li>
                                        <li><a href="#">Le Noirmont</a></li>
                                        <li><a href="#">Saignelégier</a></li>
                                        <li><a href="#">Saint-Brais</a></li>
                                        <li><a href="#">Soubey</a></li>-->
                                    </ul>
                                </li>
                                </ul>
                                </div> 
                            </div>
                    </div>
                </div>
            </div>
        </div>          
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>