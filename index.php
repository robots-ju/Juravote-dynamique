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
                <div class="uk-card uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-1@s uk-padding uk-flex" uk-grid>

                    <div class="uk-card uk-card-body uk-padding-remove uk-width-expand@m" style="padding: 10%">                                                
                        <h3 class="uk-heading-divider uk-text-center">Bienvenue sur Juravote !</h3> 
                        <div class="uk-column-1-1" style="padding-top: 5%">
                            <div class="uk-card uk-card-body uk-padding-remove uk-width-expand@m">
                                <img class="uk-align-center" src="<?php echo $juravoteTwitter ?>" style="width: 700px;" alt="Juravote">
                            </div>
                            <p class="uk-text-justify" style="padding-left: 10%">Toute <a href="<?php echo $PHPequipe ?>">l'équipe de Juravote</a> vous souhaite
                            la bienvenue sur son site Internet !</p>
                            <p class="uk-text-justify" style="padding-left: 10%; padding-right: 10%">Nous restons volontiers à disposition en cas de questions ou de suggestions
                            via <a href="<?php echo $PHPequipe ?>">le formulaire de contact.</a></p>
                        </div>                        
                    </div>
                    
                    <div class="uk-card uk-card-body uk-padding-remove uk-width-1-3@s uk-flex-first@s">   
                        <h3 class="uk-heading-divider uk-text-center">Prochaines votations</h3>                                                    
                        <a href="<?php echo $lien ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >07.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations fédérales</h3>
                                </div>                          
                            </div>
                        </a>  
                        <a href="<?php echo $lien ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >07.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Delémont</h3>
                                </div>                          
                            </div>
                        </a> 
                        <a href="<?php echo $lien ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >28.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation de Moutier</h3>
                                </div>                          
                            </div>
                        </a> 
                        <!--<a href="<?php echo $lien ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >13.06</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations fédérales</h3>
                                </div>                          
                            </div>
                        </a> 
                        <a href="<?php echo $lien ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >26.09</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations fédérales</h3>
                                </div>                          
                            </div>
                        </a> 
                        <a href="<?php echo $lien ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >28.11</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations fédérales</h3>
                                </div>                          
                            </div>
                        </a>-->                                    
                    </div>
                    <div class="uk-card uk-card-body uk-padding-remove uk-width-1-3@s">                       
                        <h3 class="uk-heading-divider uk-text-center">Derniers résultats</h3>
                        <a href="<?php echo $PHPvotationDevelierEau2020 ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >13.12</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Develier</h3>
                                </div>                          
                            </div>
                        </a>
                            
                        <a href="<?php echo $PHPresultats20201129Accueil ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >29.11</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations fédérales</h3>
                                </div>                          
                            </div>
                        </a>
                        
                        <a href="<?php echo $PHPresultatGouvernementJU20201108 ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >08.11</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Gouvernement Jura</h3>
                                </div>                          
                            </div>
                        </a>

                        <a href="<?php echo $PHPresultatParlementJU20201018 ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >18.10</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Parlement Jura</h3>
                                </div>                          
                            </div>
                        </a>                                               
                    </div>                                        
                </div> 
                <div>
                    <div>
                        <h3 class="uk-heading-divider uk-text-center">Prochaines séances des Autorités</h3>  
                        <div class="uk-child-width-1-2@l uk-child-width-1-3@xl uk-grid-divider" uk-grid>


                            <div>
                                <a target="blank" href="https://juravote.flarum.cloud/d/33-assemblee-communale-ordinaire-des-breuleux-21-decembre-2020">
                                    <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                        <div class="uk-card-header uk-padding-remove-bottom">
                                            <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >21.12</div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Assemblée communale Les Breuleux</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a target="blank" href="https://juravote.flarum.cloud/d/35-assemblee-communale-ordinaire-de-rossemaison-21-decembre-2020">
                                    <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                        <div class="uk-card-header uk-padding-remove-bottom">
                                            <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >21.12</div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Assemblée communale Rossemaison</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a target="blank" href="https://juravote.flarum.cloud/d/36-assemblee-communale-ordinaire-de-la-baroche-21-decembre-2020">
                                    <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                        <div class="uk-card-header uk-padding-remove-bottom">
                                            <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >21.12</div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Assemblée communale La Baroche</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a target="blank" href="https://juravote.flarum.cloud/d/38-assemblee-communale-ordinaire-de-boncourt-21-decembre-2020">
                                    <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                        <div class="uk-card-header uk-padding-remove-bottom">
                                            <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >21.12</div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Assemblée communale Boncourt </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a target="blank" href="https://juravote.flarum.cloud/d/37-assemblee-communale-ordinaire-du-bemont-22-decembre-2020">
                                    <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                        <div class="uk-card-header uk-padding-remove-bottom">
                                            <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >22.12</div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Assemblée communale Le Bémont</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> 
                    </div>
                    <!--<div>    
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

                                <b><p class="uk-align-right">Gabriel M. Chappuis, Maire de Develier</p></b>                      
                            </div>      
                        </div> 
                    </div>  -->                  
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