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
<!-- Barre de navigation -->
    <header>
            <div class="navbar-normal">
                <?php include "./Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "./Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Haute-Sorne : Votations du 21 juin 2020</h1>
        <a href="javascript:history.go(-1)"><span uk-icon="icon: chevron-left; ratio: 1.5"></span>Retour</a>
        <hr>
        <div class="uk-grid-medium uk-grid-match" uk-grid>
            <div class="uk-width-1-1 uk-width-3-4@l uk-margin-auto">
                <div>
                    <h2 class="titre-section">Modifications des règlements communaux sur les constructions et l'introduction d'une taxe pour les 
                        places de parc manquantes des 5 villages constituant la Commune de Haute-Sorne</h2>
                    <p>La politique de densification des centres-village voulue par la Confédération, le Canton ainsi que
                        par les Autorités communales a pour but de favoriser la rénovation et la réhabilitation d'anciens 
                        bâtiments, anciennes fermes et granges, etc. De nombreux nouveaux appartements sont ainsi créés au 
                        cœur de nos villages.</p>
                        <p>Cette augmentation d’appartements engendre un nombre croissant de véhicules dans les 
                        centres. Les propriétaires et/ou auteurs des projets ne sont pas toujours à même de remplir les obligations 
                        légales posées par la législation cantonale quant au nombre de places de stationnement à prévoir en lien 
                        avec un projet de construction, ceci notamment par manque de place ou de par la configuration particulière des lieux</p>
                    <p>Les Autorités communales de la Commune mixte de Haute-Sorne proposent, comme cela se fait par ailleurs
                        dans les villes, et en conformité avec la législation cantonale en la matière (art.19 OCAT), de fixer
                        « une taxe pour place de stationnement manquante ». Cette taxe sera facturée à tout propriétaire ne 
                        pouvant pas remplir l'obligation du nombre de places de stationnement minimales fixées par la législation. </p>
                    
                </div>
            </div>
           
            
        </div>
        <hr>
            <section>
                <h2 class="uk-text-center uk-text-left@m"><span class="pour">✔</span> Pour <span class="pour">✔</span></h2>
                <div class="uk-grid-medium uk-grid-match" uk-grid>
                    <div class="uk-width-1-1 uk-width-3-4@l uk-margin-auto">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <h3 class="uk-card-title">Argumentation</h3>
                            </div>
                            <div class="uk-card-body">
                                <ul class="uk-list uk-list-divider">
                                    <li>Le produit de la taxe sera utilisé pour la construction et l'entretien des places de stationnement publiques.
                                        Il servira également au financement de mesures destinées à dimninuer les nuisances du trafic privé et à
                                        augmenter la sécurité dans les localités.</li>
                                    <li>La loi fédérale sur l'aménagement du territoire ainsi que son ordonnance d'application (LAT et OAT)
                                        sont respectées.</li>
                                    <li>Les centres-villages de la Haute-Sorne seront préservés.</li>
                                    <li>L'intégration de nouveaux logements sera favorisée, tout en garantissant une solution pour les besoins
                                        en stationnement générés.</li>
                                    <li>Ces modifications s'inscrivent dans la continuité de la législation cantonale et permettront
                                        une plus grande flexibilité de densification et de préservation des centres-villages.</li>
                                    <li>Des projets pour la jeunesse</li>
                                    <li>Des projets rassembleurs afin de démontrer l'identité "Haute-Sorne"</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-4@l uk-margin-auto">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <h3 class="uk-card-title">Recommandent le OUI :</h3>
                            </div>
                            <div class="uk-card-body">
                                <ul class="uk-list uk-list-divider">
                                    <li>Conseil communal</li>
                                    <li>Conseil général</li>
                                    <li>Service du développement territorial du Canton du Jura (préavis favorable)</li> 
                                    <li><span class="uk-badge badge-ps">Parti Socialiste Haute-Sorne</span></li>                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="uk-divider-icon">
            <section>
                <h2 class="uk-text-center uk-text-left@m"><span>✖</span> Contre <span>✖</span></h2>
                <div class="uk-grid-medium uk-grid-match" uk-grid>
                    <div class="uk-width-1-1">
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-body">
                                    <p>Il n'y a aucune opposition à cette votation...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--
                    <div class="uk-width-3-4@l uk-margin-auto">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <h3 class="uk-card-title">Argumentation</h3>
                            </div>
                            <div class="uk-card-body">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-4@l uk-margin-auto">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <h3 class="uk-card-title">Recommandent le NON :</h3>
                            </div>
                            <div class="uk-card-body">
                                <ul>                                    

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            -->
            </section>
    </section>
<main>

</main>
<footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>