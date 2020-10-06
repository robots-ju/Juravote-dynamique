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
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close"></a>
            <p>Les Communes de Courroux et de Beurnevésin n'ont pas souhaité collaborer avec nous. Aucune information
            ne sera donc disponible sur les votations de ces communes.</p>
        </div> 
        <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>            
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Elections/ElectionsJU/Accueil.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirCantonal ?>" alt="Canton du Jura">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Elections - Jura - 18 octobre 2020</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Elections/ElectionsCO/Bonfol_20201018/VicePresidentAssemblee.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $communeBonfol ?>" alt="commune de Bonfol">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election - Bonfol - 18 octobre 2020</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>            
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Elections/ElectionsCO/Courtedoux_20201018/VicePresidentAssemblee.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="../../IMG/Logo/Communes/Courtedoux.PNG" alt="commune de Courtedoux">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election - Courtedoux - 18 octobre 2020</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Elections/ElectionsCO/Movelier_20201018/MembreCercleScolaire.php">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="../../IMG/Logo/Communes/Movelier.png" alt="commune de Movelier">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election - Movelier - 18 octobre 2020</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $PHPelectionsJUGouvernement2 ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirCantonal ?>"
                                        alt="drapeau jura">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Elections - Jura - 08 novembre 2020</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $PHPvotationsCHaccueil ?>">
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-auto">
                                    <img width="150" height="150" src="<?php echo $pouvoirFederal ?>" alt="drapeau suisse">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations - Suisse - 29 novembre 2020</h3>
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