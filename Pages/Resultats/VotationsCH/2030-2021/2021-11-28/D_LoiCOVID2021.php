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
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les opposant-es à la loi COVID-19 sont bruyant-es. Depuis des semaines, elles et ils secouent leurs
                                    cloches lors de manifestations contre les mesures sanitaires. Depuis peu, leur message est relayé
                                    par une campagne d’affichage réalisée par une agence publicitaire proche de l’UDC. Ainsi, beaucoup
                                    d’argent est dépensé pour déstabiliser et diviser la population. Nous, la majorité de la population
                                    qui compte sur son bon sens, sommes noyé-es dans ce vacarme et risquons de perdre cette votation
                                    importante.</p>

                                <p>La situation est périlleuse. Toutes celles et ceux parmi nous qui ne sont pas entendu-es parc
                                qu’elles et ils manifestent leur solidarité sans grand éclat ni tapages sonores doivent maintenant
                                le dire haut et fort : nous nous en tenons aux faits et à la science et nous voulons enfin sortir de
                                cette pandémie. C’est pourquoi nous soutenons la loi COVID-19.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les délé­gués ont enfin décidé de voter EN FAVEUR de la légis­la­tion sur le Covid-19. La législation
                                ne porte que sur les bases juri­diques des mesures prises contre la pandémie. Leur mise en pra­tique
                                concrète ne fait pas par­tie du sujet sou­mis à vota­tion. La révi­sion de la loi pré­voit des mesures
                                essen­tielles, fai­sant l’objet d’un bud­get com­plé­men­taire, pour appor­ter un sou­tien finan­cier aux
                                entre­prises, aux indé­pen­dants et aux sala­riés en cette période de crise per­sis­tante. Compte tenu
                                des avan­cées actuelles de la vac­ci­na­tion, une sur­charge du sys­tème de santé ne peut être évi­tée
                                qu'avec la stra­té­gie du cer­ti­fi­cat Covid (pour ceux qui sont vac­ci­nés, tes­tés ou gué­ris).
                                Une obli­ga­tion de cer­ti­fi­ca­tion appliquée rapi­de­ment et avec le sens de la mesure est un moindre
                                mal par rap­port à de nou­velles res­tric­tions de grande enver­gure pour tous.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Il est nécessaire de prendre des mesures pour lutter contre la pandémie et en atténuer les effets ;
                                le rejet de la loi Covid-19 remettrait en cause une aide plus importante qui pourrait être fournie
                                dans différents domaines et priverait le certificat Covid de sa base juridique. Ceci créerait une
                                insécurité juridique, nuirait à notre économie et retarderait l’efficience des mesures de lutte
                                contre la pandémie.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">Le Centre</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les délégués du Centre suisse soutiennent à une large majorité la révision de la loi Covid-19.
                                Avec la révision de mars 2021, le Parlement a créé les bases du certificat Covid. Aujourd’hui, le
                                certificat constitue la base des mesures de lutte contre la pandémie et permet à nouveau d’organiser
                                des réunions et des événements sans restriction. Les voyages internationaux seraient également plus
                                compliqués sans certificat. Le certificat Covid nous rend donc de nombreuses libertés.</p>

                                <p>En cas de rejet de la loi, le Conseil fédéral serait à nouveau contraint d’appliquer toutes les
                                mesures à tout le monde. Il ne serait plus en mesure de faire la différence entre les personnes
                                vaccinées, testées et guéries, car c’est précisément pour cela que le certificat a été conçu.
                                Les mesures futures devraient s’appliquer à toutes et tous, comme au début de la pandémie.
                                La liberté est plus grande avec un certificat que sans.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Se rencontrer à nouveau à des grandes occasions culturelles et à des concerts ? Se détendre au club
                                de sport ou au centre de loisirs ? Le soir gouter un dîner en compagnie au restaurant, sans aucune
                                restriction ? Voyager sans obstacles à l’étranger et participer facilement à la vie sociale locale ?
                                C’est surtout le certificat Covid qui nous permet ces libertés malgré une pandémie généralisée.
                                Bref, le certificat de liberté permet un retour plus rapide à la normalité. Inversement, sans
                                certificat Covid, des mesures sanitaires et des confinements sont à nouveau possibles à partir
                                de l’automne. Cela doit être évité : liberté c’est aussi prendre ses propres responsabilités.</p>

                                <p>En Suisse, le recours au certificat permet de réduire les risques épidémiologiques liés à la
                                tenue de certaines manifestations, de sorte qu’il n’est plus nécessaire de les interdire. Si la
                                situation devait à nouveau fortement se détériorer, le recours au certificat pourrait permettre
                                d’éviter de nouvelles fermetures telles que celles que nous avons connues au printemps 2020 ou
                                au premier semestre 2021.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Indépendamment de la loi Covid 19, le Conseil fédéral a les compétences de limiter la vie économique
                                et sociale dans une épidémie. Cela grâce à la loi sur les épidémies, qui a été adoptée lors d’un
                                référendum. Alors, qu’est-ce qui change avec l’art. 1a ? Le Conseil fédéral ne pourra pas agir
                                uniquement selon des critères épidémiologiques, mais doit également tenir compte des conséquences
                                économiques et sociales. La révision ne donne certainement pas de chèque en blanc, comme le
                                suggèrent les leaders référendaires. Au contraire, l’article définit à juste titre plus étroitement
                                la marge de manœuvre du Conseil fédéral et l’oblige à prendre en compte le contexte économique et
                                social dans les décisions.</p>

                                <p>La modification du 19 mars 2021 contient de nouvelles injonctions au Conseil fédéral. Celui-ci
                                doit associer encore davantage les gouvernements cantonaux à sa gestion de la crise. La Confédération
                                et les cantons doivent exploiter toutes les possibilités offertes par le dépistage, la vaccination et
                                le traçage des contacts.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>En plus de la menace de confinements pour notre économie et notre société, sans certificat,
                                des problèmes de grande envergure se poseraient pour les voyages d’affaires internationaux et le
                                tourisme : d’une part, les voyages à l’étranger et la participation à la vie sociale locale sans
                                certificat deviendront plus difficiles. En outre, il est à craindre qu’avec le rejet de la révision
                                de la loi, par exemple, le certificat covid de l’UE ne sera plus accepté par la Suisse. Cela pourrait
                                compliquer considérablement l’entrée en Suisse. Cela nuirait au pays au niveau touristique. En outre,
                                l’exemption de quarantaine pour les personnes vaccinées tomberait après un refus de la révision,
                                ce qui, d’une part compliquerait encore les voyages d’entrée et de retour en Suisse.</p>

                                <p>Si ladite modification est rejetée, elle cessera de produire effet un an après son adoption par
                                le Parlement, soit le 19 mars 2022. Parmi les mesures concernées figurent l’augmentation du
                                nombre d’indemnités journalières allouées aux chômeurs, l’extension des indemnités en cas de
                                RHT et l’indemnisation des organisateurs de manifestations. Il ne sera en outre plus possible
                                d’établir des certificats COVID – pas même pour les voyages et les séjours à l’étranger –, ni
                                de mettre en place des programmes d’encouragement concernant des biens médicaux importants.</p>
                            </div>
                        </div>
                    </div>
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

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les personnes qui ne veulent ou ne peuvent pas se faire vacciner devront se soumettre à des
                                    règles de quarantaines strictes. D’autres réglementations, comme l’obligation de se faire
                                    dépister à ses frais pour les vols de retour de l’étranger, ne s’appliqueront qu’aux personnes
                                    non vaccinées. Toutefois, étant donné que les personnes vaccinées peuvent également être infectées
                                    et être contagieuses, cette inégalité de traitement n’est pas justifiée. C’est une discrimination
                                    à l’encontre des personnes non-vaccinées, qui est appelée à s’aggraver à l’avenir. Enfin, le
                                    certificat Covid induit implicitement une vaccination forcée pour toutes et tous. Des gens
                                    perdront leur emploi parce qu’elles ne veulent pas se faire vacciner, des amitiés se briseront,
                                    des familles seront divisées. Cette loi conduit à une fracture sans précédent de la société,
                                    indigne de notre démocratie et du mode de vie suisse.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>La Confédération mettra en place « un traçage électronique des contacts qui soit complet et
                                    efficace », un système dit « TTIQ » (Test, Tracing, Isolation, Quarantaine). Cela ne signifie
                                    rien d’autre qu’une surveillance électronique massive des citoyens, de leur vie et de leurs
                                    contacts sociaux, de leurs déplacements et de leurs voyages. Les données seront stockées dans
                                    des bases de données centrales. La situation vécue en Chine avec une surveillance totale des
                                    gens et un système de points sociaux n’a jamais semblé si proche !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le Conseil fédéral sera habilité à fixer les critères et les repères pour les restrictions de la
                                    vie économique et sociale. Cela lui permettra de contrôler l’ensemble de la vie des gens. Cette
                                    extension du pouvoir du Conseil fédéral équivaut à autant de perte de pouvoir du Parlement et
                                    des citoyennes et citoyens. C’est antidémocratique et dangereux. Au contraire, il faudrait
                                    limiter les pouvoirs du Conseil fédéral et rendre le contrôle au Parlement.</p>

                                <p>Tous ces changements indiquent que nous vivons un véritable autoritarisme sanitaire conçu pour
                                    durer, alors que les lois existantes sont suffisantes pour nous protéger adéquatement des maladies
                                    infectieuses. Les voyages à l’étranger demeurent possibles même sans le durcissement inutile et
                                    extrême de la loi Covid. Ne vous laissez donc pas tromper ! Veillez à ce que la Suisse reste un
                                    pays où tout le monde a les mêmes droits, où personne n’est soumis à une surveillance
                                    discriminatoire. Enfin et comme cela aurait toujours dû rester, chacun doit pouvoir décider
                                    librement de ses propres traitements médicaux.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Notre société libre et ouverte sur les autres est menacée par le certificat Covid. La vie et
                                la liberté de mouvement de tous les citoyens seront contrôlées et limitées. Le certificat
                                obligatoire impose de se faire vacciner et de se faire vacciner ensuite en permanence. Les
                                personnes non vaccinées ne pourront plus participer à la vie sociale sans être discriminées.
                                Le certificat est utilisé pour contrôler l’accès dans de nombreux domaines de la vie en société :
                                lors d’événements sociaux, sportifs et culturels tels que des concerts et des représentations
                                théâtrales, des visites de proches à l’hôpital, des événements politiques et même au travail.
                                Le certificat Covid constitue une véritable chicane, comme l’a prouvé l’interdiction
                                discriminatoire à la fin août 2021 d’un festival de musique albanaise à Zurich, malgré le
                                concept de protection mis en place. Dans le secteur de la restauration, le certificat Covid
                                entraînera une nouvelle baisse massive du chiffre d’affaires et aura pour conséquence la
                                perte de milliers d’emplois. Plus de 50’000 emplois ont déjà été perdus dans ce secteur
                                depuis 2020 ! De nombreux pubs ont déjà été sacrifiés et ceux qui restent ne s’en remettront
                                pas. Les patrons devront jouer aux policiers en harcelant leurs clients de contrôles et de
                                discriminations légalement ordonnés.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>OUI à un certificat Covid volontaire pour les voyages à l’étranger</p>

                                <p>Nous sommes favorables à un certificat Covid volontaire pour faciliter les voyages à l’étranger et,
                                    même en cas de vote négatif le 28 novembre, nous considérons que la Confédération et les cantons
                                    devraient pouvoir proposer un tel certificat. Rappelons que les voyages restent possibles sans
                                    certificat. Plusieurs États américains, par exemple, ont même interdit le certificat Covid.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Depuis le début de la pandémie, la politique sanitaire de la majorité de centre-gauche du Conseil
                                fédéral ne repose ni sur des évidences scientifiques ni sur des données fiables. Les mesures se
                                traduisent par des contradictions et un arbitraire disproportionné et insensé, s’étalant de la
                                question de l’utilité des masques au début de la pandémie à l’affligeante dernière mesure mise
                                en place, à savoir l’extension du certificat Covid obligatoire par l’Etat au début du mois de
                                septembre. Tout cela alors que l’actuelle loi Covid ne permet pas de tels excès puisque la
                                population adulte volontaire à être vaccinée l’a été.</p>

                                
                                <p>Le résultat de cette politique est dévastateur :</p>
                                <ul>
                                    <li>elle induit de facto une vaccination forcée</li>
                                    <li>elle crée un schisme au sein de notre société</li>
                                    <li>elle engendre une discrimination par l’Etat d’une minorité de personnes non-vaccinées</li>
                                    <li>les personnes non-vaccinées sont arbitrairement privés de leurs droits constitutionnels
                                        fondamentaux.</li>
                                    <li>des milliards de francs de dette sont accumulés sur le dos des contribuables, de la classe
                                        moyenne et des générations futures</li>
                                    <li>les libertés individuelles sont torpillées</li>
                                    <li>Le Conseil fédéral règne de fait avec les pleins pouvoirs sur la Suisse</li>
                                </ul>

                                <p>Le 28 novembre, nous, électrices et électeurs, pouvons mettre un terme à ces sombres agissements
                                une fois pour toutes : avec un NON clair à la loi Covid-19, une loi que même le Conseil fédéral ne
                                respecte pas et qui doit être abolie !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le 28 novembre, nous voterons sur une modification de la loi Covid, comprenant entre autres la base légale sur laquelle
                                    repose l’obligation étendue du certificat Covid et qui restera en vigueur jusqu’à la fin du mois de mars 2022. En revanche,
                                    si la loi est rejetée, cette base légale disparaîtra.</p>

                                <p>L’UDC n’est pas opposée au certificat Covid, pour autant qu’il ne serve que de document de voyage ou comme document
                                    optionnel utilisable par des organisateurs privés de grands évènements, etc. Pourtant, début septembre, le Conseil fédéral
                                    a décidé d’introduire l’extension de l’obligation du certificat Covid à l’échelle nationale, sans aucune nécessité
                                    épidémiologique et non sans un certain tour de force, induisant de fait la vaccination forcée de la population tout en
                                    divisant la société.</p>

                                <p>La votation populaire du 13 juin sur la première mouture de la loi Covid-19 était déjà démocratiquement discutable,
                                    puisqu’elle liait deux objets sous un seul et même vote, à savoir 1) la base légale permettant l’octroi d’aides financières 2)
                                    la base légale permettant l’instauration du régime de mesures du Conseil fédéral.</p>

                                <p>Le schéma se répète le 28 novembre prochain : comment se positionner si l’on est favorable au certificat Covid en
                                    tant que document de voyage seulement alors qu’on rejette l’obligation du certificat Covid à l’intérieur de nos frontières ?</p>

                                <p>La réponse est simple : un certificat permettant de voyager est possible, même sans la loi Covid-19. En cas de non
                                    le 28 novembre, le Conseil fédéral sera tenu d’élaborer la base légale en vue d’un passeport Covid et le temps nécessaire
                                    à la réalisation de cette base est suffisant puisqu’il y aura 2 sessions ordinaires d’ici la fin mars 2022, durant lesquelles
                                    le Parlement fédéral pourra amplement prendre les décisions idoines.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’UDC a été le seul parti qui, dès le début de la pandémie, a présenté une stratégie claire pour contenir la propagation du
                                    Coronavirus. Dès la fin du mois de mars 202 déjà, l’UDC appelait à protéger en priorité les groupes à risque, tout en imposant
                                    le moins de restrictions possible à l’économie et à la société. Le Conseil fédéral n’en a pas tenu compte et n’a pas protégé
                                    plus activement les personnes vulnérables, notamment dans les EMS et les établissements de soins. Même de simples moyens comme
                                    des tests rapides pour tous n’ont pas été proposés, ce qui est purement scandaleux quand on sait que près de la moitié des décès
                                    liés au Covid-19 ont eu lieu dans les EMS et établissements de soins.</p>

                                <p>Par la suite, la gestion de la crise par le Conseil fédéral a été ponctuée par de nombreuses contradictions et par des décisions
                                    purement arbitraires et des mesures disproportionnées. Le « lockdown » n’a eu aucun impact significatif d’un point de vue
                                    épidémiologique mais a, en revanche, détruit nombre de ressources et mis en danger des industries et des secteurs professionnels
                                    tout entiers. Parlant d’arbitraire insensé, citons en exemple la fermeture forcée des librairies, alors que les maisons closes,
                                    elles, pouvaient rester ouvertes…</p>

                                <p>La fermeture des terrasses dans les stations de ski était tout aussi absurde. L’on a imposé des règles disproportionnées
                                    absolument partout mais nous n’avons appliqué aucun contrôle strict des frontières, y compris d’ailleurs sur les personnes
                                    revenant de vacances. Résultat : la majorité des personnes infectées par le virus en soins intensifs étaient et sont encore
                                    issues de l’immigration. Cette situation avait déjà cours lors de la première vague au printemps 2020 et s’est répétée
                                    cette année, faute de contrôles systématiques aux frontières en raison de la trop grande complaisance du Conseil fédéral à
                                    l’égard de l’Union européenne, qu’elle ne saurait froisser. Le Conseiller fédéral Alain Berset préfère museler sa propre
                                    population plutôt que d’assurer une protection efficace des frontières, évitant soigneusement d’aborder la question de
                                    l’immigration par pur idéologisme.</p>

                                <p>La position de l’UDC au sujet de la vaccination est tout aussi claire que sa stratégie globale. Dès le départ, elle a exigé
                                    l’acquisition rapide d’une quantité suffisante de vaccins pour protéger les personnes à risque. Mais là encore, le Conseil
                                    fédéral a échoué, la campagne de vaccination n’ayant progressé qu’avec trop de lenteur. La vaccination joue un rôle important
                                    dans la lutte contre la pandémie, mais la liberté de choix des individus doit être préservée. Celles et ceux qui veulent se
                                    faire vacciner doivent le faire. Celles et ceux qui ne veulent pas ne devraient pas être forcés à le faire. Ces deux
                                    considérations doivent être acceptées au sein de notre Etat de droit libéral, ce d’autant plus qu’il n’est pas cohérent
                                    d’obliger les jeunes enfants, les personnes en bonne santé ou les femmes enceintes à se faire vacciner. Nous devons
                                    protéger les groupes à risque au lieu de s’immiscer dans la vie de tous.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Depuis le début de la pandémie, deux choses sont claires : le Conseil fédéral travaille avec des chiffres peu fiables et que le
                                    Coronavirus et ses variants connus sont un danger pour la vie, notamment des personnes âgées et celles souffrant de pathologies
                                    préexistantes plus graves. De fait, ce sont surtout des personnes de plus de 80 ans qui sont décédées. La proportion de décès
                                    chez les moins de 80 ans s’élève à environ 30% ; en ne tenant compte que des moins de 60 ans, on ramène cette proportion à
                                    seulement 3%. Cela prouve que ce sont surtout les groupes à risque et les personnes âgées de notre pays qui doivent être
                                    protégés et que des restrictions globales infligées à l’ensemble de la population sont difficilement justifiables.</p>

                                <p>Si l’on se réfère à la campagne de communication du Conseil fédéral, qui ne repose que sur la peur, ainsi que sur les
                                    « compteurs de morts » que les médias mettent à jour quotidiennement, l’on pourrait avoir le sentiment qu’en Suisse, les
                                    gens meurent en masse du Coronavirus et que la mortalité est supérieure au niveau habituel.</p>

                                <p>Ce n’est toutefois pas le cas : au début de la pandémie et durant l’hiver 2020-2021,
                                    il y avait en effet une surmortalité élevée ; le nombre de décès est nettement supérieur à celui des autres années à la même
                                    période.</p>

                                <p>Cette surmortalité n’a presque exclusivement touché que les plus de 65 ans ; les moins de 65 ans n’ont subi qu’une légère
                                    surmortalité au cours de l’hiver 2020 – 2021 (avec 51 décès supplémentaires par rapport à ce qui était attendu).</p>

                                <p>La surmortalité n’est pas un fait exceptionnel lorsqu’on se penche sur les statistiques de la mortalité de ces dernières
                                    années. Presque chaque année, une surmortalité a pu être observée au sein de différents groupes d’âge, pour diverses raisons
                                    (épidémies de grippe, vagues de chaleur, etc.). C’est particulièrement marqué en 2015, avec une surmortalité importante en
                                    début d’année des plus de 65 ans.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le responsable de la santé Alain Berset a justifié les plus absurdes et arbitraires mesures par un supposé manque de lits dans
                                    les unités de soins intensifs. Mais intéressons-nous ici aux statistiques d’occupation et au développement des capacités
                                    hospitalières. Le taux d’occupation maximum des lits en soins intensifs est à hauteur de 80%. En 2020, ce taux n’était qu’à
                                    60% tout au plus dans la plupart des cas. A l’exception du début de la pandémie et de l’hiver 2020-2021, les cas Covid ne
                                    représentaient que la moitié, voire moins, des patients en unités de soins intensifs.</p>

                                <p>En regardant de plus près l’utilisation croissante des lits en soins intensifs à partir d’octobre 2020, nous constatons que
                                    c’est avant tout une réduction du nombre de lits qui a engendré un taux d’occupation au pourcentage plus élevé. Si au cours
                                    de l’hiver 2020-2021, l’ont peut encore constater une forte augmentation du nombre de cas Covid dans les unités de soins
                                    intensifs, cet argument perd progressivement de sa pertinence au cours de l’année 2021, puisque les cas Covid dans les unités
                                    de soins intensifs ont diminué mais le taux d’occupation des lits reste lui pratiquement inchangé, justement en raison de la
                                    réduction constante du nombre de lits dans ces unités.</p>

                                <p>Selon l’Office fédéral de la santé publique (OFSP), la réduction du nombre de lits dans les soins intensifs serait due à un
                                    manque de personnel spécialisé. Cela soulève plusieurs questions :
                                    <ul>
                                        <li>Pourquoi la Confédération n’augmente-t-elle pas ses capacités par le biais d’une assistance de l’armée sur le terrain,
                                        comme elle l’a fait au début de la pandémie ?</li>

                                        <li>Pourquoi n’a-t-on absolument rien entrepris, à la suite de l’arrivée de la pandémie, pour former du personnel supplémentaire
                                        via des cursus accélérés au cours des 18 derniers mois ?</li>

                                        <li>Pourquoi les exigences en termes de certification pour les unités de soins intensifs et les lits de soins intensifs ne
                                        sont-elles pas temporairement revues à la baisse afin de pouvoir déployer davantage de personnel à durée déterminée ?</li>
                                        
                                        <li>Pourquoi la Confédération stock-t-elle ou donne-t-elle ailleurs des équipements médicaux et des respirateurs artificiels
                                        au lieu de les utiliser sur le terrain pour augmenter les capacités hospitalières de notre pays ?</li>
                                    </ul>
                                </p>

                                <p>Il est clair que les responsables repoussent autant que faire se peut le problème. En réponse à une question du conseiller
                                    national Albert Rösti (UDC), demandant s’il ne serait pas pertinent d’abaisser temporairement les exigences en matière
                                    d’équipement et de personnel dans les soins intensifs afin d’augmenter la capacité d’accueil disponible au sein de ces
                                    unités, le Conseil fédéral s’est tout simplement contenté de renvoyer la balle dans le camp des cantons. Au lieu d’investir
                                    spécifiquement dans des systèmes d’incitation pour le personnel médical et sur l’extension des capacités hospitalières, la
                                    majorité de centre-gauche du Conseil fédéral préfère imposer un train de mesures bien plus couteux à l’ensemble de la
                                    population.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’extension de l’obligation du certificat Covid à divers secteurs et activités est une nouvelle mesure coercitive
                                    injustifiée à l’encontre de la population et des entreprises. Pire, des personnes en viennent à perdre leur emploi,
                                    tout cela parce qu’elle refuse de se soumettre à une vaccination forcée de fait.</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON à la discrimination et à la division</p>

                                <p>Toutes les restrictions liées au Coronavirus devraient déjà être abolies ; en effet, selon le droit actuel, les mesures
                                    auraient dû être levées dès que la part de la population adulte volontaire à la vaccination a pu l’être. C’est également ce
                                    qu’avait promis le chef du Département de la santé publique Alain Berset : « Si toutes les personnes qui souhaitent se faire
                                    vacciner le sont d’ici juillet 2021, il ne sera plus nécessaire de prendre d’autres mesures. » Si même le Conseil fédéral ne
                                    respecte pas la loi, alors ladite loi peut sans autre être abolies dans les urnes.</p>

                                <p>Le gouvernement fédéral a également martelé de nombreuses fois que la vaccination n’est pas et ne serait pas obligatoire
                                    en Suisse. Mais la réalité est tout autre : alors que toutes les personnes qui souhaitaient se faire vacciner ont pu le
                                    faire après les vacances d’été (période après laquelle les dates de vaccinations disponibles ont dépassé la demande), la
                                    majorité de centre-gauche du Conseil fédéral a maintenu des mesures arbitraires sans tenir compte de cet état de fait et
                                    a même étendu massivement l’obligation du certificat Covid. Avec ce certificat, le Conseil fédéral divise la population et
                                    discrimine de nombreuses personnes. Ceux qui ne veulent (ou ne peuvent) se faire vacciner se retrouvent de fait exclus de la
                                    vie sociale, d’autant plus depuis que la gratuité des tests Covid a été abolie. De nombreuses familles, des travailleurs, des
                                    jeunes et des parents de proches hospitalisés ou de résidents en EMS, qui ne peuvent se permettre de payer régulièrement des
                                    tests, sont de fait contraints à se faire vacciner de force. Cette situation est particulièrement injuste pour les jeunes,
                                    qui ont déjà fait beaucoup de sacrifices depuis 1 an et demi maintenant, par solidarité avec leurs aînés.</p>

                                <p>Nous, vaccinés et non-vaccinés, ne laisserons pas le gouvernement nous monter les uns contre les autres, nous disons donc NON
                                    à la loi Covid !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON à la vaccination forcée</p>

                                <p>Le Conseil fédéral divise la population entre les « bons citoyens » vaccinés et les « méchants citoyens » non-vaccinés.
                                    Le certificat Covid obligatoire induit une large discrimination au sein de la population dont le Conseil fédéral est
                                    responsable. Celles et ceux qui ne veulent ou ne peuvent être vaccinés se retrouvent exclus de la vie sociale. Ceux qui
                                    refusent la vaccination sont marginalisés, des familles et des amitiés se brisent à cause de ça.</p>

                                <p>L’extension du certificat Covid obligatoire dans les restaurants et lieux de loisirs est une forme de tyrannie sanitaire,
                                    une violation claire par la majorité de centre-gauche du Conseil fédéral de la Constitution, qui stipule que « tout être
                                    humain a droit à la liberté personnelle, notamment à l’intégrité physique et psychique et à la liberté de mouvement »
                                    (Art. 10, al. 2)</p>

                                <p>Nous rejetons fermement cette prise en otage de nos vies par l’Etat en disant NON à la loi Covid !</p>
                            </div>
                        </div>
                        
                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON à la confiscation du pouvoir et à l’arbitraire</p>

                                <p>Avec le durcissement de la loi Covid-19, le Conseil fédéral se voit attribuer encore davantage de pouvoir dans sa politique
                                    déjà autoritariste. Cela va à l’encontre du système politique suisse et c’est dangereux. Cette confiscation du pouvoir par
                                    le Conseil fédéral s’inscrit dans la logique de sa politique arbitraire.</p>

                                <p>L’extension de l’obligation du certificat Covid décidée début septembre 2021 est un autre exemple sidérant de cette absurde
                                    politique : si vous voulez sortir en famille au zoo ou au musée, vous devez présenter un certificat. Or, si vous souhaitez
                                    fréquenter une maison close, vous n’en avez pas besoin. Vous ne pouvez pas vous rendre dans un restaurant ou un café sans
                                    certificat, mais vous pouvez le faire dans les trains, les bus ou les tramways bondés aux heures de pointe.</p>

                                <p>Nous nous opposons aux mesures liberticides et arbitraires édictées par un gouvernement toujours plus autoritariste et disons
                                    donc clairement NON à la loi Covid-19 !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON aux frontières-passoires</p>

                                <p>Par égard déplacé envers l’Union européenne, la Suisse n’applique aucun contrôle systématique des frontières nationales.
                                    Par conséquent, les voyageurs au retour de vacances mais aussi les immigrés, frontaliers et autres étrangers qui circulent
                                    (notamment en provenance des Balkans) favorisent la propagation du Coronavirus. Il est temps que le gouvernement fédéral
                                    serve la vis et exige notamment que les frontaliers soient également systématiquement testés afin de limiter les risques
                                    de transmission transfrontalière.</p>

                                <p>Nous devons protéger plus efficacement les frontières de la Suisse, nous disons donc NON à la loi Covid-19 !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON à la propagande du Conseil fédéral</p>

                                <p>Depuis le lancement de sa campagne en faveur de la loi Covid-19, le Conseil fédéral use délibérément d’informations erronées et
                                    de « Fake news », notamment lors de sa conférence de presse du 27 septembre 2021. Par exemple, Le Conseil fédéral affirme que
                                    sans certificat Covid, l’hôtellerie et la restauration souffriraient davantage de la crise. C’est faux !</p>

                                <p>La vérité : La politique du Conseil fédéral nuit à l’économie, ses ressources et les emplois. Le secteur de la restauration fait
                                    face à des pertes considérables de chiffre d’affaires depuis l’introduction du certificat Covid, ce alors que divers secteurs
                                    avaient auparavant mis en place des concepts de protection pourtant fonctionnels et toujours applicables si nécessaire.</p>

                                <p>Le Conseil fédéral prétend qu’en cas de non à la loi Covid, les aides financières indispensables seraient supprimées.
                                    C’est faux !</p>

                                <p>La vérité : Si les mesures arbitraires en cours, comme le certificat Covid obligatoire, sont supprimées, les aides financières
                                    deviendront inutiles. De plus, le résultat du vote n’aura aucun impact sur la question des aides, puisqu’il a déjà été décidé
                                    qu’elles seraient toutes supprimées d’ici la fin de l’année, ou au plus tard en mars 2022 ! </p>

                                <p>Nous nous opposons au régime oppressif du Conseil fédéral et nous engageons à ce que l’économie puisse fonctionner à nouveau
                                    aussi librement que possible. Pour cette raison, nous votons NON à la loi Covid-19 !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON à l’endettement déraisonnable</p>

                                <p>Depuis le début de la pandémie, le secteur public a dépensé plusieurs milliards à une vitesse battant tous les records.
                                    Rien qu’en 2020, ce sont près de 15 milliards de francs qui ont été dépensés par la Confédération à elle seule, en plus
                                    de l’acquisition d’obligations de cautionnement pour plus de 17 milliards. Pour 2021 et 2022, ce sont d’ores et déjà quelque
                                    27 milliards supplémentaires et divers crédits complémentaires qui sont engagés. La gauche rose-verte utilise la loi Covid
                                    comme prétexte afin de faire tourner l’État-providence à plein régime. Elle péjore ainsi l’économie en prétendant endosser
                                    le rôle de sauveur.</p>

                                <p>Lorsqu’on constate que l’exercice ordinaire de la Confédération ne rapporte pas plus de 72 milliards de francs de
                                    recettes annuelles, l’on peut pleinement prendre la mesure de l’ampleur du désastre économique induit par ces
                                    milliards de francs de dépense.</p>

                                <p>La Confédération se voit contrainte de se délester de plusieurs milliards de francs d’actifs financiers et de
                                    contracter de nouvelles dettes. Résultat : la dette de la Confédération dépasse à nouveau le seuil des 100
                                    milliards de francs ! En définitive, ce sont les contribuables, les commerces, l’industrie et la classe
                                    moyenne qui devra casquer deux fois – aujourd’hui avec les pertes sur salaires et de chiffre d’affaires
                                    et plus tard avec l’augmentation des impôts – pour compenser ces gargantuesques dépenses.</p>

                                <p>Nous luttons contre l’endettement déraisonnable de l’État sur le dos de notre économie, de la classe moyenne
                                    et des générations futures, nous votons donc NON à la loi Covid !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON à la surveillance de masse</p>

                                <p>L’extension de l’obligation du certificat Covid mène indubitablement à la surveillance de masse. Le gouvernement fédéral
                                    a mis en place un système de recherche des contacts complet, efficace et numérique appelé « système TTIQ » (Testing,
                                    Tracing, Isolation, Quarantine). Avec cet outil, chaque mouvement de chaque citoyen peut être surveillé : qui nous
                                    rencontrons, où nous voyageons, ce que nous faisons. Ces informations, soumises à la protection des données, doivent
                                    être stockées dans des bases de données centralisées en cas de résultat positif à un test. Cette pratique ouvre
                                    inéluctablement la porte aux abus.</p>

                                <p>Nous refusons la surveillance de nos moindres faits et gestes par l’Etat, nous disons donc NON à la loi Covid !</p>
                            </div>
                        </div>

                        <div>    
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>NON à la tutelle autoritaire de l’Etat</p>

                                <p>La pandémie de Covid-19 doit être prise au sérieux. Mais il est également inquiétant de constater que le Diktat de la
                                    majorité de centre-gauche du Conseil fédéral a poussé les gens dans leurs retranchements depuis le début de la pandémie
                                    en 2020, ayant tantôt perdu leurs emplois, tantôt dû fermer leurs entreprises, se retrouvant sur la paille.</p>

                                <p>Ensemble, nous pouvons surmonter cette crise et en ressortir plus forts, mais cela dépendra de la pertinence des
                                    décisions politiques. Jusqu’ici, la gestion de la crise par la majorité de centre-gauche du Conseil fédéral a été
                                    et reste encore aujourd’hui un désastre et la liste des échecs est longue : sacrifice des personnes âgées dans les
                                    maisons de retraite, destructions de nombreux emplois, confiscation des perspectives des jeunes, etc. Les gauchistes
                                    exultent lorsque l’Etat étend son pouvoir de façon incontrôlée et que les libertés individuelles se retrouvent
                                    torpillées. Il est de notre devoir de tout faire pour empêcher que cela continue ! </p>

                                <p>Les citoyennes et les citoyens libres n’ont pas besoin d’une tutelle autoritaire de l’Etat. Ils n’ont pas besoin
                                    d’un certificat Covid pour vivre décemment leurs vies. C’est pourquoi nous votons clairement NON à la loi Covid et
                                    exigeons de fait de retrouver toutes nos libertés !</p>
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