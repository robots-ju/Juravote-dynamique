<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Delémont</title>
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
        <script src="//cdn.amcharts.com/lib/4/core.js"></script>
        <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>

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
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Votation Delémont du 27 septembre 2020</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h3>Préambule</h3>
                    <p>Le site des Arquebusiers constitue un seteur de développement important au sein du tissu bâti delémontain.
                    Il est pressenti pour accueillir, notamment, un nouveau bâtiment scolaire, qui permettra de combler le déficit
                    de classes de l'Ecole primaire. D'autres équipements publics liés aux besoins scolaires pourront également être
                    accueillis : une cantine scolaire, une halle de gymnastique et une crèche. Ceci dans une perspective de développement
                    à moyen et long terme. Le Plan d'aménagement local de 2017 confère également la construction de logements (dont une part minimale à loyer
                    modéré) incluant les places de parc nécessaires, le maintien du nombre de places de stationnement gratuites actuelles
                    du Gros-Pré et la création d'espaces publics avec une arborisation et des espaces verts généreux.
                    </p>

                    <p>La conception de ce quartier doit se faire en conformité avec le Plan climat communal et dans le respect des
                    exigences liées aux labels "Sites 2000 watts" et "Quartier durable". Afin de disposer d'un maximum d'idées et de
                    propositions, les autorités communales ont lancé un concours de projets en architecture pour le bâtiment scolaire.
                    Le concours a débouché sur avant-projet abouti et séduisant d'un concept de quartier cohérent et garant de liens
                    adéquats entre l'école, le parc urbain, le futur parking et les immeubles de logement. Les lauréats du concours
                    doivent désormais élaborer le plan spécial et approfondir les études en vue de la réalisation du bâtiment scolaire,
                    qui se fera dans une première étape. Les mandats y relatifs font l'objet de la présente demande de crédit.
                    </p>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                        <h3>Politique définie par le Plan d'aménagement local "Delémont, cap sur 2030"</h3>
                        <p>Conformément à la nouvelle Loi sur l'aménagement du territoire (LAT) et aux principes définis par le Plan directeur
                            cantonal, la Ville de Delémont prône un développement concentré à l'intérieur du tissu bâti de manière à favoriser
                            l'intensité urbaine et à préserver les espaces ouverts naturels et agricoles.
                        </p>
                        <p>Un aménagement global et coordonné du site des Arquebusiers est nécessaire afin de réussir à former une pièce urbaine
                        cohérente, qui devra intégrer différents programmes résidentiels possibles (avec notamment au minimum 10 % de
                        logements à loyer modéré à construire sur les terrains en propriété communale), des espaces publics, du
                        stationnement, y compris le maintien d'un parking public gratuit destiné aux pendulaires (places de parc actuelles à
                        réorganiser avec une emprise réduite au sol) et des programmes publics, dont notamment un nouvel écopoint.
                        </p>

                        <h3>Justification du site des Arquebusiers</h3>
                        <p>Le choix du site des Arquebusiers pour la réalisation d'un nouveau bâtiment scolaire a été fait dans le cadre d'une
                        analyse qui tient compte, d'une part, des perspectives de développement de la ville, menée dans le cadre de la
                        révision du Plan d'aménagement local « Delémont, cap sur 2030 » et, d'autre part, d'une étude des besoins de l'Ecole
                        primaire de Delémont.
                        </p>

                        <p>Cette répartition géographique des élèves vise à assurer une bonne accessibilité aux différents sites scolaires, en
                        particulier à mobilité douce, ceci afin de réduire les distances. Les autres sites actuellement décentralisés, réservés
                        aux plus petites classes, restent en fonction à ce stade de développement du projet des Arquebusiers. Dans le cadre du plan
                        spécial, une analyse fine des chemins d'accès mobilité douce sera réalisée afin d'intégrer les mesures nécessaires,
                        conformément aux actions prévues dans le Plan directeur des déplacements et le Plan directeur de la mobilité douce
                        en particulier. La possibilité d'améliorer la desserte en transports publics sera également prise en compte.
                        </p>
                    </div>

                    <h3>Détermination des besoins de l'Ecole primaire de Delémont</h3>
                    <p>A la rentrée scolaire 2019, 1'048 élèves sont entrés en classe, contre, à titre de comparaison, 915 pour l'année
                    scolaire 2011-2012. La totalité des locaux est utilisée à plein temps, y compris les deux pavillons provisoires installés
                    à proximité du Gros-Seuc. Au Château, quatre classes ne répondent pas, et nettement, aux normes de surfaces pour
                    l'accueil de classes complètes ; les pavillons abritant les quatre classes des Arquebusiers ne permettent plus de
                    garantir les conditions de fonctionnement et de confort nécessaires. Le besoin en locaux est d'autant plus important
                    du fait de la densification des enseignements spécialisés (classes de transition, classes bilingues, accueil d'enfants de
                    langue étrangère, branches à option, etc.).
                    </p>

                    <p>En mai 2017, le "Groupe de travail encadrant la réflexion autour de l'infrastructure scolaire de Delémont" a établi
                    divers scénarios d'organisation de l'EPD, en tenant compte de la situation au niveau des effectifs, du développement
                    démographique pressenti de la ville et de l'évolution annoncée des méthodes d'enseignement. Ce rapport préconise le
                    maintien à terme de 4 sites scolaires principaux (Gros-Seuc, Arquebusiers, Château et Traversins). Le Conseil
                    communal a retenu, à l'horizon 2030, une extension des locaux scolaires sur deux sites, les Arquebusiers à court
                    terme, le Gros-Seuc à plus long terme en particulier lorsque l'écoquartier sera totalement terminé, d'ici une dizaine
                    d'années certainement. Ce rapport tient donc compte de la situation à ce jour des locaux scolaires et des besoins
                    estimés à l'horizon 2030 en fonction des pôles de développement de la ville (hypothèse de 2'000 habitants en plus
                    avec une part d'élèves supplémentaire estimée à 8 %).
                    </p>

                    <p>Le rapport du groupe de travail « Salles de sport à Delémont » a été transmis au Canton le 20 janvier 2020. Il est
                    prévu que les 3 salles de la Blancherie soient libérées pour l'école primaire sachant que l'école secondaire utilisera
                    principalement la nouvelle salle triple prévue sur le secteur Gare Sud. L'école primaire bénéficiera ainsi de
                    suffisamment de salles pour le secteur Ouest de la ville. L'éventuelle 4e salle supplémentaire prévue dans le rapport
                    sera érigée dans le secteur Collège - Gros-Seuc pour répondre aux besoins futurs des quartiers Est. De ce point de
                    vue, la planification retenue s'inscrit parfaitement dans le projet de nouveau bâtiment scolaire aux Arquebusiers,
                    puisque les élèves bénéficieront des halles de gymnastique de la Blancherie qui se situent à quelques minutes à pied.
                    Pour parer à une éventuelle évolution de ce concept, un secteur sera réservé dans le plan spécial pour une halle de
                    gymnastique en cas de besoin.
                    </p>

                    <p>A ce stade des études, la réalisation d'une cantine scolaire n'est pas nécessaire, puisque le principe de la journée en
                    continu n'est pas planifié à court et à moyen termes. Si le besoin devait être confirmé ultérieurement, ainsi que son
                    implantation dans ce secteur, la construction pourrait être prévue sous forme d'un bâtiment annexe, à projeter sur le
                    secteur réservé dans le plan spécial pour des besoins d'utilité publique. Comme le besoin n'est pas avéré, il n'y a pas
                    lieu de modifier le projet actuellement. Par ailleurs, il n'est pas possible de simplement intégrer une cantine au rez-dechaussée
                    sans modifier complètement le concept, sachant que les écoles enfantines doivent être au rez et
                    nécessitent un espace extérieur de récréation séparé, à côté des locaux utilisés.
                    </p>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                        <h3>Présentation du projet lauréat</h3>
                        <p>Le projet propose un nouvel îlot urbain constitué par les immeubles de logements et l'école qui sont positionnés en
                        périphérie du site, ce qui permet de dégager un vaste coeur d'îlot arboré et collectif. La nouvelle école est alignée sur
                        la rue des Arquebusiers, en lien étroit avec la Vieille Ville et l'école du Château ; elle s'ouvre au Sud sur le parc urbain
                        avec un préau couvert qui, tout en faisant partie du grand parc, s'en démarque et facilite ainsi la gestion des enfants.
                        Principalement construite en bois, autour d'un noyau de distribution en béton recyclé, le bâtiment s'inscrit dans une
                        préoccupation sociale, architecturale et environnementale très aboutie.
                        </p>

                        <p>Le parking en silo est habilement inséré dans la topographie en réduisant au maximum sa présence avec le maintien
                        à long terme d'une allée des platanes existants. Il se situe au plus près de l'accès depuis la route de Porrentruy.
                        L'usage des véhicules motorisés est strictement interdit au centre du quartier. Le parking fait partie intégrante du parc
                        avec ses plateaux en béton recyclé et ses filets métalliques avec des plantes grimpantes.
                        </p>

                        <p>La morphologie de l'habitat est convaincante, avec des bâtiments de faible profondeur qui offrent de nombreux
                        potentiels typologiques et une grande qualité d'usage notamment en termes de lumière. Les volumes sont
                        interrompus pour ouvrir des vues sur le quartier et demeurent à l'échelle des bâtiments environnants. La surface
                        globale des planchers hors sol représente environ 110 logements. La répartition des
                        bâtiments et fonctions sur le site rend indépendants les différents opérateurs et permet ainsi une grande souplesse
                        opérationnelle.
                        </p>
                        
                        <p>Après l'établissement et l'entrée en force du plan spécial, l'école, qui constitue le besoin prioritaire,
                        pourra être réalisée en maintenant une grande partie du parking existant, et par conséquent des platanes. Seule la
                        partie Est du parking devra être provisoirement compensée en l'étendant vers le Nord. Il pourra ensuite être remplacé
                        par le parking en silo ou souterrain lorsque le besoin sera avéré, probablement en relation avec la réalisation des
                        logements. Ceux-ci sont répartis sur les terrains communaux et privés et peuvent être construits de manière
                        indépendante selon les opportunités qui se présenteront.
                        </p>

                        <h3>Plan climat</h3>
                        <ol>
                            <li style="padding-bottom: 1%;">Les bâtiments se verront imposer le label Minergie P - ECO et seront alimentés
                            par une production d'énergie renouvelable.</li>

                            <li style="padding-bottom: 1%;">Les matériaux utilisés seront choisis afin de tenir compte des émissions grises dans toute la mesure du possible.</li>

                            <li style="padding-bottom: 1%;">L'eau sera gérée de manière durable.</li>

                            <li style="padding-bottom: 1%;">Le quartier et les bâtiments seront alimentés avec des énergies renouvelables, soit via un chauffage à
                            distance (CAD) soit sous une autre forme en étroite collaboration avec les SID (par exemple panneaux
                            photovoltaïques et pompes à chaleur)</li>

                            <li style="padding-bottom: 1%;">L'éclairage public sera naturellement conçu en intégrant les objectifs fixés dans le projet « Voie lactée » des
                            SID</li>

                            <li style="padding-bottom: 1%;">Le choix d'implanter de nouvelles salles de classe aux Arquebusiers a été fait en tenant compte de la
                            provenance des élèves et des critères d'accessibilité du point de vue de la mobilité douce ; les itinéraires
                            d'accès seront sécurisés dans le cadre de la mise en oeuvre du plan directeur communal des déplacements et
                            du plan directeur de la mobilité douce</li>

                            <li style="padding-bottom: 1%;">Le quartier sera développé sous la forme d'un écoquartier en réduisant les places de parc liées aux bâtiments
                            au maximum, en fonction de la qualité de desserte à mobilité douce</li>

                            <li style="padding-bottom: 1%;">Le quartier sera conçu comme un écoquartier et sera labélisé par l'Association quartiers durables à laquelle la
                            Municipalité a adhéré récemment selon le processus et les objectifs définis dans le cadre du label</li>

                            <li style="padding-bottom: 1%;">Les critères liés à une densité de qualité laissant une place importante aux espaces verts, à l'arborisation et
                            aux espaces extérieurs seront naturellement pris en compte  </li>

                            <li style="padding-bottom: 1%;">Les constructions et les aménagements seront réalisés afin de réduire les effets néfastes liés au
                            réchauffement climatique en tenant compte des besoins de la population en général et des usagers des lieux
                            et des espaces publics concernés en appliquant les principes concernés des autres domaines du plan climat</li>

                            <li style="padding-bottom: 1%;">L'ensemble des critères permettant d'améliorer les espaces naturels, la biodiversité et la gestion de l'eau
                            seront pris en compte tant pour le développement du quartier que pour la construction des futurs bâtiments et
                            de leurs alentours</li>

                            <li style="padding-bottom: 5%;">Les mesures permettant de lutter contre les dangers naturels seront mises en place</li>
                        </ol>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>Plan spécial</h3>
                        <p>Le développement du secteur "Les Arquebusiers" est obligatoirement soumis à un plan spécial,
                        qui doit être entrer en vigueur pour permettre l'octroi du permis de construire pour le bâtiment scolaire. Le plan spécial
                        détaille les affectations prévues à court, moyen et long termes ainsi que les règles de construction applicables. Il
                        intégrera donc non seulement le bâtiment scolaire, qui est la première réalisation prévue à court terme, mais réservera
                        aussi les surfaces et les équipements nécessaires pour accueillir au besoin une halle de gymnastique, une cantine scolaire,
                        une crèche, des logements ainsi que les places de parc nécessaires. Au final, la part effective de logements dépendra donc
                        des projets publics qui auront été réalisés. Le plan spécial permettra ainsi de garder des marges de manoeuvre pour répondre
                        aux différents besoins publics qui pourraient apparaître à moyen et à long termes.
                        </p>
                        <p>Le périmètre du plan spécial sera à définir précisément dans le cadre de la présente étude. La procédure à suivre est fixée
                        par les directives cantonales. Les lauréats du concours devront avoir recours à des bureaux spécialisés en urbanisme
                        (mise en forme du plan spécial) et en génie civil (espaces de circulation et réseaux souterrains). Le bureau Stähelin Partner
                        Architectes SA s'associera à deux consultants externes pour les aspects urbanistiques et énergétiques (label "Site 2000 Watts").
                        Les prestations de ces différents intervenants ont été estimées comme suit (fourchette +/- 10 %, TVA incluse) :
                        </p>

                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Prestations</th>
                                    <th>Estimation des coûts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Architecte et architecte paysagiste : concept général du quartier</td>
                                    <td>20'000.-</td>
                                </tr>

                                <tr>
                                    <td>Bureau habilité pour la mise en forme du plan spécial</td>
                                    <td>17'000.-</td>
                                </tr>

                                <tr>
                                    <td>Ingénieur civil : espaces de circulation et réseaux souterrains</td>
                                    <td>15'000.-</td>
                                </tr>

                                <tr>
                                    <td>Consultants externes pour les aspects urbanistiques et énergétiques</td>
                                    <td>20'000.-</td>
                                </tr>

                                <tr>
                                    <td>Divers et imprévus</td>
                                    <td>8'000.-</td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>80'000.-</b></td>
                                </tr>
                            </tbody>
                        </table>

                        <h3>Etude du bâtiment scolaire</h3>
                        <p>Il s'agit d'établir le projet définitif pour l'école et la partie du parc urbain qui lui est intimement liée, avec l'établissement
                        du devis général, dans une fourchette maximale de +/- 10 %, qui servira ensuite de base à la demande de crédit
                        d'exécution des travaux de construction. Les études nécessaires à la réorganisation provisoire du parking sont
                        également prévues. Des bureaux spécialisés seront associés aux lauréats du concours afin de couvrir l'ensemble des
                        thématiques inhérentes à un tel projet. Les prestations de ces différents intervenants ont été estimées comme suit
                        (fourchette +/- 10 %, TVA incluse) :
                        </p>
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Prestations</th>
                                    <th>Estimation des coûts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Architecte</td>
                                    <td>385'000.-</td>
                                </tr>

                                <tr>
                                    <td>Architecte paysagiste</td>
                                    <td>85'000.-</td>
                                </tr>

                                <tr>
                                    <td>Ingénieur civil béton et bois</td>
                                    <td>80'000.-</td>
                                </tr>

                                <tr>
                                    <td>Ingénieur électricité</td>
                                    <td>40'000.-</td>
                                </tr>

                                <tr>
                                    <td>Ingénieur chauffage, ventilation, sanitaire</td>
                                    <td>40'000.-</td>
                                </tr>

                                <tr>
                                    <td>Autres spécialistes : physicien du bâtiment, spécialiste protection incendie, acousticien,
                                    géologue, géomètre</td>
                                    <td>30'000.-</td>
                                </tr>

                                <tr>
                                    <td>Divers et imprévus</td>
                                    <td>30'000.-</td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>690'000.-</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-top: 2%;">
                        <h3>Financement</h3>
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Charge financière</th>
                                    <th>Taux d'amortissement</th>
                                    <th>Montant (en CHF)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Amortissement comptable du plan spécial (10 ans)</td>
                                    <td>10 %</td>
                                    <td>8'000.-</td>
                                </tr>
                                <tr>
                                    <td>Amortissement comptable du bâtiment scolaire (25 ans)</td>
                                    <td>4 %</td>
                                    <td>27'600.-</td>
                                </tr>
                                <tr>
                                    <td>Charge d'intérêt maximale</td>
                                    <td>3 % (taux moyen) *</td>
                                    <td>23'100.-</td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>---</b></td>
                                    <td><b>58'700.-</b></td>
                                </tr>
                            </tbody>
                        </table>

                        <p>* L'amortissement financier et le taux d'intérêt ne peuvent pas être déterminés de cas en cas, la Municipalité procédant à des
                        emprunts à court, moyen et long termes.
                        </p>

                        <p>Les études concernées par cette demande de crédit devraient en partie être subventionnées par le Canton, à hauteur
                        de 20 %, au titre des constructions scolaires uniquement. Cette subvention n'interviendra que lors du
                        décompte des travaux de construction, prévu en 2023.
                        </p>

                        <h3>Estimation des coûts de réalisation</h3>
                        <p>A ce stade du projet, le coût global et plafond des travaux nécessaires à la construction du bâtiment scolaire est
                        estimé à 11,7 millions de francs, réparti comme suit :
                        </p>

                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Prestations</th>
                                    <th>Estimation des coûts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Travaux préparatoires : démolitions, adaptations des réseaux, réorganisation et rénovation douce
                                    du parking</td>
                                    <td>600'000.-</td>
                                </tr>

                                <tr>
                                    <td>Bâtiment</td>
                                    <td>8'500'000.-</td>
                                </tr>

                                <tr>
                                    <td>Aménagements extérieurs, secteur Est du parc urbain, lié à l'école</td>
                                    <td>1'400'000.-</td>
                                </tr>

                                <tr>
                                    <td>Mobilier intérieur et extérieur, frais secondaires, réserve</td>
                                    <td>1'200'000.-</td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>11'700'000.-</b></td>
                                </tr>
                            </tbody>
                        </table>

                        <h3>Programme de travail et calendrier des travaux</h3>
                        <table class="uk-table uk-table-striped">                           
                            <tbody>
                                <tr>
                                    <td>Adjudication des mandats d'étude</td>
                                    <td>Novembre 2020</td>
                                </tr>

                                <tr>
                                    <td>Rmise du projet définitif et du devis +/- 10 % bâtiment scolaire</td>
                                    <td>Mai 2021</td>
                                </tr>

                                <tr>
                                    <td>Dépôt public du plan spécial</td>
                                    <td>Juin 2021</td>
                                </tr>

                                <tr>
                                    <td>Crédit de réalisation du bâtiment scolaire en votation populaire</td>
                                    <td>Septembre 2021</td>
                                </tr>

                                <tr>
                                    <td>Octroi du permis de construire de l'école, sous réserve de l'entrée en force
                                    du plan spécial</td>
                                    <td>Janvier 2022</td>
                                </tr>

                                <tr>
                                    <td>Adjudication des travaux du bâtiment scolaire</td>
                                    <td>Février 2022</td>
                                </tr>

                                <tr>
                                    <td>Début des travaux</td>
                                    <td>Mars 2022</td>
                                </tr>

                                <tr>
                                    <td>Mise en service de l'école</td>
                                    <td>Eté-automne 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    <h3>La question qui vous est posée :</h3>
                        <b><p>Acceptez-vous, selon message du Conseil de Ville, le crédit d'études de Fr. 770'000.- pour la réalisation des
                        études en vue des constructions sur le secteur MDa "Les Arquebusiers", en particulier un bâtiment scolaire ?</p></b>
                </li>
                <li>
                    <div id="chartdiv"></div>
                    <script>
                        am4core.useTheme(am4themes_animated);

                        var chart = am4core.create("chartdiv", am4charts.XYChart);
                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                        chart.paddingBottom = 30;

                        chart.data = [{
                            "name": "Verts",
                            "steps": 0
                        }, {
                            "name": "CS-POP",
                            "steps": 0
                        }, {
                            "name": "PS",
                            "steps": 0
                        }, {
                            "name": "PEV",
                            "steps": 0
                        }, {
                            "name": "PDC",
                            "steps": 0
                        }, {
                            "name": "PCSI",
                            "steps": 0
                        }, {
                            "name": "PLR",
                            "steps": 0
                        }, {
                            "name": "UDC",
                            "steps": 0
                        }];

                        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "name";
                        categoryAxis.renderer.grid.template.strokeOpacity = 0;
                        categoryAxis.renderer.minGridDistance = 10;
                        categoryAxis.renderer.labels.template.dy = 35;
                        categoryAxis.renderer.tooltip.dy = 35;

                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                        valueAxis.renderer.inside = true;
                        valueAxis.renderer.labels.template.fillOpacity = 0.3;
                        valueAxis.renderer.grid.template.strokeOpacity = 0;
                        valueAxis.min = 0;
                        valueAxis.cursorTooltipEnabled = false;
                        valueAxis.renderer.baseGrid.strokeOpacity = 0;

                        var series = chart.series.push(new am4charts.ColumnSeries);
                        series.dataFields.valueY = "steps";
                        series.dataFields.categoryX = "name";
                        series.tooltipText = "{valueY.value}";
                        series.tooltip.pointerOrientation = "vertical";
                        series.tooltip.dy = - 6;
                        series.columnsContainer.zIndex = 100;

                        var columnTemplate = series.columns.template;
                        columnTemplate.width = am4core.percent(50);
                        columnTemplate.maxWidth = 66;
                        columnTemplate.column.cornerRadius(60, 60, 10, 10);
                        columnTemplate.strokeOpacity = 0;

                        series.heatRules.push({ target: columnTemplate, property: "fill", dataField: "valueY", min: am4core.color("#a00000"), max: am4core.color("#35ff00") });
                        series.mainContainer.mask = undefined;

                        var bullet = columnTemplate.createChild(am4charts.CircleBullet);
                        bullet.circle.radius = 30;
                        bullet.valign = "bottom";
                        bullet.align = "center";
                        bullet.isMeasured = true;
                        bullet.mouseEnabled = false;
                        bullet.verticalCenter = "bottom";

                        var hoverState = bullet.states.create("hover");
                        var outlineCircle = bullet.createChild(am4core.Circle);
                        outlineCircle.adapter.add("radius", function (radius, target) {
                            var circleBullet = target.parent;
                            return circleBullet.circle.pixelRadius + 10;
                        })                    

                        image.adapter.add("href", function (href, target) {
                            var dataItem = target.dataItem;
                            if (dataItem) {
                                return "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/" + dataItem.categoryX.toLowerCase() + ".jpg";
                            }
                        })                    

                        var previousBullet;
                        chart.cursor.events.on("cursorpositionchanged", function (event) {
                            var dataItem = series.tooltipDataItem;

                            if (dataItem.column) {
                                var bullet = dataItem.column.children.getIndex(1);

                                if (previousBullet && previousBullet != bullet) {
                                    previousBullet.isHover = false;
                                }

                                if (previousBullet != bullet) {

                                    var hs = bullet.states.getKey("hover");
                                    hs.properties.dy = -bullet.parent.pixelHeight + 30;
                                    bullet.isHover = true;

                                    previousBullet = bullet;
                                }
                            }
                        })
                    </script>
                </li>  
                <li>            
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Selon les études réalisées, il est pertinent de prévoir des développements dasn la partie Ouest du site des
                            Arquebusiers.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Cette répartition géographique des élèves vise à assurer une bonne accessibilité aux différents
                            sites scolaires.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La possibilité d'améliorer la desserte en transports publics sera également prise en compte.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Ce rapport tient donc compte de la situation à ce jour des locaux scolaires et des besoins
                            estimés à l'horizon 2030 en fonction des pôles de développement de la ville.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Ce projet inclut le rapatriement
                            des classes spéciales qui sont actuellement dans les pavillons provisoires du Gros-Seuc et qui accueillent des élèves
                            de tous les quartiers de la ville. Ces pavillons provisoires pourront donc être supprimés.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Cette contrainte a été prise en
                            considération dans le rapport du groupe de travail qui a réalisé une planification à long terme des besoins en halles de
                            gymnastique.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Au niveau énergétique, le quartier devra répondre aux exigences des
                            labels « Site 2000 Watts » et « Quartier durable ». L'école devait être correctement intégrée au quartier et en
                            harmonie avec les autres affectations (logements, parking, parc public, cantine scolaire, halle de gymnastique,
                            crèche), dont certaines ont été présentées sous forme d'idées conceptuelles.</p>
                        </div>
                    </div>
                </li>
                <li>
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                <h4>Il n'y a pas d'oppositions à ce projet !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>-->
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