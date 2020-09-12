<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Votations fédérales du 27 septembre 2020</h1>
        <hr>
            <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="CongePaternite.php">
                            <div class="uk-card-header">
                                <div class="uk-width-auto">
                                    <img class="illustration" src="../../../../IMG/Votations/Federales/2020.09.27/CongePaternite.jpg" alt="Référendum congé paternité">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Congé paternité</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="Chasse.php">
                            <div class="uk-card-header">
                                <div class="uk-width-auto">
                                    <img class="illustration" src="../../../../IMG/Votations/Federales/2020.09.27/Chasse.jpg" alt="Modification loi sur la chasse">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Loi sur la chasse</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="InitiativeLimitation.php">
                            <div class="uk-card-header">
                                <div class="uk-width-auto">
                                    <img class="illustration" src="../../../../IMG/Votations/Federales/2020.09.27/Europe.jpg" alt="Initiative de limitation">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative "de limitation"</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="ImpotDirect.php">
                            <div class="uk-card-header">
                                <div class="uk-width-auto">
                                    <img class="illustration" src="../../../../IMG/Votations/Federales/2020.09.27/Sous.jpg" alt="Votation LIFD">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Loi sur l'impôt direct</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="AvionsCombat.php">
                            <div class="uk-card-header">
                                <div class="uk-width-auto">
                                    <img class="illustration" src="../../../../IMG/Votations/Federales/2020.09.27/Avions.jpg" alt="Référendum avions de combat">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Avions de combat</h3>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>