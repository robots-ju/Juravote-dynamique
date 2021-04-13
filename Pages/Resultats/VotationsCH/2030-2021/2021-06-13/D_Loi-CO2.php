<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Référendum contre la Loi CO2</title>
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
            <h1 class="uk-heading-large">Loi CO2</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis et autorités</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h3>Contexte</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify">Les changements climatiques sont synonymes d’une hausse des 
                        températures à l’échelle mondiale. Ils sont principalement dus aux émissions de gaz à 
                        effet de serre, notamment de dioxyde de carbone (CO2). Ces émissions résultent par exemple 
                        du chauffage au mazout ou de la combustion du kérosène par les avions. En Suisse, les 
                        changements climatiques affectent essentiellement l’agriculture et le tourisme. Les jours 
                        de canicule, la sécheresse et les inondations sont en augmentation, et le manque de neige 
                        et les glissements de terrain sont de plus en plus fréquents.
                        </p>

                        <h3>La Loi sur le CO2 en bref</h3>
                        <hr>
                        <p class="uk-text-justify">Le Conseil fédéral et le Parlement veulent réduire davantage 
                        les émissions de CO2 de la Suisse. Ils entendent atteindre cet objectif grâce à la révision 
                        de la loi sur le CO2. Un référendum a été lancé contre ce projet. 
                        </p>
                        
                        <p class="uk-text-justify" style="padding-bottom: 5%">La loi sur le CO2 révisée ne repose pas sur des interdictions, 
                        mais combine (comme jusqu’à présent) des incitations financières, des investissements dans 
                        la protection du climat et des progrès technologiques. Avec les taxes d’incitation prévues,
                        il devient rentable d’agir dans le respect du climat. Financièrement, il est ainsi avantageux 
                        de générer peu de CO2, tandis qu’en générer beaucoup coûte plus d’argent. Les taxes d’incitation 
                        comprennent la taxe sur le CO2 déjà perçue sur le mazout et le gaz naturel ainsi qu’une nouvelle 
                        taxe sur les billets d’avion. 
                        </p>  

                        <img src="Graphique_Hausse des températures en Suisse.jpg" class="uk-align-center">
                        <figcaption class="uk-text-center">Source : Office fédéral de métrologie et de climatologie</figcaption>
                    </div>                 
                    
                    <h3>Aperçu des principales mesures</h3>
                    <hr>
                        <div class="uk-column-1-4@m uk-column-1-1@s" style="padding-bottom: 2%">
                            <h5>Fonds pour le climat</h5>
                            <p class="uk-text-justify" style="padding-bottom: 15%">Le Fonds pour le climat finance l’assainissement de bâtiments 
                            et des investissements dans l’infrastructure. Il aide les entreprises suisses à 
                            commercialiser de nouvelles technologies mais aussi les communes à faire face aux dommages 
                            causés par les changements climatiques.
                            </p>

                            <h5>Taxe sur les billets d’avion</h5>
                            <p class="uk-text-justify" style="padding-bottom: 5%">Jusqu’à présent, l’aviation n’était pas prise en compte dans 
                            la loi sur le CO2. Désormais, la loi prévoit une taxe d’incitation également dans ce domaine. 
                            Cette taxe sera de 30 francs par billet pour les vols court et moyen-courriers et de 120 
                            francs pour les vols long-courriers. Plus de la moitié du produit sera redistribuée à la 
                            population. Le reste sera versé au Fonds pour le climat.
                            </p>

                            <h5>Taxe sur le CO2</h5>
                            <p class="uk-text-justify">Comme jusqu’à présent, une taxe d’incitation est perçue sur 
                            le mazout et le gaz naturel. Il en résulte une incitation à opter pour un mode de 
                            chauffage respectueux du climat. Aujourd’hui, le montant maximum de la taxe est fixé à 
                            120 francs par tonne de CO2. D’ici à 2030, ce montant augmentera progressivement à 210 
                            francs par tonne. Les deux tiers du produit de la taxe seront redistribués à la population 
                            et à l’économie. Le tiers restant sera versé au Fonds pour le climat.
                            </p>

                            <h5>Exemption de la taxe sur le CO2</h5>
                            <p class="uk-text-justify">La loi tient compte de l’économie. Toutes les entreprises 
                            suisses pourront désormais demander à être exemptées de la taxe sur le CO2. En 
                            contrepartie, ces entreprises devront investir dans des mesures de protection du climat 
                            dans leurs propres installations. Les entreprises dont les émissions de CO2 sont très 
                            importantes continueront à être exemptées de la taxe sur le CO2. La compétitivité des 
                            entreprises sera ainsi maintenue.
                            </p>
                        </div>

                        <div class="uk-column-1-4@m uk-column-1-1@s">
                            <h5>Taxe sur les vols d’affaires et les vols privés</h5>
                            <p class="uk-text-justify">Les vols d’affaires et les vols privés seront désormais 
                            soumis à une taxe d’incitation. En effet, une taxe de 500 à 3000 francs par vol sera 
                            perçue en fonction de la distance parcourue et de la masse de l’avion. La moitié du 
                            produit de la taxe sera uniformément redistribuée à la population; le reste sera versé 
                            au Fonds pour le climat.
                            </p>

                            <h5>Efficacité énergétique des véhicules</h5>
                            <p class="uk-text-justify">À partir de 2025, les vendeurs de voitures devront 
                            commercialiser des voitures plus efficaces sur le plan énergétique. Les émissions 
                            de CO2 des voitures de tourisme et des voitures de livraison devront diminuer de 
                            15 % en moyenne par rapport à aujourd’hui. Désormais, des valeurs cibles s’appliqueront 
                            également aux camions.
                            </p>

                            <h5 style="padding-bottom: 5%">Obligation de compenser</h5>
                            <p class="uk-text-justify">Comme jusqu’à présent, les importateurs de carburants 
                            compensent les émissions de CO2 dues au trafic grâce à des projets de protection du 
                            climat. À partir de 2025, au moins 20 % de ces projets devront être réalisés en Suisse.
                            </p>

                            <h5>Mesures dans le secteur du bâtiment</h5>
                            <p class="uk-text-justify">Les émissions de CO2 dans le secteur du bâtiment doivent 
                            être réduites davantage. Les nouveaux bâtiments ne devront plus générer d’émissions 
                            de CO2 issues de combustibles fossiles. Cette restriction ne s’applique pas aux bâtiments 
                            existants. Si un système de chauffage est remplacé, les émissions sont limitées à 20 kg 
                            de CO2 par mètre carré et par an.
                            </p>
                        </div>
                
                    <h3>Après 2030</h3>
                    <hr>                    
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h5>Objectif zéro émission nette</h5>
                        <p class="uk-text-justify" style="padding-bottom: 5%">La Suisse doit viser zéro émission nette à partir de 2050. Le Conseil 
                        fédéral a fixé cet objectif en 2019. Entretemps, il a adopté la stratégie correspondante. Cette 
                        stratégie montre que l’objectif zéro émission nette est réalisable et économiquement supportable. 
                        Les secteurs du bâtiment et des transports peuvent atteindre en grande partie la neutralité carbone 
                        d’ici à 2050. D’autres secteurs, comme l’industrie et l’agriculture, continueront de générer des 
                        émissions de CO2 en 2050. Il est nécessaire d’y mettre en place des solutions, telles que des 
                        technologies de stockage. De cette manière, la Suisse pourra atteindre l’objectif zéro émission nette.
                        </p>

                        <h5>Initiative pour les glaciers</h5>
                        <p class="uk-text-justify">L’initiative pour les glaciers exige que la Suisse n’émette, 
                        à compter de 2050, plus aucun gaz à effet de serre ne pouvant pas être neutralisé par 
                        des puits de carbone naturels ou techniques. Le Conseil fédéral a opposé un contre-projet 
                        à cette initiative. Celui-ci poursuit le même objectif que l’initiative : réduire à zéro 
                        net d’ici à 2050 les émissions de gaz à effet de serre, nuisibles pour le climat, générées 
                        par la Suisse.
                        </p>
                    </div>

                    <h3>La question qui vous est posée : </h3>
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 10%">Acceptez-vous la Loi fédérale
                    sur la réduction des émissions de gaz à effet de serre (Loi sur le CO2) ?</p></b>
                </li>

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_Loi CO2 2021" aria-label="chart" id="datawrapper-chart-PiRsC" src="https://datawrapper.dwcdn.net/PiRsC/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU IP Loi CO2 2021" aria-label="chart" id="datawrapper-chart-L13g0" src="https://datawrapper.dwcdn.net/L13g0/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_LoiCO2" aria-label="chart" id="datawrapper-chart-RZmLZ" src="https://datawrapper.dwcdn.net/RZmLZ/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="199"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les glaciers fondent, les glissements de terrain emportent routes et maisons, 
                                les stations de ski manquent de neige, et l’agriculture souffre toujours plus de 
                                la sécheresse: tout cela a un coût, pour la population comme pour l’économie.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi favorise les investissements respectueux du climat, donnant ainsi du travail 
                                aux petites et moyennes entreprises, par exemple aux installateurs sanitaires, aux 
                                chauffagistes, aux électriciens ou aux ingénieurs ainsi qu’à tout le secteur de la 
                                construction. De plus, elle soutient les entreprises qui développent des technologies 
                                respectueuses du climat, ce qui crée des emplois porteurs d’avenir.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Loi sur le CO2 est équitable et sociale.
                                Prenons l’exemple d’une famille-type de quatre personnes, qui prend l’avion une fois 
                                par année pour passer des vacances en Europe, consomme une quantité moyenne de mazout 
                                et utilise régulièrement sa voiture. Elle devra certes débourser une centaine de francs 
                                de plus par an, mais si elle opte pour une voiture électrique, ce montant diminuera de 
                                moitié. Et si elle ne prend pas l’avion pour partir en vacances ou qu’elle se chauffe 
                                sans produire de CO2, elle recevra même de l’argent en retour.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les propriétaires peuvent tirer profit de la loi.
                                S’ils remplacent leur chaudière à mazout par une pompe à chaleur, un chauffage au 
                                bois ou des panneaux solaires, ils peuvent solliciter un soutien financier et sont 
                                de plus exemptés de la taxe sur le CO2. Les locataires sont aussi gagnants puisqu’ils 
                                voient leurs frais de chauffage baisser.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Dès l’entrée en vigueur de la loi révisée, des véhicules plus efficaces, 
                                consommant moins d’essence ou de diesel, seront commercialisés. Il en résultera 
                                pour les automobilistes des économies de carburant. De plus, les bornes de recharge 
                                se multiplieront, favorisant ainsi la mobilité électrique.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Suisse a consacré ces dix dernières années quelque 80 milliards de francs à 
                                l’importation de pétrole et de gaz naturel. C’est de l’argent qui part à l’étranger. 
                                Grâce à la loi révisée, notre dépendance envers les groupes pétroliers étrangers va 
                                diminuer, et des fonds plus importants seront investis en Suisse.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La nouvelle loi sur le CO2 marque un progrès 
                                important pour la politique climatique suisse : elle renforce les mesures 
                                actuelles dans le bâtiment et pour les véhicules et intègre désormais les 
                                flux financiers et le trafic aérien. De plus, elle crée un fonds pour le 
                                climat, qui financera par exemple des trains de nuit supplémentaires, évitant 
                                ainsi des vols courte distance climaticides et absurdes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Suisse a besoin en toute urgence 
                                d’une nouvelle loi sur le CO2: même si d’autres améliorations 
                                sont nécessaires, il y a péril en la demeure face au réchauffement 
                                climatique. En 2020, le réchauffement mondial est de 1,2°C. Chaque 
                                tonne de CO2 en moins est vitale.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La nouvelle loi sur le CO2 est une étape 
                                importante pour d’autres améliorations : la refuser signe la victoire 
                                du lobby pétrolier et le renforcera. Nous devrions repartir à zéro et 
                                retravailler durement chaque amélioration. Mais les plus grands perdants 
                                serait le climat et les populations qui souffrent déjà du réchauffement climatique.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous devons veiller à ce que notre approvisionnement 
                                énergétique soit exempt de CO2 le plus rapidement possible – c’est-​à-dire sans 
                                pétrole, ni charbon, ni gaz. À ce sujet, la nouvelle loi conduit effectivement 
                                à une interdiction des nouveaux systèmes de chauffage au mazout. Grâce à 
                                l’augmentation de la taxe CO2  sur les combustions fossiles, les ressources 
                                financières du fonds pour le climat sont disponibles pour réduire d’émissions 
                                de CO2  des bâtiments.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Au moins deux tiers de la taxe sur le CO2  applicable au mazout et à l’essence et au moins la moitié de la taxe sur les billets d&apos;avion seront reversés à la population. Toute personne qui ne conduit pas une voiture de manière démesurée, utilise les transports publics, vit dans un appartement de taille moyenne et ne prend l’avion pour partir en vacances qu’une fois par an en bénéficiera tout compte fait.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La transition énergétique crée une croissance 
                                économique durable et des emplois d’avenir attrayants et en Suisse. La 
                                nouvelle loi sur le CO2 crée un fonds pour le climat pour financer des 
                                investissements respectueux de l’environnement. Au lieu d’acheter du pétrole, 
                                nous investissons dans les nouvelles technologies et dans la rénovation des bâtiments.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pendant des décennies, nous avons bâti notre 
                                progrès et notre prospérité sur des combustibles fossiles bon marché. Nous 
                                ne pouvons mettre sur le dos de nos enfants ni les dégâts environnement aux 
                                causés par cette situation, ni l’intégralité des coûts de la transition 
                                énergétique. Ce serait fondamentalement injuste.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Depuis longtemps, les Suissesses et les Suisses 
                                émettent beaucoup plus de gaz à effet de serre (14 t CO2 /an) que les 
                                populations les plus pauvres de la planète (1 t CO2 /an). Il ne faut pas 
                                que les pays pauvres voient leur marge de manœuvre réduite en matière de 
                                développement simplement parce que les pays riches n'ont pas réussi à 
                                réduire leurs émissions de CO2 en temps voulu.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le chan­ge­ment cli­ma­tique, qui est déjà clai­re­ment 
                                per­cep­tible en Suisse, exige une action rapide. Plus nous atten­dons, plus il 
                                sera coû­teux et dif­fi­cile d'atteindre les objec­tifs cli­ma­tiques de l’accord de 
                                Paris. Le PEV réclame des taxes d'incitation éco­lo­gique depuis des décen­nies. 
                                L'effet d'entraînement de la taxe sur le CO2 a été prouvé et il est logique de 
                                l'étendre à d'autres domaines, d'autant plus qu'elle est lar­ge­ment rem­bour­sée à 
                                la popu­la­tion d'une manière socia­le­ment accep­table. Grâce à l'argent du fonds 
                                cli­ma­tique, la loi sur le CO2 devien­dra éga­le­ment un moteur d'innovation pour 
                                des emplois durables et pour la pour­suite du déve­lop­pe­ment de tech­no­lo­gies 
                                res­pec­tueuses du cli­mat.  </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi sur le CO2 vise à réduire de moitié les émissions 
                                de gaz à effet de serre d'ici 2030 par rapport à 1990. Pour y parvenir, au moins 75 
                                % des mesures doivent être prises à l’intérieur du pays. Pour atteindre ces objectifs, 
                                des mesures importantes ont été ancrées tant dans le domaine du bâtiment que celui de 
                                la mobilité. Il s'agit, par exemple, de limites plus strictes en matière de CO2 pour 
                                les bâtiments, de taxes climatiques plus élevées sur les combustibles fossiles et de 
                                la taxe sur les billets d'avion. De plus, le fonds pour le climat permettra la 
                                rénovation des bâtiments et la construction de stations de recharge pour les voitures 
                                électriques, ainsi que la recherche et la production de carburants synthétiques, par 
                                exemple pour des voyages en avion plus respectueux du climat.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Avec la loi sur le CO2, la Suisse contribue à limiter 
                                l'augmentation de la température mondiale à 1,5 degré. Il s'agit d'une étape 
                                intermédiaire importante vers une Suisse respectueuse de l’environnement, et il 
                                est clair que cet exemple doit être suivi.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le principe du pollueur-payeur est renforcé et la vérité 
                                des coûts est promue (sans interdictions). Le monde entier se mobilise. Nous aussi.
                                La loi sur le CO2 encourage l’innovation. La loi réduit la dépendance vis-à-vis des 
                                combustibles fossiles. La loi se base sur le papier de position du PLR.
                                Accélération de la rénovation des bâtiments, extension des engagements de réduction,
                                taxe sur les billets d’avion liée aux innovations en matière de protection du climat.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Suisse a tout pour devenir un nouveau modèle 
                                en matière de politique climatique.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Notre économie sociale de marché assure une protection 
                                efficace de l'environnement. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le fardeau qui pèse sur les entreprises et 
                                la population ne doit pas être alourdi.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La taxe sur les billets d'avion, l'augmentation du 
                                prix de l’essence et l'interdiction du mazout concernent tout le monde.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Oui à des mesures durables, - et non un activisme dans 
                                tous les sens.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La protection du climat est un devoir mondiale et 
                                coûte beaucoup d’argent. Ces coûts sont payés par les entreprises et l’industrie, 
                                les consommateurs et les ménages privés. Nous pouvons être fiers du fait que la 
                                Suisse joue un rôle de pionnier dans la protection du climat et de l’environnement.
                                 Cela devrait continuer à être le cas à l’avenir.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La nouvelle Loi sur le CO2 est coûteuse
                                (augmentation du prix de l'essence, augmentation de la taxe sur le
                                mazout et le gaz, interdiction des systèmes de chauffage au pétrole
                                et au gaz, nouvelle taxe sur les billets d'avion). Une famille de 
                                quatre personnes peut rapidement encourir des coûts supplémentaires
                                de plus de 1000 francs par an. C’est un trou dans la poche de toute
                                famille suisse à revenu normal.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La nouvelle Loi sur le CO2 est inefficace
                                (toutes ces charges importantes n'ont pas d'effet sur le climat, la Suisse
                                n'est responsable que d'un millième des émissions mondiales de CO2 et la loi
                                ne pourrait entrainer qu'une diminution d'un demi-millième des émissions
                                mondiales de CO2).</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Suisse est déjà exemplaire en matière de politique
                                climatique. La loi actuelle a permis à la Suisse de diminuer continuellement ses 
                                émissions de gaz à effet de serre Depuis 1990, les émissions de la Suisse ont 
                                ainsi diminué de 14 %, alors que notre population a augmenté de 27 %.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi sur le CO2 est un monstre bureaucratique – 
                                La loi sur le CO2 alourdit l’appareil d’État et instaure de nombreuses 
                                nouvelles règles, prescriptions et interdictions pour le citoyen. L’État 
                                veut dicter au citoyen comment vivre Or, la crise du COVID a démontré
                                combien la population est attachée au principe de liberté.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La nouvelle Loi sur le CO2 est antisociale.
                                Les familles, les locataires, les jeunes, les automobilistes, les petits propriétaires,
                                la population rurale et montagnarde seront davantage taxés que la
                                population des centres-villes, bien desservis par des transports publics.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les artisans et les PME qui, en raison de leur activité, 
                                sont des consommateurs importants d’énergie, à commencer par les restaurants et 
                                l’hôtellerie, devront payer plus de taxes que des grandes sociétés de services 
                                comme les banques et les assurances.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En raison de la crise COVID, de nombreux salariés et indépendants qui sont
                                menacés de perdre leur activité ou leur travail et de se retrouver au chômage
                                On ne peut pas se permettre de leur demander maintenant de payer des centaines
                                de francs de plus pour l’essence et le chauffage</p>
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