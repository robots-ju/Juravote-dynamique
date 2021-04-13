<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '/Juravote-Dynamique/variables.php'; ?>
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
                        <a href="<?php echo $PHPindex; ?>">Accueil</a>
                    </li>
                    <li id="Votations">
                        <a href="<?php echo $PHPvotationselectionsAccueil; ?>">Prochaines votations et élections</a>
                    </li>
                    <li id="Resultats">
                        <a href="<?php echo $PHPresultats; ?>">Résultats et archives</a></li>
                    <li id="Instances">
                        <a href="<?php echo $PHPinstances; ?>">Instances politiques</a>
                    </li>                
                    <li id="Equipe">
                        <a href="<?php echo $PHPequipe; ?>">L'équipe Juravote</a>
                    </li>
                    <li><a class="uk-button uk-button-text" href="https://twitter.com/JuraVote/" target="_blank"
                        uk-icon="icon: twitter; ratio: 1.2"></a></li>
                    <li><a class="uk-button uk-button-text" href="https://www.instagram.com/juravote/?hl=fr" target="_blank"
                        uk-icon="icon: instagram; ratio: 1.2"></a></li>
                    <li><a class="uk-button uk-button-text" href="https://www.facebook.com/JuraVote2020/" target="_blank"
                        uk-icon="icon: facebook; ratio: 1.2"></a></li>
                    <li><a class="uk-button uk-button-text" href="https://discord.gg/feYcNDY" target="_blank" ><img src="<?php echo $iconDiscord ?>"
                        id="Discord" alt="Logo Discord Juravote" height= "30px" width= "30px"></a></li>
                    <li><a class="uk-button uk-button-text uk-align-center" style="padding-top: 20%" href="#">© Juravote 2020</a></li>
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