<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election Conseil communal Mervelier</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Mervelier </h1>
        <hr>
        <h2 style="padding-bottom: 2%;">Délai de dépôt des listes</h2>
        <p>Le délai du dépôt de liste court jusqu'au 26 octobre. Plus d'informations seront publiées à la fin de ce délai.</p>
        <p>Pendant ce délai, chaque citoyen qui jouit des droits politiques peut se présenter à l'élection.
            Pour ceci, il faut présenter 5 signatures de citoyens de la commune.
        </p>
        <h2 style="padding-bottom: 2%;">Résultats à l'issue du délai de dépôt des listes</h2>
        <p>Un seul candidat s'est présenté à l'élection au Conseil communal de Mervelier. Cette personne est donc élue en qualité
            de Conseiller communal de Mervelier.
        </p>
        <p>Monsieur Serge Marquis entrera en fonction prochainement. Il n'y aura pas donc d'élection le 21 décembre 2020.
        </p>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>