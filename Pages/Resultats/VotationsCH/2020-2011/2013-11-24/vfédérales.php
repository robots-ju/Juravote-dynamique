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
<!-- Barre de navigation -->
<header>
            <div class="navbar-normal">
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultat des votations fédérales du 24 novembre 2013</h1>
        <hr>
        <section>
            
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="SalairesEquitables.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto ">
                                        <img src="#" width="200" height="200" alt="Initiative pour des salaires équitables">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat uk-text-center">
                                    Initiative populaire du 21.03.2011 «1:12 - Pour des salaires équitables»</h3>
                            </div>
                            </a>
                        </div>
                    </div>    
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="Familles.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img src="#" width="200" height="200" alt="Initiative pour les familles">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Initiative populaire du 12.07.2011
                                    «Initiative pour les familles: déductions fiscales aussi pour les parents qui gardent eux-mêmes
                                    leurs enfants»</h3>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <a href="LVA.html">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-text-center" uk-grid>
                                    <div class="uk-width-auto">
                                        <img src="#" width="200" height="200" alt="Modification de loi sur la vignette autoroutière">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Modification du 22.03.2013 de la loi fédérale
                                concernant la redevance pour l'utilisation des routes nationales (Loi sur la vignette autoroutière, LVA)</h3>                                 
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>