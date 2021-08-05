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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Prochaines votations et élections</h1>
        <hr> 
        <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid> 
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsCH/2030-2021/2021-09-26/accueil.php">
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
                    <a href="ElectionsCO/ValTerbi/20210926/ElectionMairie.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeValTerbi ?>" alt="Election à la Mairie de Val-Terbi">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election à la Mairie de Val-Terbi du 26 septembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsCO/Moutier/2021_09_26/20210926.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeMoutier ?>" alt="Votation fédérales du 26 septembre 2021">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation communale de Moutier du 26 septembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsCO/Porrentruy/2021-09-26/AgrandissementSTEP.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communePorrentruy ?>" alt="Votation fédérales du 26 septembre 2021">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation communale de Porrentruy du 26 septembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="VotationsCH/2030-2021/2021-11-28/accueil.php">
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