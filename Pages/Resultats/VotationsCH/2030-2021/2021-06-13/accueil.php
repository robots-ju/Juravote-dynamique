<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations fédérales du 13 juin 2021</title>
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
        <h1 class="uk-heading-large">Votations fédérales du 13 juin 2021</h1>
        <hr>
        <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $Eau ?>"
                                    alt="Initiative populaire du 18 janvier 2018
                                    Pour une eau potable propre et une alimentation saine - Pas de subventions pour utilisation de
                                    pesticides et utilisation de antibiotiques à titre prophylactique">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire
                                    "Pour une eau potable propre et une alimentation saine"</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>   

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $Légumes ?>"
                                    alt="Initiative populaire
                                    Pour une Suisse libre de pesticides de synthèse">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire
                                    "Pour une Suisse libre de pesticides de synthèse"</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $IndonesieSuisse ?>" 
                                alt="Sous">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Loi fédérale sur les bases légales des ordonnances
                                    du Conseil fédéral visant à surmonter l'épidémie de COVID-19</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $Eolienne ?>" 
                                alt="Loi fédérale sur la réduction des
                                    émissions de gaz à effet de serre (Loi sur le CO2)">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Loi fédérale sur la réduction
                                    des émissions de gaz à effet de serre (Loi sur le CO2)</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $caméra ?>" 
                                alt="Loi fédérale sur les mesures
                                    policières de lutte contre le terrorisme (MPT)">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Loi fédérale sur les mesures
                                    policières de lutte contre le terrorisme (MPT)</h3>
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