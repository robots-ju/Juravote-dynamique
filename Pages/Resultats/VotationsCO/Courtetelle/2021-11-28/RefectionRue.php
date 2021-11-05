<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations Courtételle</title>
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
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Réfection de la rue Abbé Grégoire Joliat Ouest</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis de Courtételle</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <div class="uk-column-1-3@m uk-column-1-1@s"  style="padding-bottom: 2%">
                    <h3>Préambule</h3>
                    <p>La rue Abbé Grégoire Joliat est fortement dégradée, ce qui implique un manque de sécurité et des
                        infrastructures vieillissantes et usées. Les travaux vont permettre :/p>
                    <ol>
                        <li>de rénover la route communale et d’améliorer la sécurité des piétons.</li>
                        <li>d’améliorer le carrefour avec la rue des Chenevières avec la réalisation d’un giratoire franchissable.</li>
                        <li>d’assurer une alimentation en eau potable viable à long terme.</li>
                        <li>d’assurer une évacuation des eaux usées conforme à la planification communale.</li>
                        <li>de renouveler le réseau électrique.</li>
                    </ol>                        

                    <h3>Travaux prévus</h3>
                    <p>Les travaux s'étendent sur deux secteur distincts :</p>
                    <ol>
                        <li>Secteur Ouest de la rue : réfection de la chaussée et des réseaux souterrains.</li>
                        <li>Carrefour avec la rue des Chenevières : aménagement d'un giratoire franchissable.</li>
                    </ol>
                    <p style="padding-bottom: 5%">Le réseau d'eau potable, le réseau d'eaux usées et le réseau électrique seront renouvelés en parallèle
                    des travaux ci-dessus.</p>

                    <h3>Délais de réalisation</h3>
                    <p>Les travaux auront lieu entre mars et septembre 2022, d'une seule traite afin de minimiser les dérangements pour les riverains.</p>

                    <h3>La question qui vous est posée :</h3>
                    <b><p>Acceptez-vous un crédit d'investissement de CHF 987'000 pour la réfection de la rue Abbé Grégoire Joliat
                    Ouest comprenant la chaussée, l’assainissement des réseaux souterrains d'eaux usées, d'eaux claires, d'eau
                    potable et d'électricité et donner compétence au Conseil communal pour se procurer les fonds et sa
                    consolidation ?</p></b>
                </div>

                <h3>Coûts des travaux</h3>
                <table class="uk-table uk-table-hover uk-table-striped"  style="padding-top: 2%;">
                    <thead>
                        <tr>
                            <th class="uk-width-auto">Travaux</th>
                            <th class="uk-text-right">Coûts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chaussée</td>
                            <td class="uk-text-right">CHF 340'500.00</td>
                        </tr>

                        <tr>
                            <td>Eaux usées</td>
                            <td class="uk-text-right">CHF 345'200.00</td>
                        </tr>

                        <tr>
                            <td>Eau potable</td>
                            <td class="uk-text-right">CHF 235'500.00</td>
                        </tr>

                        <tr>
                            <td>Eclairage</td>
                            <td class="uk-text-right">CHF 46'700.00</td>
                        </tr>

                        <tr>
                            <td>Réserve pour divers et imprévus</td>
                            <td class="uk-text-right">CHF 19'100.00</td>
                        </tr>

                        <tr>
                            <td><b>Total du crédit TTC<b></td>
                            <td class="uk-text-right"><b>CHF 987'000.00<b></td>
                        </tr>
                    </tbody>
                </table>
            </li>  

            <li>
                <div class="uk-column-1-1@m uk-column-1-1@s">  
                    <h2>Autorités communales</h2>
                    <iframe title="Recommandations de vote des autorités et des partis communaux_réfection d'une rue" aria-label="Graphique en colonnes" id="datawrapper-chart-KApRf" src="https://datawrapper.dwcdn.net/KApRf/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="204"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                    </script>

                    <!--<h2>Partis politiques</h2>
                    <iframe title="Recommandations de vote des partis_AgrandissementSTEP2021" aria-label="Anneau de choix" id="datawrapper-chart-QKB1K" src="https://datawrapper.dwcdn.net/QKB1K/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                    </script>-->
                </div>
            </li>  

            <li>    
                <p style="padding-bottom: 10%">Il n'y a pas d'arguments pour ce projet !</p>
            </li>
            
            <li>
                <p style="padding-bottom: 10%">Il n'y a pas d'arguments contre ce projet !</p>
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