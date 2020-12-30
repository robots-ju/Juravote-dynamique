<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire du 15.09.2017 «Oui à l’interdiction de se dissimuler le visage»</title>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
        </div>

        <div>
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
        </div>
    </header>
    <main>
    <section style="padding: 2%;">
            <h1 class="uk-heading-large">Initiative populaire du 15 septembre 2017 «Oui à l’interdiction de se dissimuler le visage»</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h1>Description de la votation</h1>
                        <p>L'initiative demande à ce que nul ne puisse ne se dissimuler le visage dans l'espace public, ni dans les lieux
                        accessibles au publics ou dans lesquels sont fournies des prestations ordinairement accessibles par tout un chacun.</p>

                        <p>En cas d'acceptation de l'initiative, la Constitution serait modifiée comme suit :</p>

                        <h5>Art. 10a Interdiction de se dissimuler le visage</h5>

                        <ol>
                        <li>Nul ne peut se dissimuler le visage dans l’espace public, ni dans les lieux accessibles au public ou dans lesquels
                        sont fournies des prestations ordinairement accessibles par tout un chacun; l’interdiction n’est pas applicable dans
                        les lieux de culte.</li>
                        <li>Nul ne peut contraindre une personne de se dissimuler le visage en raison de son sexe.</li>
                        <li>La loi prévoit des exceptions. Celles-ci ne peuvent être justifiées que par des raisons de santé ou de sécurité,
                        par des raisons climatiques ou par des coutumes locales.</li>
                        </ol>

                        <p>Art. 197, ch. 12, 12. Disposition transitoire ad art. 10a (Interdiction de se dissimuler le visage)</p>

                        <p>La législation d’exécution doit être élaborée dans les deux ans qui suivent l’acceptation de l’art. 10a par le
                        peuple et les cantons.</p>

                        <h4>En cas de refus de l'initiative</h4>
                        <p>Si l'initiative est refusée par le peuple et les cantons le 7 mars 2021, le contre-projet du Conseil fédéral entrera
                        en vigueur (soumis au référendum facultatif). Ce contre-projet stipule qu'une personne est tenue de montrer son visage
                        au représentant d'une autorité suisse lors d'une vérification d'identité.</p>
                
                    <h1>La question qui vous est posée :</h1>
                        <b><p>Acceptez-vous l'initiative populaire "Oui à l'interdiction de se dissimuler le visage" ?</p></b>
                </li>
                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <!--<h2>Partis fédéraux</h2>-->
                        <iframe title="Recommandations de vote des partis fédéraux" aria-label="chart" id="datawrapper-chart-hci1E" src="https://datawrapper.dwcdn.net/hci1E/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>   

                        <!--<h2>Partis jurassiens</h2>-->
                        <iframe title="Recommandations de vote des partis jurassiens" aria-label="chart" id="datawrapper-chart-exTuv" src="https://datawrapper.dwcdn.net/exTuv/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    

                        <!--<h2>Autorités</h2>-->
                        <iframe title="Recommandations de vote des Autorités" aria-label="chart" id="datawrapper-chart-71tcb" src="https://datawrapper.dwcdn.net/71tcb/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>            
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Dans les États éclairés tels que la Suisse, les femmes et les hommes libres se parlent à visage découvert. 
                                La dissimulation du visage dans l’espace public est contraire à l’esprit libéral du vivre-ensemble.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le principe de l'égalité – élémentaire s’iI en est – veut que les femmes aient le droit de montrer en
                                tout temps l’intégralité de leur visage en public, comme les hommes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’interdiction de se dissimuler le visage dans tout le pays permettra d’assurer la sécurité juridique :
                                eIle renforcera la position des organes de sécurité et leur permettra de lutter résolument contre les
                                délinquants masqués.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’initiative n’est contraire ni à la liberté de religion ni à la liberté d’opinion.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le texte de l'initiative prévoit exceptions justifiées par des raisons de santé ou de sécurité,
                                par des raisons climatiques (par ex. pour la pratique des sports d’hiver) ou par des coutumes
                                locales (carnaval, traditions populaires).</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <p>Les arguments contre l'initiative seront bientôt disponibles !</p>
                    <!--<div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Texte</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Texte</p>
                            </div>
                        </div>
                    </div>-->
                </li>
            </ul>
        </section>
    </main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>