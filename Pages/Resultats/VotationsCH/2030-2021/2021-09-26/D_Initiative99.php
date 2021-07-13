<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire 99%</title>
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
    <section style="padding: 2%;">
            <h1 class="uk-heading-large">Initiative "Alléger les impôts sur les salaires, imposer
            équitablement le capital"</h1>
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
                    <h3 style="padding-bottom: 10%">Les résultats seront disponibles le 26 septembre dès 12:00 !</h3>
                </li>-->

                <li>  
                    <h3>Que demande l'initiative ?</h3>
                    <hr>                                        
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 4%">
                        <p class="uk-text-justify">Les revenus de capitaux (en opposition aux revenus du travail)
                        seront imposables à hauteur de 150%, contre 100% aujourd'hui. Une tranche encore à
                        définir dans la loi sera exonérée de cette imposition.
                        </p>

                        <p class="uk-text-justify">Le montant prévu ,exonéré de l'imposition,
                        est là pour protéger les petites fortunes. Les revenus jusqu'à hauteur de ce montant seront donc imposés à 100%, comme
                        actuellement, tandis que les revenus supérieurs le seront à 150%.
                        </p>

                        <p class="uk-text-justify">Les recettes fiscales générées serviront, par exemple, à baisser les impôts des
                        personnes à bas ou moyens revenus, ainsi que les bénéficiaires de la protection sociale ou en étant investies dans les services publics.
                        </p>
                    </div>

                    <h3 style="padding-bottom: 1%">L'initiative veut...</h3>
                    <div class="uk-column-1-5@m uk-column-1-1@s" style="padding-bottom: 3%">
                        <h5>... mettre fin aux injustices.</h5>
                        <hr>
                        <p class="uk-text-justify">Selon le comité d'initiative, les personnes qui créent la richesse en Suisse devraient
                        pouvoir payer moins d'impôts que les personnes qui vivent de revenus de capital. L'initiative souhaite empêcher
                        ces personnes de continuer à s'enrichir tandis que 155'000 personnes n'arrivent pas à vivre de leur revenus du
                        travail en Suisse.  
                        </p>                       

                        <h5>... alléger les impôts et renforcer le service public.</h5>
                        <hr>
                        <p class="uk-text-justify">Le système fiscal en Suisse est majoritairement peu progressif et le pouvoir d'achat
                        des bas et moyens revenus est stable. Quant au service public, il s'affaiblit fortement ces dernières années.
                        </p>

                        <p class="uk-text-justify">L'initiative veut changer cela : avec les recettes fiscales supplémentaires, les
                        impôts pour les bas et moyens revenus pourront être allégés et le service public développé de manière ciblée :
                        <ul>
                            <li>Développer les transports publics ou les rendre plus abordables</li>
                            <li>Financer des crèches gratuites</li>
                            <li>Investir dans le système de santé et dans la réduction des primes d'assurance-maladie</li>
                            <li>Financer les offres de formation continue</li>
                        </ul>
                        </p>

                        <h5>... protéger contre les crises et l'instabilité économique.</h5>
                        <hr>
                        <p class="uk-text-justify">Les personnes qui ont de hauts revenus de capital utilisent cet argent pour spéculer
                        sur les marchés financiers, alors que les personnes à faible et moyens revenus s'endettent de plus en plus.
                        Tout ceci déstabilise l'économie et mène à des crises. L'initiative veut remédier à ceci en redistribuant
                        l'argent dans le porte-monnaie des salariés.
                        </p>

                        <h5>... améliorer la condition des femmes.</h5>
                        <hr>
                        <p class="uk-text-justify">Le comité d'initiative assure que les femmes sont majoritaires dans les groupes
                        disposant des revenus les plus faibles. De plus, le combat de l'initiative 99%, contre les inégalités sociales,
                        est aussi un combat féministe pour corriger le déséquilibre entre les sexes.
                        </p>

                        <h5>... renforcer la démocratie.</h5>
                        <hr>
                        <p class="uk-text-justify">
                        </p>
                    </div>

                    <h3>La question qui vous est posée : </h3>        
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 10%">Acceptez-vous l'initiative populaire 
                    "Alléger les impôts sur les salaires, imposer équitablement le capital"</p></b>
                </li>        

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_Initiative EauPotable2021" aria-label="chart" id="datawrapper-chart-ps356" src="https://datawrapper.dwcdn.net/ps356/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>  

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU IP Eau Potable 2021" aria-label="chart" id="datawrapper-chart-0EZ4J" src="https://datawrapper.dwcdn.net/0EZ4J/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_IP_eau_potable_propre" aria-label="chart" id="datawrapper-chart-Oz0x0" src="https://datawrapper.dwcdn.net/Oz0x0/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="199"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  

                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
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
                    </div>
                </li>

                <li>
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Déjà bien protégée, l’eau potable peut être consommée sans problème en Suisse. Sa protection peut
                                 être encore améliorée, mais le Conseil fédéral et le Parlement trouvent que l’initiative va trop
                                 loin. L’acceptation de celle-ci aurait un impact énorme sur la production de denrées alimentaires
                                 en Suisse. Comme beaucoup d’exploitations agricoles en produiraient moins, il faudrait en importer
                                 plus, d’où un transfert de la pollution à l’étranger. La principale demande de l’initiative a du 
                                 reste déjà été prise en compte par le Parlement.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les conséquences de l’initiative sur l’eau potable toucheraient de plein fouet l’agriculture, la
                                 production de denrées alimentaires et les emplois générés en Suisse par ces activités.Sans protection spécifique contre les maladies et les ravageurs des cultures, la production
                                 nationale de denrées alimentaires, telles que les fruits, les légumes et les pommes de terre,
                                  chuterait, et il faudrait accroître la part des importations pour satisfaire les besoins de la
                                   consommation nationale.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Ces importations sont aussi la cible de l’initiative contre les pesticides, qui prévoit de limiter
                                ces importations aux seules denrées produites sans pesticides de synthèse. Le choix des produits
                                disponibles en serait fortement réduit. ’interdiction des produits phytosanitaires affaiblirait encore
                                plus nos exportateurs en renchérissant les matières premières de production suisse, comme le sucre 
                                et les huiles végétales. Ces exportateurs subiraient alors un préjudice par rapport à la concurrence
                                étrangère.  
                            </div>                               
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Ces deux initiatives abordent des questions importantes, car le PLR veut 
                                réduire l'utilisation de produits phytosanitaires. Cependant, le chemin emprunté 
                                pour atteindre l'objectif devrait être différent. Du point de vue du PLR, les deux 
                                initiatives vont clairement trop loin : la mise en œuvre de ces initiatives mettrait 
                                en danger non seulement l'agriculture suisse, mais aussi notre approvisionnement 
                                alimentaire national.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Cette initiative est mauvaise pour le bio. Avec cette initiative, les 
                                paiements directs seraient réservés aux agriculteurs qui renoncent à utiliser 
                                des produits phytosanitaires, aux agriculteurs qui peuvent nourrir leurs animaux 
                                uniquement avec du fourrage produit sur l‘exploitation. Cette initiative est si 
                                stricte qu’elle rend quasi impossible la production indigène. Une production indigène 
                                quasi impossible, en tous les cas fortement réduite : entre 20 et 40 %. Avec deux 
                                conséquences : les prix des produits suisses prendront l’ascenseur et les importations 
                                de ces mêmes produits venus de l’étranger augmenteront.</p>
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