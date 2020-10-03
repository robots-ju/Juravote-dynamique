<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Elections au Parlement jurassien</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $csselections; ?>"/>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
    <h1 class="uk-heading-large">Elections cantonales du 18 octobre 2020</h1>
        <hr>
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Vous trouverez plus d'informations sur les candidates et candidats en cliquant sur leurs cartes respectives !
            (la mise en ligne se fait au fur et à mesure des retours des candidates et candidats)</p>
        </div>
        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">Les élections en bref</button>
            <button class="uk-button uk-button-default" type="button">Liste 1 (PLRJ)</button>
            <button class="uk-button uk-button-default" type="button">Liste 2 (PSJ-JSJ)</button>
            <button class="uk-button uk-button-default" type="button">Liste 3 (PDC-JDC)</button>
            <button class="uk-button uk-button-default" type="button">Liste 4 (UDC)</button>
            <button class="uk-button uk-button-default" type="button">Liste 5 (Verts)</button>
            <button class="uk-button uk-button-default" type="button">Liste 6 (PCSI)</button>
            <button class="uk-button uk-button-default" type="button">Liste 7 (PVL)</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li>   
                <h1>Les élections cantonales en bref</h1>
                <p>138 candidats-es sont en lice pour l'Election au Parlement Jurassien (District de Porrentruy). Ces 138 personnalités proviennent de
                7 formations politiques pour décrocher les 20 sièges au sein du législatif.
                </p>
                <p>Les élus-es seront connus-es à la fin du scrutin, le 18 octobre prochain.
                </p>
            </li>  
                
            <li>
                <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gaëtane Voirol">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gaëtane Voirol</h3>
                                <p class="uk-text-center text-fonction">1989 - Porrentruy - Podogoque</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michel Etique">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michel Etique</h3>
                                <p class="uk-text-center text-fonction">1955 - Bure - Cadre de la Poste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Anne Sulliger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anne Sulliger</h3>
                                <p class="uk-text-center text-fonction">1986 - Vendlincourt - Maître peintre</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gérard Brunner">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gérard Brunner</h3>
                                <p class="uk-text-center text-fonction">1956 - Porrentruy - Ingénieur-géomètre EPF</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Audrey Schlüchter">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Audrey Schlüchter</h3>
                                <p class="uk-text-center text-fonction">1973 - Courgenay - Coiffeuse-vendeuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-3" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $VuillaumeThomas ?>"
                                                alt="Thomas Vuillaume">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Thomas Vuillaume</h3>
                                    <p class="uk-text-center text-fonction">1984 - Grandfontaine - Agriculteur</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-3" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $VuillaumeThomas ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Thomas Vuillaume, 1984, Grandfontaine, Agriculteur</h2>
                                    <p>Divorcé, 2 enfants, Agro mécanicien et agriculteur </p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Défendre les intérêts de mes concitoyennes et concitoyens. </p>

                                                <h4>Priorités politiques</h4>
                                                <p>Trouver des solutions pragmatiques de concert avec mes collègues </p>

                                                <h4>Vos loisirs</h4>
                                                <p>Piscine, marche à pied </p>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td> 
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                      
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">Neutre</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Plutôt injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Je ne connais pas bien le sujet de la géothermie profonde.</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Vote électronique Oui, mais en gardant quand même les bureaux de vote pour les personnes qui n’ont pas accès à internet.</p>
                                            </li>
					                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Aline Nicoulin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Aline Nicoulin</h3>
                                <p class="uk-text-center text-fonction">1973 - Porentruy - Droguiste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-2" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $LudovicMonteiro ?>"
                                                alt="Ludovic Monteiro">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Ludovic Monteiro</h3>
                                    <p class="uk-text-center text-fonction">1986 - Boncourt - Administrateur protection CRCJU</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-2" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $LudovicMonteiro ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Ludovic Monteiro, 1986, Boncourt, Administrateur de la protection de la population (Canton du Jura)</h2>
                                    <p>Marié, 2 enfants, Gymnase (Latin-grec) université (histoire)</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>M’impliquer pour l’avenir de toutes et tous. </p>

                                                <h4>Priorités politiques</h4>
                                                <p>La valorisation de la formation, 
                                                Le sentiment de sécurité, 
                                                La défense de la classe moyenne, des indépendants et de la famille, 
                                                La Liberté individuelle.</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Hockey sur glace, bons repas, lecture, théâtre.</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="http://instagram.com/grizz_ly17" target="_blank" uk-icon="icon: instagram; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.facebook.com/ludovic.monteiro.50" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                  
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                             
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                      
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                    
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Plutôt Diminution</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                          
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                       <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                       
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                           
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sandra Nobs">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sandra Nobs</h3>
                                <p class="uk-text-center text-fonction">1970 - Porrentruy - Enseignante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marc Meier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marc Meier</h3>
                                <p class="uk-text-center text-fonction">1976 - Asuel - Enseignant de culture générale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Valérie Froté">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Valérie Froté</h3>
                                <p class="uk-text-center text-fonction">1972 - Courgenay - Bibliothécaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                    <a class="uk-button uk-button-default" href="#modal-full-7" uk-toggle>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $YanNoirjean ?>"
                                            alt="Yan Noirjean">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yan Noirjean</h3>
                                <p class="uk-text-center text-fonction">1974 - Alle - Agent d'exploitation</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div id="modal-full-7" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $YanNoirjean ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Yan Noirjean, 1976, Alle, Agent d'exploitation</h2>
                                    <p>Marié, 1 enfant, CFC Mécanique et CFC Agent d'exploitation</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Découvrir les rouages de la politique cantonal et amener mes idées.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>La politique de sécurité, l'immigration, économie</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Famille, Pompier, Mécanique automobile</p>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>  
                                                                                                                  
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                                    </div> 
                                                </div> 
                                            </li>
					</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Ernest Gerber">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Ernest Gerber</h3>
                                <p class="uk-text-center text-fonction">1963 - Cornol - Responsable d'exploitation</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gabriel Voirol">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gabriel Voirol</h3>
                                <p class="uk-text-center text-fonction">1961 - Porrentruy - Pharmacien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julien Lallau">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julien Lallau</h3>
                                <p class="uk-text-center text-fonction">1988 - Courchavon - Technicien diplômé ES</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Patrick Fluri">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Patrick Fluri</h3>
                                <p class="uk-text-center text-fonction">1963 - Alle - Technicien de maintenance</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Essaïe Reusser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Essaïe Reusser</h3>
                                <p class="uk-text-center text-fonction">1995 - Porrentruy - Doctorant en chimie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michel Périat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michel Périat</h3>
                                <p class="uk-text-center text-fonction">1944 - Fahy - Docteur en médecine, cardiologue FMH</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pierre Parietti">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pierre Parietti</h3>
                                <p class="uk-text-center text-fonction">1952 - Porrentruy - ingénieur civil EPFZ</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Rolf Amstutz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Rolf Amstutz</h3>
                                <p class="uk-text-center text-fonction">1964 - Courchavon - Agriculteur spécialisé dans le tourisme</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-4" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $AubryJelica ?>"
                                                alt="Jelica Aubry-Janketic">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Jelica Aubry-Janketic</h3>
                                    <p class="uk-text-center text-fonction">1978 - Courtedoux - Employée de commerce</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-4" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $AubryJelica ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Jelica Aubry-Janketic, 1978, Courtedoux, Employée de commerce</h2>
                                    <p>Marié, 3 enfants de 11, 13 et 15 ans, Apprentissage d'employée de commerce CFC - 
                                    Séjours linguistiques en Angleterre (1 an) et Allemagne (5 mois) couronnés par des 
                                    diplômes CAMBRIDGE et GOETHE INSTITUT - Stage professionnel de 6 mois en Belgique avec le programme EURODYSSEE</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Arrêtons les « y’a qu’à … faut qu’on… » et la meilleure façon d’y arriver,
                                                est de s’engager soi-même ! Voilà la réflexion qui m’a amenée à accepter de me
                                                porter candidate aux élections du 18 octobre prochain pour le Parlement jurassien.
                                                Au printemps dernier, je me suis indignée contre une décision politique, touchant
                                                directement au pouvoir d’achat de certaines familles. J’ai publié une lettre
                                                ouverte dans le journal local, laquelle a suscité pas mal de réactions et de
                                                partages sur les réseaux sociaux. Convaincue de l’injustice de cette décision et
                                                portée par de nombreux messages de soutien, j’ai pu ainsi démontrer aux plus hautes
                                                sphères politiques de notre canton, avec une bonne argumentation, le « bien-fondé »
                                                de mon intervention. Et, à ma grande satisfaction, cette décision a finalement et
                                                officiellement été revue, me donnant certainement des ailes, ainsi que l’élan à cette
                                                envie d’engagement.</p>
                                                <p>Si je n’ai certes, aucune expérience politique, je peux toutefois mettre en avant un
                                                riche bagage SOCIAL ! En effet, investie depuis toute jeune dans plusieurs associations ou
                                                sociétés locales, j’ai toujours eu du plaisir à côtoyer les différentes générations qui font
                                                la force de notre société. Et toutes ces expériences ont enrichi mon bagage et mes valeurs.
                                                Et c'est avec beaucoup de motivation que je relèverais le défi d'être la voix des sans-voix
                                                (comme le dit si bien mon camarade Mathias Reynard), si vous décidiez de me faire confiance le 18 octobre prochain !</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Je souhaite m'engager pour le "BIEN VIVRE ENSEMBLE". Peu importe d'où l’on vient,
                                                qu'on soit riche ou pauvre,  d'ici ou d'ailleurs, personne ne doit être laissé au bord du chemin.
                                                Je crois en la force du collectif, et c'est ainsi que nous pourrons TOUS avancer ensemble pour un Jura plus SOLIDAIRE.</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Mes loisirs actuels sont principalement ceux de mes enfants que mon mari et moi suivons avec beaucoup de plaisir dans leurs différentes activités, notamment au football et au cirque.
                                                Mais à côté de cela, je fais partie de 2 sociétés de gymnastique (FSG Alle et Fémina Courtedoux) et active dans différents comités. 
                                                Membre de la commission d'école du Cercle scolaire du Creugenat. 
                                                Auparavant coordinatrice locale des cours de l'Université populaire pour Courtedoux. 
                                                Et lorsqu'il me reste du temps, j'aime m'adonner au bricolage et suivre le sport en général !</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="instagram.com/aubryjanketicjelica" target="_blank" uk-icon="icon: instagram; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="facebook.com/jelica.aubryjanketic/ " target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                     
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>    
                                                <p>Il est intolérable que la droite et les assureurs (les uns rémunèrent les autres dans l'opacité la plus complète)
                                                continuent à jouer avec la santé et le porte-monnaie des gens  . Il faut absolument reprendre les démarches en vue
                                                de la création d'une assurance-maladie unique.</p>                                       
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Plutôt contre</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Pas assez de recul concernant la géothermie profonde. En ce qui concerne l'énergie éolienne,
                                                je suis plutôt POUR en veillant toutefois à leur bonne implantation géographique</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mathilde Crevoisier-Crelier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mathilde Crevoisier-Crelier</h3>
                                <p class="uk-text-center text-fonction">1980 - Porrentruy - Traductrice</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-8" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $CailletJoel ?>"
                                                alt="Joël Caillet">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Joël Caillet</h3>
                                    <p class="uk-text-center text-fonction">1963 - Bure - Employé de commerce</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-8" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $CailletJoel ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Joël Caillet, 1963, Bure, Employé de commerce</h2>
                                    <p>Divorcé, 2 enfants, 2 brevets fédéraux et une formation continue universitaire dans le management des instituions
                                    de santé.</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Me mettre à disposition de la collectivité.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>La justice sociale, l'égalité. Il serait trop long et fastidieux de tout énumérer.
                                                Le programme www.psju.ch est éloquent, il donne l'essentiel des propositions à formuler. </p>

                                                <h4>Vos loisirs</h4>
                                                <p>Ma nouvelle demeure, mes enfants et mes petits-enfants (quand je trouve le temps de les voir...),
                                                les matchs du FC Chevenez et le bon temps entre amis.</p>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                     
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>     
                                                <p>L'évolution des primes maladie est dramatique, il faut réagir et vite !</p>                                        
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Victor Egger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Victor Egger</h3>
                                <p class="uk-text-center text-fonction">1978 - Fontenais - Conseiller agricole</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jämes Frein">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jämes Frein</h3>
                                <p class="uk-text-center text-fonction">1967 - Montignez - Maître professionel</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Katia Lehmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Katia Lehmann</h3>
                                <p class="uk-text-center text-fonction">1974 - Villars-sur-Fontenais - Ostéopathe</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mélanie Québatte-Santopolo">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mélanie Québatte-Santopolo</h3>
                                <p class="uk-text-center text-fonction">1975 - Courgenay - Employée de commerce / Esthéticienne</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Danielle Siegried-Richard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Danielle Siegried-Richard</h3>
                                <p class="uk-text-center text-fonction">1991 - Villars-sur-Fontenais - Diététicienne et enseignante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Zoé Seuret">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Zoé Seuret</h3>
                                <p class="uk-text-center text-fonction">1997 - Courtedoux - Etudiante en science politique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Lisa Raval">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Lisa Raval</h3>
                                <p class="uk-text-center text-fonction">1989 - Porrentruy - Collaboratrice scientifique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Youri Zwahlen">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Youri Zwahlen</h3>
                                <p class="uk-text-center text-fonction">1997 - Porrentruy - Etudiant en islamologie et musicologie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="François-Xavier Migy">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">François-Xavier Migy</h3>
                                <p class="uk-text-center text-fonction">1961 - Coeuve - Secrétaire syndical UNIA</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Audrey Chèvre">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Audrey Chèvre</h3>
                                <p class="uk-text-center text-fonction">1980 - Alle - Enseignante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nicolas Maître">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Maître</h3>
                                <p class="uk-text-center text-fonction">1961 - Epauvillers - Employé postal</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Hildegarde Lièvre Corbat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Hildegarde Lièvre Corbat</h3>
                                <p class="uk-text-center text-fonction">1966 - Courtemaîche - Enseignante-Directrice</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Valérie Voisard Bourquard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Valérie Voisard Bourquard</h3>
                                <p class="uk-text-center text-fonction">1967 - Fontenais - Laborantine en Chimie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-9" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $MartinsJoakim ?>"
                                                alt="Joakim Martins">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Joakim Martins</h3>
                                    <p class="uk-text-center text-fonction">1997 - Boncourt - Etudiant en science politique</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-9" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $MartinsJoakim ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Joakim Martins, 1997, Boncourt, Etudiant en science politique</h2>
                                    <p>Célibataire, pas d'enfants, CFC d'informaticien généraliste / Maturité technique / Passerelle DUBS /
                                    Bachelor en science politique </p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Je milite quotidiennement en tant militant socialiste et fils d’ouvrier pour les droits travailleuses et des
                                                travailleurs. Mes priorités politiques sont la défense des emplois, des bonnes conditions de travail ainsi
                                                que des salaires dignes. Je m'engage ainsi à lutter contre le dumping salarial, une hausse des salaires
                                                et des contrôles plus stricts des entreprises.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Réduction des inégalités / Lutte contre le dumping salarial / Renforcement des services publics / 
                                                Lutte contre le changement climatique / Accueil de Moutier</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Jouer au football, matchs BCB/HCA, lire, voyager.</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="https://twitter.com/JoakimMartins" target="_blank" uk-icon="icon: twitter; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.instagram.com/joakim.martins/" target="_blank" uk-icon="icon: instagram; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.facebook.com/joakim.martins.967" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                      
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Augmentation</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                                <p>Je suis en faveur de l'introduction d'un micro-impôt sur le trafic des paiements sans espèces,
                                                mais contre l'initiative du même nom, car elle prévoit de supprimer l'IFD (le seul impôt fédéral progressif).</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Je suis favorable au développement de la géothermie et de l'énergie éolienne
                                                dans le Jura, tant que ce dernier respecte humains et environnement.</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Tant que le vote électronique n'aura pas prouver son infaillibilité, 
                                                je m'opposerai à ce dernier.</p>
                                            </li>
					                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Magali Gast Boillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Magali Gast Boillat</h3>
                                <p class="uk-text-center text-fonction">1970 - Porrentruy - Assistante sociale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-5" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $SiessRomuald ?>"
                                                alt="Romuald Siess">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Romuald Siess</h3>
                                    <p class="uk-text-center text-fonction">2001 - Vendlincourt - Etudiant en sciences sociales</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-5" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $SiessRomuald ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Romuald Siess, 2001, Vendlincourt, Etudiant en sciences sociales</h2>
                                    <p>Célibataire, pas d'enfants, étudiant en bachelor en travail social et politiques sociales</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Je me porte candidat pour apporter un changement à la population du canton, car,
                                                la situation actuelle le prouvant, les politiques néolibérales sans cesse amenées
                                                par la droite cause la destruction de ce canton et des valeurs de celui-ci</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Combattre toutes nouvelles tentatives de privatisation dans le canton, me battre
                                                pour l’instauration de la caisse unique, contre le frein à l’endettement, et aider
                                                à l’élaboration d’une politique climatique ambitieuse</p>

                                                <h4>Vos loisirs</h4>
                                                <p>La musique.</p>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                   
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>     
                                                <ul>
                                                    <li>Pas d’augmentation de la retraite des femmes tant qu’elles n’auront
                                                    pas SYSTÉMATIQUEMENT le même salaire que les hommes</li>
                                                    <li>la hausse des coûts est du au fait que les caisses maladies sont
                                                    privées et donc motivées, Non-pas par la protection de la population,
                                                    mais par le profit, c’est pourquoi les primes augmentent chaque année
                                                    et que la caisse unique est la seule solution pour endiguer durablement
                                                    les augmentations des primes</li>                 
                                                </ul>     
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Augmentation</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                                <p>Une Augmentation d’impôt pour les plus riches permettra une baisse pour le reste de la population</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nathalie Boillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nathalie Boillat</h3>
                                <p class="uk-text-center text-fonction">1977 - Porrentruy - Enseignante</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
                
            <li>
                <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Florence Boesch-Bourquenez">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Florence Boesch-Bourquenez</h3>
                                <p class="uk-text-center text-fonction">1959 - Boncourt - Ingénieure en environnement</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Stéphane Rüegg">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Stéphane Rüegg</h3>
                                <p class="uk-text-center text-fonction">1965 - Bure - Technico-commercial</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mathieu Cerf">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mathieu Cerf</h3>
                                <p class="uk-text-center text-fonction">1991 - Courgenay - Conseiller en assurances et prévoyances</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Philippe Rondez">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Philippe Rondez</h3>
                                <p class="uk-text-center text-fonction">1966 - Cornol - Employé de banque</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Magali Voillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Magali Voillat</h3>
                                <p class="uk-text-center text-fonction">1981 - Porrentruy - Cheffe de service</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Stéphane Theurillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Stéphane Theurillat</h3>
                                <p class="uk-text-center text-fonction">1980 - Porrentruy - Ingénieur HES microtechnique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gregory Pressacco">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gregory Pressacco</h3>
                                <p class="uk-text-center text-fonction">1971 - Villars-sur-Fontenais - Ingénieur en génie civil</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-Pierre Faivre">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Pierre Faivre</h3>
                                <p class="uk-text-center text-fonction">1953 - Courtedoux - Retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Josiane Sudan-Girardin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Josiane Sudan-Girardin</h3>
                                <p class="uk-text-center text-fonction">1963 - Damvant - Secrétaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Bernard Studer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Bernard Studer</h3>
                                <p class="uk-text-center text-fonction">1973 - Alle - Ingénieur géomètre</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yves Charmillot">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yves Charmillot</h3>
                                <p class="uk-text-center text-fonction">1969 - Montmelon - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gérard Bonvallat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gérard Bonvallat</h3>
                                <p class="uk-text-center text-fonction">1962 - Miécourt - Directeur adjoint</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christelle Paupe">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christelle Paupe</h3>
                                <p class="uk-text-center text-fonction">1992 - Epauvillers - Comptable</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Stéphane Babey">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Stéphane Babey</h3>
                                <p class="uk-text-center text-fonction">1971 - Alle - Ingénieur agronome</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gauthier Corbat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gauthier Corbat</h3>
                                <p class="uk-text-center text-fonction">1985 - Vendlincourt - Industriel</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Maxence Henry">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Maxence Henry</h3>
                                <p class="uk-text-center text-fonction">1991 - Damphreux - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christelle Lapaire-Boinay">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christelle Lapaire-Boinay</h3>
                                <p class="uk-text-center text-fonction">1982 - Porrentruy - Adjointe de direction commerciale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marcel Meyer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marcel Meyer</h3>
                                <p class="uk-text-center text-fonction">1966 - Porrentruy - Directeur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nathan Rebetez">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nathan Rebetez</h3>
                                <p class="uk-text-center text-fonction">1990 - Porrentruy - Avocat</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Lionel Maitre">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Lionel Maitre</h3>
                                <p class="uk-text-center text-fonction">1985 - Boncourt - Responsable de projets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Claude Gerber">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Claude Gerber</h3>
                                <p class="uk-text-center text-fonction">1964 - Porrentruy - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Romain Schaer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Romain Schaer</h3>
                                <p class="uk-text-center text-fonction">1969 - Miécourt - Ingénieur EPFZ</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yves Gigon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yves Gigon</h3>
                                <p class="uk-text-center text-fonction">1970 - Courgenay - Juriste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean Lusa">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean Lusa</h3>
                                <p class="uk-text-center text-fonction">1947 - Boncourt - ETS</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="John Moser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">John Moser</h3>
                                <p class="uk-text-center text-fonction">1983 - Bonfol - Maître agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marie Dumas">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marie Dumas</h3>
                                <p class="uk-text-center text-fonction">1999 - Grandfontaine - Etudiante HEG</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Römy Choulat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Rémy Choulat</h3>
                                <p class="uk-text-center text-fonction">1966 - Cornol - Chauffeur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Kilian Kaufmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Kilian Kaufmann</h3>
                                <p class="uk-text-center text-fonction">1995 - St-Ursanne - Agrotechnicien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Thierry Blaser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Thierry Blaser</h3>
                                <p class="uk-text-center text-fonction">1967 - Courtedoux - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nicolas Aebi">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Aebi</h3>
                                <p class="uk-text-center text-fonction">1953 - Réclère - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Priscille Dumas">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Priscille Dumas</h3>
                                <p class="uk-text-center text-fonction">1997 - Grandfontaine - Etudiante HEG</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fabian Zürcher">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fabian Zürcher</h3>
                                <p class="uk-text-center text-fonction">1989 - Courtedoux - Cuisiner / Vice-maire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Aurélie Mischler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Aurélie Mischler</h3>
                                <p class="uk-text-center text-fonction">1991 - Bonfol - Logisticienne</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Andreas Bürki">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Andreas Bürki</h3>
                                <p class="uk-text-center text-fonction">1956 - Coeuve - Restaurateur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christophe Lerch">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christophe Lerch</h3>
                                <p class="uk-text-center text-fonction">1971 - Bonfol - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-François Guenat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-François Guenat</h3>
                                <p class="uk-text-center text-fonction">1951 - Boncourt - Mécanicien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Renato Spinetti">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Renato Spinetti</h3>
                                <p class="uk-text-center text-fonction">1950 - Fontenais - Retraité actif</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-Luc Fleury">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Luc Fleury</h3>
                                <p class="uk-text-center text-fonction">1976 - Montignez - Entrepreneur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Cyril Vallat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Cyril Vallat</h3>
                                <p class="uk-text-center text-fonction">1980 - Bure - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alec Beuret">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alec Beuret</h3>
                                <p class="uk-text-center text-fonction">1997 - Coeuve - Mécanicien agricole</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Baptiste Laville">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Baptiste Laville</h3>
                                <p class="uk-text-center text-fonction">1979 - Porrentruy - Responsable des projets au Bruno Manser Fonds</p>
                            </div>
                        </div>
                    </div>

                    <div>
                    <a class="uk-button uk-button-default" href="#modal-full-6" uk-toggle>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gisèle Juillet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gisèle Juillet</h3>
                                <p class="uk-text-center text-fonction">1953 - Courtemaîche - Aide soignante</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div id="modal-full-6" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $MeuryRemy ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Gisèle Juillet, 1953, Courtemaîche, Aide soignante</h2>
                                    <p>Divorcée, 3 enfants, employée de commerce et aide-familiale</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Ce qui me motive, c'est que je m'aperçois jour après jour, que notre planète est de
                                                 plus en plus polluée par des produits qui menacent les êtres humains, les animaux, les 
                                                 plantes, par l'extension des surfaces agricoles qui détruit les écosystèmes, les engrais 
                                                 et les pesticides Non naturels qui polluent l'eau et le sol et l'hyper consommation de 
                                                 viande qui mène à l'élevage industriel ce qui contribue à la mainmise des multinationales 
                                                 au détriment des petits agriculteurs et souvent à la cruauté animale.</p>
                                                <p>En tant que femme, je veux me battre pour l'égalité entre les femmes et les hommes dans 
                                                tous les domaines, car il reste encore beaucoup à faire pour parvenir à la pleine égalité 
                                                des droits. Il faut également mettre fin aux multiples formes de violences faites aux femmes
                                                 qui sont une réalité quotidienne.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Mes priorités politiques sont le changement climatique, la place des femmes dans la société,
                                                 la protection de la nature et des animaux.</p>
                                                <p>Proposer des initiatives concrètes afin d'agir contre le dérèglement climatique et pour
                                                 construire une société plus durable.</p>
                                                <p>Devenir des consommateurs responsables en réduisant notre consommation d'eau, en évitant 
                                                les produits toxiques dans les maisons et jardins, en modifiant nos habitudes alimentaires 
                                                ainsi que notre consommation de viande.</p>
                                                <p>Avoir un cadre politique et des entrepreneurs responsables.</p>
                                                <p>Sortir de notre dépendance au pétrole, gaz et charbon, sortir du nucléaire.</p>
                                                <p>Soutenir les petites exploitations agricoles et les canaux de vente directe entre 
                                                les paysan-ne-s et consommatrices et consommateurs.</p>
                                                <p>l'égalité entre les femmes et les hommes.</p>
                                                <p>Les femmes doivent être plus représentées dans de nombreux métiers et ne plus être 
                                                discriminées en termes de salaires et de retraites.</p>
                                                <p>Promouvoir des places de travail à temps partiel Non seulement pour les femmes, mais
                                                 également pour les hommes.</p>
                                                <p>Informer et sensibiliser sur la protection de la faune, préserver les ressources 
                                                naturelles de la Terre (eau, sol minéraux, faune, forêts).</p>
                                                

                                                <h4>Vos loisirs</h4>
                                                <p>les randonnées, le jardinage, l'écriture, la peinture.</p>

                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>  
                                                                                                                  
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Diminution</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Plutôt contre</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Philippe Riat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Philippe Riat</h3>
                                <p class="uk-text-center text-fonction">1959 - Epiquerez - Instituteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Tiffany Meyer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Tiffany Meyer</h3>
                                <p class="uk-text-center text-fonction">1996 - Porrentruy - Etudiante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vincent Chapuis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Chapuis</h3>
                                <p class="uk-text-center text-fonction">1967 - Boncourt - Economiste d'entreprise</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Renée Rebetez">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Renée Rebetez</h3>
                                <p class="uk-text-center text-fonction">1959 - Porrentruy - Infirmière</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-1" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $JMComment ?>"
                                                alt="Jean-Marc Comment">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Jean-Marc Comment</h3>
                                    <p class="uk-text-center text-fonction">1952 - St-Ursanne - Retraité et indépendant</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-1" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $JMComment ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Jean-Marc Comment, 1952, St-Ursanne, Retraité et indépendant</h2>
                                    <p>Marié, 2 enfants, Mécanicien-électronicien, licence en biologie et en informatique </p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Apporter au Parlement jurassien les préoccupations des mouvements citoyens dans lesquels
                                                je suis actif. Je suis persuadé que seule une implication de la population permettra le
                                                changement nécessaire en lien avec le réchauffement climatique.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Comme président de l'ATE-Jura, j'espère que nous arriverons à diminuer l'empreinte de la
                                                mobilité sur les gaz à effets de serre avec une Augmentation de la mobilité douce et de l'usage
                                                accru des transports publics. Dans le domaine énergétique, j'espère que nous arriverons à
                                                diminuer notre consommation car l'énergie la plus verte est celle que nous n'utilisons pas.
                                                Je m'engage comme co-président de l'Association Suisse pour l'Energie Citoyenne, je m'engage
                                                aussi pour le développement des énergies renouvelables, en particulier le solaire qui dispose
                                                encore d'un énorme potentiel.</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Marche, yoga, lecture, permaculture</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="https://twitter.com/jmcomment" target="_blank" uk-icon="icon: twitter; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.jeanmarccomment.net" target="_blank" uk-icon="icon: link; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.facebook.com/jeanmarc.comment" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                  
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>     
                                                <p>Une réflexion doit être menée sur notre système de santé. Il n'y a pas assez de prévention. Les hôpitaux
                                                sont à mon avis mal gérés, sinon pourquoi une partie du personnel infirmier quitte la profession après
                                                quelques années. C'est aussi une raison de la hausse des coûts de la santé en particulier au Jura.</p>                                        
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                    
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Diminution</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                          
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Je serai favorable à l'éolien si toutes les mesures d'économie d'énergie ont été prises
                                                et si toutes les installations solaires, de bio gaz, de chauffage à distance sont réalisées dans le Jura.</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Eva Schoeni">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Eva Schoeni</h3>
                                <p class="uk-text-center text-fonction">1961 - Roche d'Or - Agricultrice Bio</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michel Comment">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michel Comment</h3>
                                <p class="uk-text-center text-fonction">1965 - Cornol - Employé de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jill Williamson">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jill Williamson</h3>
                                <p class="uk-text-center text-fonction">1996 - Charmoille - Bibliothécaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Patrick Guélat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Patrick Guélat</h3>
                                <p class="uk-text-center text-fonction">1967 - Montmelon - Teamleader</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christelle Baconat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christelle Baconat</h3>
                                <p class="uk-text-center text-fonction">1981 - St-Ursanne - Factrice</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Tristan Lièvre">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Tristan Lièvre</h3>
                                <p class="uk-text-center text-fonction">1996 - Porrentruy - Menuisier, chef de projets sociaux et env.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Anita Kradolfer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anita Kradolfer</h3>
                                <p class="uk-text-center text-fonction">1970 - Boncourt - Diététicienne</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-12" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $PrudatBrice ?>"
                                                alt="Brice Prudat">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Brice Prudat</h3>
                                    <p class="uk-text-center text-fonction">1986 - Courtemautruy - Agriculteur</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-12" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $PrudatBrice ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Brice Prudat, 1986, Courtemautruy, Agriculteur</h2>
                                    <p>Célibataire, pas d'enfants, Master en Biologie des sols, école d'agriculture</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Défendre une société plus écologique et sociale.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Freiner l'agrandissement des fermes, valoriser le travail paysan et l'agriculture biologique.</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Lecture, randonnée.</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="https://www.facebook.com/brice.prudat/" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                     
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Augmentation</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Plutôt pour ces projets, mais la population impactée doit pouvoir
                                                s'exprimer démocratiquement. Le Jura doit aussi gérer lui-même son électricité.</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Josette Fernex-Ory">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Josette Fernex-Ory</h3>
                                <p class="uk-text-center text-fonction">1957 - Bressaucourt - Maraîchère</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-11" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $BassinPhilippe ?>"
                                                alt="Philippe Bassin">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Philippe Bassin</h3>
                                    <p class="uk-text-center text-fonction">1953 - Porrentruy - Retraité</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-11" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $BassinPhilippe ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Philippe Bassin, 1953, Porrentruy, professeur de biologie retraité</h2>
                                    <p>Marié, 2 enfants, Master ou licence en biologie à l'Université de Neuchâtel</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Parce qu'il y a urgence à respecter l'être humain dans une nature préservée.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Depuis plus de 40 ans je m'engage pour la sauvegarde de l'environnement et je vais
                                                continuer à le faire face aux grands défis du changement climatique et de la perte de
                                                la biodiversité. Je souhaite aussi m'investir pour une économie durable qui offre à
                                                chacun(e) de bonnes conditions de travail et et la sécurité sociale. Venant de la
                                                Vallée de Tavannes, j'ai lutté pour le Jura. J'ai la conviction que ce canton a de
                                                nombreux atouts à mettre en valeur. Je vais m'investir dans ce sens pour accueillir
                                                Moutier dans les meilleures conditions possibles.</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Je pratique la marche dans la nature, l'observation des oiseaux, le ski et le vélo.
                                                Je m'occupe de la protection des marais en Ajoie. J'aime bien le théâtre et les concerts
                                                de musique classique.</p>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                      
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>L'économie va survivre au respect de l'environnement et à la fin de l'exploitation et du travail des enfants.</p>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div> 
                                                <p>Un âge de la retraite identique pour les femmes et les hommes ne peut être pris en compte qu'en cas de l'application
                                                de l'égalité totale entre les sexes, notamment salariale.</p>                                            
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                                <p>Concernant l'euthanasie active, je suis pour dans certains cas. Toutefois, chaque cas est différent...</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                                <p>La concurrence fiscale entre les cantons peut conduire à des injustices,
                                                notamment en favorisant les plus riches. Le Jura devrait demander qu'une
                                                amélioration de la régulation soit mise en place.</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>La géothermie est une source d'énergie très intéressante pour remplacer
                                                le nucléaire et diminuer drastiquement la consommation des énergies fossiles.
                                                Cependant, on ne pourra pas l'imposer si la grande majorité de la population
                                                locale (d'un endroit choisi) la refuse.</p>
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Les risques de manipulations des votes électroniques me paraissent trop élevés.</p>
                                            </li>
					                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Léonie Liechti">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Léonie Liechti</h3>
                                <p class="uk-text-center text-fonction">1987 - Porrentruy - Chargée d'enseignement</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pintu Akter">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pintu Akter</h3>
                                <p class="uk-text-center text-fonction">1974 - Porrentruy - Fonctionnaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Eliane Domon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Eliane Domon</h3>
                                <p class="uk-text-center text-fonction">1956 - Porrentruy - Pharmacienne, enseignante, retraitée</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sophie Barthod-Gressot">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sophie Barthod-Gressot</h3>
                                <p class="uk-text-center text-fonction">1970 - Porrentruy - Commerçante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marlène Stalder-Bonati">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marlène Stalder-Bonati</h3>
                                <p class="uk-text-center text-fonction">1965 - Boncourt - Secrétaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Imier Braichet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Imier Braichet</h3>
                                <p class="uk-text-center text-fonction">1986 - Cornol - Agent de méthodes</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Guillaume Cadario">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Guillaume Cadario</h3>
                                <p class="uk-text-center text-fonction">1992 - Porrentruy - Employé de vente</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Angelo Casarano">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Angelo Casarano</h3>
                                <p class="uk-text-center text-fonction">1969 - Porrentruy - Dessinateur boite montres</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nicolas Charmillot">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Charmillot</h3>
                                <p class="uk-text-center text-fonction">1969 - Boncourt - Electricien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Palmira Conceicao">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Palmira Conceicao</h3>
                                <p class="uk-text-center text-fonction">1970 - Porrentruy - Veilleuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Philippe Eggertswyler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Philippe Eggertswyler</h3>
                                <p class="uk-text-center text-fonction">1969 - Porrentruy - Directeur institution sociale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Aline Gillioz-Vuillaume">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Aline Gillioz-Vuillaume</h3>
                                <p class="uk-text-center text-fonction">1969 - Courgenay - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fabrice Giordano">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fabrice Giordano</h3>
                                <p class="uk-text-center text-fonction">1971 - Courgenay - Educateur spécialisé</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Quentin Haas">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Quentin Haas</h3>
                                <p class="uk-text-center text-fonction">1991 - Cornol - Master en sciences biomédicales</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pierre-André Henzelin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pierre-André Henzelin</h3>
                                <p class="uk-text-center text-fonction">1977 - Coeuve - Maître-agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marie Label Lupal">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marie Label Lupal</h3>
                                <p class="uk-text-center text-fonction">1989 - Porrentruy - Gestionnaire indentance</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christianne Lauber">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christianne Lauber</h3>
                                <p class="uk-text-center text-fonction">1959 - Porrentruy - Logopédiste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Daniel Meyer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Daniel Meyer</h3>
                                <p class="uk-text-center text-fonction">1961 - Coeuve - Facteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julian Sanz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julian Sanz</h3>
                                <p class="uk-text-center text-fonction">1993 - Porrentruy - Bûcheron</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-10" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $SchaffterThomas ?>"
                                                alt="Thomas Schaffter">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Thomas Schaffter</h3>
                                    <p class="uk-text-center text-fonction">1974 - Porrentruy - Chef d'entreprise</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-10" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $SchaffterThomas ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Thomas Schaffter, 1974, Porrentruy, Chef d'entreprise</h2>
                                    <p>Marié, 2 enfants, licence ES sciences politiques (UNIL)</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Mon engagement politique s'inscrit dans le prolongement de mes engagements associatifs.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Président de l'Union du commerce d'Ajoie et du Clos-du-Doubs, je me bats pour favoriser
                                                la consommation locale et il est important de soutenir cette politique sur le plan cantonal. </p>

                                                <h4>Vos loisirs</h4>
                                                <p>Tennis, marche. Et le HCA, pour lequel je m'investis au comité directeur depuis 18 ans.</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <p>Je ne suis pas sur les réseaux sociaux que je préfère appeler la "fachosphère"
                                                tant la libération de la parole y permet aux médiocres d'y déverser leur haine.</p>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>                                                     
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">Oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Non</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
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

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Simon Schneider">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Simon Schneider</h3>
                                <p class="uk-text-center text-fonction">1991 - Courgenay - Economiste-juriste d'entreprise</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Ephrem Theurillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Ephrem Theurillat</h3>
                                <p class="uk-text-center text-fonction">1961 - St-Ursanne - Chef d'équipe</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gladys Udry Léchenne">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gladys Udry Léchenne</h3>
                                <p class="uk-text-center text-fonction">1976 - Porrentruy - Employée Administration fédérale des douanes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Emilie Moreau">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Emilie Moreau</h3>
                                <p class="uk-text-center text-fonction">1979 - Porrentruy - Cheffe de service Jura Tourisme</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Kevin Tur">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Kevin Tur</h3>
                                <p class="uk-text-center text-fonction">1997 - Charmoille - Etudiant en économie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fabien Cattin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fabien Cattin</h3>
                                <p class="uk-text-center text-fonction">1986 - Fahy - Géomaticien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mélissa Gigon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mélissa Gigon</h3>
                                <p class="uk-text-center text-fonction">2000 - Courgenay - Etudiante en droit</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Ismaël Vuillaume">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Ismaël Vuillaume</h3>
                                <p class="uk-text-center text-fonction">1979 - Rocourt - Gendarme</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pascal Miserez">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pascal Miserez</h3>
                                <p class="uk-text-center text-fonction">1959 - Porrentruy - Ingénieur EPF et mécanique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gérard Strucher">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gérard Strucher</h3>
                                <p class="uk-text-center text-fonction">1967 - Porrentruy - Technicien ES en chauffage</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Didier Receveur">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Didier Receveur</h3>
                                <p class="uk-text-center text-fonction">1970 - Courgenay - Conseiller immobilier</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Laurent-Olivier Girard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurent-Olivier Girard</h3>
                                <p class="uk-text-center text-fonction">1954 - Porrentruy - Economiste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Paul Monnerat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Paul Monnerat</h3>
                                <p class="uk-text-center text-fonction">1976 - Montignez - Enseignant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pascal Henzelin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pascal Henzelin</h3>
                                <p class="uk-text-center text-fonction">1973 - Porrentruy - Architecte</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Denis Eschmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Denis Eschmann</h3>
                                <p class="uk-text-center text-fonction">1980 - Fontenais - Infirmier anesthésiste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Esma Atici">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Esma Atici</h3>
                                <p class="uk-text-center text-fonction">1984 - Courgenay - Vendeuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Willy Scherler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Willy Scherler</h3>
                                <p class="uk-text-center text-fonction">1947 - Fontenais - Serrurier retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Arsim Sofra">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Arsim Sofra</h3>
                                <p class="uk-text-center text-fonction">1976 - Alle - Indépendant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="David Barthe">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">David Barthe</h3>
                                <p class="uk-text-center text-fonction">1978 - St-Ursanne - Installateur sanitaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marie Widmer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marie Widmer</h3>
                                <p class="uk-text-center text-fonction">1995 - Miécourt - Architecte d'intérieur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Claude Barras">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Claude Barras</h3>
                                <p class="uk-text-center text-fonction">1943 - Courtemautruy - Médecin retraité</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </li>
        </ul>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>