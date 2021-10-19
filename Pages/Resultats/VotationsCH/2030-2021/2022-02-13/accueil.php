<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations fédérales du 13 février 2022</title>
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
        <h1 class="uk-heading-large">Votations fédérales du 13 février 2022</h1>
        <hr>
        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="#">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="" src="<?php echo $Vache ?>"
                                    alt="Initiative populaire «Oui à l'interdiction de l'expérimentation animale et humaine -
                                    Oui aux approches de recherche qui favorisent la sécurité et le progrès»">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-justify">Initiative populaire
                                    "Oui à l'interdiction de l'expérimentation animale et humaine"</h3>
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
                                <img class="" src="<?php echo $Tabac ?>"
                                    alt="Initiative populaire
                                    Oui à la protection des enfants et des jeunes contre la publicité pour le tabac">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-justify">Initiative populaire
                                    "Oui à la protection des enfants et des jeunes contre la publicité pour le tabac"</h3>
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
                                <img class="" src="<?php echo $Sous ?>" 
                                alt="Modification du 18 juin 2021 de la loi fédérale sur les droits de timbre">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-justify">Loi fédérale sur les droits de timbre</h3>
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
                                <img class="" src="<?php echo $Radio ?>" 
                                alt="Loi fédérale du 18 juin 2021 sur un train de mesures en faveur des médias ">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-justify">Loi fédérale sur un train de mesures en faveur des médias </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <h3 class="uk-text-center">Les informations seront bientôt disponibles !</h3>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>