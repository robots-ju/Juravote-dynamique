<!DOCTYPE php>
<php lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Commissions communales (Jura)</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssinstances; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssgouvernementCO; ?>"/>
        
        
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Commissions communales (Jura)</h1>
        <h4>Les données pour toutes les communes seront disponibles prochainement !</h4>
        <hr>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-body">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <div class="uk-width-auto">
                                <img width="150" height="150" src="<?php echo $districtDelemont; ?>"
                                     alt="District de Delémont">
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
                                        <!--<li><a href="Boécourt/2019_2023/GouvernementBoécourt.php">Boécourt</a></li>
                                        <li><a href="Bourrignon/2019_2023/GouvernementBourrignon.php">Bourrignon</a></li>-->
                                        <li><a href="<?php echo $PHPCommissionsChatillon ?>">Châtillon</a></li>
                                        <!--<li><a href="Courchapoix/2019_2023/GouvernementCourchapoix.php">Courchapoix</a></li>
                                        <li><a href="Courrendlin/2019_2023/GouvernementCourrendlin.php">Courrendlin</a></li>
                                        <li><a href="Courroux/2019_2023/GouvernementCourroux.php">Courroux</a></li>
                                        <li><a href="Courtételle/2019_2023/GouvernementCourtételle.php">Courtételle</a></li>
                                        <li><a href="Delémont/2019_2023/GouvernementDelémont.php">Delémont</a></li>
                                        <li><a href="Develier/2019_2023/GouvernementDevelier.php">Develier</a></li>
                                        <li><a href="Ederswiler/2019_2023/GouvernementEderswiler.php">Ederswiler</a></li>
                                        <li><a href="Haute-Sorne/2019_2023/GouvernementHaute-Sorne.php">Haute-Sorne</a></li>
                                        <li><a href="Mervelier/2019_2023/GouvernementMervelier.php">Mervelier</a></li>
                                        <li><a href="Mettembert/2019_2023/GouvernementMettembert.php">Mettembert</a></li>
                                        <li><a href="Movelier/2019_2023/GouvernementMovelier.php">Movelier</a></li>
                                        <li><a href="Pleigne/2019_2023/GouvernementPleigne.php">Pleigne</a></li>
                                        <li><a href="Rossemaison/2019_2023/GouvernementRossemaison.php">Rossemaison</a></li>
                                        <li><a href="Saulcy/2019_2023/GouvernementSaulcy.php">Saulcy</a></li>
                                        <li><a href="Soyhières/2019_2023/GouvernementSoyhières.php">Soyhières</a></li>
                                        <li><a href="Val Terbi/2019_2023/GouvernementVal Terbi.php">Val Terbi</a></li>-->
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
                                    <a href="#">Sélectionnez une commune</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="Alle/2019_2023/GouvernementAlle.php">Alle</a></li>
                                        <li><a href="La Baroche/2019_2023/GouvernementLa Baroche.php">La Baroche</a></li>
                                        <li><a href="Basse-Allaine/2019_2023/GouvernementBasse-Allaine.php">Basse-Allaine</a></li>
                                        <li><a href="Beurnevesin/2019_2023/GouvernementBeurnevesin.php">Beurnevésin</a></li>
                                        <li><a href="Boncourt/2019_2023/GouvernementBoncourt.php">Boncourt</a></li>
                                        <li><a href="Bonfol/2019_2023/GouvernementBonfol.php">Bonfol</a></li>
                                        <li><a href="Bure/2019_2023/GouvernementBure.php">Bure</a></li>
                                        <li><a href="Clos du Doubs/2019_2023/GouvernementClos du Doubs.php">Clos du Doubs</a></li>
                                        <li><a href="Coeuve/2019_2023/GouvernementCoeuve.php">Coeuve</a></li>
                                        <li><a href="Cornol/2019_2023/GouvernementCornol.php">Cornol</a></li>
                                        <li><a href="Courchavon/2019_2023/GouvernementCourchavon.php">Courchavon</a></li>
                                        <li><a href="Courgenay/2019_2023/GouvernementCourgenay.php">Courgenay</a></li>
                                        <li><a href="Courtedoux/2019_2023/GouvernementCourtedoux.php">Courtedoux</a></li>
                                        <li><a href="Damphreux/2019_2023/GouvernementDamphreux.php">Damphreux</a></li>
                                        <li><a href="Fahy/2019_2023/GouvernementFahy.php">Fahy</a></li>
                                        <li><a href="Fontenais/2019_2023/GouvernementFontenais.php">Fontenais</a></li>
                                        <li><a href="Grandfontaine/2019_2023/GouvernementGranfontaine.php">Grandfontaine</a></li>
                                        <li><a href="Haute-Ajoie/2019_2023/GouvernementHaute-Ajoie.php">Haute-Ajoie</a></li>
                                        <li><a href="Lugnez/2019_2023/GouvernementLugnez.php">Lugnez</a></li>
                                        <li><a href="Porrentruy/2019_2023/GouvernementPorrentruy.php">Porrentruy</a></li>
                                        <li><a href="Vendlincourt/2019_2023/GouvernementVendlincourt.php">Vendlincourt</a></li>
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
                                <img width="150" height="150" src="<?php echo $districtFranchesMontagnes; ?>"
                                     alt="District des Franches-Montagnes">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">District des
                                    Franches-Montagnes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-width-1-1">
                            <ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>
                                <li class="uk-parent">
                                    <a href="#">Sélectionnez une commune</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="Le Bémont/2019_2023/GouvernementLe Bémont.php">Le Bémont</a></li>
                                        <li><a href="Les Bois/2019_2023/GouvernementLes Bois.php">Les Bois</a></li>
                                        <li><a href="Les Breuleux/2019_2023/GouvernementLes Breuleux.php">Les Breuleux</a></li>
                                        <li><a href="Les Enfers/2019_2023/GouvernementLes Enfers.php">Les Enfers</a></li>
                                        <li><a href="Les Genevez/2019_2023/GouvernementLes Genevez.php">Les Genevez</a></li>
                                        <li><a href="Lajoux/2019_2023/GouvernementLajoux.php">Lajoux</a></li>
                                        <li><a href="Montfaucon/2019_2023/GouvernementMontfaucon.php">Montfaucon</a></li>
                                        <li><a href="Muriaux/2019_2023/GouvernementMuriaux.php">Muriaux</a></li>
                                        <li><a href="Le Noirmont/2019_2023/GouvernementLe Noirmont.php">Le Noirmont</a></li>
                                        <li><a href="Saignelégier/2019_2023/GouvernementSaignelégier.php">Saignelégier</a></li>
                                        <li><a href="Saint-Brais/2019_2023/GouvernementSaint-Brais.php">Saint-Brais</a></li>
                                        <li><a href="Soubey/2019_2023/GouvernementSoubey.php">Soubey</a></li>
                                    </ul>
                                </li>
                            </ul>
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
</php>