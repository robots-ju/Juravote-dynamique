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
            <section style="padding-left: 5%; padding-right: 5%; padding-top: 2%">
                <div class="uk-card uk-grid-collapse uk-child-width-1-2@m uk-child-width-1-1@s uk-padding" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="<?php echo $juravoteTwitter ?>" alt="Juravote">
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Bienvenue sur Juravote !</h3>
                            <p>Nous vous souhaitons une agréable visite et restons à disposition pour toute proposition ou question !</p>
                        </div>                        
                    </div>                    
                </div>
                
                <div class="uk-grid-match uk-flex" uk-grid>
                    <div class="uk-width-expand@m">
                        <div class="uk-text-center" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-card uk-card-body uk-padding-remove">
                                    <h3 class="uk-heading-divider">Soutiens de Juravote</h3>   
                                    <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *">
                                        <button class="uk-button uk-button-default" type="button">Gabriel M. Chappuis, Maire de Develier</button>
                                        <button class="uk-button uk-button-default" type="button">Candidats-es aux élections cantonales</button>
                                    </div>  
                                    <ul class="uk-switcher uk-margin">
                                        <li>     
                                            <div uk-grid>
                                                <div class="uk-card uk-width-1-1@m">
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
                                            </div>
                                        </li>
                                        <li>                                   
                                            <div class="uk-column-1-2@m uk-column-1-1@s uk-column-divider uk-text-center">
                                                <p>Philippe Bassin (Verts, Porrentruy)</p>
                                                <p>Martin Braichet (PLR, Montavon)</p>
                                                <p>Joël Burkhalter (PS, Courrendlin)</p>
                                                <p>Jean-Marc Comment (Verts, St-Ursanne)</p>  
                                                <p>Pierre-André Comte (PS, Vellerat)</p>
                                                <p>Vincent Froté (PLR, Delémont)</p>
                                                <p>Gisèle Juillet (Verts, Courtemaîche)</p>
                                                <p>Marcelle Luchinger-Fleury (PLR, Courroux)</p> 
                                                <p>Gaëtan Marchand (Verts, Montfaucon)</p> 
                                                <p>Pierre-Xavier Meury (PLR, Delémont)</p>                                               
                                                <p>Ludovic Monteiro (PLR, Boncourt)</p>
                                                <p>Yan Noirjean (PLR, Alle)</p>
                                                <p>Céline Robert-Charrue Linder (Verts, Delémont)</p>
                                                <p>Yann Rufer (PLR, Rossemaison)</p>
                                                <p>Matthieu Saner (PLR, Delémont)</p>     
                                                <p>Vincent Schmitt (Verts, Les Enfers)</p>  
                                                <p>Romuald Siess (PS, Vendlincourt)</p>
                                                <p>Valentine Steulet (PS, Rossemaison)</p>                                          
                                                <p>Thomas Vuillaume (PLR, Grandfontaine)</p>
                                                <p>Fanny Wisler (PS, Delémont)</p>                                                                      
                                            </div> 
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="uk-width-1-4@m uk-flex-first@m">
                        <div class="uk-card uk-card-body uk-padding-remove">
                            <h3 class="uk-heading-divider">Prochains événements</h3>       
                                               
                            <a href="<?php echo $siteBreuleux ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">05.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Assemblée communale - Breuleux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $siteLajoux ?>" target="blank">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">08.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Assemblée communale - Lajoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionsJUaccueil ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections - Jura</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionBonfol ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections - Bonfol</h3>
                                    </div>
                                </div>
                            </a>                            
                            <a href="<?php echo $PHPelectionCourtedoux ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections - Courtedoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPelectionMovelier ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections - Movelier</h3>
                                    </div>
                                </div>
                            </a>
                            <!--<a href="<?php echo $PHPelectionsJUGouvernement2 ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">08.11</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections - Jura</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $fichier ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">29.11</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations - Suisse</h3>
                                    </div>
                                </div>
                            </a>-->
                        </div>
                    </div>


                    <div class="uk-width-1-4@m">
                        <div class="uk-card uk-card-body uk-padding-remove">
                            <h3 class="uk-heading-divider">Derniers résultats</h3>                            
                            <a href="<?php echo $PHPresultats20200927Accueil ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations - Suisse</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPvotationsDelemont ?>">   
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votation - Delémont</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPresultatsConseilLajoux2020 ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Elections - Lajoux</h3>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $PHPvotationValTerbiAccueil ?>">
                                <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                    <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-align-left">Votations - Val-Terbi</h3>
                                    </div>
                                </div>
                            </a>
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