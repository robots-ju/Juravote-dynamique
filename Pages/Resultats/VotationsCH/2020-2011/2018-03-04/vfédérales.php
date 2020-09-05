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
<!-- Barre de navigation -->
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
        <h1 class="uk-heading-large">Résultat des votations fédérales du 04 mars 2018</h1>
        <hr>
        <section>
            
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="RF2021.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto ">
                                        <img src="../../../../img/Votations/Federales_27.09.2020/Sous.jpg" width="200" height="200" alt="Arrêté fédéral concernant le nouveau régime financier 2021">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                    Arrêté fédéral du 16.06.2017 concernant le nouveau régime financier 2021</h3>
                            </div>
                            </a>
                        </div>
                    </div>    
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="Billag.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img src="../../../../img/Votations/Federales_27.09.2020/radio.jpg" width="200" height="200" alt="Initiative pour la suppression des redevances Billag">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 11.12.2015
                                    «Oui à la suppression des redevances radio et télévision (suppression des redevances Billag)»</h3>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>