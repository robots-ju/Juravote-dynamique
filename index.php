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
        

        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-expand@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="<?php echo $juravoteLogo ?>" width="200" height="200" alt="" uk-cover>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Left</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>

        <div class="uk-grid-match" uk-grid>


            <div class="uk-width-1-1@m">
                
            </div>


            <div class="uk-width-1-6@m">
                <div class="uk-card uk-card-default uk-card-body">

                </div>
            </div>


            <div class="uk-width-expand@m">
                <div class="uk-text-center" uk-grid>


                    <div class="uk-width-1-1@m">
                        <div class="uk-card uk-card-default uk-card-body">

                        </div>
                    </div>


                    <div class="uk-width-1-1@m">
                        <div class="uk-card uk-card-default uk-card-body">

                        </div>
                    </div>


                </div>
            </div>


            <div class="uk-width-1-6@m">
                <div class="uk-card uk-card-default uk-card-body">

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