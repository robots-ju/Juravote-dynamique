<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations Val-Terbi</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Projet d'assainissement
        énergétique de l'Ecole en Geneveret</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis de Val-Terbi</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <div class="uk-column-1-4@m uk-column-1-1@s">
                        <h3>Préambule</h3>
                        <p>La Commune de Val-Terbi possède plusieurs immeubles. Certains sont neufs ou viennent d'être rénovés, mais d'autres sont vieux et se trouvent dans des états très variables. Ces derniers ne sont plus aux normes et coûtent très cher en termes d'énergie.
                        Sur mandat du Conseil communal, une commission a pour but de définir des mesures d’assainissement énergétique des immeubles communaux. La qualité des immeubles a été déterminée et les améliorations possibles définies..
                        </p>

                        <h3>Planification d'assainnissement</h3>
                        <p style="padding-bottom: 10%">En conséquence, les immeubles prioritaires sont l'école primaire de Montsevelier (les travaux sont en cours suite à la votation populaire) et l'école de Geneveret à Vicques. Les possibilités de subventions du Canton du Jura ont permis d'affiner le planning de réalisation et la rénovation est dès lors prévu dès 2022.
                        </p>
                                        
                        <h3>Clause du besoin</h3>
                        <p style="padding-bottom: 20%">L’École de Geneveret montre des pertes calorifiques dépassant 3 fois les exigences actuelles. De plus, l'efficacité énergétique est insatisfaisante et les besoins en énergie sont élevés.
                        </p>

                        <h3>Descriptif du projet</h3>
                        <p style="padding-bottom: 15%">Le projet comprend l'amélioration énergétique et le remplacement du chauffage à mazout par une pompe à chaleur. En parallèle, une ventilation et une installation photovoltaïque seront installées.
                    </div>

                    <div class="uk-column-1-1@m uk-column-1-1@s" style="padding-top: 2%;">
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Prestations</th>
                                    <th>Estimation des coûts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Travaux préparatoires</td>
                                    <td>9'500.-</td>
                                </tr>

                                <tr>
                                    <td>Bâtiment</td>
                                    <td>894'300.-</td>
                                </tr>

                                <tr>
                                    <td>Aménagements extérieures</td>
                                    <td>84'000.-</td>
                                </tr>

                                <tr>
                                    <td>Frais secondaires et réserve</td>
                                    <td>112'200.-</td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>1'100'000.-</b></td>
                                </tr>

                                <tr>
                                    <td>./. Subvention cantonale</td>
                                    <td>./. 323'384.-</td>
                                </tr>

                                <tr>
                                    <td>./. Subvention pour le remplacement du chauffage</td>
                                    <td>./. 4'000.-</td>
                                </tr>

                                <tr>
                                    <td>./. Subvention pour l'assainissement</td>
                                    <td>./. 33'700.-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3>La question qui vous est posée :</h3>
                    <hr>
                    <b><p class="uk-text-justify">Acceptez-vous le projet d’assainissement énergétique de l’école En Geneveret d’un montant de 1'100'000 francs ?
                    </p></b>
                </li>

                <li>
                    <div class="uk-column-1-1@m uk-column-1-1@s">  
                        <h2>Autorités communales</h2>
                        <iframe title="Recommandations de vote des autorités_ValTerbi_EcolePrimaireVicques" aria-label="Graphique en colonnes" id="datawrapper-chart-VZd2S" src="https://datawrapper.dwcdn.net/VZd2S/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="204"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <!--<h2>Partis politiques</h2>
                        <iframe title="Recommandations de vote des partis_AgrandissementSTEP2021" aria-label="Anneau de choix" id="datawrapper-chart-QKB1K" src="https://datawrapper.dwcdn.net/QKB1K/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="245"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>-->
                    </div>
                </li>  

                <li>    
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités communales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le projet prévoit une rénovation de l’enveloppe du bâtiment correspondant au standard Minergie et offre par conséquent des perspectives intéressantes en matière d’écologie mais aussi à une importante réduction des charges.</p>
                            </div>
                        </div>
                    </div>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>