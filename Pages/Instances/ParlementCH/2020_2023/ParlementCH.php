<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include './variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
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
                <?php include "./Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "./Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
<section style="padding: 2%">
        <h1 class="uk-heading-large">Assemblée fédérale (Jura) 2020 - 2023</h1>
        <hr>
        <div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            

            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                            <div class="uk-width-auto uk-first-column">
                                <img class="uk-border-circle photo-personne"
                                     src="../../../../IMG/Personnalites/ParlementCH/2020_2023/CharlesJuillard.jpg"
                                     alt="Charles Juillard">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Charles Juillard</h3>
                        <p class="uk-text-center text-fonction">Conseiller aux Etats jurassien</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                            <div class="uk-width-auto uk-first-column">
                                <img class="uk-border-circle photo-personne"
                                     src="../../../../IMG/Personnalites/ParlementCH/2020_2023/Jean-PaulGschwind.jpg"
                                     alt="Jean-Paul Gschwind">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Jean-Paul Gschwind</h3>
                        <p class="uk-text-center text-fonction">Conseiller national jurassien</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                            <div class="uk-width-auto uk-first-column">
                                <img class="uk-border-circle photo-personne"
                                     src="../../../../IMG/Personnalites/ParlementCH/2020_2023/ElisabethBaume.jpg"
                                     alt="Elisabeth Baume-Schneider">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Elisabeth Baume-Schneider</h3>
                        <p class="uk-text-center text-fonction">Conseillère aux Etats jurassienne</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                    <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                            <div class="uk-width-auto uk-first-column">
                                <img class="uk-border-circle photo-personne"
                                     src="../../../../IMG/Personnalites/ParlementCH/2020_2023/Pierre-AlainFridez.jpg"
                                     alt="Pierre-Alain Fridez">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title-center text-rouge-fonce">Pierre-Alain Fridez</h3>
                        <p class="uk-text-center text-fonction">Conseiller national jurassien</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>