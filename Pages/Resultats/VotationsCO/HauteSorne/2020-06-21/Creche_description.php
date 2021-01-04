<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Haute-Sorne : Votations du 21 juin 2020</h1>
        <a href="javascript:history.go(-1)"><span uk-icon="icon: chevron-left; ratio: 1.5"></span>Retour</a>
        <hr>
        <div class="uk-grid-medium uk-grid-match" uk-grid>
            <div class="uk-width-1-1 uk-width-3-4@l uk-margin-auto">
                <div>
                    <h2 class="titre-section">Demande de crédit de CHF 2'150'000.- pour l'acquisition d'un bâtiment à Courfaivre pour l'accueil d'une antenne crèche/UAPE à Courfaivre.</h2>
                    <p>Les Autorités communales, dans leur programme de législature, ont prévu la création d’une antenne crèche/UAPE à Courfaivre. 
                        Idéalement situé au coeur de Courfaivre, à deux pas de l'école enfantine, le bâtiment en question possède des locaux spacieux,
                        bien entretenus et offrant de nombreuses possibilités d'aménagement.</p>
                    <p>Il se compose de :</p>
                    <ul>
                        <li>2 grandes surfaces commerciales avec hall au rez-de-chaussée ;</li>
                        <li>2 appartements (un 3 pièces et un 4 pièces) ;</li>
                        <li>1 grande surface aménagée en bureaux ou en appartement au 1er étage ;</li>
                        <li>1 grande surface aménagée en bureaux au 2ème étage ;</li>
                        <li>1 grand sous-sol avec caves, buanderie et divers locaux ;</li>
                        <li>3 garages ;</li>
                        <li>25 places de parc autour et en face ;</li>
                        <li>1 ascenseur.</li>
                    </ul>                     
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
                                <li>L’augmentation démographique dans la commune nécessite la mise en place d’infrastructures
                                    permettant l’accueil des enfants pendant la journée.</li>
                                <li>Le bâtiment abritant l'ancienne Raiffeisen et l'ancienne Poste a été retenue, car les deux
                                    institutions ont fermé leurs portes.</li>
                                <li>Le bâtiment est bien situé à Courfaivre.</li>
                                <li>Des projets pour la jeunesse</li>
                                <li>Des projets rassembleurs afin de démontrer l'identité "Haute-Sorne"</li>
                                <li>La charge communale se situe en dessous de 20'000 francs par année.</li>
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
                                <li>Autorités cantonales (réponse favorable)</li>
                                <li><span class="uk-badge badge-ps">Parti socialiste Haute-Sorne</span></li> 
                                <li><span class="uk-badge badge">Haute-Sorne Avenir</span></li>      
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>