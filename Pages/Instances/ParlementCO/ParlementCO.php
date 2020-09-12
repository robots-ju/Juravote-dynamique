<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssinstances; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssparlementCO; ?>"/>
        
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
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Législatifs communaux (Jura)</h1>
        <hr>
        <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Delemont/2019_2023/ParlementDelemont.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $communeDelemont ?>" alt="Commune de Delémont">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-column" uk-grid>

                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Delémont</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="HauteSorne/2019_2023/ParlementHauteSorne.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $communeHauteSorne ?>" alt="Commune de Haute-Sorne">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Haute-Sorne</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="ValTerbi/2019_2023/ParlementValTerbi.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $communeValTerbi ?>" alt="Commune de Val-Terbi">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Val-Terbi</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="Porrentruy/2019_2023/ParlementPorrentruy.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $communePorrentruy ?>" alt="Commune de Porrentruy">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Porrentruy</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover">
                    <a href="LesBois/2019_2023/ParlementLesBois.php">
                        <div class="uk-card-header">
                            <div class="uk-width-auto">
                                <img class="illustration" src="<?php echo $communeLesBois ?>" alt="Commune des Bois">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom montserrat">Les Bois</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <h3 class="uk-text-left uk-margin-auto" style="padding-top: 2%;">Les autres communes ne disposent pas de Conseils de ville ou de Conseils
            généraux. En effet, dans les communes plus petites, ce sont des Assemblées communales qui exercent le pouvoir
            législatif, donc chaque citoyen qui peut exercer ses droits civils ose prendre part à cette Assemblée
            communale.</h3>
    </section>

</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>