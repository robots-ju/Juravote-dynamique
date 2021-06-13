<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election complémentaire par les urnes
de deux conseillers-ères communaux-les</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        
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
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Montfaucon - Election complémentaire par les urnes de deux conseillers-ères communaux-les</h1>
        <hr>
        <div class="uk-column-1-2@m uk-column-1-1@s">
            <h2>Délai de dépôt des listes</h2>
            <p>Les électrices et électeurs de la commune mixte de
            Montfaucon sont convoqués aux urnes afin de procéder
            à l’élection complémentaire de deux Conseillers-ères,
            selon le système majoritaire à deux tours, conformément
            aux dispositions de la loi cantonale sur les droits
            politiques et du règlement communal sur les élections.</p>

            <p>Les actes de candidatures
            doivent être remis au Conseil communal jusqu’au lundi
            19 avril 2021, à 12 heures. Ils indiqueront le nom, le prénom,
            l’année de naissance et la profession du (de la) candidat-
            e. Les actes de candidature doivent porter la signature
            manuscrite du (de la) candidat-e et celles d’au moins
            cinq électeurs-trices domiciliés-es dans la commune.</p>

            <h2>Résultats à l'issue du délai de dépôt des listes</h2>
            <p>Un seul candidat s'est présentée à l'élection complémentaire à la Mairie de Montfaucon.
            Monsieur Marc Dällenbach est donc élu au Conseil communal.
            </p>
            <p style="padding-bottom: 10%">Une élection libre aura lieu le 13 juin pour repourvoir le deuxième siège au sein de l'Exécutif communal.
            </p>
        </div>

        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" style="padding-top: 2%" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Informations de la votation</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-left">
                        <p><b>Objet : </b>Élection au Conseil communal</p>
                        <p><b>Candidats élus : </b>Marc Dällenbach et Gaétan Marchand</p>
                        <p><b>Type de l'élection : </b>Élection communale libre</p>
                        <p><b>Mode d'élection : </b>Élection complémentaire</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Résultats communaux</h2>
                        </div>
                    </div>
                    <section style="padding: 2%;">
                        <li>
                            <iframe title="Election complémentaire au Conseil communal de Montfaucon (2e siège)" aria-label="Diagramme en barres" id="datawrapper-chart-2PhqK" src="https://datawrapper.dwcdn.net/2PhqK/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="185"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                            </script>                  
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>