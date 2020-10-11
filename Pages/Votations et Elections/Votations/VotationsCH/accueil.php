<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations fédérales</title>
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
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Votations fédérales du 29 novembre 2020</h1>
        <hr>
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="Responsable.php">
                            <div class="uk-card-header">
                                <div class="uk-width-auto">
                                    <img src="<?php echo $Responsables ?>" 
                                    alt="Initiative populaire « Entreprises responsables – 
                                    pour protéger l’être humain et l’environnement »">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire 
                                        « Entreprises responsables – pour protéger l’être humain et l’environnement »</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="Armes.php">
                            <div class="uk-card-header">
                                <div class="uk-width-auto">
                                    <img src="<?php echo $MaterielGuerre ?>"
                                     alt="Initiative populaire « Pour une interdiction du
                                     financement des producteurs de matériel de guerre »">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire
                                         « Pour une interdiction du financement des producteurs de matériel de guerre »</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>                
            </div>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>