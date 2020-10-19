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
                <?php include "./Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "./Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
        
        <main>
            <section style="padding: 2%">
                <div class="uk-card uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-1@s uk-padding" uk-grid>   
                    <div class="uk-card uk-card-body uk-padding-remove uk-width-auto">   
                        <h3 class="uk-heading-divider">Prochains événements</h3> 
                        <a href="<?php echo $PHPelectionsJUGouvernement2 ?>">                          
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >08.11</div>
                                <h3 class="uk-card-title">Elections Jura (2e tour)</h3>                            
                            </div>
                        </a>
                        <a href="<?php echo $siteBasseAllaine ?>" target="blank">
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >10.11</div>
                                <h3 class="uk-card-title">Assemblée communale Basse-Allaine</h3>                            
                            </div>
                        </a>
                        <a href="<?php echo $PHPvotationsCHaccueil ?>">
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >29.11</div>
                                <h3 class="uk-card-title">Votations fédérales</h3>                            
                            </div>
                        </a>
                        <a href="#">
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >20.12</div>
                                <h3 class="uk-card-title">Election Mervelier (infos à venir)</h3>                            
                            </div>
                        </a>
                    </div>

                    <div class="uk-card uk-card-body uk-padding-remove uk-width-expand@m" style="padding: 10%">                                                
                        <h3 class="uk-heading-divider uk-text-center">Bienvenue sur Juravote !</h3> 
                        <div class="uk-column-1-1" style="padding-top: 5%">
                            <div class="uk-card uk-card-body uk-padding-remove uk-width-expand@m">
                                <img class="uk-align-center" src="<?php echo $juravoteTwitter ?>" style="width: 700px;" alt="Juravote">
                            </div>
                            <p class="uk-text-justify" style="padding-left: 10%">Toute <a href="<?php echo $PHPequipe ?>">l'équipe de Juravote</a> vous souhaite
                            la bienvenue sur son site Internet !</p>
                            <p class="uk-text-justify" style="padding-left: 10%">Nous restons volontiers à disposition en cas de questions ou de suggestions
                            via <a href="<?php echo $PHPequipe ?>">le formulaire de contact.</a></p>
                        </div>                        
                    </div>   
                    <div class="uk-card uk-card-body uk-padding-remove uk-width-auto">                       
                        <h3 class="uk-heading-divider uk-text-right">Derniers résultats</h3>
                        <a href="<?php echo $PHPresultatsElectionsJU ?>">
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >18.10</div>
                                <h3 class="uk-card-title">Election cantonales Jura</h3>
                            </div>
                        </a>
                        <a href="<?php echo $PHPresultats20200927Accueil ?>">
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >27.09</div>
                                <h3 class="uk-card-title">Votations fédérales</h3>                            
                            </div>
                        </a>
                        <a href="<?php echo $PHPvotationsDelemont ?>">   
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >27.09</div>
                                <h3 class="uk-card-title">Votation Delémont</h3>       
                            </div>
                        </a>
                        <a href="<?php echo $PHPresultatsConseilLajoux2020 ?>">
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >27.09</div>
                                <h3 class="uk-card-title">Elections Lajoux</h3>
                            </div>
                        </a>
                        <a href="<?php echo $PHPvotationValTerbiAccueil ?>">
                            <div class="uk-card uk-card-hover uk-card-body uk-width-1-1">
                                <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >27.09</div>
                                <h3 class="uk-card-title">Votation Val-Terbi</h3>                            
                            </div>
                        </a>                        
                    </div>                                        
                </div> 
                <div style="padding-left: 2%; padding-right: 2%;"> 
                    <h3 class="uk-heading-divider uk-text-center">Soutiens de Juravote</h3>
                    <div class="uk-column-1-1@m uk-column-divider">
                        <div class="uk-card-body uk-text-justify">                            
                            <p>Juravote, site internet au design simple et plaisant, informe la population, de
                            manière indépendante et concise, sur les votations. Les arguments pour et contre,
                            ainsi que les prises de positions des partis, sont mentionnés de façon totalement
                            neutre. JuraVote renseigne également sur les autorités, les élections à venir, ainsi
                            que sur les activités politiques. Les résultats des votations et élections sont
                            consignés.</p>

                            <p>Concentrées sur un seul site, ces informations sont accessibles en tout temps et
                            assurent une partialité et neutralité, tant estimées par la population suisse. Cet
                            avantage permet à tout un chacun d'être informé de façon claire et objective. Cette
                            source d'informations fiable devrait aussi intéresser les communes et autres
                            instances politiques, aujourd'hui uniquement jurassiennes, à la mise en place d'outils
                            informatiques communs permettant de faire des économies d'échelles substantielles.
                            Peut-être un futur "SwissVote".</p>

                            <p>Nous félicitons vivement toute cette jeune équipe pour leur intérêt à la chose
                            publique et la mise en oeuvre de ce formidable support et leur souhaitons plein succès.</p>     

                            <b><p class="uk-align-right" style="padding-bottom: 10%">Gabriel M. Chappuis, Maire de Develier</p></b>                      
                        </div>      
                    </div> 
                </div>                            
            </section>
        </main>
    </body>

    <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>