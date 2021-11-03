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
        <h1 class="uk-heading-large">Crédit-cadre de Fr. 3'600'000.- pour
        le projet de rénovation de l'Ecole secondaire du Val-Terbi</h1>
        <hr>

        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis de Val-Terbi</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h3>Préambule</h3>
                    <p>L'ESVT accueille les élèves de Courchapoix, de Courroux, de Mervelier et de Val-Terbi. Le bâtiment appartient au Syndicat de l'ESVT et les charges sont réparties comme suit entre les communes :
                    </p>

                    <ol style="padding-bottom: 5%">
                        <li>Courchapoix : 5.45%</li>
                        <li>Courroux : 45.00%</li>
                        <li>Mervelier : 5.80%</li>
                        <li>Val-Terbi : 43.75%</li>
                    </ol>                        

                    <h3>Descriptif du projet</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s"> 
                        <h4>Contexte général</h4>
                        <p>Construit en 1960, le bâtiment principal a été rejoint par des agrandissements en 1978, en 1994 et en 2004. Le projet de rénovation comprend les deux premiers bâtiments (1960 et 1978) et a pour vocation d'offrir des conditions optimales aux élèves et aux enseignants de l'ESVT, car les salles de classes n'ont fait l'objet d'aucune rénovation à ce jour.
                        </p>

                        <h4>Objectif de la rénovation</h4>
                        <h5>Rénovation intérieure</h5>
                        <p style="padding-bottom: 5%">Les locaux seront rénovés entièrement (sols, équipement électrique, mobilier, peinture et installations sanitaires). De plus, les salles seront équipés de faux-plafonds phoniques et de luminaires LED.</p>

                        <h5>Assainissement de la halle de gymnastique</h5>
                        <p>L'isolation thermique des murs et de la toiture sera réalisée (critères Minergie), car inexistante. Certaines infrastructures seront refaites pour répondre aux normes actuelles de sécurité et un nouvel éclairage sera réalisé.</p>

                        <h5>Assainissement énergétique</h5>
                        <p>Afin de réduire les frais énergétiques, les combles seront isolées, des luminaires LED posés, des fenêtres seront remplacées et une installation photovoltaïque réalisée. Un label Minergie global a été mis de côté, car les coûts d'obtention sont trop élevés.</p>

                        <h5>Réaménagement des extérieurs</h5>
                        <p>Les couverts à vélos seront remplacés et déplacés, les places alentours seront remises en état et la végétation améliorée. Le couvert de l'entrée principale sera également rénové complètement afin de contribuer, avec les espaces extérieurs, au bien-être des enseignants et des élèves, mais aussi afin de remplir un rôle de carte de visite.</p>
                    </div>

                    <h3>Financement</h3>
                    <p>Dans le but de ne pas surcharger les finances communales, il est prévu de recourir à l'emprunt et, de plus, les travaux sont prévus durant les vacances scolaires de l'année 2022, afin de garantir ile bon déroulement de la vie de l'école.</p>
                    <table class="uk-table uk-table-hover uk-table-striped"  style="padding-top: 2%;">
                        <thead>
                            <tr>
                                <th class="uk-width-auto">Travaux</th>
                                <th class="uk-text-right">Coûts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bâtiment Sud</td>
                                <td class="uk-text-right">CHF 730'660.00</td>
                            </tr>

                            <tr>
                                <td>Bâtiment Centre</td>
                                <td class="uk-text-right">CHF 536'750.00</td>
                            </tr>

                            <tr>
                                <td>Extensions 1994 - 2004</td>
                                <td class="uk-text-right">CHF 98'580.00</td>
                            </tr>

                            <tr>
                                <td>Halle de gymnastique</td>
                                <td class="uk-text-right">CHF 1'278'900.00</td>
                            </tr>

                            <tr>
                                <td>Isolation des combles</td>
                                <td class="uk-text-right">CHF 125'040.00</td>
                            </tr>

                            <tr>
                                <td>Aménagements extérieurs</td>
                                <td class="uk-text-right">CHF 290'360.00</td>
                            </tr>

                            <tr>
                                <td>Photovoltaïques</td>
                                <td class="uk-text-right">CHF 128'010.00</td>
                            </tr>

                            <tr>
                                <td>Honoraires architecte</td>
                                <td class="uk-text-right">CHF 242'400.00</td>
                            </tr>

                            <tr>
                                <td>Honoraires autres ingénierus</td>
                                <td class="uk-text-right">CHF 117'200.00</td>
                            </tr>

                            <tr>
                                <td>Travaux préparatoires et nettoyages</td>
                                <td class="uk-text-right">CHF 52'100.00</td>
                            </tr>

                            <tr>
                                <td><b>Total du crédit TTC<b></td>
                                <td class="uk-text-right"><b>CHF 3'600'000.00<b></td>
                            </tr>
                        </tbody>
                    </table>

                    <p>Le projet de rénovation et l'installation photovoltaïque ont fait l'objet de demandes de subventions auprès des Autorités cantonales. Il peut être attendu un subventionnement de CHF 18'000.00.</p>

                    <h3>La question qui vous est posée :</h3>
                        <hr>
                        <b><p class="uk-text-justify">Acceptez-vous un crédit-cadre de CHF 3'600'000 pour la rénovation de l'Ecole Secondaire du Val-Terbi ?
                        </p></b>
                </li>  

                <li>
                    <div class="uk-column-1-1@m uk-column-1-1@s">  
                        <h2>Autorités communales</h2>
                        <iframe title="Recommandations de vote des autorités_ValTerbi_ESVT" aria-label="Graphique en colonnes" id="datawrapper-chart-Kmmch" src="https://datawrapper.dwcdn.net/Kmmch/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="204"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>