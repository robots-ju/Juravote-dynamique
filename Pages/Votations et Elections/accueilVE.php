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
    <link rel="stylesheet" href="./index.css"/>
    <link rel="stylesheet" href="accueilVE.css"/>
    
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
        <!--<div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *">
                <button class="uk-button uk-button-default" type="button">Prochaines votations</button>
                <button class="uk-button uk-button-default" type="button">Prochaines élections</button>
            </div>
            <ul class="uk-switcher uk-margin">
                <li>  

                </li>-->
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="./federales/federales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/federal.png"
                                            alt="drapeau suisse">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations fédérales - 27 septembre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="./communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votation Delémont - 27 septembre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="./communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations Val-Terbi - 27 septembre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="./communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations Les Bois - 27 septembre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="../04Elections/communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Elections Lajoux - 27 septembre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="../04Elections/cantonales/cantonales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/cantonal.png" alt="drapeau jura">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Elections cantonales - 18 octobre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="../04Elections/communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Bonfol - 18 octobre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="../04Elections/communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Châtillon - 18 octobre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="../04Elections/communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Courtedoux - 18 octobre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="../04Elections/communales/communales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="commune">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Election Movelier - 18 octobre 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <a href="./cantonales/cantonales.html">
                            <div class="uk-card-body">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <div class="uk-width-auto">
                                        <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/cantonal.png"
                                            alt="drapeau jura">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Votations cantonales - à venir</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="../04Elections/federales/federales.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/federal.png" alt="drapeau suisse">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Elections fédérales - à venir</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>   
                </div>-->
            </div>
            <div class="uk-alert-primary" uk-alert>
                <a class="uk-alert-close"></a>
                <p>Les Communes de Courroux et de Beurnevésin n'ont pas souhaité collaborer avec nous. Aucune information
                    ne sera donc disponible sur les votations de ces communes.</p>
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