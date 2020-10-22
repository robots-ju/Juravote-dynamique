<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election au Gouvernement jurassien</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Election du Gouvernement jurassien (2e tour) - 08 novembre 2020</h1>
        <hr>
        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">En bref</button>
            <button class="uk-button uk-button-default" type="button">Liste des candidats-es</button>            
        </div>  
        <ul class="uk-switcher uk-margin">
            <li>
                <h1>Les élections cantonales en bref</h1>
                <p>Les résultats du 1er tour sont disponibles <a href="<?php echo $PHPresultatGouvernementJU20201018 ?>">ici.</a></p>

                <p>Pour l'instant, les 5 Ministres sortants-es sont candidats-es à leur réelection, ainsi que 2 candidat-es.
                Au 1er tour, Martial Courtet (PDC) termine en 1re place, suivi de Nathalie Barthoulot (PS), de Rosalie Beuret Siess
                (PS), de Jacques Gerber (PLR), de Stéphane Babey (PDC), David Eray (PCSI) et de Céline Robert-Charrue Linder.</p>
                <p>Ces 7 personnes sont candidats-es au second tour (voir dans le second onglet, "Liste des candidats-es.").
                Le second candidat des Verts Jura, les Verts-Libéraux, le CS-POP et l'UDC figurent dans le bas de classement.</p>
            </li>

            <li>
                <div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $DavidEray ?>"
                                            alt="David Eray">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">David Eray</h3>
                                <p class="uk-text-center text-fonction">1973 - Le Noirmont - Ministre</p>
                                <p>6e place lors du 1er tour</p>
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
                                            src="<?php echo $JacquesGerber ?>"
                                            alt="Jacques Gerber">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jacques Gerber</h3>
                                <p class="uk-text-center text-fonction">1973 - Porrentruy - Ministre</p>
                                <p>4e place lors du 1er tour</p>
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
                                            src="<?php echo $MartialCourtet ?>"
                                            alt="Martial Courtet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Martial Courtet</h3>
                                <p class="uk-text-center text-fonction">1976 - Delémont - Ministre</p>
                                <p>1re place lors du 1er tour</p>
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
                                            alt="Stephane Babey">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Stéphane Babey</h3>
                                <p class="uk-text-center text-fonction">1971 - Alle - Ingénieur agronome</p>                                
                                <p>5e place lors du 1er tour</p>
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
                                            src="<?php echo $NathalieBarthoulot ?>"
                                            alt="Nathalie Barthoulot">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nathalie Barthoulot</h3>
                                <p class="uk-text-center text-fonction">1968 - Courtételle - Ministre</p>
                                <p>2e place lors du 1er tour</p>
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
                                            src="<?php echo $RosalieBeuret ?>"
                                            alt="Rosalie Beuret Siess">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Rosalie Beuret Siess</h3>
                                <p class="uk-text-center text-fonction">1978 - Porrentruy - Ministre</p>
                                <p>3e place lors du 1er tour</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#modal-full-1" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $RobertCelineGVT ?>"
                                                alt="Céline Robert-Charrue Linder">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Céline Robert-Charrue Linder</h3>
                                    <p class="uk-text-center text-fonction">1969 - Delémont - Archéologue</p>
                                    <p>7e place lors du 1er tour. Cliquez ici pour découvrir son profil !</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-1" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $RobertCelineGVTGrand ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Céline Robert-Charrue Linder, 1969, Delémont, Archéologue</h2>
                                    <p>Mariée, 4 enfants, Master en Archéologie à l'Université de Neuchâtel,
                                    de même qu'un Master en Géographie et Bachelor en Histoire de l'art</p>
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
                                                <p>J'ai envie de faire bouger les lignes au Gouvernement jurassien en amenant une vision transversale
                                                de notre politique cantonale en prenant en compte, pour chaque dossier traité, autant l'urgence climatique
                                                que l'urgence sociale. Suite à la crise sanitaire que nous traversons, aux difficultés économiques et
                                                sociales qu'elle entraîne, et en tenant compte du fait avéré scientifiquement que les pandémies actuelles
                                                découlent de la destruction des écosystèmes par l'homme, il est urgent de revoir nos priorités quant à
                                                nos choix de société, et de penser à l'avenir de nos enfants. </p>

                                                <h4>Priorités politiques</h4>
                                                <p>Comme précédemment dit, mes priorités sont autant l'urgence climatique que l'urgence sociale, indissociables.
                                                Il ne peut y avoir d'amélioration de nos conditions de vie, et de celles de tout être vivant sur cette planète,
                                                sans qu'il n'y ait une introspection profonde de notre société. Elle implique selon moi une redistribution des
                                                richesses, c'est pour cela que je souhaite mener un programme articulé sur 3 axes prioritaires : l'écologie,
                                                pour agir sur le climat, la biodiversité et l'environnement; le social, car il ne peut y avoir d'avancée
                                                écologique si elle n'est pas supportée équitablement; l'égalité, pour en finir avec les discriminations,
                                                sources de précarité. Le nouveau gouvernement en place devra ainsi mettre en place de toute urgence deux
                                                plans de transition séparés mais intrinsèquement liés, et de portée transversale sur l'ensemble des dossiers
                                                concernant le canton  : </p>
                                                <ul>
                                                    <li>un plan climat, y c. un plan de sortie des énergies fossile et nucléaire, avec des objectifs clairs
                                                    en matière de neutralité carbone à l'horizon 2030, de même qu'une communication irréprochable et absolument
                                                    transparente envers tous les acteurs concernés, la population en priorité;</li>
                                                    <li>un plan de lutte contre la précarité, afin que les plus démunis d'entre nous non seulement ne subissent
                                                    pas la crise sociale dans laquelle nous plonge la crise sanitaire, mais que leurs conditions s'améliorent à
                                                    la sortie de la crise. Cela impliquera de revoir nos priorités en terme de société.</li>
                                                </ul>

                                                <h4>Vos loisirs</h4>
                                                <p>Peu de loisirs malheureusement par manque de temps, mais essentiellement la découverte des musées :
                                                art, archéologie, société, etc.....</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="https://twitter.com/CelineLinder" target="_blank" uk-icon="icon: twitter; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://diju.ch/f/notices/detail/1003741" target="_blank" uk-icon="icon: link; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.facebook.com/celine.robertcharruelinder.3" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
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
                                                            <th class="uk-text-center">Delémont : développement du secteur des Arquebusiers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">Oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">Non</span></td>  
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
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>La réponse "brute" à ces deux dernières questions aurait été : oui. Cependant,
                                                il est bien trop réducteur de devoir répondre oui ou non à un tel enjeu pour notre
                                                société qu'est la transition énergétique. Pour cela, il faut à mon avis que le
                                                Gouvernement tienne une ligne absolument claire quant à la sortie urgente des
                                                énergies fossiles, polluantes et coûteuses, et de l'énergie nucléaire,
                                                dangereuse, ceci afin d'atteindre la neutralité carbone le plus rapidement possible
                                                : les Verts jurassiens l'ambitionnent à l'horizon 2030. Il est impératif pour cela que le débat ait lieu !
                                                A mon sens, il est nécessaire :</p>
                                                <ul>
                                                    <li>de développer d'urgence un programme d'économie de l'énergie et d'émission des gaz à effet de
                                                    serre à tous les niveaux : industrie, mobilité, bâtiment, etc. </li>
                                                    <li>de définir le potentiel du mix énergétique (chaleur et électricité) dans le canton du Jura.
                                                    Celui-ci devra être mis en réseau, et être à même de fournir électricité et chaleur en continu
                                                    aussi bien en été qu'en hiver. En fonction de l'atteinte de l'objectif précédent, le mix énergétique
                                                    pourra être adapté. Le but à terme est de consommer moins, mais mieux, à l'aide des énergies
                                                    renouvelables exploitables dans le canton. Il faudra également, à terme, que ces énergies soient
                                                    gérées localement et utilisées localement, donc uniquement en mains jurassiennes. Pour cela, la
                                                    population doit impérativement être consulté, de même que tous les acteurs concernés : communes,
                                                    associations de protection de la nature, etc. . La communication des autorités politiques doit
                                                    être absolument transparente et irréprochable, afin que la population comprennent les tenants
                                                    et aboutissants ! Les nuisances engendrées seront mieux comprises si la population peut prendre
                                                    en main et profiter de sa propre transition énergétique. De plus, le potentiel en terme de nouveaux
                                                    emplois liés à ces nouvelles technologies est très important. </li>
                                                </ul>
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
                </div>  
            </li>
            
            <li>
            </li>
        </ul>        
    </section>
</main>
</body>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>