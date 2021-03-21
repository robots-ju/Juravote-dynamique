<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election Mairie Courtételle</title>
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
        <h1 class="uk-heading-large">Courrendlin - élection à la Présidence des Assemblées</h1>
        <hr>
        <h2 style="padding-bottom: 2%;">Délai de dépôt des listes</h2>
        <p>La fonction de Président (H/F) des assemblées communales est à repourvoir en date du 13 juin prochain.
        A cet effet, une élection complémentaire (lors de démission de l'élu en cours de mandat) par les urnes 
        est organisée.</p>
        <p>Les citoyens (H/F) intéressés à faire acte de candidature sont invités à bien vouloir remettre au Conseil
        communal jusqu'au 12 avril 2021 leur postulation (avec indication du nom, du prénom, de l'année de naissance
        et de la profession). Les actes de candidature porteront la signature manuscrite du candidat (H/F) et celle
        d'au moins 5 électeurs (H/F) domiciliés dans la commune.</p>

        <p>Plus d'informations : Mme Stéphanie Mahon (secrétaire communale), stephanie.mahon@courrendlin.ch, 
        032 436 10 70</p>
        <!--<h2 style="padding-bottom: 2%;">Résultats à l'issue du délai de dépôt des listes</h2>
        <p>Une seule candidate s'est présentée à l'élection à la Mairie de Courtételle. Cette personne est donc élue en qualité
            de Maire de Courtételle.
        </p>
        <p>Madame Christine Gygax (Parti socialiste) entrera donc en fonction dans une dizaine de jours. Etant actuellement Conseillère
            communale, une nouvelle élection sera organisée pour désigner son ou sa successeur au sein de l'Exécutif communal.
        </p>-->
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>