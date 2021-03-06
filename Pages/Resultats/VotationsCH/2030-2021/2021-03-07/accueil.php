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
        <h1 class="uk-heading-large">Votations fédérales du 7 mars 2021</h1>
        <hr>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Voile.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $Voile ?>"
                                    alt="Initiative populaire du 15 septembre 2017 «Oui à l’interdiction de se dissimuler le visage» ">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 15 septembre 2017
                                    «Oui à l’interdiction de se dissimuler le visage» </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>   

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="LSIE.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $IdentiteNumerique ?>"
                                    alt="Loi fédérale du 27 septembre 2019 sur les services d’identification électronique (LSIE)">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Loi fédérale du 27 septembre 2019
                                    sur les services d’identification électronique (LSIE)</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="AELE.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $IndonesieSuisse ?>" 
                                alt="Arrêté fédéral du 20 décembre 2019 portant approbation de l’Accord de partenariat économique
                                de large portée entre les États de l’AELE et l’Indonésie">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Accord de partenariat économique 
                                    avec l’Indonésie</h3>
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