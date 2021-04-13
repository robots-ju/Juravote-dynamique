<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Courrendlin - élection à la Présidence des Assemblées</h1>
        <hr>
        <div class="uk-column-1-2@m uk-column-1-1@s">
            <h2 style="padding-bottom: 2%;">Délai de dépôt des listes</h2>
            <p>La fonction de Président (H/F) des assemblées communales est à repourvoir en date du 13 juin prochain.
            A cet effet, une élection complémentaire (lors de démission de l'élu en cours de mandat) par les urnes 
            est organisée.</p>
            <p>Les citoyens (H/F) intéressés à faire acte de candidature sont invités à bien vouloir remettre au Conseil
            communal jusqu'au 12 avril 2021 leur postulation (avec indication du nom, du prénom, de l'année de naissance
            et de la profession). Les actes de candidature porteront la signature manuscrite du candidat (H/F) et celle
            d'au moins 5 électeurs (H/F) domiciliés dans la commune.</p>

        <h2 style="padding-bottom: 2%;">Résultats à l'issue du délai de dépôt des listes</h2>
        <p>Un seul candidat s'est présenté à l'élection à la Présidence des Assemblées. Cette personne est donc élue en qualité
            de Maire de Courtételle.</p>

        <p style="padding-bottom: 10%;">Monsieur Juan Escribano (Parti socialiste) entrera donc en fonction le 1er juillet 2021.</p>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>