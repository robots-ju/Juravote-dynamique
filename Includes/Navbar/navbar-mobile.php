<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="navbar-mobile.css">
        <base target="_parent">
    </head>

    <body>
        <nav class="uk-navbar uk-navbar-container navbar-mobile">
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle uk-button uk-button-text" href="#menu-mobile" uk-toggle>
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
            </div>
        </nav>
        <div id="menu-mobile" uk-offcanvas>
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default uk-list uk-list-divider">
                    <li id="Accueil">
                        <a class="uk-button uk-button-text" href="<?php echo $PHPindex; ?>">Accueil</a></li>
                    <li id="Actualites">
                        <a class="uk-button uk-button-text" href="<?php echo $PHPactualites; ?>">Actualités</a></li>
                    <li id="Votations">
                        <a class="uk-button uk-button-text" href="<?php echo $PHPvotationselectionsAccueil; ?>">Prochaines votations et élections</a>
                    </li>
                    <li id="Resultats">
                        <a class="uk-button uk-button-text" href="<?php echo $PHPresultats; ?>">Archives des résultats</a></li>
                    <li id="Instances">
                        <a class="uk-button uk-button-text" href="<?php echo $PHPinstances; ?>">Instances politiques</a>
                    </li>
                    <li id="Equipe">
                        <a class="uk-button uk-button-text" href="<?php echo $PHPequipe; ?>">L'équipe Juravote</a>
                    </li>                    
                    <li id="Contact">
                        <a class="uk-button uk-button-text" href="#">Contact</a></li>
                    <li><a class="uk-button uk-button-tex" href="https://twitter.com/JuraVote/" target="_blank"
                        uk-icon="icon: twitter; ratio: 1.2"></a></li>
                    <li><a class="uk-button uk-button-tex" href="https://www.instagram.com/juravote/?hl=fr" target="_blank"
                        uk-icon="icon: instagram; ratio: 1.2"></a></li>
                    <li><a class="uk-button uk-button-tex" href="https://www.facebook.com/JuraVote2020/" target="_blank"
                        uk-icon="icon: facebook; ratio: 1.2"></a></li>
                </ul>
            </div>
        </div>
    <script>
        document.location.search.slice(1).split("&").forEach(function (param) {
            if (param.split("=")[0] === "active") {
                document.getElementById(param.split("=")[1]).className = "uk-active active";
            }
        });
    </script>
    </body>
</html>