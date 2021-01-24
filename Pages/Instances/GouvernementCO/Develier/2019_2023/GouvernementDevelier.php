<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Conseil communal Develier</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Conseil communal 2019 - 2023 Develier</h1>
        <hr>
        <div class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-plr uk-border-rounded">MAD</div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Gabriel M. Chappuis</h3>
                        <p>Mairie, administration, communication, bourgeoisie, durabilité et digitalisation</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Frédéric Scheurer</h3>
                        <p>Urbanisme, aménagement du territoire, bâtiments, police des constructions et embellissement</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-plr uk-border-rounded">Liste d'entente - sans parti</div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Daniel Rohrbach</h3>
                        <p>Travaux publics et services techniques</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-plr uk-border-rounded">Liste d'entente - PLR</div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Pascal Hänni</h3>
                        <p>Formation, culture, action sociale, élimination des déchets, sport</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Sigismond Jacquod</h3>
                        <p>Finances et controlling</p>
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