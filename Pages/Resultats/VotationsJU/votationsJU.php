<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations jurassiennes</title>
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
        <h1 class="uk-heading-large">Résultats des votations cantonales (Jura)</h1>
        <hr>
        <h3 class="uk-text-center">Les résultats des votations cantonales d'avant 2020 seront disponibles prochainement !</h3>
        <!--<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="./2019-10-20/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 20 octobre 2019</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2018-06-10/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 10 juin 2018</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2018-03-04/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 04 mars 2018</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2016-06-05/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 05 juin 2016</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2016-02-28/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 28 février 2016</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2015-06-14/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 14 juin 2015</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2014-09-28/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 28 septembre 2014</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2013-11-24/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 24 novembre 2013</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsJU/2013-03-03/vcantonales.html">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation cantonale du 03 mars 2013</h3>
                                </div>
                        </div>
                    </a>
                </div>      
            </div>-->
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