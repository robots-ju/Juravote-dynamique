<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Loi fédérale sur les bases légales des ordonnances du Conseil fédéral visant à surmonter l’épidémie de COVID-19</title>
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
    <section style="padding: 2%;">
            <h1 class="uk-heading-large">Loi fédérale sur les bases légales des ordonnances du Conseil fédéral visant à surmonter l’épidémie de COVID-19</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <!--<button class="uk-button uk-button-default" type="button">Résultats</button>-->
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis et autorités</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <!--<li>
                    <h3 style="padding-bottom: 10%">Les résultats seront disponibles le 28 novembre dès 12:00 !</h3>
                </li>-->

                <li>                   
                    <h3>Contexte</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <p class="uk-text-justify">Au printemps 2020, le Conseil fédéral a pris des mesures
                        pour protéger la population du Coronavirus, sur la base de la Loi sur les épidémies. Il a aussi décidé de
                        soutiens financiers aux personnes et aux entreprises qui souffraient des conséquences de la Covid-19.
                        La Loi sur les épidémies ne prévoyant pas ce dernier point, le Conseil fédéral s'est appuyé directement sur
                        la Constitution, qui l'autorise à prendre des mesures de droit d'urgence en cas de danger imminent. Ce droit
                        d'urgence est toujours limité à 6 mois. Si les mesures doivent durer plus longtemps, le Conseil fédéral est tenu
                        de soumettre un projet de loi au Parlement, ce qui a été fait avec la Loi COVID-19 le 25 septembre 2020 (approbation
                        de la loi par le Parlement fédéral).
                        </p>

                        <p class="uk-text-justify" style="padding-bottom: 5%">La loi est ainsi entrée en vigueur le 25 septembre 2020, directement après
                            l'approbation des autorités fédérales. A la suite de cela, un référendum a été lancé contre cette loi.
                            <a href="../2021-06-13/D_Loi-COVID19.php" target="blank">Les opposants, qui refusaient d'accorder plus de pouvoirs au Conseil fédéral (vaccins, tests, aides aux
                            médias, mesures sanitaires)</a>, ont récolté plus de 50'000 signatures, ce qui a entraîné l'organisation 
                            d'une votation, qui s'est tenue le 13 juin 2021. <a href="../2021-06-13/R_COVID19.php" target="blank">La loi a été acceptée par 60% des votants.</a>
                        </p>
                    </div>

                    <h3>Loi COVID-19 (version de juillet 2021)</h3>
                    <hr>

                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h4>Objet et principes (article 1)</h4>
                        <p class="uk-text-justify">La Loi COVID-19 définit les compétences particulières
                            du Conseil fédéral pour lutter contre le coronavirus. Il n'utilise ces compétences particulières que si
                            l'objectif visé ne peut pas être atteint en temps utile avec la procédure légale ordinaire ou urgente.
                        </p>

                        <p class="uk-text-justify">Le Conseil fédéral prend en compte les principes de subsidiarité, d'efficacité et de
                            proportionnalité et veille à ce que la vie économique et sociale soit restreinte le moins possible et le
                            moins longtemps. Dans ce but, la Confédération et les Cantons utilisent les plans de protection, les moyens
                            de dépistage et de vaccination, ainsi que le traçage des contacts.
                        </p>

                        <h4>Critères (article 1a)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral définit les critères et les valeurs 
                        de référence relatifs aux restrictions et aux assouplisse­ments concernant la vie économique et sociale. Il 
                        tient compte non seulement de la situation épidémiolo­gique, mais aussi des conséquences économiques et sociales.
                        </p>

                        <p class="uk-text-justify">
                        Si la population adulte souhaitant être vaccinée a reçu une dose suffisante de vaccin, les restrictions 
                        de capacité applicables aux établissements et aux entreprises accessibles au public ainsi qu’aux 
                        manifestations et aux rassemblements privés doivent être levées. Des plans de protection appropriés 
                        sont possibles, pour autant qu’ils soient proportionnés.
                        </p>

                        <h4>Droits politiques (article 2)</h4>
                        <p class="uk-text-justify" style="padding-bottom: 20%">Dans le but de promouvoir l'exercice des droits politiques, le Conseil
                            fédéral peut prévoir que les référendums ou les initiatives populaires munies du nombre de signatures
                            requis peuvent être déposés avant l'expiration du délai légal.
                        </p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h4>Capacités sanitaires (article 3)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral peut obliger les commerçants et les établissements de santé
                            à communiquer leurs stocks de produits, d'équipements et d'autres biens médicaux importants, ceci dans
                            le but d'un maintien des capacités sanitaires.
                        </p>

                        <p class="uk-text-justify">Pour garantir le traitement des maladies COVID-19, d'autres traitements et examens
                            médicaux non-urgents peuvent être interdits ou restreints dans les Hôpitaux.
                        </p>

                        <p class="uk-text-justify" style="padding-bottom: 2%">La Confédération met en place un traçage électronique complet et efficace des contacts.
                            Elle organise un plan de vaccination pour permettre au plus grand nombre de volontaires possible d'être
                            vaccinés à la fin du mois de mai 2021. Elle peut permettre d'assouplir, raccourcir ou abolir l'obligation
                            de quarantaine si la vaccination ou les tests réguliers peuvent garantir une réduction comparable de la
                            propagation du virus.
                        </p>

                        <h4>Mesures dans le domaine de la protection des travailleurs (articles 4 + 4a)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral peut obliger les employeurs à protéger les travailleurs
                            vulnérables. Lorsque le travailleur doit interrompre son travail en raison d'une mesure ordonnée
                            par les autorités et que le salaire doit continuer à être versé par l'employeur, ce dernier a un
                            droit équivalent au remboursement.
                        </p>

                        <p class="uk-text-justify">Le Conseil fédéral garantit que les employés du secteur agricole et de la
                            construction otn la possiblité de se restaurer dans des établissements de restauration, malgré la
                            fermeture ordonnée par les autorités.
                        </p>

                        <p class="uk-text-justify">Il garantit suffisamment d'installations sanitaires à la disposition des conducteurs
                            de camion et que ceux-ci peuvent se restaurer dans des établissments de restauration.
                        </p>

                        <p class="uk-text-justify">Il peut soutenir des mesures prises par les Cantons afin de simplifier l'entrée
                            dans la vie professionnelle, rendue difficile par la crise du coronavirus, des jeunes qui terminent
                            leur formation scolaire.
                        </p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h4>Personnes vaccinées (article 3a)</h4>
                        <p class="uk-text-justify" style="padding-bottom: 2%">Les personnes vaccinées, par un vaccin autorisé dont il est prouvé qu'il prévient
                            la transmission du virus, ne sont soumises à aucune quarantaine (le Conseil fédéral peut prévoir des
                            exceptions).
                        </p>

                        <h4>Mesures dans le domaine des étrangers et de l'asile (article 5)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral peut restreindre l'entrée en Suisse des étrangers en vue
                            d'un séjour, à l'exception du regroupement familial, ainsi que de l'entrée en Suisse de concubins
                            et de leurs enfants.
                        </p>

                        <p class="uk-text-justify">Il peut prolonger les délais légaux pour le regroupement familial,
                            l'extinction des autorisations de séjour, la saisie des données pour les titres de séjour,
                            le départ, l'extinction et la fin de l'admission provisoire.
                        </p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h4>Mesures en cas de fermeture des frontières (article 6)</h4>
                        <p class="uk-text-justify">En cas de fermeture des fontières, le Conseil fédéral prend les mesures
                            nécessaires pour assurer au mieux le droit à la circulation des travailleurs frontaliers et des
                            habitants qui ont des liens particuliers dans la zone frontalière.
                        </p>                        
                        
                        <h4>Certificat sanitaire (article 6a)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral met en place un document prouvant que son titulaire a été
                            vacciné contre le COVID-19, qu'il en est guéri ou qu'il dispose d'un résultat de dépistage. Il doit
                            être personnnel et infalsifiable et vérifiable dans le respect de la protection des données. Son
                            détenteur doit pouvoir l'utiliser pour entrer dans d'autres pays et en sortir.
                        </p>
                    </div>

                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h4>Mesures dans le domaine de la justice (article 7)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral peut suspendre ou prolonger les délais et les échéances
                            fixés par la loi ou les autorités. Il peut recourir à la visio-conférence pour la participation de
                            témoins ou de tiers dans les audiences et les auditions, et à des communications écrites pour des
                            enchères ou en cas de procédure de poursuite et de faillite.
                        </p>

                        <h4>Mesures dans le domaine des assemblées de sociétés (article 8)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral peut prévoir que les décisions des participants aux
                            assemblées de sociétés peuvent être prises par écrit ou par l'intermédiaire d'un représentant
                            indépendant.
                        </p>

                        <h4>Allègements cantonaux (article 8a)</h4>
                        <p class="uk-text-justify">Le Conseil fédéral accorde des allègements aux cantons qui affichent une
                            situation stable ou en amélioration et qui appliquent une stratégie de dépistage pour gérer la
                            propagation du COVID-19.
                        </p>
                    </div>

                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h4>Soutiens au domaine de la culture (article 11)</h4>
                        <p class="uk-text-justify">La Confédération peut soutenir des entreprises culturelles, des acteurs culturels 
                            et des associations culturelles d’amateurs au moyen d’aides financières. Le Conseil fédéral décide des
                            secteurs qui ont droit à des aides financières et règle les conditions du droit aux aides. Il veille à 
                            ce que tous les acteurs culturels aient accès à une indemnisation pour perte financière.
                        </p>

                        <h4>Soutiens aux manifestations publiques (article 11a)</h4>
                        <p class="uk-text-justify" style="padding-bottom: 5%">La Confédération peut prendre en charge une partie des coûts des manifestations
                            publiques d'importance supracantonale se déroulant entre le 1er juin 2021 et le 30 avril 2022. Si
                            l'entrée est payante, il faudra prouver que les entrées payées ont été intégralement remboursées.
                        </p>

                        <h4>Soutiens aux entreprises (articles 12 + 12a)</h4>
                        <p class="uk-text-justify">La Confédération peut soutenir les Cantons dans les mesures de soutien aux
                            entreprises, aux sociétés de personnes ou aux personnes morales, qui existaient avant octobre 2020,
                            qui avaient leur siège dans le canton avant octobre 2020 et qui ont été particulièrement touchées
                            par les conséquences de la crise. Pour bénéficier d'une mesure de soutien, les entreprises ne doivent pas, 
                            pour l'exercice comptable actuel et les trois exercices qui suivent, distribuer des dividendes ou des 
                            tantièmes et rembourser des apports en capital.
                        </p>
                    </div>                       
                    

                    <h4>Mesures dans le domaine du sport (article 12b)</h4>
                    <p class="uk-text-justify">La Confédération peut soutenir les clubs de football ou de hockey, dont une équipe
                        évolue dans une ligue professionnelle et les clubs de basketball, d'unihockey, de volleyball, de football
                        féminin, de hockey sur glace féminin, dont une équipe évolue dans la plus haute ligue.
                    </p>

                    <p class="uk-text-justify">Les contributions sont octroyées pour compenser la perte de recettes liées aux matchs
                        du championnat national qui doivent se dérouler à huis clos ou en présence d'un nombre réduit de spectacteurs
                        dès le 29 octobre 2020.
                        Elles couvrent au maximum deux tiers des recettes de billeterie réalisées
                        lors de la saison 2018/2019. Les ventes de billets effectives dès le 29 otobre 2020 sont déduites du montant.
                        L'octroi des contributions est soumis aux conditions suivantes :
                                            
                        <ul>
                            <li><p class="uk-text-justify">Le club ne peut pas distribuer de dividendes ou de tantièmes,
                                ni rembourser d'apports en capital pendant cinq ans.
                            </p></li>

                            <li><p class="uk-text-justify">Le club doit ramener au montant maximal du gain assuré dans 
                                l’assurance-accidents obligatoire ou réduire de 20 % au moins le revenu moyen. Sinon, la 
                                contribution s'élève au plus à 50 % de la perte de recette de billetterie.
                            </p></li>

                            <li><p class="uk-text-justify">La masse salariale du club ne peut augmenter d’un montant supérieur 
                                à celui de la hausse de l’indice suisse des prix à la con­sommation pendant les cinq ans qui 
                                suivent l’octroi des contribu­tions. Le Conseil fédéral peut prévoir des exceptions
                                pour les clubs qui passent dans une ligue supérieure</p></li>

                            <li><p class="uk-text-justify">Le Club doit poursuivre le travail d'encouragement de la relève
                                et de la promotion des femmes pendant cinq ans au moins.
                            </p></li>
                        </ul>  
                    </p>

                    <p class="uk-text-justify">Les clubs qui feraient face à un manque de liquidités, malgré les contributions,
                        peuvent engager un prêt sans intérêt auprès de la Confédération, remboursable en dix ans. Dans ce cas,
                        le club doit fournir des garanties reconnues par la Confédération à hauteur de 25 % au moins.
                    </p>  

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h4>Mesures dans le domaine des médias (article 14)</h4>
                        <p class="uk-text-justify">La Confédération prend en charge les coûts de distribution des quotidiens
                            et hebdomadaires de la presse locale et régionale et elle participe aux coûts de distribution de la
                            presse suprarégionale et nationale.
                        </p>

                        <p class="uk-text-justify">Les mesures citées dans le paragraphe ci-dessus seront supprimées, si la
                            "Loi fédérale pour un train de mesures en faveur des médias" est adoptée, ce qui a été fait par le
                            Parlement fédéral dernièrement. <a href="https://medias-controles-non.ch/">Cette loi est déjà combattue 
                            par un référendum</a>, lancé par un comité référendaire et soutenu notamment par les Amis de la
                            Constitution et des parlementaires des partis de l'UDC, du PLR et du Centre, ainsi que par les
                            Jeunes libéraux-radicaux.
                        </p>

                        <h4>Mesures en cas de perte de gain (article 15)</h4>
                        <p class="uk-text-justify" style="padding-bottom: 10%">Le Conseil fédéral peut prévoir des versements d'allocations pour perte de
                            gain aux personnes qui doivent interrompre ou limiter leur activité lucrative à cause des mesures
                            prises par les autorités. Il faut avoir subi une diminution de 30 % de son chiffre d'affaire pour
                            recevoir une aide financière.
                        </p>
                    </div>                   

                    <h3>La question qui vous est posée : </h3>        
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 10%">Acceptez-vous la Loi fédérale sur les bases légales 
                    des ordonnances du Conseil fédéral visant à surmonter l'épidémie de COVID-19 ?</p></b>
                </li>        

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_LoiCOVID2021" aria-label="Anneau de choix" id="datawrapper-chart-H78Y4" src="https://datawrapper.dwcdn.net/H78Y4/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU-LoiCOVID2021" aria-label="Anneau de choix" id="datawrapper-chart-5Kq2B" src="https://datawrapper.dwcdn.net/5Kq2B/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_LoiCOVID2021" aria-label="chart" id="datawrapper-chart-hA7w7" src="https://datawrapper.dwcdn.net/hA7w7/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="200"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>
                </li>  

                <li>  
                    <h3 style="padding-bottom: 10%">Les arguments seront bientôt disponibles !</h3>     
                    <!--<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’initiative pour une eau potable propre exige qu’à l’avenir, nos milliards d’impôts
                                soient investis dans une production alimentaire sans pesticides, qui n’utilise pas d’antibiotiques
                                à titre préventif et qui élève le bétail qu’elle peut nourrir avec du fourrage local. En plus des
                                milliards de subventions, les agricultrices et agriculteurs devront être soutenus par la recherche,
                                la formation et les aides à l’investissement. Pour protéger notre santé, la biodiversité, les sols,
                                l’eau et le climat – car ce sont les bases de notre production alimentaire.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les pesticides utilisés dans l’agriculture se retrouvent dans notre eau potable. Un million
                                 de Suisses consomment de l’eau potable contaminée par des résidus de pesticides au-delà de la
                                  limite légale. Cela met notre santé en danger. Dans de nombreux endroits, cela signifie que
                                   l’approvisionnement en eau potable pure n’est plus possible.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’utilisation excessive d’antibiotiques dans les élevages conduit au développement
                                 de bactéries résistantes aux antibiotiques. Ces bactéries potentiellement mortelles 
                                 parviennent dans les champs par le biais du fumier et du lisier et, de là, dans nos aliments
                                 et notre eau potable.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le nombre d’animaux élevés pour la production de viande et d’œufs en Suisse est aujourd’hui 
                                artificiellement augmenté par l’importation massive de 1,2 million de tonnes de fourrage par an.
                                Il en résulte un excédent de lisier, qui entraîne la présence de nitrates cancérigènes dans
                                l’eau potable.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Pour la protection de l’environnement et de la santé : chaque année, 2000 tonnes de 
                                pesticides empoisonnent nos eaux souterraines et notre eau potable. Les pesticides nuisent 
                                à notre santé, aux insectes et détruisent à long terme la fertilité des sols.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’économie agro-alimentaire suisse doit changer de cap : les VERT-E-S s’engagent 
                                en faveur d’une agriculture paysanne et d’un système alimentaire équitable et 
                                respectueux du climat, garantissant à toutes et tous une alimentation saine et sans 
                                pesticides. Cette initiative, ainsi que celle contre les pesticides de synthèse, 
                                sont nécessaires afin de surmonter les blocages bourgeois sur la politique agricole.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le contre-projet du Parlement est insuffisant, car il ne vise qu’à réduire 
                                les risques. Ce qu’il faut, en revanche, c’est réduire l’utilisation des pesticides. 
                                De plus, le contre-projet ne fixe aucun objectif concret pour réduire les engrais.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’agriculture intensive nécessite aujourd’hui d’énormes quantités de pesticides et 
                                d’antibiotiques, qui menacent la qualité de notre eau potable, nos aliments ainsi que 
                                la biodiversité, et mettent ainsi notre santé en danger. Pis encore, cette pollution 
                                de l’eau est subventionnée par des milliards de francs d’argent public. 82 % des 
                                subventions agricoles financées par nos impôts vont à la production animale, qui est 
                                particulièrement nuisible à l’environnement. C’est quatre fois plus que pour la 
                                production végétale, qui ne représente que 18 %.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’« initiative sur l’eau potable » demande que les paiements directs ne soient 
                                versés qu’aux exploitations agricoles qui n’utilisent ni pesticides ni antibiotiques 
                                prophylactiques et qui nourrissent leur bétail avec du fourrage produit sur place 
                                (cela réduit le cheptel, donc le fumier, donc les nitrates polluant les eaux souterraines).
                                Dans ce changement de système, les agricultrices et agriculteurs sont également soutenus 
                                par des aides à la formation, à la recherche et à l’investissement, afin de garantir 
                                durablement la qualité et les rendements ainsi que leurs revenus.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Plus d’un million de Suisses boivent une eau contaminée par des pesticides. 
                                85 à 90 % de ces pesticides sont utilisés dans l’agriculture. Ils sont rejetés 
                                par les exploitations agricoles dans l’atmosphère, ainsi que les eaux, et contaminent 
                                les aliments et l’eau potable. De nombreux captages d’eau potable doivent être fermés 
                                en raison de résidus de pesticides supérieurs à la valeur limite. Dans de nombreux 
                                endroits, cela signifie que l’approvisionnement en eau potable n’est plus possible.
                                De plus, ces toxines tuent non seulement les parasites, mais aussi des micro-organismes 
                                nécessaires, les abeilles ainsi que d’autres insectes et les plantes – qui sont d’une 
                                grande importance pour la qualité des sols.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La production excessive de viande, de lait et d’œufs à partir d’aliments importés 
                                signifie que beaucoup trop de lisier et d’ammoniac se retrouvent dans le sol, l’air 
                                et les eaux. Selon la loi sur la protection de l’environnement, un maximum de 25 000 t 
                                d’ammoniac peut être émis par an. Au lieu de cela, ce chiffre est aujourd’hui de 48 000 t. 
                                La Suisse est ainsi le deuxième plus grand émetteur d’ammoniac par surface en Europe.
                                Environ 50 % de la viande suisse et environ 70 % des œufs suisses et des poulets sont 
                                produits avec du fourrage importé. À cette fin, la Suisse importe chaque année 1,2 
                                million de tonnes de fourrage, notamment d’Amérique du Sud. La production de ces 
                                aliments, destinés aux animaux, pousse l’agriculture suisse à utiliser à l’étranger 
                                des terres de superficie supérieure à l’ensemble des terres arables de Suisse réunies. 
                                Cela nécessite même le défrichement de forêts vierges ! </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Selon la Commission fédérale d’experts pour la sécurité biologique, les bactéries 
                                résistantes aux antibiotiques représentent « une des plus grandes menaces pour la 
                                santé publique en Suisse ». Le prix pour une production de viande et de lait de plus 
                                en plus performante est élevé : aujourd’hui, près de 30 000 kilogrammes d’antibiotiques 
                                sont utilisés chaque année dans les élevages en Suisse, et souvent de manière 
                                prophylactique. Cette utilisation massive d’antibiotiques favorise le développement de 
                                bactéries qui y sont résistantes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>En sup­pri­mant les sub­ven­tions néfastes pour l'environnement et pour la santé de 
                                la popu­la­tion, l'initiative pour l'eau potable pri­vi­lé­gie les inci­ta­tions à la 
                                pro­duc­tion éco­lo­gique plu­tôt que les inter­dic­tions, afin de pré­ser­ver la qua­lité de 
                                l'eau potable et d’enrayer l'extinction mas­sive des espèces ani­males. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Malgré les grands efforts des vert’libéraux dans ce sens, le Parlement n'a 
                                pas réussi, depuis de nombreuses années, à prendre les mesures nécessaires pour 
                                une meilleure protection de l'environnement dans l'agriculture. Pas un seul des 
                                13 objectifs environnementaux pour l'agriculture n'a été atteint. Il est pourtant 
                                clairement démontré qu’il devient nécessaire d’agir : trop de pollution par les 
                                pesticides, surplus d'azote, lacs surfertilisés, dommages à la biodiversité. Nous 
                                sommes convaincus que nous devrions voter en faveur de l'initiative sur l'eau potable. 
                                Elle s'appuie sur des incitations plutôt que sur des interdictions. À l'avenir, la 
                                surfertilisation, l'utilisation de pesticides et d'antibiotiques ne seront plus 
                                subventionnées par le contribuable. C'est libéral et juste"</p>
                            </div>
                        </div>
                    </div>-->
                </li>

                <li>
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La Loi discrimine les personnes non-vaccinées. Elle prévoit de retirer des droits
                                    fondamentaux aux personnes non-vaccinées et d'accorder des privilèges aux personnes
                                    vaccinées. Quelles seront les suivants sur la liste ? Les fumeurs, les personnes
                                    présentant un surpoids ou les gens allergiques à la pratique du sport ?
                                    <b>Mettons fin à l'arbitraire étatique avant qu'il ne soit trop tard !</b></p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Tout avait commencé de manière anodine : il était prévu que le traçage électronique des
                                    contacts resterait volontaire. Or, la loi Covid-19 crée de fait les bases d’un traçage
                                    électronique complet, <b>synonyme de surveillance généralisée et permanente.</b></p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’art. 1a de la loi COVID-19 ne contient ni moyen de contrôle ni responsabilité des dirigeants
                                    politiques : «Le Conseil fédéral définit les critères et les valeurs de référence relatifs
                                    aux restrictions et aux assouplissements concernant la vie économique et sociale. » 
                                    Le Conseil fédéral s’inspire depuis plus d’une année des mauvaises décisions émanant de 
                                    l’étranger. <b>Il ne mérite donc pas de se voir attribuer de nouveaux pleins pouvoirs, dont 
                                        il n’a de toute manière pas besoin pour agir.</b></p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Nous ne croyons pas que seules les aides financières resteront en vigueur après 2021, 
                                    comme certains politiques l’ont promis. Pourquoi ? Parce que la loi COVID-19 restera 
                                    en vigueur jusqu’à la fin 2031.</p>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>