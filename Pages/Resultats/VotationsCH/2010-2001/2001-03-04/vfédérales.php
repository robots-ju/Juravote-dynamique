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
        <h1 class="uk-heading-large">Résultat des votations fédérales du 04 mars 2001</h1>
        <hr>
        <section>
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="Europe.html">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                <div class="uk-width-auto ">
                                    <img class="ilustration" src="../../../../img/Votations/Federales_27.09.2020/Europe.jpg" alt="Initiative Oui à l'Europe">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                    Initiative populaire fédérale 'Oui à l'Europe!'</h3>
                        </div>
                        </a>
                    </div>
                </div>    
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="illustration" src="../../../../img/Votations/Federales_27.09.2020/Médicaments.jpg" alt="Initiative pour des médicaments à moindre prix">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire fédérale
                                'pour des médicaments à moindre prix'</h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="vitesse.html">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="illustration" src="../../../../img/Votations/Federales_27.09.2020/30kmh.png" width="200" height="200" alt="Initiative rues pour tous">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire fédérale 'pour plus de sécurité à
                                l'intérieur des localités grâce à une vitesse maximale de
                                30 km/h assortie d'exceptions (Rues pour tous)'
                            </h3>
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