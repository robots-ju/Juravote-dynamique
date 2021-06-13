<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '../../variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations et élections</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Prochaines votations et élections</h1>
        <hr> 
        <h3 class="uk-text-center" style="padding-bottom: 11%">Les informations sur les prochaines votations seront bientôt disponibles !</h3>
        <!--<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid> 
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="ElectionsCO/Mettembert/2021-06-13/D_ConseilCommunal.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeMettembert ?>" alt="Election Mettembert du 27 juin 2021">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Mettembert du 27 juin 2021</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsCO/Belprahon/2021_06_27/D_AppartenanceCantonale.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeBelprahon ?>" alt="Belprahon">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation Belprahon du 27 juin 2021</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="ElectionsCO/Courchapoix/2021-06-13/D_ConseilCommunal.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeCourchapoix ?>" alt="Election Courchapoix du 4 juillet 2021">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Courchapoix du 4 juillet 2021</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="Votation fédérales du 26 septembre 2021">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations fédérales du 26 septembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="Votation fédérales du 28 novembre 2021">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations fédérales du 28 novembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
        </div> -->                  
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>