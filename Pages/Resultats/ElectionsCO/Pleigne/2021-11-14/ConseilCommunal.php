<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election Conseil communal de Pleigne</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        <link rel="stylesheet" href="<?php echo $csselections ?>"/>
        
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Election complémentaire au Conseil communal de Pleigne</h1>
        <hr>
        <div class="uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <!--<a href="#modal-full-1" uk-toggle>-->
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img class="uk-border-circle photo-personne"
                                        src="<?php echo $inconnu ?>"
                                        alt="Florian Chételat">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Florian Chételat</h3>
                            <!--<p class="uk-text-center text-fonction">Cliquez ici pour obtenir plus d'informations !</p>-->
                        </div>
                    </div>
                <!--</a>
                <div id="modal-full-1" class="uk-modal-full uk-text-justify" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                            <div class="uk-background-cover" style="background-image: url(<?php echo $inconnu ?>);" uk-height-viewport></div>
                            <div class="uk-padding-large">
                                <h2>Gabriel Martinoli</h2>

                                <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                    <button class="uk-button uk-button-default" type="button">Présentation</button>
                                    <button class="uk-button uk-button-default" type="button">Priorités</button>
                                    <button class="uk-button uk-button-default" type="button">Votations 7 mars</button> 
                                    <button class="uk-button uk-button-default" type="button">Votations 13 juin</button>
                                    <button class="uk-button uk-button-default" type="button">Positions</button> 
                                </div>

                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <h4>Présentation</h4>
                                        <p>Né en 1951, Marié, 3 enfants, retraité (employé d'Etat jusqu'en 2016)</p>

                                        <h4>Formations</h4>
                                        <p>Domaines bancaire, commercial et fiscal</p>

                                        <h4>Vos loisirs</h4>
                                        <p>Cynologie, (travail avec les chiens), musique.</p>

                                        <h4>Motivations</h4>                                        
                                        <p>Réel intérêt pour la chose publique. Mettre mes disponibilités et compétences au service de 
                                        la Communauté et plaisir de conduire les affaires communales. Cet exercice est pour moi l'occasion 
                                        de rendre à la communauté l'accueil reçu en 1890 lors de 
                                        la migration d'Italie de mon grand-père et honorer mes parents.</p>                                        
                                    </li>

                                    <li>
                                        <h4>Priorités politiques</h4>
                                        <p>Aménagement du territoire, écologie, soutien pour un développement harmonieux, 
                                        amélioration des infrastructures existantes et soutien aux sociétés locales.</p>                                      

                                        <h4>Quels projets souhaitez-vous réaliser ?</h4>
                                        <p>Le carré du village (rue du Doubs, rue de la Croix, rue du Marché, rue du Pâquier et jardin d'enfants), 
                                        Secteur sous-la-Cure, nouveau réservoir des Combes.</p>

                                        <h4>Quels sont les thèmes d'actualité qui méritent d'être mis en avant au Noirmont ?</h4>
                                        <p>Zone AIC, PAL, PDR</p>

                                        <h4>Quels sont les dossiers prioritaires de la Commune du Noirmont ?</h4>
                                        <p>Nouveau réservoir des Combes, secteur Sous-la-Cure, carré du village, nouvelle décharge, 
                                        pose de détecteur au lampadaires LED existants.</p>

                                        <h4>Êtes-vous prêt à vous engager pour les prochaines élections communales ?</h4>
                                        <p>Si tout va bien dans ma santé et ma famille, oui en 2023, mais en tant que conseiller communal.</p>
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Initiative "anti-burqa"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Loi sur les services d'identification électronique</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Accord avec l'Indonésie</div>
                                            </div>
                                        </div>  
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Initiative "Pour une eau potable propre"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Initiative "Pour une Suisse libre de pesticides"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Loi COVID-19</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Loi sur le CO2</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Loi sur les mesures policières de lutte contre le terrorisme</div>
                                            </div>
                                        </div> 
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                            </div>  

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                            </div>  

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                            </div>    

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Bonne</span>                                            
                                                <div class="uk-card uk-card-body">Stratégie COVID du Conseil fédéral</div>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Réouverture des établissements le 22 mars ?</div>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Développement de la zone d'activité d'intérêt cantonal au Noirmont?</div>
                                            </div>                                   
                                        </div>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            
            <div>
                <a href="#modal-full-2" uk-toggle>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                        <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img class="uk-border-circle photo-personne"
                                        src="<?php echo $inconnu ?>"
                                        alt="Nicolas Pape">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Pape</h3>
                            <p class="uk-text-center text-fonction">Cliquez ici pour obtenir plus d'informations !</p>
                        </div>
                    </div>
                </a>
                <div id="modal-full-2" class="uk-modal-full uk-text-justify" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                            <div class="uk-background-cover" style="background-image: url(<?php echo $inconnu ?>);" uk-height-viewport></div>
                            <div class="uk-padding-large">
                                <h2>Nicolas Pape</h2>

                                <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                    <button class="uk-button uk-button-default" type="button">Présentation</button>
                                    <button class="uk-button uk-button-default" type="button">Portrait</button>
                                    <button class="uk-button uk-button-default" type="button">Priorités</button>
                                    <button class="uk-button uk-button-default" type="button">Votations 28 novembre</button> 
                                    <button class="uk-button uk-button-default" type="button">Votations 13 février</button>
                                    <button class="uk-button uk-button-default" type="button">Positions</button> 
                                </div>

                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <h4>Présentation</h4>
                                        <p>Célibataire (en couple), 4 enfants, Maître Agriculteur</p>

                                        <h4>Formations</h4>
                                        <p>Agriculteur avec maîtrise</p>

                                        <h4>Vos loisirs</h4>
                                        <p>Course à pied sports équestre</p>

                                        <h4>Motivations</h4>                                        
                                        <p>Participer, donner de mon temps et de mes compétences à la communauté.</p>                                        
                                    </li>

                                    <li>
                                        <h4>Si j'étais une décennie musicale, je serais...</h4>
                                        <p>Années 80.</p>

                                        <h4>Si j'étais une chanson, je serais...</h4>
                                        <p>Allumer le feu.</p>

                                        <h4>Si j'étais un film, je serais...</h4>
                                        <p>Au nom de la Terre.</p>

                                        <h4>Si j'étais un personnage de film/série, je serais...</h4>
                                        <p>Macgyver.</p>

                                        <h4>Si j'étais un super-héros, je serais...</h4>
                                        <p>Superman.</p>

                                        <h4>Si j'étais un livre, je serais...</h4>
                                        <p>Un Roman.</p>

                                        <h4>Si j'étais un animal, je serais...</h4>
                                        <p>Le Centaure.</p>

                                        <h4>Si j'étais un fait historique, je serais...</h4>
                                        <p>L'entrée en souveraineté du canton du Jura.</p>

                                        <h4>Si j'étais un lieu de la région, je serais...</h4>
                                        <p>La Chapelle du Vorbourg.</p>

                                        <h4>Si j'étais une saison, je serais...</h4>
                                        <p>Le printemps.</p>
                                    </li>

                                    <li>
                                        <h4>Priorité politique</h4>
                                        <p>Défense des intérêts de mon village et de la communauté, représentation
                                            de ma commune à l'extérieur.</p> 
                                        
                                        <h4>Quelle(s) valeur(s) défendez-vous et souhaitez-vous mettre en avant ?</h4>
                                        <p>Les valeurs familiales et le droit de chacun à avoir sa place
                                            dans une communauté villageoise.</p>

                                        <h4>Quelle(s) réflexion(s) souhaitez-vous amener au sein du Conseil communal ?</h4>
                                        <p>Une réflexion globale sur l'avenir de la commune.</p>

                                        <h4>Quel(s) projet(s) souhaitez-vous développer et/ou amener sur la table du Conseil communal ?</h4>
                                        <p>Les écoles et la constitution d'un nouveau cercle scolaire.</p>

                                        <h4>Dans le cadre de la campagne, que souhaitez-vous dire aux jeunes de la Commune ?</h4>
                                        <p>Qu'ils auront toujours mon soutien... de bien se former dans un métier qui les
                                            passionnent et de rester habiter notre commune si ils le peuvent.</p>

                                        <h4>Êtes-vous prêt à vous engager pour les prochaines élections communales ?</h4>
                                        <p>Oui.</p>
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                <div class="uk-card uk-card-body">Initiative populaire "Pour des soins infirmiers forts"</div>
                                                <p>Favorable au contre projet.</p>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                <div class="uk-card uk-card-body">Initiative populaire "Désignation des juges fédéraux par tirage au sort"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Loi fédérale sur les bases légales des ordonnances du Conseil fédéral visant à surmonter l'épidémie de COVID-19</div>
                                            </div>
                                        </div>  
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                <div class="uk-card uk-card-body">Initiative populaire "Oui à l'interdiction de l'expérimentation animale et humaine"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                           
                                                <div class="uk-card uk-card-body">Initiative populaire "Oui à la protection des enfants et des jeunes contre la publicité pour le tabac"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                           
                                                <div class="uk-card uk-card-body">Loi fédérale sur les droits de timbre</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Loi fédérale sur un train de mesures en faveur des médias</div>
                                            </div>
                                        </div> 
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                <p>Dans la mesure ou cela se fait de manière réfléchie.</p>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                            </div>  

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Droit de vote pour les personnes de nationalité étrangère ?</div>
                                            </div> 
                                            
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Financement transparent des partis et des campagnes pour les votations et les élections ?</div>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Diminution</span>                                            
                                                <div class="uk-card uk-card-body">Evolution des impôts dans la Commune ?</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                            </div> 
                                            
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                <div class="uk-card uk-card-body">Zones 30km/h généralisées ?</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                            </div>                                  
                                        </div>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
    <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>