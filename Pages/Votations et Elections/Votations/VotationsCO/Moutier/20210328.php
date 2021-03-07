<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Moutier</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
        <main>
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Votation Moutier du 28 mars 2021</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Message du Conseil exécutif bernois</button>
                <button class="uk-button uk-button-default" type="button">Message de la République et Canton du Jura</button>
                <button class="uk-button uk-button-default" type="button">Message des autorités mis à jour</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques et des autorités</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>
                    <h3>Moutier est bien à sa place dans le canton de Berne !</h3>
                    <hr>                    
                    <p>Le Conseil-exécutif vous appelle, chère Prévôtoise, cher Prévôtois, à confirmer l’appartenance de votre commune 
                    au canton de Berne en votant « NON » le 18 juin 2017. Les clés du destin de votre commune sont entre vos mains.</p>

                    <p>Contrairement au 24 novembre 2013, lorsqu’il s’est agi de se prononcer sur l’ouverture d’un processus pour créer 
                    un nouveau canton, il n’est plus question de « voter pour voir ». Le résultat de la votation du 18 juin 2017 fixera 
                    de manière définitive l’appartenance cantonale de Moutier. A la veille de cet important scrutin, le Conseil-exécutif 
                    réitère son engagement à poursuivre la voie qu’il a tracée au fil des ans afin d’assurer à Moutier une place de choix 
                    dans le Jura bernois et le canton de Berne.</p>

                    <p>Première ville du Jura bernois, Moutier tient un rôle très important qui va bien au-delà de sa région par son tissu 
                    économique, sa culture et son esprit. Cette position, Moutier l'a acquise par sa volonté et sa force, mais aussi grâce 
                    à des liens millénaires avec la Prévôté, le Jura bernois et le canton de Berne. Notre canton ne serait pas ce qu'il est 
                    sans Moutier. Son identité, son rôle de pont entre la Suisse alémanique et la Suisse romande, ne seraient pas les mêmes. 
                    C’est pourquoi la population et les autorités bernoises souhaitent vivement que Moutier continue de se développer au 
                    sein du Jura bernois.</p>

                    <p>Le canton de Berne tient à rappeler la stabilité actuelle de Moutier, mais aussi son potentiel de développement au 
                    coeur de sa région de toujours. Aujourd’hui ville la plus peuplée du Jura bernois, elle est à même, sur des bases 
                    solides, de s’agrandir encore. Indissociablement attachée aux communes qui l’entourent, la cité prévôtoise est 
                    étroitement liée à la population de l’actuel Jura bernois. La stabilité de Moutier se manifeste dans tous les domaines 
                    de votre quotidien. Elle serait inévitablement remise en question avec un changement de canton.</p>
                  
                    <h3>Moutier dans le canton de Berne...</h3>
                    <table class="uk-table uk-table-divider uk-table-striped">
                        <tbody>
                            <tr>
                                <td>... possède des liaisons routières et ferroviaires de qualité. Des travaux sont en cours pour sécuriser 
                                le tronçon Moutier-Roches. Au cours des prochaines années, des moyens importants seront investis pour améliorer 
                                la qualité urbaine de la route cantonale en vue d’accompagner la mise en service de l’A16. Une étude de corridor 
                                sera effectuée pour le tronçon Roches-Moutier-Corcelles. Une voie de mobilité douce sera réalisée sur les berges 
                                de la Birse et l’itinéraire cyclotouriste local sera amélioré. Une vélo-station verra le jour à la gare avec le 
                                soutien du canton. Berne s’engage en faveur de la réfection du tunnel du Weissenstein pour assurer une bonne 
                                desserte de Moutier et des communes du Grand Val.</td>
                                
                                <td>... jouit d’un environnement économique solide, diversifié et novateur. Ce n’est pas pour rien que le 
                                canton a obtenu un des cinq sites nationaux du « Parc Suisse d’innovation ». Ce parc d’innovation, qui se 
                                concentre sur les nouvelles technologies industrielles, le stockage d’énergie, la mobilité et le medtech, 
                                est parfaitement adapté au tissu industriel de Moutier et de l’Arc jurassien. La promotion économique 
                                bernoise soutient la réalisation d’un projet d’incubateur d’entreprises au sein de l’ancienne usine Junker 
                                à Moutier, en collaboration avec Tornos. Le canton appuie également la création d’un parc industriel prévôtois, 
                                à l’image de ceux mis en place avec succès à Saint-Imier et à Tramelan. Il a participé de manière décisive au 
                                financement du Forum de l’Arc, qui accueille l’emblématique salon du SIAMS, tout en collaborant étroitement à 
                                sa pérennisation.</td>

                                <td>... compte près d’un emploi sur cinq lié à son appartenance cantonale. Les unités administratives 
                                bernoises offrent quelque 170 emplois à plein temps dans la cité prévôtoise. Ces emplois se répartissent 
                                notamment entre la Police cantonale, l’Intendance des impôts, le Tribunal civil et pénal, le Ministère 
                                public, l’Office des poursuites et des faillites, l’Office régional de placement ou la prison régionale. 
                                S’y ajoutent plus de 100 emplois à plein temps dans l’enseignement, dont plus d’un sur trois relève de 
                                la formation post-obligatoire et donc du canton. Enfin, le site prévôtois de l’Hôpital du Jura bernois 
                                dénombre plus de 320 emplois. En tout, ce sont 590 emplois sur les quelque 3200 emplois que compte la 
                                cité prévôtoise.</td>
                            </tr>
                            
                            <tr>
                                <td>... figure en bonne place dans la liste des projets cantonaux d’urbanisation. La ville est considérée 
                                comme l’un des pôles prioritaires pour la construction de logements. Cela permettra à Moutier de réaménager 
                                le secteur au sud et au nord de la gare pour en accroître l’attrait et y accueillir de nouveaux habitants. 
                                Deux autres pôles de développement sont prévus : « La Poterie » et « Les Laives ».</td>

                                <td>... héberge deux écoles de formation post-obligatoire prospères. Quelque 120 étudiants fréquentent 
                                l’Ecole de maturité spécialisée. Le Centre de formation professionnelle Berne francophone, le ceff, 
                                dénombre plus de 560 étudiants, qui se forment à onze professions à Moutier, et cinq classes d’année de 
                                préparation professionnelle.</td>

                                <td>... bénéficie d’un hôpital florissant, dont l’offre et les prestations sont largement reconnues. Le canton 
                                de Berne est le propriétaire de l’établissement de Moutier de l’Hôpital du Jura bernois. HJB SA contribue à 
                                l’activité économique de toute la région. La stratégie hospitalière bernoise mise sur les établissements 
                                régionaux : il n’est pas question de fermer les soins aigus de l’hôpital de Moutier pour les concentrer sur 
                                un autre site.</td>
                            </tr>

                            <tr>
                                <td>... obtient les ressources nécessaires pour répondre aux besoins des enfants et des familles. Les écoles 
                                disposent ainsi de 300 leçons par semaine pour répondre aux besoins d’élèves connaissant des difficultés 
                                d’apprentissage. Autre spécificité bernoise, l’école à journée continue assure la prise en charge des enfants 
                                dont les parents travaillent. Près de deux cents enfants en profitent. Le canton assume deux tiers des coûts 
                                de cette structure d’accueil extrafamilial, soit un million de francs par an.</td>


                                <td>... touche quelque 700 000 francs par an pour ses institutions culturelles et ses projets culturels. 
                                Parmi les bénéficiaires figurent par exemple Festival Stand’été, le Musée jurassien des arts, Festival 
                                Espacestand!, le Centre culturel de la prévôté et le Musée du Tour automatique. Ce soutien est accordé 
                                par le Conseil du Jura bernois, compétent en matière d’encouragement culturel pour la région francophone.</td>

                                <td>... jouit, comme le reste du Jura bernois, d’une reconnaissance de sa culture et de divers avantages 
                                par le biais du statut particulier. A ce titre, un acteur culturel ou l’organisateur d’une manifestation 
                                sportive touche proportionnellement plus de subventions que son pendant d’une autre région du canton.</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <h3>Mot de la fin</h3>
                    <hr>
                    <p>Les autorités bernoises vous assurent, chère Prévôtoise, cher Prévôtois, qu’elles feront tout ce qui est en leur pouvoir 
                    afin que Moutier connaisse un futur sûr et serein au sein d’un canton fort, ouvert et multiple. Voter « NON » 
                    le 18 juin 2017, c’est préférer un avantage réel à des perspectives incertaines. C’est opter pour un vrai potentiel de 
                    croissance. C’est soutenir le devenir de votre cité de Moutier au coeur de sa région, la Prévôté, et la renforcer comme 
                    pôle du Jura bernois.</p>
                </li>

                <li>   
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Procédure</h3>
                        <hr>
                        <p>Si la population de Moutier décide de rejoindre le canton du Jura, un comité paritaire réunissant des membres du 
                        Gouvernement jurassien et du Conseil municipal de Moutier sera constitué. Il aura en particulier pour mandat de 
                        proposer les modifications constitutionnelles et légales liées à l’accueil de la commune. Sera également proposée la 
                        constitution d’une commission spéciale composée paritairement de représentants du Parlement jurassien et du Conseil de 
                        ville de Moutier. Elle procédera à l’examen des modifications constitutionnelles et légales avant leur adoption par le 
                        Parlement, les premières étant ensuite soumises au référendum obligatoire dans le canton du Jura.</p>
                        
                        <h3>Institutions</h3>
                        <hr>
                        <p>La modification territoriale donnera lieu à une réforme des institutions. Durant une période transitoire correspondant 
                        à une législature de cinq ans, la commune de Moutier formera un district et une circonscription pour l’élection du Parlement, 
                        seule ou avec les autres communes du Jura bernois qui auront rejoint le canton du Jura. Selon les statistiques de la 
                        population au 31 décembre 2015, la commune de Moutier élirait sept députés sur soixante. Dans un second temps, les autorités 
                        proposeront de modifier la Constitution afin de créer, à l’issue de la période transitoire, un cercle électoral unique sur le 
                        territoire cantonal ou un nouveau découpage électoral qui garantisse une représentation équitable de l’ensemble de la 
                        population jurassienne.</p>
                        
                        <h3>Employés de l’Etat</h3>
                        <hr>
                        <p style="padding-bottom: 10%">L’Etat jurassien garantira un engagement dans son administration aux habitants de Moutier employés, avant le transfert, 
                        dans une unité prévôtoise de l’administration cantonale bernoise. Chacun d’eux se verra proposer un contrat de travail à 
                        durée indéterminée. Le canton du Jura garantira le maintien du salaire nominal actuel de ces collaborateurs. Ce mode de 
                        procéder s’appliquera également aux autres employés du canton de Berne, si leur poste de travail est transféré à l’Etat 
                        jurassien.</p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%">                    
                        <h3>Administration décentralisée</h3>
                        <hr>
                        <p>La Constitution jurassienne prévoit que l’administration cantonale est décentralisée. A ce titre, et au vu de son 
                        importance, notamment de son rôle de commune-centre, Moutier accueillera des unités de l’administration publique jurassienne. 
                        Le Parlement et le Gouvernement souhaitent y installer le Service des contributions, le Service de l’informatique, le Contrôle 
                        des finances, le Tribunal des mineurs et l’Office des sports. Les autorités intégreront la prison régionale de Moutier au 
                        développement des établissements pénitentiaires jurassiens. La cité prévôtoise accueillera un poste de la police cantonale 
                        et pourra, si elle le souhaite, se doter à nouveau d’une police municipale. Le canton du Jura entend maintenir un Office 
                        régional de placement à Moutier et y créer une Recette de district. Il pourra y ouvrir un centre d’expertise de l’Office 
                        des véhicules, permettant aux Prévôtois de passer les examens nécessaires à l’obtention du permis de conduire et les 
                        contrôles techniques. Ces projets conduiront à l’implantation à Moutier de quelque 170 emplois (équivalents plein temps) 
                        de l’administration cantonale.</p>
                        
                        <h3>Scolarité obligatoire et formation</h3>                    
                        <hr>
                        <p>La modification territoriale n’aura pas d’incidence sur l’existence des établissements scolaires des degrés primaire 
                        et secondaire I. Les écoles prévôtoises pourront continuer d’accueillir des élèves en provenance des communes voisines, 
                        quelle que soit l’appartenance cantonale de celles-ci. Une convention intercantonale, semblable à celle qui régit le 
                        statut de l’école secondaire de la Courtine, pourra être conclue.</p>

                        <p>Le transfert de la commune de Moutier ne modifiant pas les besoins de la population en matière de formation, les 
                        autorités jurassiennes veulent maintenir les filières proposées aux habitants de la région au degré secondaire II. 
                        Les collaborations intercantonales dans ce domaine constituent déjà une réalité. Les cantons de Berne et du Jura 
                        régleront l’avenir des deux établissements présents à Moutier, à savoir le ceff artisanat et l’Ecole de maturité spécialisée. 
                        Les autorités jurassiennes souhaitent que le ceff artisanat, qui accueille des élèves des deux cantons, soit maintenu dans 
                        la cité prévôtoise. En cas d’opposition du canton de Berne, elles s’engagent à installer à Moutier une division du Centre 
                        jurassien d’enseignement et de formation.</p>
                    </div>
                    
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-top: 2%">
                        <h3>Hôpital</h3>                    
                        <hr>
                        <p>Ainsi que le Conseil-exécutif bernois, le Gouvernement jurassien et le Conseil municipal de Moutier l’ont affirmé dans un 
                        communiqué de presse le 2 décembre 2015, « l’avenir de l’hôpital de Moutier n’est pas directement lié à la question 
                        institutionnelle ». Indépendamment de l’appartenance cantonale de la ville, les autorités jurassiennes sont favorables à 
                        l’adoption d’une planification hospitalière commune au canton du Jura et au Jura bernois, idéalement à l’ensemble de l’Arc 
                        jurassien. Dans un tel cadre, et en cas de transfert de la cité prévôtoise dans le canton du Jura, celui-ci est disposé à 
                        entrer dans l’actionnariat de l’Hôpital du Jura bernois, qui pourrait ainsi continuer d’exercer ses activités sur ses deux 
                        sites de Saint-Imier et de Moutier. Si le canton de Berne rejette cette organisation commune, le canton du Jura intégrera le 
                        site hospitalier de Moutier à l’Hôpital du Jura, en lui confiant des missions spécifiques de nature à le renforcer.</p>
                        
                        <h3>Développement territorial</h3>
                        <hr>
                        <p>La ville de Moutier aura, dans le canton du Jura, une position et un rôle respectant son importance démographique, 
                        économique et culturelle. Dans le plan directeur cantonal, elle deviendra l’un des pôles urbains au sein desquels il 
                        convient de concentrer l’habitat ainsi que les équipements et les activités d’intérêt cantonal. Les politiques cantonales 
                        auront pour but d’accroître l’offre de services, de commerces et de loisirs dans la cité prévôtoise. En sa qualité de pôle 
                        économique, celle-ci pourra accueillir une zone d’activités d’intérêt cantonal bénéficiant de procédures accélérées concernant 
                        l’obtention de permis de construire. Elle conservera son rôle de commune-centre, les autorités s’engageant à maintenir les 
                        relations qu’elle entretient avec les communes proches. La situation géographique de la ville et sa forte connexion aux 
                        réseaux de communication seront valorisées afin de faire de Moutier la « porte d’entrée » de la Suisse du nord-ouest et de 
                        la métropole bâloise, dont le canton du Jura fait partie. La cité prévôtoise aura un rôle moteur dans le développement 
                        territorial jurassien, ce qui favorisera sa propre croissance démographique.</p>
                        
                        <h3>Développement économique</h3>
                        <hr>
                        <p>L’Etat jurassien valorisera le tissu industriel de Moutier. L’économie prévôtoise étant très orientée sur l’industrie des microtechniques, elle profitera des mesures mises en oeuvre par le canton du Jura en faveur de la diversification du tissu économique, en particulier dans le secteur tertiaire et dans les technologies numériques et médicales. La ville de Moutier bénéficiera des effets des collaborations engagées sur le plan économique au sein de l’espace métropolitain bâlois. Les entreprises prévôtoises pourront nouer des relations privilégiées avec le Parc suisse d’innovation, dont un site se trouvera à la jonction autoroutière de Delémont-est, à sept minutes de Moutier. Le canton du Jura soutiendra la création à Moutier d’un incubateur d’entreprises semblable à ceux qui existent déjà sur le territoire jurassien. Les politiques publiques auront pour but d’améliorer l’offre touristique à Moutier et dans sa région. Les autorités renforceront le rôle de la commune dans l’accueil de salons et d’expositions, par exemple en encourageant le développement d’un centre de congrès associé au Forum de l’Arc.</p>
                    </div>
                    
                    <h3>Mot de la fin</h3>
                    <hr>
                    <p>Toute démarche administrative découlant du transfert de la commune de Moutier sera simplifiée et gratuite pour ses 
                    habitants. Il en va notamment de l’échange des plaques d’immatriculation pour les véhicules automobiles. Si la commune de 
                    Moutier décide de rejoindre le canton du Jura, fort de l’appui de la population jurassienne, le Parlement et le Gouvernement 
                    voueront la plus haute attention à son accueil dans une perspective participative conformément aux propositions 
                    institutionnelles mentionnées dans le présent message. Ils invitent le corps électoral de Moutier à répondre « oui » à 
                    la question posée et à accepter ainsi le transfert de la commune dans le canton du Jura.</p>                
                </li>

                <li>                  
                    <h3>Situation initiale</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <p>Le 18 juin 2017, la commune de Moutier a voté sur son appartenance cantonale. Le résultat du vote était de 
                        2067 « oui » (51.72%) contre 1930 « non » (48.28%).</p>

                        <p>La votation a fait l’objet de recours (Préfecture du Jura bernois puis Tribunal administratif du canton de Berne). 
                        Par jugement du 23 août 2019, le Tribunal administratif a partiellement admis les recours et annulé le vote. Le 
                        jugement n’a pas été contesté devant le Tribunal fédéral et est entré en force.</p>

                        <p>Etant donné l’annulation de la votation du 18 juin 2017, la votation sur l’appartenance cantonale de la commune 
                        de Moutier doit être répétée.</p>

                        <p>Le message accompagnant la votation du 18 juin 2017 comprenait une partie rédigée par la commune de Moutier et 
                        deux autres parties, l’une rédigée par le canton de Berne et l’autre par la République et Canton du Jura. Comme il 
                        s’agit de la répétition d’une votation, le message de la votation de 2017 n’a pas été réécrit, mais compte tenu du 
                        temps écoulé, il nécessite une mise à jour des informations aux ayants droit au vote. Les trois auteurs de ce message 
                        ont convenu que l’actualisation serait faite par le biais d’un avenant au message de 2017. Ils ont également décidé 
                        de faire valider l’avenant au niveau des exécutifs, sans passer par le législatif, contrairement à ce qui avait été 
                        fait à Moutier et dans la République et Canton du Jura en 2017 pour le message en lui-même.</p>

                        <p>Cet avenant (le présent document) est de la responsabilité conjointe de la commune de Moutier, du canton de Berne 
                        et de la République et Canton du Jura. Il se limite à présenter les principaux changements factuels intervenus depuis 
                        le vote en 2017.</p>

                        <h3>La question qui vous est posée :</h3>
                        <hr>
                        <b><p>Acceptez-vous le transfert de la Commune de Moutier au sein de la République et Canton du Jura ?</p></b>
                    </div>                    
                    
                    <h3>Evolution de la situation et principales modifications</h3>
                    <hr>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <b>Dernière votation sur l'appartenance cantonale</b>
                        <p>Les communes de Sorvilier et Belprahon ont voté le 17 septembre 2017 sur leur appartenance cantonale. 
                        Dans les deux communes, la majorité des électeurs et des électrices s’est prononcée en faveur du maintien 
                        dans le canton de Berne. Ces deux votations sont entrées en force. Seule la commune de Moutier doit encore 
                        se prononcer.</p>
                        
                        <p style="padding-bottom: 20%;">Dans l’hypothèse où elle rejoindrait le canton du Jura, le Parlement et le Gouvernement jurassiens 
                        s’engagent à ce que la ville de Moutier forme une circonscription électorale et ait sept représentants sur 60 au 
                        Parlement jurassien compte tenu des statistiques actuelles de la population. En revanche, citée dans le message, 
                        l’hypothèse d’une future circonscription jurassienne comprenant Moutier, Belprahon, Crémines, Grandval et Sorvilier 
                        n'est plus réalisable.
                        </p>

                        <b>Avenir de l’Hôpital de Moutier</b>
                        <p>La situation de l’Hôpital du Jura bernois SA (HJB SA) a évolué depuis la votation de 2017. La société Hôpital de 
                        Moutier SA (HDM SA) a été créée en juin 2018 ; elle est entièrement détenue par HJB SA. En janvier 2020, le groupe privé 
                        Swiss Medical Network (SMN) a fait l’acquisition de 34% du capital-actions de HJB SA, avec possibilité d’acquérir 17% 
                        supplémentaires dans les trois ans, ce qui ferait du groupe SMN l’actionnaire majoritaire.
                        </p>

                        <p style="padding-bottom: 0%;">Le conseil d’administration de HJB SA a fait le choix en février 2020 de maintenir des prestations somatiques aiguës 
                        (service de médecine interne), des urgences et un bloc opératoire sur le site de Moutier. Le groupe de travail a rendu 
                        un rapport en juin 2020. Il confirme la possibilité de créer un Réseau interjurassien de santé mentale, avec le transfert 
                        des lits de Bellelay à Moutier et le maintien de la décentralisation des prestations ambulatoires et semi-ambulatoires 
                        (hôpitaux de jour), en plus du maintien des prestations somatiques tel que décidé par HDM SA.</p>

                        <b>Emplois liés à l’appartenance cantonale de Moutier</b>
                        <p>Communiqués dans le message de la votation de 2017, les chiffres liés aux emplois à Moutier sont mis à jour comme suit. 
                        Les unités administratives bernoises situées à Moutier correspondent actuellement à 144 emplois à plein temps (EPT) 
                        (+ 3 dans les Eglises nationales). Dans l’enseignement, on compte 
                        117 EPT. L’Hôpital de Moutier SA compte 257 EPT. Le Département de santé mentale (anciennement services psychiatriques du 
                        Jura bernois Bienne Seeland et désormais rattachés à HJB SA) compte 10 EPT à l’Hôpital de Moutier.
                        </p>

                        <p>A la suite d’une expertise sur la justice jurassienne, il a été décidé pour des raisons d’efficacité que le Tribunal 
                        des mineurs du canton du Jura (4 EPT) serait localisé à Porrentruy, où siège le Tribunal de première instance. Le Service 
                        de l’informatique et le Service des contributions de l’administration jurassienne ont quant à eux vu leurs effectifs 
                        augmenter. Le Gouvernement jurassien confirme pour le surplus ses engagements ; les éléments figurant en page 15 du 
                        message restent inchangés. De ce fait, quelque 180 EPT seraient implantés à Moutier en cas de transfert.</p>
                    </div>                   
                </li>

                <li>
                    <div class="uk-child-width-1-2@m" uk-grid>
                        <div>
                            <h2>Autorités</h2>   
                            <hr>          
                            <iframe title="Recommandations de vote des autorités_Moutier_20210328 " aria-label="chart" id="datawrapper-chart-gKJR1" src="https://datawrapper.dwcdn.net/gKJR1/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>

                        <div>
                            <h2>Partis politiques de Moutier</h2>
                            <hr>
                            <iframe title="Recommandations de vote des partis de Moutier_20210328" aria-label="chart" id="datawrapper-chart-Mg8a7" src="https://datawrapper.dwcdn.net/Mg8a7/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>   
                    </div>                     
                </li>  
                <li>            
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>  
                    <h4>Les arguments seront bientôt disponibles !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Parti</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Texte</p>
                        </div>
                    </div>-->
                </li>
                <li>
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                    <h4>Les arguments seront bientôt disponibles !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Parti</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Texte</p>
                        </div>
                    </div>-->
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