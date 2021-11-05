<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election complémentaire par les urnes
d’un-e Conseiller-ère communal-e</title>
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
        <h1 class="uk-heading-large">Les Enfers - Election complémentaire par les urnes
        d’un-e Conseiller-ère communal-e</h1>
        <hr>
        <h2 style="padding-bottom: 2%;">Délai de dépôt des listes</h2>
        <p>Les électrices et électeurs de la commune des Enfers sont convoqués aux urnes afin de procéder à l’élection complémentaire
        d’un-e Conseiller-ère communal-e, selon le système majoritaire à deux tours, conformément aux dispositions de la loi cantonale
        sur les droits politiques et du règlement communal sur les élections.</p>

        <p>Les actes de candidatures doivent être remis au Conseil communal jusqu’au lundi 25 octobre 2021, à 12 heures. Ils
        indiqueront le nom, le prénom, l’année de naissance et la profession du (de la) candidat- e. Les actes de candidature
        doivent porter la signature manuscrite du (de la) candidat-e et celles d’au moins cinq électeurs-trices domiciliés-es
        dans la commune.
        </p>

        <h2 style="padding-bottom: 2%;">Résultats à l'issue du délai de dépôt des listes</h2>
        <p>Une seule liste a été déposée ce lundi 25 octobre 2021. Monsieur Vincent Schmitt (Les VERTS) est élu tacitement au
        Conseil communal des Enfers. Il entrera en fonction le 1er janvier 2022. En conséquence, il n'y aura pas d'élection le 19
        décembre 2021.</p>        
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>