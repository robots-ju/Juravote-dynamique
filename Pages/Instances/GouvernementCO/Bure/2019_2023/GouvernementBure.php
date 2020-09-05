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
        <h1 class="uk-heading-large">Bure</h1>
        <hr>
        <div class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge uk-border-rounded"></div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Sébastien Gschwind</h3>
                        <p>Mairie, administration générale, finances, police, informatique, communication</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge uk-border-rounded"></div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Gilles Etique</h3>
                        <p>Travaux publics, aménagement du territoire, routes</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge uk-border-rounded"></div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Damien Riat</h3>
                        <p>Adjoint au Maire, agriculture, forêts, cabane forestière, éclairage public, eaux usées</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge uk-border-rounded"></div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Michel Vallat</h3>
                        <p>Instruction, formation, complexe scolaire, manifestations, eaux</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge uk-border-rounded"></div><br>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Sandra Roth</h3>
                        <p>Culture, sport, oeuvres sociales, tourisme, déchetterie, cimetière, transports publics</p>
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