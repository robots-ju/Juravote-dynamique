<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Gouvernement jurassien</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssinstances; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssgouvernementJU; ?>"/>
        
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
        <h1 class="uk-heading-large">Gouvernement jurassien 2021 - 2025</h1>
        <hr>
        <div class="conteneur_cartes">
            <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img class="uk-border-circle photo-personne"
                                            src="<?php echo $JacquesGerber ?>"
                                            alt="Jacques Gerber">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Jacques Gerber</h3>
                            <p class="uk-text-center text-fonction">Ministre</p>
                            <p class="uk-border-rounded">Département de l'économie, de la santé et de l'agriculture</p>
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
                                            src="<?php echo $MartialCourtet ?>"
                                            alt="Martial Courtet">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Martial Courtet</h3>
                            <p class="uk-text-center text-fonction">Ministre</p>
                            <p class="uk-border-rounded">Département de la formation, de l'égalité, de la culture et des sports</p>
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
                                            src="<?php echo $NathalieBarthoulot ?>"
                                            alt="Nathalie Barthoulot">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Nathalie Barthoulot</h3>
                            <p class="uk-text-center text-fonction">Présidente du Gouvernement</p>
                            <p class="uk-text-center">Département de la cohésion sociale, de la justice et de la police</p>
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
                                            src="<?php echo $RosalieBeuret ?>"
                                            alt="Rosalie Beuret Siess">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Rosalie Beuret Siess</h3>
                            <p class="uk-text-center text-fonction">Ministre</p>
                            <p class="uk-border-rounded">Département des finances, des ressources humaines et des communes</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                        <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img class="uk-border-circle photo-personne"
                                            src="<?php echo $DavidEray ?>"
                                            alt="David Eray">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">David Eray</h3>
                            <p class="uk-text-center text-fonction">Ministre</p>
                            <p class="uk-border-rounded">Département du territoire, de l'environnement et des transports</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                        <div class="uk-card-badge uk-label badge-chancelier uk-border-rounded">Chancelière</div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img class="uk-border-circle photo-personne"
                                            src="<?php echo $GladisWinkler ?>"
                                            alt="Gladys Winkler Docourt">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Gladys Winkler Docourt</h3>
                            <p class="uk-text-center text-fonction">Chancelière d'Etat</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>