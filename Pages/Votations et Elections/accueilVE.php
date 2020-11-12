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
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>            
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $PHPvotationsCHaccueil ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="votations fédérales">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations - Suisse - 29 novembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Votations/VotationsCO/Develier_20201213.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeDevelier ?>" alt="Votation Develier">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation - Develier - 13 décembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>  
        </div>    

        <h1 class="uk-heading-large" style="padding-top: 5%">Votations et Elections de 2021 - infos à venir</h1>  
        <hr>     
        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>    
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $lien ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeChatillon ?>" alt="Election Châtillon">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election - Châtillon - 17 janvier</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>  
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $lien ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="votations fédérales">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations - Suisse - 07 mars</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $lien ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeDelemont ?>" alt="Votation Delémont">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation - Delémont - 07 mars</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $lien ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeMoutier ?>" alt="Votation de Moutier">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation - Moutier - 28 mars</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $lien ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="votations fédérales">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations - Suisse - 13 juin</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $lien ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="votations fédérales">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations - Suisse - 26 septembre</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $lien ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="votations fédérales">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations - Suisse - 28 novembre</h3>
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