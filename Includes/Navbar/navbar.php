<head>
    <link rel="stylesheet" href="navbar.css">
    <base target="_parent">
</head>
<body>
    <nav class="uk-navbar-container uk-light" uk-navbar>
        <div class="uk-navbar-left">
    
            <ul class="uk-navbar-nav">
                <li id="Accueil">
                    <a href="./index.php">Accueil</a>
                </li>
                <li id="News">
                    <a href="./Pages/News/news.php">Actualités politiques</a>
                </li>
                <li id="Votations">
                    <a href="../03Votations/accueilV.html">Prochaines votations et élections</a>
                </li>
                <li id="Resultats">
                    <a href="../05Resultats/resultats.html">Archives des résultats</a></li>
                <li id="Instances">
                    <a href="../07Instances/accueilI.html">Instances politiques</a>
                </li>                
                <li id="Equipe">
                    <a href="../11Equipe/equipe.html">L'équipe Juravote</a>
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