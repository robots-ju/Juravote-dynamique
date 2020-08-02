<!DOCTYPE html>
<html lang="fr">
    <head>

        <?php include './variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="./index.css"/>
        
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
        

        <div class="uk-card uk-card-hover uk-grid-collapse uk-child-width-1-2@m uk-child-width-1-1@s uk-padding" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="<?php echo $juravoteLogoIcon ?>" width="200" height="200" alt="Juravote">
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Bienvenue sur Juravote !</h3>
                    <p>Nous vous souhaitons une agréable visite et restons à disposition pour toute proposition ou question !</p>
                </div>
            </div>
        </div>

        <div class="uk-grid-match" uk-grid>


            <div class="uk-width-1-1@m">
             
            </div>


            <div class="uk-width-auto">
                <div class="uk-card uk-card-hover uk-card-body">
                    <h3 class="uk-heading-divider">Prochains événements</h3>
                    <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                        <div class="uk-card-badge uk-label">27.09</div>
                        <div class="uk-card-body">
                        <h3 class="uk-card-title">Votations fédérales</h3>
                        </div>
                    </div>
                    <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                        <div class="uk-card-badge uk-label">27.09</div>
                        <div class="uk-card-body">
                        <h3 class="uk-card-title">Votation Delémont</h3>
                        </div>
                    </div>
                    <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                        <div class="uk-card-badge uk-label">27.09</div>
                        <div class="uk-card-body">
                        <h3 class="uk-card-title">Elections Lajoux</h3>
                        </div>
                    </div>
                    <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                        <div class="uk-card-badge uk-label">18.10</div>
                        <div class="uk-card-body">
                        <h3 class="uk-card-title">Elections Jura</h3>
                        </div>
                    </div>
                    <div class="uk-card uk-card-hover uk-card-header uk-width-1-1">
                        <div class="uk-card-badge uk-label">18.10</div>
                        <div class="uk-card-body">
                        <h3 class="uk-card-title">Elections Jura</h3>
                        </div>
                    </div>
                </div>
            </div>


            <div class="uk-width-expand@m">
                <div class="uk-text-center" uk-grid>


                    <div class="uk-width-1-1@m">
                        <div class="uk-card uk-card-hover uk-card-body">
                            <p>Soutiens Juravote</p>
                        </div>
                    </div>


                    <div class="uk-width-1-1@m">
                        <div class="uk-card uk-card-hover uk-card-body">
                            <p>Actualités</p>
                        </div>
                    </div>


                </div>
            </div>


            <div class="uk-width-1-6@m">
                <div class="uk-card uk-card-hover uk-card-body">
                    <p>Section 4</p>
                </div>
            </div>


        </div>
        </main>
    </body>

    <footer>
        <div class="footer">
        <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>