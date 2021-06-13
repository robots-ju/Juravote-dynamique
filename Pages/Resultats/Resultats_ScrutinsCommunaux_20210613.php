<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '../../variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Scrutins du 13 juin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssaccueilVotationsElections; ?>"/>
        
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
        <h1 class="uk-heading-large">Résultats des scrutins communaux du 13 juin 2021</h1>
        <hr> 
        <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid> 
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsCO/HauteSorne/2021-06-13/R_Ecole.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeHauteSorne ?>" alt="Haute-Sorne">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation Haute-Sorne</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsCO/Courrendlin/2021-06-13/R_Ecole.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeCourrendlin ?>" alt="Courrendlin">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation Courrendlin</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="ElectionsCO/Courrendlin/2021-06-13/PresidenceAssemblee.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeCourrendlin ?>" alt="Courrendlin">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Courrendlin</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="ElectionsCO/Montfaucon/2021-06-13/R_Accueil.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeMontfaucon ?>" alt="Montfaucon">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Elections Montfaucon</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="ElectionsCO/Boecourt/2021-06-13/R_CommissionEcole.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeBoecourt ?>" alt="Boécourt">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Boécourt</h3>
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