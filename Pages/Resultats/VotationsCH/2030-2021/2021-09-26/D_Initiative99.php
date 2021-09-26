<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
        </div>

        <div>
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
        </div>
    </header>
    <main>
    <section style="padding: 2%;">
            <h1 class="uk-heading-large">Initiative "Alléger les impôts sur les salaires, imposer
            équitablement le capital"</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résultats</button>
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis et autorités</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <h2>Informations de la votation</h2>
                                    </div>
                                </div>
                                <div class="uk-card-body uk-text-left">
                                    <p><b>Objet : </b>Initative 99%</p>
                                    <p><b>Participation : </b>52.23 %</p>
                                    <p><b>Résultat de la majorité du peuple : </b>35.12 %</p>
                                    <p><b>Résultat de la majorité des cantons : </b>0 / 23</p>
                                    <p><b>Résultat final : </b>Refusé</p>
                                    <p><b>Type de la votation : </b>Votation fédérale</p>
                                    <p><b>Mode de votation : </b>Initiative populaire</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <h2>Résultats</h2>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <iframe title="Iniatitive99%_GLOBAL" aria-label="chart" id="datawrapper-chart-pDrpE" src="https://datawrapper.dwcdn.net/pDrpE/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="323"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <h2>Résultats</h2>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <iframe title="Initiative99%_Suisse" aria-label="map" id="datawrapper-chart-RFEnu" src="https://datawrapper.dwcdn.net/RFEnu/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="426"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column" uk-grid>
                                        <h2>Résultats Jura</h2>
                                    </div>
                                </div>
                                <div style="padding-top: 0.5%" class="uk-card-body">
                                    <iframe title="Initiative99%_JURA" aria-label="map" id="datawrapper-chart-KTATX" src="https://datawrapper.dwcdn.net/KTATX/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="433"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>  
                    <h3>Contexte</h3>
                    <hr> 
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <p class="uk-text-justify">La Suisse est l'un des pays les plus riches du monde et le pays où la richesse
                            moyenne est la plus élevée. Lors des dernières décennies, la Suisse a dévelopé fortement sa prospérité.
                            Le 1% le plus riche possédait 36% (352 milliards) de la fortune totale en Suisse en 2003 et possède 43%
                            aujourd'hui (707 milliards).
                        </p>

                        <p class="uk-text-justify">En Suisse, une personne sur quatre ne possède aucune fortune ou est endettée, de même
                            qu'une personne sur dix vit dans la pauvreté. Parmi ces 735'000 personnes, 155'000 ont un emploi, mais n'arrivent
                            pas à s'en sortir dignement (source : Caritas).
                        </p>
                    </div>  

                    <h3>Classes de fortune nette (en milliers de francs) pour l'année 2017</h3>
                    <hr>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <iframe title="Classes de fortune nette (en milliers de francs)" aria-label="chart" id="datawrapper-chart-XTl1w" src="https://datawrapper.dwcdn.net/XTl1w/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="427"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <iframe title="Classes de fortune nette (en milliers de francs) (Copy)" aria-label="Barres à puces" id="datawrapper-chart-wLoLH" src="https://datawrapper.dwcdn.net/wLoLH/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="488"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <p class="uk-text-justify">Pour le Canton du Jura, on constate que 39% des contribuables possède une fortune nette
                            de 0 CHF.
                        </p>
                        <p class="uk-text-justify">26% des contribuables possède 3% de la fortune nette (fortune nette entre 0 et 50'000 CHF).</p>

                        <p class="uk-text-justify">28% des contribuables possède 33% de la fortune nette (fortune nette entre 50'000 et 500'000 CHF).</p>

                        <p class="uk-text-justify">6% des contribuables possède 63% de la fortune nette (fortune nette plus de 500'000 CHF).</p>
                    </div>

                    <h3>Quelques graphiques</h3>
                    <hr>   
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <iframe title="Indice de Gini (2018)" aria-label="map" id="datawrapper-chart-yD6UY" src="https://datawrapper.dwcdn.net/yD6UY/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="652"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <iframe title="Les impôts sur la fortune en Europe" aria-label="map" id="datawrapper-chart-ZdSJ3" src="https://datawrapper.dwcdn.net/ZdSJ3/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="605"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <iframe title="Répartition des revenus et des impôts" aria-label="Graphique à barres groupées" id="datawrapper-chart-Jvvb2" src="https://datawrapper.dwcdn.net/Jvvb2/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>

                    <h3>Que demande l'initiative ?</h3>
                    <hr>                                        
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 1%">
                        <p class="uk-text-justify">Les revenus de capitaux (en opposition aux revenus du travail salarié ou indépendant)
                        seront imposables à hauteur de 150%, contre 100% aujourd'hui. Une tranche encore à
                        définir dans la loi sera exonérée de cette imposition.
                        </p>

                        <p class="uk-text-justify">Le montant prévu, exonéré de l'imposition,
                        est là pour protéger les petites fortunes. Les revenus jusqu'à hauteur de ce montant seront donc imposés à 100%, comme
                        actuellement, tandis que les revenus supérieurs le seront à 150%.
                        </p>

                        <p class="uk-text-justify">Les recettes fiscales générées serviront, par exemple, à baisser les impôts des
                        personnes à bas ou moyens revenus, ainsi que les bénéficiaires de la protection sociale ou en étant investies dans les services publics.
                        </p>
                    </div>

                    <h3 style="padding-bottom: 1%">L'initiative veut...</h3>
                    <div class="uk-column-1-5@m uk-column-1-1@s" style="padding-bottom: 1%">
                        <h5 style="padding-bottom: 6%">... mettre fin aux injustices.</h5>
                        <hr>
                        <p class="uk-text-justify" style="padding-bottom: 30%">Selon le comité d'initiative, les personnes qui créent la richesse en Suisse devraient
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
                        impôts pour les bas et moyens revenus pourront être allégés et le service public développé de manière ciblée.
                        </p>

                        <h5>... protéger contre les crises et l'instabilité économique.</h5>
                        <hr>
                        <p class="uk-text-justify" style="padding-bottom: 20%">Les personnes qui ont de hauts revenus de capital utilisent cet argent pour spéculer
                        sur les marchés financiers, alors que les personnes à faible et moyens revenus s'endettent de plus en plus.
                        Tout ceci déstabilise l'économie et mène à des crises. L'initiative veut remédier à ceci en redistribuant
                        l'argent dans le porte-monnaie des salariés.
                        </p>

                        <h5 style="padding-bottom: 6%">... améliorer la condition des femmes.</h5>
                        <hr>
                        <p class="uk-text-justify">Le comité d'initiative assure que les femmes sont majoritaires dans les groupes
                        disposant des revenus les plus faibles. Le combat de l'initiative, contre les inégalités sociales,
                        est aussi un combat féministe pour corriger le déséquilibre entre les sexes.
                        </p>

                        <p class="uk-text-justify">Le travail est remis au premier plan et la charge pesant
                            sur les petits revenus est allégée en faisant peser une charge plus importante sur les grands revenus
                            du capital.
                        </p>

                        <h5 style="padding-bottom: 6%">... renforcer la démocratie.</h5>
                        <hr>
                        <p class="uk-text-justify">Selon les initiants, nous nous trouvons aujourd'hui dans un cercle vicieux qui menace
                            de diviser notre société : plus les richesses se concentrent, plus l'influence du 1% le plus riche augmente.
                            En outre, un nombre croissant de personnes perdent confiance dans la politique et renoncent à y participer.
                        </p>
                    </div>

                    <h3>La question qui vous est posée : </h3>        
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 10%">Acceptez-vous l'initiative populaire 
                    "Alléger les impôts sur les salaires, imposer équitablement le capital" ?</p></b>
                </li>        

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_Loi CO2 2021 (Copy)" aria-label="Anneau de choix" id="datawrapper-chart-2K5UU" src="https://datawrapper.dwcdn.net/2K5UU/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script> 

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU-initiative99" aria-label="Anneau de choix" id="datawrapper-chart-vKaNg" src="https://datawrapper.dwcdn.net/vKaNg/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_Initiative99" aria-label="chart" id="datawrapper-chart-MnRhy" src="https://datawrapper.dwcdn.net/MnRhy/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="200"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>
                </li>  

                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’initiative 99% amène plus de justice. Durant la crise du coronavirus, nous avons vu une fois
                                de plus que ce sont les salarié·e·s, les 99 %, qui font vivre notre société. Ce sont les infirmière*ers,
                                les caissière*ers, les logisticien·ne·s, les pharmacien·ne·s, les enseignant·e·s, les accompagnatrice*
                                eurs d’enfants ou encore les scientifiques qui créent la richesse dans notre société, tandis
                                que le 1 % le plus riche s’approprie les fruits de leur travail. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Dans une démocratie, toutes les personnes doivent avoir les mêmes droits et les mêmes opportunités
                                politiques. L’inégalité criante des richesses en Suisse met ce principe en péril car un
                                pouvoir financier démesuré est aussi un levier politique.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Avec l’initiative 99 %, nous voulons changer le système d'imposition suisse : elle générera des recettes annuelles
                                    supplémentaires de 10 milliards de francs suisses pour la Confédération et les cantons,
                                    qui devront être utilisées pour alléger la charge pesant sur les travailleuses et travailleurs
                                    en réduisant les impôts sur les revenus faibles et moyens ou en développant le service public
                                    de manière ciblée.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le système
                                se divise à cause des inégalités, et les 99 % et les petites entreprises en souffrent directement.
                                L’initiative 99 % inverse cette tendance en redistribuant l’argent des super-riches dans le portemonnaie
                                des salarié·e·s.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le combat de l’initiative 99 % contre les inégalités sociales est aussi 
                                    un combat féministe pour corriger le déséquilibre des forces entre les genres. Nous remettons 
                                    le travail au premier plan, même lorsqu’il est non rémunéré. Nous allégeons la charge pesant sur les petits revenus et
                                    alourdissant celle pesant sur les revenus du capital. Les recettes supplémentaires permettraient
                                    par exemple de soutenir les crèches et autres établissements de garde d’enfants, et ainsi de
                                    soulager les femmes de façon ciblée.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Grâce à l’initiative 99%, les revenus du capital seront plus fortement 
                                    imposés. Les recettes qui en résulteront profiteront aux personnes à faibles ou moyens revenus.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’initiative permettra une plus grande équité fiscale et une répartition 
                                    plus juste des richesses. C’est nécessaire, car aujourd’hui, 1,9 % de la population possède la
                                    moitié de la richesse totale.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Grâce à cette initiative, les personnes à faibles ou moyens revenus seront 
                                    soulagées financièrement, car les recettes supplémentaires seront redistribuées à la population, 
                                    par exemple au moyen de réductions de primes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L'initative permettra aux revenus du capital d’être plus fortement 
                                    imposés. Les recettes qui en résulteront profiteront aux personnes à faibles ou moyens revenus.
                                    L’initiative permettra une plus grande équité fiscale et une répartition plus juste des richesses.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Celle-ci prévoit d’imposer plus fortement les revenus du capital du 
                                    pourcent le plus riche, tels que les dividendes ou intérêts, une fois un certain forfait déduit. 
                                    Les recettes supplémentaires permettront de soulager celles et ceux qui travaillent dur pour 
                                    leur argent – c’est-à-dire les autres 99 % ; cela pourra être effectué, par exemple via une 
                                    baisse de l’imposition des petits et moyens revenus, des primes d’assurance-maladie ou des 
                                    frais de crèche meilleurs marchés.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En Suisse, la richesse est créée par les 99 % de la population qui, 
                                    chaque jour, travaillent dans des bureaux, des supermarchés ou des hôpitaux, et non par une 
                                    poignée de super-riches qui laissent leur argent leur offrir des rendements massifs sans 
                                    qu’elles et ils n’aient besoin de travailler . En imposant davantage les plus grands revenus 
                                    de la fortune, nous rendons l’argent aux personnes qui contribuent réellement à notre société.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’augmentation des loyers et des primes d’assurance-maladie dévore une 
                                    part toujours plus grande du revenu des gens. L’initiative 99% réduit la charge pesant sur les 
                                    salaires grâce à des diminutions d’impôts et un renforcement du service public, notamment par 
                                    le biais d’une augmentation des subsides pour les primes d’assurance-maladie, des investissements 
                                    dans les crèches ou encore par le développement des transports publics.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Avec l’augmentation des inégalités de richesse, notre système économique 
                                    menace de causer sa propre perte. La concentration de la richesse entre les mains d’une petite 
                                    minorité favorise les crises économiques, tandis que le pouvoir d’achat de l’ensemble de la 
                                    population diminue. Ce sont les 99 % qui en souffrent, et aussi les petites entreprises.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En Suisse, les femmes effectuent toujours deux fois plus de travail non 
                                    rémunéré que les hommes au sein du ménage et reçoivent un salaire inférieur pour le même travail. 
                                    Dans notre pays, la pauvreté est avant tout féminine. L’initiative 99 % permet de développer le 
                                    service public et de soulager les personnes aux bas revenus, ce qui profitera en particulier aux 
                                    femmes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’inégalité sociale menace de déchirer notre société. Les super-riches 
                                    achètent des groupes de presse entiers et influencent la politique par du lobbying et des 
                                    campagnes électorales coûteuses, ce qui donne lieu à un rapport de force anti-démocratique 
                                    jouant en défaveur des 99%. Notre initiative veut inverser cette tendance.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Elle crée un peu plus de jus­tice en Suisse, car elle éli­mine l'imposition 
                                    pri­vi­lé­giée accor­dée actuel­le­ment aux divi­dendes par rap­port aux salaires et contre­carre ainsi 
                                    l'inégalité toujours crois­sante dans le pays.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Aujourd'hui, les reve­nus du capi­tal sont pri­vi­lé­giés de diverses manières. 
                                    Les divi­dendes ne sont impo­sés qu'à 50-70 %, alors que les salaires sont impo­sés à 100 %. 
                                    L'initiative 99 % per­met de limi­ter ces pri­vi­lèges, qui pro­fitent prin­ci­pa­le­ment aux riches, 
                                    tout en lut­tant contre l'inégalité crois­sante dans notre pays. Sur le fond, c'est aussi une 
                                    ques­tion de valeurs et de moti­va­tion des tra­vailleurs : voulons-nous récom­pen­ser celui qui 
                                    aug­mente sa for­tune en « lais­sant tra­vailler son argent » pour lui ou celui qui gagne son argent 
                                    par un tra­vail per­sé­vé­rant ?</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">Le Centre</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’augmentation d’impôts prévue par l’initiative ne concernerait pas 
                                    seulement les plus riches, mais aussi la classe moyenne. Et ce sont précisément nos PME qui 
                                    seraient privées de leur substance par l’initiative, ce qui mettrait gravement en péril la 
                                    reprise urgente et nécessaire dont a besoin notre économie après la crise du coronavirus.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Contrairement à ce qu’affirment les initiants, l’initiative 99%, avec sa 
                                    définition très large et ses exceptions très peu nombreuses, touchera particulièrement les PME 
                                    (entreprises familiales, start-ups…). Ces dernières feront face à une augmentation massive des 
                                    impôts. Petits investisseurs, propriétaires immobiliers, propriétaires de leur logement et 
                                    agriculteurs seront également touchés.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En Suisse, l’impôt est déjà fortement progressif, et le 1% des contribuables 
                                    les plus riches s’acquittent notamment de 40% de l’impôt fédéral direct. La Suisse est également 
                                    un des rares pays de l’OCDE à avoir un impôt sur la fortune. Enfin, les inégalités de revenus en 
                                    Suisse sont stables depuis plus de 20 ans et ne sont pas aussi marquées qu’ailleurs (faible 
                                    coefficient de Gini).</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Lorsque le capital est trop fortement taxé, il en résulte une disponibilité 
                                    du capital par travailleur dans l’économie réduite. Ceci a une influence négative sur 
                                    l’investissement, l’innovation et l’esprit d’entreprise. L’attractivité de la Suisse et la 
                                    prospérité sur le long terme seront ainsi réduites par ces incitation négatives.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L'acceptation de cette initiative entraînerait une augmentation massive 
                                    de la charge fiscale pour les investisseurs, les entrepreneurs, les épargnants et les hauts revenus 
                                    et nuirait à l'attractivité de la Suisse en tant que site économique. Les conséquences seraient 
                                    une diminution des investissements ainsi qu'un frein à l'innovation et à l’esprit d'entreprise.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les vert‘libéraux estiment qu'il est juste de moins taxer les salaires 
                                    afin que les revenus du travail effectif soient moins durement imposés. Il est également vrai 
                                    que la forte concentration des richesses sur les mêmes catégories de personnes pose un problème 
                                    évident. « Une réforme de la fiscalité devrait soulager les travailleurs à tous les niveaux, et 
                                    ainsi créer des incitations équitables sur le marché du travail. En ce sens, l'initiative 99% 
                                    n'est pas très efficace, puisqu’elle aimerait prélever un impôt supplémentaire sur les revenus 
                                    du capital de façon excessive en vue d’augmenter les dépenses sociales, sans préciser quelles 
                                    seront ici les priorités. Cela bride également la capacité d'innovation de nos PME et rend les 
                                    successions au sein d’entreprises familiales très onéreuses ».</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le Conseil fédéral et le Parlement sont d’avis que l’initiative affaiblit 
                                    la place économique suisse et réduit les incitations à épargner, ce qui est dommageable pour 
                                    l’emploi et la prospérité. En comparaison internationale, les revenus en Suisse sont répartis de 
                                    manière équilibrée, et le capital est déjà assez lourdement imposé.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En Suisse, les revenus sont répartis de façon plus équilibrée que dans 
                                    la plupart des autres pays de l’OCDE. De plus, une redistribution importante se fait déjà par 
                                    le biais des impôts et des prestations sociales : les dépenses consacrées aux prestations 
                                    sociales représentent un bon quart de la performance économique globale. En outre, la part 
                                    du revenu du capital est restée constante depuis le milieu des années 90 par rapport à l’ensemble 
                                    des revenus. Il n’est donc pas nécessaire d’agir.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’initiative crée des injustices en demandant que le revenu du capital 
                                    soit plus lourdement imposé que le revenu du travail. Le revenu du capital n’est pas réalisé 
                                    sans rien faire. Le capital doit lui aussi être produit : il faut réaliser un revenu et le 
                                    mettre de côté.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Une imposition plus élevée du revenu du capital réduirait l’incitation à 
                                    faire des épargnes et à constituer un capital grâce à celles-ci. Le capital est nécessaire pour 
                                    que de nouvelles entreprises (par ex. jeunes pousses) puissent être créées et pour que les 
                                    entreprises existantes puissent faire des investissements (par ex. dans l’extension des capacités 
                                    de production ou dans de nouvelles technologies). La constitution de capital crée ainsi des 
                                    emplois et augmente la productivité. Entraver ces activités par des impôts plus élevés est 
                                    dommageable pour l’emploi et pour la prospérité en Suisse.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">C’est précisément pour les personnes dont le revenu du capital est élevé 
                                    que les impôts jouent un rôle essentiel dans le choix du domicile. L’initiative affaiblit 
                                    l’attrait de la place économique suisse. En comparaison internationale, la charge fiscale 
                                    pesant sur le capital en Suisse est déjà assez lourde à l’heure actuelle en raison de l’impôt 
                                    sur la fortune et de l’imposition élevée des dividendes, en particulier en l’absence de 
                                    participation d’au moins 10 %.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le texte de l’initiative soulève de nombreuses questions : on ne sait 
                                    pas au-delà de quel montant les revenus du capital seraient imposés plus lourdement, quels 
                                    éléments du revenu seraient concernés et comment les recettes supplémentaires seraient 
                                    redistribuées. Par ailleurs, le revenu du capital est très sensible à l’imposition. Il est 
                                    peu probable de voir se réaliser les recettes supplémentaires escomptées par les auteurs de 
                                    l’initiative. L’objectif de redistribution visé ne devrait donc pas être atteint. En fonction 
                                    de la mise en oeuvre, l’imposition plus élevée du capital pourrait concerner bien davantage de 
                                    personnes que l’initiative ne le prévoit.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Alliance du NON</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les Jeunes socialistes lancent une nouvelle offensive pour augmenter 
                                    les impôts. Ils réclament des hausses d’impôt et une nouvelle taxe sur les revenus du capital 
                                    dont ils espèrent 8 milliards de francs de recettes supplémentaires. La nouvelle taxe frapperait 
                                    des revenus du capital dès le premier franc. Pire : au-delà d’un certain seuil – encore à 
                                    déterminer – les revenus devraient être imposés à 150% ; ainsi, les Jeunes socialistes veulent 
                                    ajouter des revenus fictifs aux revenus réels pour taxer plus lourdement les contribuables. 
                                    L’initiative est par ailleurs très floue sur bien des points. Les citoyens ne savent donc pas 
                                    s’ils seront concernés, ni ce qui serait fait de leur argent.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Alliance du NON</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La rhétorique des Jeunes socialistes est celle de la lutte des classes. 
                                    C’est simple et émotionnel : il faut faire payer les riches. Mais attention aux mauvaises surprises. 
                                    Si une personne a investi un peu d’argent, si elle est propriétaire d’un appartement, d’une maison, 
                                    ou d’une exploitation agricole, si une personne dirige une entreprise ou investit dans des sociétés 
                                    innovantes (start-up), elle se retrouvera prise au piège tendu par l’initiative. Avec ce texte, les 
                                    gains en capital seront imposés dès le premier franc ! Le débat sur le montant-seuil est donc 
                                    trompeur, car il n’y a pas de franchise en-dessous. L’initiative ne touchera donc pas seulement le 
                                    1% des personnes les plus riches, mais aussi la classe moyenne. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Alliance du NON</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les entreprises familiales et les PME suisses, dont certaines ont été 
                                    durement touchées par la pandémie, sont particulièrement concernées par cette nouvelle taxe. 
                                    Après les dizaines de milliards de francs mis à disposition par la Confédération et les cantons 
                                    pour les aider à passer le cap de la crise, il serait absurde de les faire passer à la caisse 
                                    pour des impôts supplémentaires. L’initiative rendrait aussi la transmission des entreprises 
                                    familiales à la génération suivante beaucoup plus difficile et risquée. La hausse des impôts 
                                    priverait l’entreprise des fonds dont elle a besoin pour investir et innover. En vidant 
                                    l’entreprise de son capital, l’initiative forcerait la nouvelle génération devrait s’endetter 
                                    davantage.</p>
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