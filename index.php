<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="shortcut icon" href="<?php echo $icon; ?>"/>
    <title>JuraVote | Accueil</title>

    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/uikit.min.css"/>
    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="./CSS/main.css"/>

    <!--JS-->
    <script src="./JS/uikit.min.js"></script>
    <script src="./JS/uikit-icons.min.js"></script>
    
    <!--PHP-->
    <?php include("variables.php") ?>

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


    <head>
        <div class="navbar-normal">
            <?php require("./Includes/Navbar/navbar.php"); ?>
        </div>

        <div class="navbar-mobile">
            <?php include("./Includes/Navbar/navbar-mobile.php") ?>
        </div>
    </head>



    <main>

    </main>



    <footer>

    </footer>


</body>