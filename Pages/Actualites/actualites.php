<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '../../variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Actualités</title>
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
    <header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
    <main>
        <section style="padding-top: 2%; padding-left: 2%; padding-right: 2%;">
            <h1 class="uk-heading-large">Actualités politiques</h1>
        </section>
        <hr>
        <h3 class="uk-text-center">Cette section sera disponible prochainement !</h3>
        <!--<div class="uk-grid" uk-grid>
            <section class="page  uk-width-expand@m uk-width-auto@s" style="padding-left: 2%; padding-bottom: 2%;">
                <h1 class="uk-heading-large">Actualités politiques</h1>
                <hr>
                <div class="switcher-buttons uk-text-center" uk-switcher="animation: uk-animation-fade; toggle: > *">
                    <button class="uk-button uk-button-default" type="button">Page 1</button>
                    <button class="uk-button uk-button-default" type="button">Page 2</button>
                    <button class="uk-button uk-button-default" type="button">Page 3</button>
                    <button class="uk-button uk-button-default" type="button">Page 4</button>
                    <button class="uk-button uk-button-default" type="button">Page 5</button>
                    <button class="uk-button uk-button-default" type="button">Page 6</button>
                    <button class="uk-button uk-button-default" type="button">Page 7</button>
                    <button class="uk-button uk-button-default" type="button">Page 8</button>
                    <button class="uk-button uk-button-default" type="button">Page 9</button>
                    <button class="uk-button uk-button-default" type="button">Page 10</button>
                    <button class="uk-button uk-button-default" type="button">Page 11</button>
                    <button class="uk-button uk-button-default" type="button">Page 12</button>
                </div>  
                <ul class="uk-switcher uk-margin">
                    <li>
                        <div class="uk-grid-small uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img class="uk-border-circle" width="40" height="40" src="#">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Titre</h3>
                                               <p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Texte</p>
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                    </li>
                </ul>         
            </section>   
    </section>-->
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>