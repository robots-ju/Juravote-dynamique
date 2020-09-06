<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/variables.php"; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election Châtillon</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $csselections; ?>"/>
        
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
            <h1 class="uk-heading-large">Election du 18 octobre 2020 - Châtillon </h1>
            <hr>
            <h2 style="padding-bottom: 2%;">Délai de dépôt des listes</h2>
            <p>Le délai du dépôt de liste est arrivé à échéance le 24 août 2020.
            Pendant ce délai, chaque citoyen-ne qui jouit des droits politiques pouvait être candidat-e à l'élection.</p>
            
            <h2 style="padding-bottom: 2%;">Résultats à l'issue du délai de dépôt des listes</h2>
            <p>Un-e seul-e candidat-e s'est présentée à l'élection à la Commission d'Ecole. XXX est donc élu-e
            au sein de ladite Commission communale.
            </p>
            <p>A noter que l'élection prévue le 18 octobre 2020 n'aura pas lieu. Lorsqu'un-e seul-e candidat-e est déclaré-e,
            l'élection est tacite et effective dès l'échéance du délai de dépôt des listes.
            </p>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>