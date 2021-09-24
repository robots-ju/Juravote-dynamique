<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election complémentaire par les urnes
d’un-e maire</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Montfaucon - Election complémentaire par les urnes
d’un-e maire</h1>
        <hr>
        <h2 style="padding-bottom: 2%;">Délai de dépôt des listes</h2>
        <p>Les électrices et électeurs de la commune mixte de Montfaucon
        sont convoqués aux urnes afin de procéder à
        l’élection complémentaire d’un-e maire, selon le système
        majoritaire à deux tours, conformément aux dispositions
        de la loi cantonale sur les droits politiques et du règlement
        communal sur les élections.</p>

        <p>Les actes de candidatures
        doivent être remis au Conseil communal jusqu’au lundi
        19 avril 2021, à 12 heures. Ils indiqueront le nom, le prénom,
        l’année de naissance et la profession du (de la) candidat-
        e. Les actes de candidature doivent porter la signature
        manuscrite du (de la) candidat-e et celles d’au moins
        cinq électeurs-trices domiciliés-es dans la commune.</p>

        <h2 style="padding-bottom: 2%;">Résultats à l'issue du délai de dépôt des listes</h2>
        <p>Aucun-e candidat-e ne s'est présenté-e à l'élection complémentaire à la Mairie.
        Une élection libre aura donc lieu le 13 juin 2021.
        </p>
        
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>