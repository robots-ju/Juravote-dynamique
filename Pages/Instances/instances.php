<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include '../../variables.php'; ?>

    <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
    <title>JuraVote | Instances politiques</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
    <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
    <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
    <link rel="stylesheet" href="../index.css"/>
    <link rel="stylesheet" href="instances.css"/>
    
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
        <?php include "../../Includes/Navbar/navbar.php"; ?>
    </div>

    <div>
    <?php include "../../Includes/Navbar/navbar-mobile.php"; ?>
    </div>
</header>
<main>
<section style="padding: 2%">
        <h1 class="uk-heading-large">Instances politiques</h1>
        <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *">
                <button class="uk-button uk-button-default" type="button">Instances fédérales</button>
                <button class="uk-button uk-button-default" type="button">Instances cantonales (Jura)</button>
                <button class="uk-button uk-button-default" type="button">Instances communales (Jura)</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>    
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="Conseil_federal/conseil_federal.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/federal.png"
                                                alt="Drapeau Suisse">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Conseil fédéral</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="Assemblee_federale/assemblee_federale.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/federal.png"
                                                alt="Drapeau Suisse">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Assemblée fédérale (Jura)</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="presentations_federales.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/federal.png"
                                                alt="Drapeau Suisse">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Partis fédéraux</h3>
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
                            <a href="Gouvernement_jurassien/gouvernement_jurassien.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/cantonal.png"
                                                alt="Drapeau jurassien">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Gouvernement jurassien</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="Parlement_jurassien/parlement_jurassien.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/cantonal.png"
                                                alt="Drapeau jurassien">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Parlement jurassien</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="presentations_cantonales.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/cantonal.png"
                                                alt="Drapeau jurassien">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Partis cantonaux (Jura)</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>


            <li>
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="Executifs_communaux/00Districts.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="Communes jurassiennes">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Exécutifs communaux (Jura)</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="Legislatifs_communaux/legislatifCommunes.html">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <div class="uk-width-auto">
                                            <img width="150" height="150" src="../../IMG/Logo/Pouvoirs/communal.png" alt="Communes jurassiennes">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Législatifs communaux (Jura)</h3>
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
    <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
    </div>
</footer>
</html>