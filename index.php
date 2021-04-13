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
                    
                    <div class="uk-card uk-card-body uk-padding-remove uk-width-1-4@s uk-flex-first@s">   
                        <h3 class="uk-heading-divider uk-text-center">Prochaines votations</h3>   
                        <a href="Pages/Resultats/VotationsCO/Porrentruy/2021-05-09/MaisonEnfancePorrentruy.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >09.05</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Porrentruy</h3>
                                </div>                          
                            </div>
                        </a> 

                        <a href="<?php echo $PHPvotationMoutier20210509RéférendumBudget21 ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >09.05</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Moutier</h3>
                                </div>                          
                            </div>
                        </a> 

                        <a href="Pages/Resultats/VotationsCH/2030-2021/2021-06-13/accueil.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >13.06</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations fédérales</h3>
                                </div>                          
                            </div>
                        </a> 

                        <a href="Pages/Resultats/VotationsJU/2021-06-13/D_Egalite_Salariale.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >13.06</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation cantonale Jura</h3>
                                </div>                          
                            </div>
                        </a> 

                        <a href="Pages/Resultats/ElectionsCO/Courrendlin/2021-06-13/Accueil.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >13.06</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Scrutins Courrendlin</h3>
                                </div>                          
                            </div>
                        </a> 

                        <a href="Pages/Resultats/ElectionsCO/Boecourt/2021-06-13/CommissionEcole.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >13.06</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Election Boécourt</h3>
                                </div>                          
                            </div>
                        </a> 

                        <a href="Pages/Resultats/ElectionsCO/Montfaucon/2021-06-13/Accueil.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >13.06</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Elections Montfaucon</h3>
                                </div>                          
                            </div>
                        </a> 
                        
                        <!--<a href="Pages/Votations et Elections/Votations/VotationsCO/Moutier/20210307.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >xx.xx</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Moutier</h3>
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
                    <div class="uk-card uk-card-body uk-padding-remove uk-width-1-4@s">                       
                        <h3 class="uk-heading-divider uk-text-center">Derniers résultats</h3>
                        <a href="Pages/Resultats/VotationsCO/Moutier/2021_03_28/R_AppartenanceMoutier.php">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >28.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Moutier</h3>
                                </div>                          
                            </div>
                        </a> 
                        <a href="<?php echo $PHPelectionNoirmontResultats20210321 ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >21.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Election Noirmont</h3>
                                </div>                          
                            </div>
                        </a>
                        <a href="<?php echo $PHPresultats20210307Accueil ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >07.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations fédérales</h3>
                                </div>                          
                            </div>
                        </a>
                        
                        <a href="<?php echo $PHPvotationsHauteSorneEau ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >07.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Courtételle</h3>
                                </div>                          
                            </div>
                        </a>

                        <a href="<?php echo $PHPvotationsHauteSorne20210307 ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >07.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votations Haute-Sorne</h3>
                                </div>                          
                            </div>
                        </a> 

                        <a href="<?php echo $PHPvotationsDelemont20210307 ?>">                          
                            <div class="uk-card uk-card-hover uk-width-1-1 uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-bottom">
                                    <div class="uk-card-badge uk-label uk-border-rounded" style="background-color: #D20603;" >07.03</div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Votation Delémont</h3>
                                </div>                          
                            </div>
                        </a>                                              
                    </div>                                        
                </div> 
                <div class="uk-column-1-2@m" style="padding: 2%">
                    <div style="padding-bottom: 60%">
                        <h3 class="uk-heading-divider uk-text-center">Prochaines séances des Autorités</h3>  
                        <p>Il n'y a aucune séance des autorités planifiée pour le moment !</p>
                    </div>                    
                    <div>    
                        <h3 class="uk-heading-divider uk-text-center">Soutien de Juravote</h3>                           
                        <p class="uk-text-justify">Juravote, site internet au design simple et plaisant, informe la population, de
                        manière indépendante et concise, sur les votations. Les arguments pour et contre,
                        ainsi que les prises de positions des partis, sont mentionnés de façon totalement
                        neutre. JuraVote renseigne également sur les autorités, les élections à venir, ainsi
                        que sur les activités politiques. Les résultats des votations et élections sont
                        consignés.</p>

                        <p class="uk-text-justify">Concentrées sur un seul site, ces informations sont accessibles en tout temps et
                        assurent une partialité et neutralité, tant estimées par la population suisse. Cet
                        avantage permet à tout un chacun d'être informé de façon claire et objective. Cette
                        source d'informations fiable devrait aussi intéresser les communes et autres
                        instances politiques, aujourd'hui uniquement jurassiennes, à la mise en place d'outils
                        informatiques communs permettant de faire des économies d'échelles substantielles.
                        Peut-être un futur "SwissVote".</p>

                        <p class="uk-text-justify">Nous félicitons vivement toute cette jeune équipe pour leur intérêt à la chose
                        publique et la mise en oeuvre de ce formidable support et leur souhaitons plein succès.</p>     

                        <b><p> Gabriel M. Chappuis, Maire de Develier</p></b> 
                        <br> 
                        <br>

                        <p class="uk-text-justify">
                        Si ce mode de communication, via les réseaux sociaux, permet d'améliorer le taux de participation 
                        aux votations et élections et que l'intérêt, pour la jeune génération, est amélioré pour participer 
                        et comprendre l'activité politique en général et prendre part plus activement aux décisions qui sont 
                        prises lors des scrutins, je soutiens votre initiative et j'adhère à cette manière de faire.</p>

                        <b><p>Jean-Bernard Vallat, Maire de Haute-Sorne</p></b>
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