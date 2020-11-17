<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="navbar.css">
        <base target="_parent">
    </head>
    <body>
        <nav class="uk-navbar-container uk-light" uk-navbar>
            <div class="uk-navbar-left">        
                <ul class="uk-navbar-nav">
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
                </ul>
            </div>
            <div class="uk-navbar-right"> 
                <ul class="uk-navbar-nav">
                    <li id="Forum">
                        <a href="https://juravote.ch/forum">Forum Juravote</a>
                    </li>
                </ul>
            </div>
        </nav>
    <script>
        document.location.search.slice(1).split("&").forEach(function (param) {
            if (param.split("=")[0] === "active") {
                document.getElementById(param.split("=")[1]).className = "uk-active active";
            }
        });
    </script>
    </body>
</html>