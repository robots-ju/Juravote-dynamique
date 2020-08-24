!DOCTYPE html>
<html lang="fr">
<head>

    <?php include '../../../../variables.php'; ?>

    <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
    <title>JuraVote | Votations fédérales du 27 septembre 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
    <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
    <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
    <link rel="stylesheet" href="../../../../index.css"/>
    <link rel="stylesheet" href="../../../../badges.css"/>
    <link rel="stylesheet" href="../../instances.css"/>
    <link rel="stylesheet" href="../GouvernementCH.css"/>
    
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
        <?php include "../../../../Includes/Navbar/navbar.php"; ?>
    </div>

    <div>
    <?php include "../../../../Includes/Navbar/navbar-mobile.php"; ?>
    </div>
</header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Modification de la loi sur l'impôt direct</h1>
        <hr>
</main>
</body>


<footer>
    <div class="footer">
    <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
    </div>
</footer>
</html>