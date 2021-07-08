<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election Mairie de Val-Terbi</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Election complémentaire à la Mairie de Val-Terbi</h1>
        <hr>
        <div class="uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <!--<a href="#modal-full-1" uk-toggle>-->
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                        <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC</div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img class="uk-border-circle photo-personne"
                                        src="<?php echo $inconnu ?>"
                                        alt="Claude-Alain Chapatte">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Claude-Alain Chapatte</h3>
                            <p class="uk-text-center text-fonction"></p>
                        </div>
                    </div>
                <!--</a>-->
                <!--<div id="modal-full-1" class="uk-modal-full uk-text-justify" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                            <div class="uk-background-cover" style="background-image: url(<?php echo $GabrielMartinoli ?>);" uk-height-viewport></div>
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
                <h3>D'autres candidats à l'élection peuvent s'annoncer jusqu'au 2 août 2021, 12:00. Cette page sera mise à jour
                si le nombre de candidats venait à changer !</h3>

                <h3>Si un seul candidat s'annonce, il est élu tacitement au terme du délai d'annonce (2 août). En revanche, si
                plusieurs candidats sortent du bois, une élection sera effectivement organisée le 26 septembre.</h3>
                <!--<a href="#modal-full-2" uk-toggle>
                    <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img class="uk-border-circle photo-personne"
                                        src="<?php echo $DamienParatte ?>"
                                        alt="Damien Paratte">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title-center text-rouge-fonce">Damien Paratte</h3>
                            <p class="uk-text-center text-fonction">Cliquez ici pour obtenir plus d'informations !</p>
                        </div>
                    </div>
                </a>
                <div id="modal-full-2" class="uk-modal-full uk-text-justify" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                            <div class="uk-background-cover" style="background-image: url(<?php echo $DamienParatte ?>);" uk-height-viewport></div>
                            <div class="uk-padding-large">
                                <h2>Damien Paratte</h2>

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
                                        <p>Né en 1968, Marié, 1 enfant, responsable de production chez Raoul Guyot</p>

                                        <h4>Formations</h4>
                                        <p>Mécanicien de précision</p>

                                        <h4>Vos loisirs</h4>
                                        <p>Chorale de chant grégorien, tir, marche, vélo, lecture, société philantropique L'Union</p>

                                        <h4>Motivations</h4>                                        
                                        <p>Je souhaite être au service de la communauté et j'apprécie le contact humain et les gens.</p>                                        
                                    </li>

                                    <li>
                                        <h4>Priorités politiques</h4>
                                        <p>Agir pour le bien de la collectivité communale, pour les enjeux écologiques,
                                        pour les générations futures et pour le bon sens collectif.</p>                                      

                                        <h4>Quels projets souhaitez-vous réaliser ?</h4>
                                        <p>Développer notre communauté en tenant compte des aspects
                                        économiques et écologiques. Soutenir les infrastructures existantes.
                                        Assurer une croissance réfléchie et intelligente pour la Commune. Développer le chauffage 
                                        à distance et une décharge communale.</p>

                                        <h4>Êtes-vous prêt à vous engager pour les prochaines élections communales ?</h4>
                                        <p>Oui, je serai à disposition des citoyens.</p>
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Initiative "anti-burqa"</div>
                                                <p>Oui pour défendre notre culture et oui pour s'adapter aux endroits visités.</p>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Loi sur les services d'identification électronique</div>
                                                <p>Oui, car confiance en la Confédération.</p>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Accord avec l'Indonésie</div>
                                                <p>Oui, car confiance en la Confédération pour des projets durables.</p>
                                            </div>
                                        </div>  
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Pas d'avis</span>                                            
                                                <div class="uk-card uk-card-body">Initiative "Pour une eau potable propre"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Pas d'avis</span>                                           
                                                <div class="uk-card uk-card-body">Initiative "Pour une Suisse libre de pesticides"</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Pas d'avis</span>                                           
                                                <div class="uk-card uk-card-body">Loi COVID-19</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Pas d'avis</span>                                            
                                                <div class="uk-card uk-card-body">Loi sur le CO2</div>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Pas d'avis</span>                                           
                                                <div class="uk-card uk-card-body">Loi sur les mesures policières de lutte contre le terrorisme</div>
                                            </div>
                                            <div>
                                                <p>Je ne suis pas assez renseigné sur ces objets pour prendre position.</p>
                                            </div>
                                        </div> 
                                    </li>

                                    <li>
                                        <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                <p>L'envie doit venir de toutes les parties concernées et ne doit pas être imposée.</p>
                                            </div>

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                <p>Si les jeunes nous montrent qu'ils veulent le droit de vote, je serai favorable
                                                à cette idée.</p>
                                            </div>  

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal?</div>
                                                <p>Oui, car confiance envers le Canton pour avoir pris la meilleure décision.</p>
                                            </div>  

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                <p>Oui, car cette énergie est très peu polluante et ne laisse que peu de traces
                                                après avoir été démantelée. Chacun doit faire un effort au niveau de notre consommation.</p>
                                            </div>    

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                <p>Là aussi, confiance envers le Conseil fédéral sur
                                                cette technologie. Mais nous en aurons besoin, donc oui.</p>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Très bonne</span>                                            
                                                <div class="uk-card uk-card-body">Stratégie COVID du Conseil fédéral</div>
                                                <p>Des décisions difficiles ont dû être prises, mais nous sommes bientôt
                                                au bout de cette période !</p>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                <div class="uk-card uk-card-body">Réouverture des établissements le 22 mars ?</div>
                                                <p>Il faut encore tenir un moment afin de réellement voir la sortie du tunnel.</p>
                                            </div> 

                                            <div class="uk-card uk-card-body" style="padding: 1%">       
                                                <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                <div class="uk-card uk-card-body">Développement de la zone d'activité d'intérêt cantonal au Noirmont?</div>
                                                <p>Oui, même si cela est déjà acté. Ce développement est bienvenu pour les Franches-Montagnes.</p>
                                            </div>                                   
                                        </div>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </section>
    </main>
    <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>