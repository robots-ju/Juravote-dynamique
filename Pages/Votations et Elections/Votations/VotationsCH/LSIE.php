<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Loi fédérale du 27 septembre 2019 sur les services d’identification électronique (LSIE)</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="//cdn.amcharts.com/lib/4/core.js"></script>
        <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>

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
    <section style="padding: 2%;">
            <h1 class="uk-heading-large">Loi fédérale du 27 septembre 2019 sur les services d’identification électronique (LSIE)</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>Contexte</h3>
                        <hr>
                        <p class="uk-text-justify">Pour faire des achats ou obtenir des services en ligne, il est généralement nécessaire de s’identifier. 
                        Il existe déjà différentes procédures, souvent au moyen d’un identifiant et d’un mot de passe. Toutefois, 
                        en Suisse, aucune d’entre elles n’est encadrée par la loi ou ne fait l’objet d’une garantie de la 
                        Confédération quant à sa sécurité et sa fiabilité.
                        </p>
                        <p class="uk-text-justify">C’est pourquoi le Conseil fédéral et le Parlement ont 
                        préparé une loi instaurant un système d’identification reconnu par la Confédération : l’e-ID. La loi est 
                        soumise au vote, car une demande de référendum a abouti.</p>

                        <h3>Le projet</h3>
                        <hr>
                        <p class="uk-text-justify">La nouvelle loi sur l’e-ID définit une procédure d’identification univoque utilisable pour faire des
                        achats ou obtenir des services sur Internet de manière simple et sûre (par ex. ouvrir un compte bancaire 
                        ou commander un document officiel). L’acquisition d’une e-ID est facultative. Les personnes intéressées 
                        doivent en faire la demande auprès d’un fournisseur d’e-ID reconnu par la Confédération.
                        </p>

                        <p class="uk-text-justify">Celui-ci transmet la demande à la Confédération, qui vérifie si les données fournies 
                        correspondent à celles dont elle dispose déjà dans ses registres, puis autorise l’émission de l’e-ID. La 
                        Confédération ne transmet au fournisseur que les données nécessaires, et ce uniquement si la personne concernée 
                        y a consenti. L’émission et l’utilisation de
                        l'e-ID, comme toute procédure d’identification, impliquent le traitement de données personnelles. La nouvelle 
                        loi met donc un accent particulier sur la protection des données.
                        </p>

                    
                        
                    </div>

                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-top: 2%">
                        <h3>Identification univoque</h3>
                        <hr>
                        <p class="uk-text-justify">L’e-ID garantit qu’un utilisateur est bien la personne qu’il prétend être en ligne. En effet, les 
                        informations qui lui sont associées, notamment le nom, le prénom et la date de la naissance, ont été vérifiées.
                        </p>

                        <h3>Les avantages de l'e-ID</h3>
                        <hr>
                        <p class="uk-text-justify">L’e-ID permet de se connecter facilement et sûrement à différents sites pour faire des achats et obtenir 
                        des services. Certaines démarches pour lesquelles il était fastidieux de prouver son identité, par exemple 
                        en se présentant en personne, pourront se faire en ligne. De plus, l’e-ID permet de réduire le 
                        nombre de mots de passe.
                        </p>

                        <h3>Mise en oeuvre technique</h3>
                        <hr>
                        <p class="uk-text-justify">La mise en oeuvre technique incombe aux fournisseurs d’e-ID : ils s’assurent que l’e-ID peut être utilisée 
                        sur Internet pour s’identifier de manière univoque. À cet effet, ils peuvent par exemple proposer une application 
                        pour téléphone.
                        </p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%">  
                        <h3>Protection des données</h3>
                        <hr>
                        <p class="uk-text-justify">La loi sur les services d’identification électronique va plus loin que celle 
                        sur la protection des données. Le consentement de l’utilisateur est requis à chaque fois que des données 
                        doivent être transmises. De plus, les fournisseurs d’e-ID ne peuvent utiliser les données qu’à des fins 
                        d’identification. Les normes de sécurité informatique doivent être élevées de manière à garantir en 
                        permanence la protection des données.
                        </p>

                        <h3>Répartition des tâches entre l'Etat et le secteur privé</h3>
                        <hr>
                        <p class="uk-text-justify">La nouvelle loi prévoit une répartition des tâches. La Confédération assume sa 
                        fonction souveraine en vérifiant l’identité des personnes avant toute émission d’e-ID et en reconnaissant 
                        et contrôlant les fournisseurs d’e-ID. Elle confie en revanche les aspects techniques, autrement dit 
                        l’élaboration de solutions concrètes, à ces fournisseurs (entreprises privées, cantons et communes). Cette 
                        répartition des tâches permet aux fournisseurs d’e-ID de s’adapter librement aux évolutions techniques et 
                        aux besoins des différents groupes cibles. De leur côté, les utilisateurs peuvent comparer les offres et 
                        choisir celle qui leur correspond le mieux.
                        </p>

                        <h3>Reconnaissance et contrôle indépendants</h3>
                        <hr>
                        <p class="uk-text-justify">Les fournisseurs d’e-ID sont reconnus par la Confédération et soumis à son contrôle. 
                        Le Conseil fédéral institue à cet effet une commission fédérale des e-ID chargée de reconnaître les fournisseurs 
                        et leurs systèmes et de contrôler en continu s’ils respectent les dispositions légales, notamment en matière de 
                        protection des données. Si un fournisseur enfreint la loi, la commission peut lui retirer la reconnaissance accordée.
                        </p>

                        <h3>La question qui vous est posée : </h3>
                        <hr>
                        <b><p>Acceptez-vous la loi fédérale du 27 septembre 2019 sur les services d’identification électronique (LSIE) ?</p></b>
                        
                        <h3>Comment fonctionne l'e-ID ?</h3>
                        <hr>
                        <img src="<?php echo $FonctionnementEID ?>" width="900px" style="background-color: #F5F5F5;">
                    </div>               
                </li>
                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="Recommandations de vote des partis fédéraux_LSIE" aria-label="chart" id="datawrapper-chart-waHms" src="https://datawrapper.dwcdn.net/waHms/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script> 

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="Recommandations de vote des partis jurassiens_LSIE" aria-label="chart" id="datawrapper-chart-MNmh4" src="https://datawrapper.dwcdn.net/MNmh4/5/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="Recommandations de vote des Autorités_LSIE" aria-label="chart" id="datawrapper-chart-C1uIL" src="https://datawrapper.dwcdn.net/C1uIL/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="257"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>            
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Comme beaucoup d’opérations se font aujourd’hui sur Internet, il est important de pouvoir 
                                s’identifier en ligne de manière sûre.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La loi adoptée par le Conseil fédéral et le Parlement propose une procédure d’identification simple, 
                                sûre et reconnue par la Confédération.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Grâce au contrôle de l’identité par la Confédération et à une protection des données renforcée, 
                                les utilisateurs pourront faire des achats et obtenir des services de manière simple et sûre.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les avantages sont nombreux : meilleure protection contre les abus et les escroqueries et réduction 
                                du nombre de mots de passe et de procédures d’enregistrement fastidieuses. L’e-ID n’est pas une pièce 
                                d’identité. Elle n’est en rien comparable à un passeport ou à une carte d’identité.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>De nombreux États ont déjà mis en place des e-ID. La Suisse est en retard. Or, l’économie et 
                                la société attendent impatiemment une solution qui offrirait de nouvelles possibilités sur Internet. 
                                La plupart des cantons soutiennent aussi la nouvelle loi.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le Conseil fédéral et le Parlement ont opté pour une approche novatrice fondée sur une répartition 
                                des tâches claire. La Confédération garde sa fonction souveraine en vérifiant l’identité des personnes 
                                et en contrôlant les fournisseurs d’e-ID. Elle garantit ainsi un système sûr et fiable.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La nouvelle loi prévoit des règles strictes en matière de données. Les données personnelles ne sont 
                                transmises qu’avec le consentement exprès de l’utilisateur et seules les informations nécessaires sont 
                                communiquées.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Grâce à l’e-ID, de nombreuses opérations en ligne deviendront plus simples et plus sûres. La nouvelle 
                                loi aidera la Suisse à poursuivre son tournant numérique. De nouvelles offres et possibilités s’ouvriront 
                                et la Suisse restera à la pointe du développement mondial.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’e-ID, instaurée par la loi fédérale sur les services d’identification électronique, est une nouvelle 
                                pièce d’identité officielle : le passeport suisse numérique. Elle permettra de prouver son identité sur 
                                Internet, de la même manière que la carte d’identité ou le passeport permettent de le faire dans la vraie vie.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La commercialisation de l’e-ID rabaissera la Confédération au rang de simple fournisseuse de données. 
                                L’Office fédéral de la police créera à cet effet un nouveau système pour mettre les données personnelles 
                                des citoyennes et citoyens à la dispo sition d’entreprises privées.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Chaque utilisation de l’e-ID sera relevée et enregistrée de manière centrale par une entreprise privée, 
                                ce qui n’est pas le cas avec les pièces d’identité utilisées jusqu’à présent. Il en résulte un risque d’abus. 
                                La seule manière de garantir efficacement la protection des données serait de renoncer à la collecte de données 
                                inutiles.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>D’après des sondages représentatifs, plus de 80 % de la population aimerait que le passeport numérique 
                                soit délivré non pas par des entreprises mais par l’État. Le secteur privé n’inspire pas confiance. En 
                                adoptant cette nouvelle loi, le Conseil fédéral et le Parlement ont fait fi de la volonté populaire.</p>
                            </div>
                        </div>
                        
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La nouvelle loi permet à des acteurs privés de commercialiser et délivrer des pièces d’identité officielles.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Des entreprises, notamment des banques et des assurances, géreront les données privées des citoyens. 
                                L’émission de pièces d’identité doit rester de la responsabilité de l’État.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil suisse des aînés</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Des personnes âgées craignent que des entreprises privées ne leur imposent l’utilisation de l’e-ID. 
                                C’est pourquoi le Conseil suisse des aînés, l’Association suisse des aînés et la Fédération des associations 
                                des retraités et de l’entraide en Suisse sont opposés au projet.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Cantons suisses</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Huit cantons refusent de soutenir la nouvelle loi, car ils estiment que l’émission de pièces 
                                d’identité est une tâche centrale de l’État. Le canton de Schaffhouse et la ville de Zoug délivrent 
                                déjà leur propre e-ID. La Confédération pourrait donc facilement délivrer elle-même un passeport 
                                numérique. Le Liechtenstein y est parvenu en l’espace d’un an.</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>