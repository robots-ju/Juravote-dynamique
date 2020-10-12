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
                        <a href="<?php echo $PHPelectionsJUaccueil ?>">
                            <div class="uk-width-expand uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Elections Jura</h3>
                                </div>
                            </div>
                        </a>
                        <!--<a href="<?php echo $PHPelectionBonfol ?>">
                            <div class="uk-width-expand uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Elections Bonfol</h3>
                                </div>
                            </div>
                        </a>                            
                        <a href="<?php echo $PHPelectionCourtedoux ?>">
                            <div class="uk-width-expand uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Elections Courtedoux</h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo $PHPelectionMovelier ?>">
                            <div class="uk-width-expand uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Elections Movelier</h3>
                                </div>
                            </div>
                        </a>-->
                        <a href="<?php echo $PHPelectionsJUGouvernement2 ?>">
                            <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">08.11</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Elections Jura</h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo $PHPvotationsCHaccueil ?>">
                            <div class="uk-width-expand uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">29.11</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Votations Suisse</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="uk-card uk-card-body uk-padding-remove uk-width-expand@m" style="padding: 10%">                                                
                        <h3 class="uk-heading-divider uk-text-center">Bienvenue sur Juravote !</h3> 
                        <div class="uk-column-1-1@m" style="padding-top: 5%">
                            <div class="uk-card uk-card-body uk-padding-remove uk-width-expand@m">
                                <img class="uk-align-center" src="<?php echo $juravoteLogo ?>" style="width: 200px; height: 200px;" alt="Juravote">
                            </div>
                            <p class="uk-text-center" style="padding-top: 5%">Toute <a href="<?php echo $PHPequipe ?>">l'équipe de Juravote</a> vous souhaite
                            la bienvenue sur son site Internet !</p>
                            <p class="uk-text-center">Nous restons volontiers à disposition en cas de questions ou de suggestions
                            via <a href="<?php echo $PHPequipe ?>">le formulaire de contact.</a></p>
                        </div>                        
                    </div>   
                    <div class="uk-card uk-card-body uk-padding-remove uk-width-medium">                       
                        <h3 class="uk-heading-divider uk-text-right">Derniers résultats</h3>
                        <a href="<?php echo $PHPresultats20200927Accueil ?>">
                            <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-text-left">Votations Suisse</h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo $PHPvotationsDelemont ?>">   
                            <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-body uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-text-left">Votation Delémont</h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo $PHPresultatsConseilLajoux2020 ?>">
                            <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-text-left">Elections Lajoux</h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo $PHPvotationValTerbiAccueil ?>">
                            <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">27.09</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-text-left">Votations Val-Terbi</h3>
                                </div>
                            </div>
                        </a>
                        <!--<a href="<?php echo $PHPresultatGouvernementJU20201018 ?>">
                            <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Election Gouvernement - Jura</h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo $PHPresultatParlementJU20201018 ?>">
                            <div class="uk-card uk-card-small uk-padding-remove uk-card-hover uk-card-header uk-margin-small uk-width-1-1">
                                <div class="uk-card-badge uk-label" style="background-color: #D20603;">18.10</div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-align-left">Election Parlement - Jura</h3>
                                </div>
                            </div>
                        </a>--> 
                    </div>                                        
                </div> 
                <div style="padding: 2%;"> 
                    <h3 class="uk-heading-divider uk-text-center">Soutiens de Juravote</h3>
                    <div class="uk-column-1-2@m uk-column-divider">
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
                        <b><p class="uk-text-center">Candidats-es aux élections cantonales</p></b>                                             
                        <div class="uk-column-1-2@m uk-column-1-1@s uk-column-divider uk-text-center">
                            
                            <p>Philippe Bassin (Verts, Porrentruy)</p>
                            <p>Frédéric Blaser (Verts, Delémont)</p>
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
                            <p>Daniel Renaud (PLR, Develier)</p>
                            <p>Céline Robert-Charrue Linder (Verts, Delémont)</p>
                            <p>Yann Rufer (PLR, Rossemaison)</p>
                            <p>Matthieu Saner (PLR, Delémont)</p>     
                            <p>Vincent Schmitt (Verts, Les Enfers)</p>  
                            <p>Romuald Siess (PS, Vendlincourt)</p>
                            <p>Valentine Steulet (PS, Rossemaison)</p>
                            <p>Colin Vollmer (PS, Delémont)</p> 
                            <p>Audrey Voutat (Verts, Rossemaison)</p>                                         
                            <p>Thomas Vuillaume (PLR, Grandfontaine)</p>
                            <p>Fanny Wisler (PS, Delémont)</p>                                                                      
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