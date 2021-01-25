<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election Mairie du Noirmont</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        <link rel="stylesheet" href="<?php echo $csselections ?>"/>
        
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Election complémentaire à la Mairie du Noirmont </h1>
        <hr>
        <div class="uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">Le Centre</div>
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                            <div class="uk-width-auto uk-first-column">
                                <img class="uk-border-circle photo-personne"
                                    src="<?php echo $GabrielMartinoli ?>"
                                    alt="GabrielMartinoli">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Gabriel Martinoli</h3>
                        <p class="uk-text-center text-fonction">Plus d'informations sur le candidat seront bientôt disponibles !</p>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                            <div class="uk-width-auto uk-first-column">
                                <img class="uk-border-circle photo-personne"
                                    src="<?php echo $DamienParatte ?>"
                                    alt="Damien Paratte">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Damien Paratte</h3>
                        <p class="uk-text-center text-fonction">Plus d'informations sur le candidat seront bientôt disponibles !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>