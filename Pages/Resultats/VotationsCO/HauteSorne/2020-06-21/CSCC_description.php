<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Haute-Sorne 21.06.2020</title>
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
<!-- Barre de navigation -->
<main>
    <header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
    <section style="padding: 2%;">
    <h1 class="uk-heading-large">Haute-Sorne : Votations du 21 juin 2020</h1>
    <a href="javascript:history.go(-1)"><span uk-icon="icon: chevron-left; ratio: 1.5"></span>Retour</a>
    <hr>
    <div class="uk-grid-medium uk-grid-match" uk-grid>
        <div class="uk-width-1-1 uk-width-3-4@l uk-margin-auto">
            <h2 class="titre-section">Crédit de CHF 1'312'000.- nécessaire à l'assainissement du Centre de Culture et de Sport à Courfaivre</h2>
            <p>Pour rappel, des travaux ont dû être réalisés à la suite de la découverte de plusieurs problèmes d’étanchéité du bâtiment. 
                Pour y remédier, le Conseil général s’est prononcé en faveur d’un crédit de CHF 490'000.- le 21 novembre 2017.
                De nombreuses malfaçons sont toutefois apparues durant cette phase d’assainissement.
                Par conséquent, des travaux complémentaires s’avèrent nécessaires.
            </p>
            <p>
                La deuxième étape a pour objectif de supprimer la présence d'eau sous la chape flottante du bâtiment., d'efectuer la
                remise en état des locaux touchés par les défectuosités constatées lors des travaux de 2018, de renforcer la
                structure et d'aménager la route jouxtant le bâtiment.Le coût total des travaux se monte à CHF 1'312'000.-
                (incluant les CHF 490'000.- évoqués pour la première phase des travaux), dont CHF 329'000.- par voie d’emprunt.
            </p>            
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
                                <li>Les travaux garantiront la sécurité des utilisateurs.</li>
                                <li>La longévité de cet ouvrage public sera garantie.</li>
                                <li>Des projets pour la jeunesse</li>
                                <li>Des projets rassembleurs afin de démontrer l'identité "Haute-Sorne"</li>
                                <li>Les citoyens de Haute-Sorne n'ont pas le choix. Il faut remédier aux déficiences.</li>
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
                                <li>FC Bassecourt</li>
                                <li>FC Glovelier</li>
                                <li>FC Courfaivre</li>
                                <li><span class="uk-badge badge-ps">Parti socialiste Haute-Sorne</span></li>    
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
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>