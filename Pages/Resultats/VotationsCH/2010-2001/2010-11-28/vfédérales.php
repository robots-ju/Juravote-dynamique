<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '/Juravote-dynamique/variables.php'; ?>

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
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultat des votations fédérales du 28 novembre 2010</h1>
        <hr>
        <section>
            
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="InitiativeRenvoi.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto ">
                                        <img classe="illustration" src="../../../../img/Votations/Federales_27.09.2020/Menotte.jpg" alt="Initiative pour le renvoi des étrangers criminels">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Initiative populaire du 15.02.2008
                                     'Pour le renvoi des étrangers criminels (Initiative sur le renvoi)'</h3>
                            </div>
                            </a>
                        </div>
                    </div>    
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="LogementRetraite.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img classe="illustration" src="../../../../img/Votations/Federales_27.09.2020/Menotte.jpg" alt="contre-projet à l'initiative
                                        pour le renvoi des étrangers criminels">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Arrêté fédéral du 10.06.2010 concernant
                                     l'expulsion et le renvoi des criminels étrangers dans le respect de la Constitution 
                                     (contre-projet à l’initiative populaire 'Pour le renvoi des étrangers criminels [Initiative sur le renvoi]')</h3>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="TabagismePassif.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img classe="illustration" src="../../../../img/Votations/Federales_27.09.2020/Sous.jpg" alt="initiative pour des impôts équitables">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 06.05.2008 'Pour des impôts équitables.
                                    Stop aux abus de la concurrence fiscale (Initiative pour des impôts équitables)'</h3>
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