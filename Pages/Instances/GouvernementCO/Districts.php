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
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Exécutifs communaux (Jura)</h1>
        <hr>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-body">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <div class="uk-width-auto">
                                <img width="150" height="150" src="../../img/Districts/Delemont.png"
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
                                        <li><a href="Boécourt.html">Boécourt</a></li>
                                        <li><a href="Bourrignon.html">Bourrignon</a></li>
                                        <li><a href="Châtillon.html">Châtillon</a></li>
                                        <li><a href="Courchapoix.html">Courchapoix</a></li>
                                        <li><a href="Courrendlin.html">Courrendlin</a></li>
                                        <li><a href="Courroux.html">Courroux</a></li>
                                        <li><a href="Courtételle.html">Courtételle</a></li>
                                        <li><a href="Delémont.html">Delémont</a></li>
                                        <li><a href="Develier.html">Develier</a></li>
                                        <li><a href="Ederswiler.html">Ederswiler</a></li>
                                        <li><a href="Haute-Sorne.html">Haute-Sorne</a></li>
                                        <li><a href="Mervelier.html">Mervelier</a></li>
                                        <li><a href="Mettembert.html">Mettembert</a></li>
                                        <li><a href="Movelier.html">Movelier</a></li>
                                        <li><a href="Pleigne.html">Pleigne</a></li>
                                        <li><a href="Rossemaison.html">Rossemaison</a></li>
                                        <li><a href="Saulcy.html">Saulcy</a></li>
                                        <li><a href="Soyhières.html">Soyhières</a></li>
                                        <li><a href="Val Terbi.html">Val Terbi</a></li>
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
                                <img width="150" height="150" src="../../img/Districts/Porrentruy.png"
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
                                        <li><a href="Alle.html">Alle</a></li>
                                        <li><a href="La Baroche.html">La Baroche</a></li>
                                        <li><a href="Basse-Allaine.html">Basse-Allaine</a></li>
                                        <li><a href="Beurnevesin.html">Beurnevésin</a></li>
                                        <li><a href="Boncourt.html">Boncourt</a></li>
                                        <li><a href="Bonfol.html">Bonfol</a></li>
                                        <li><a href="Bure.html">Bure</a></li>
                                        <li><a href="Clos du Doubs.html">Clos du Doubs</a></li>
                                        <li><a href="Coeuve.html">Coeuve</a></li>
                                        <li><a href="Cornol.html">Cornol</a></li>
                                        <li><a href="Courchavon.html">Courchavon</a></li>
                                        <li><a href="Courgenay.html">Courgenay</a></li>
                                        <li><a href="Courtedoux.html">Courtedoux</a></li>
                                        <li><a href="Damphreux.html">Damphreux</a></li>
                                        <li><a href="Fahy.html">Fahy</a></li>
                                        <li><a href="Fontenais.html">Fontenais</a></li>
                                        <li><a href="Granfontaine.html">Grandfontaine</a></li>
                                        <li><a href="Haute-Ajoie.html">Haute-Ajoie</a></li>
                                        <li><a href="Lugnez.html">Lugnez</a></li>
                                        <li><a href="Porrentruy.html">Porrentruy</a></li>
                                        <li><a href="Vendlincourt.html">Vendlincourt</a></li>
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
                                <img width="150" height="150" src="../../img/Districts/Franches-montagnes.png"
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
                                        <li><a href="Le Bémont.html">Le Bémont</a></li>
                                        <li><a href="Les Bois.html">Les Bois</a></li>
                                        <li><a href="Les Breuleux.html">Les Breuleux</a></li>
                                        <li><a href="Les Enfers.html">Les Enfers</a></li>
                                        <li><a href="Les Genevez.html">Les Genevez</a></li>
                                        <li><a href="Lajoux.html">Lajoux</a></li>
                                        <li><a href="Montfaucon.html">Montfaucon</a></li>
                                        <li><a href="Muriaux.html">Muriaux</a></li>
                                        <li><a href="Le Noirmont.html">Le Noirmont</a></li>
                                        <li><a href="Saignelégier.html">Saignelégier</a></li>
                                        <li><a href="Saint-Brais.html">Saint-Brais</a></li>
                                        <li><a href="Soubey.html">Soubey</a></li>
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
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>