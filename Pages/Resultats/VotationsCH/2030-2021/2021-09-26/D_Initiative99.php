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
                        <p class="uk-text-justify">26% des contribuables possède 3% de la fortune nette (entre 0 et 50'000 CHF).</p>

                        <p class="uk-text-justify">28% des contribuables possède 33% de la fortune nette (entre 50'000 et 500'000 CHF).</p>

                        <p class="uk-text-justify">6% des contribuables possède 63% de la fortune nette (plus de 500'000 CHF).</p>
                    </div>

                    <h3>Que demande l'initiative ?</h3>
                    <hr>                                        
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 1%">
                        <p class="uk-text-justify">Les revenus de capitaux (en opposition aux revenus du travail salarié ou indépendant)
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
                                que le 1 % le plus riche s’approprient les fruits de leur travail. </p>
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
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Elle crée un peu plus de jus­tice en Suisse, car elle éli­mine l'imposition 
                                    pri­vi­lé­giée accor­dée actuel­le­ment aux divi­dendes par rap­port aux salaires et contre­carre ainsi 
                                    l'inégalité toujours crois­sante dans le pays.</p>
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
                                <p class="uk-text-justify">L'acceptation de cette initiative entraînerait une augmentation massive 
                                    de la charge fiscale pour les investisseurs, les entrepreneurs, les épargnants et les hauts revenus 
                                    et nuirait à l'attractivité de la Suisse en tant que site économique. Les conséquences seraient 
                                    une diminution des investissements ainsi qu'un frein à l'innovation et à l’esprit d'entreprise.</p>
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