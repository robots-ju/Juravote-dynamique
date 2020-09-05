<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '/Juravote-dynamique/variables.php'; ?>

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
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
    <main>
        <section style="padding: 2%;">
            <h1 class="uk-heading-large">Derniers résultats</h1>
            <hr>     
                <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *">
                    <button class="uk-button uk-button-default" type="button">Résultats des votations</button>
                    <button class="uk-button uk-button-default" type="button">Résultats des élections</button>
                </div>  
                <ul class="uk-switcher uk-margin">
                    <li>
                        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover">
                                    <a href="./VotationsF/accueilVotationsF.html">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img width="150" height="150" src="<?php echo $pouvoirFederal; ?>"
                                                        alt="drapeau suisse">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations fédérales</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover">
                                    <a href="./VotationsJU/accueilVotationsJU.html">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img width="150" height="150" src="<?php echo $pouvoirCantonal; ?>"
                                                        alt="drapeau jura">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations cantonales</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover">
                                    <a href="./VotationsCOM/accueilVotationsCOM.html">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img width="150" height="150" src="<?php echo $pouvoirCommunal; ?>" alt="commune">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations
                                                        communales</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover">
                                    <a href="./ElectionsF/accueilElectionsF.html">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img width="150" height="150" src="<?php echo $pouvoirFederal; ?>"
                                                        alt="drapeau suisse">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Élections fédérales
                                                        </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover">
                                    <a href="./ElectionsJU/accueilElectionsJU.html">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img width="150" height="150" src="<?php echo $pouvoirCantonal; ?>"
                                                        alt="drapeau jura">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Élections
                                                        cantonales</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover">
                                    <a href="./ElectionsCOM/accueiElectionsCOM.html">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img width="150" height="150" src="<?php echo $pouvoirCommunal; ?>" alt="commune">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Élections
                                                        communales</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                </li>
            </ul>
        </section>
    </main>
    </body>


    <footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>