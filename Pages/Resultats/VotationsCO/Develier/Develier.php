<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations Develier</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssResultats; ?>"/>

        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>


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
        <h1 class="uk-heading-large">Résultats des votations communales (Develier)</h1>
        <hr>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $PHPvotationDevelierEau2020 ?>">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation communale du 13 décembre 2020</h3>
                                </div>
                        </div>
                    </a>
                </div> 
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="2020-07-05/Develier.php">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation communale du 05 juillet 2020</h3>
                                </div>
                        </div>
                    </a>
                </div> 
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="2019-05-19/STEP.php">
                        <div class="uk-card-body">
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">Votation communale du 19 mai 2019</h3>
                                </div>
                        </div>
                    </a>
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