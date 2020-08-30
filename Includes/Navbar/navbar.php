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
                        <a href="/Juravote-dynamique/index.php">Accueil</a>
                    </li>
                    <li id="News">
                        <a href="/Juravote-dynamique/Pages/Actualites/actualites.php">Actualités politiques</a>
                    </li>
                    <li id="Votations">
                        <a href="/Juravote-dynamique/Pages/Votations et Elections/accueilVE.php">Prochaines votations et élections</a>
                    </li>
                    <li id="Resultats">
                        <a href="/Juravote-dynamique/Pages/Resultats/resultats.php">Archives des résultats</a></li>
                    <li id="Instances">
                        <a href="/Juravote-dynamique/Pages/Instances/instances.php">Instances politiques</a>
                    </li>                
                    <li id="Equipe">
                        <a href="/Juravote-dynamique/Pages/Equipe/equipe.php">L'équipe Juravote</a>
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