<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Référendum contre la Loi COVID-19</title>
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
            <h1 class="uk-heading-large">Loi COVID-19</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h3>De quoi s'agit-il ?</h3>
                        <hr>
                        <p class="uk-text-justify" style="padding-bottom: 5%">Au printemps 2020, le Conseil fédéral a pris des mesures pour
                        protéger la population d’une infection et prévenir une surcharge des hôpitaux, en se fondant 
                        sur la loi sur les épidémies, mais aussi décidé de prestations de soutien aux personnes et 
                        aux entreprises qui souffraient des conséquences économiques de la pandémie.</p>
                        <p class="uk-text-justify"> Comme la loi sur 
                        les épidémies ne prévoit pas de telles prestations, le Conseil fédéral s’est appuyé directement 
                        sur la Constitution. Celle-ci l’autorise en effet à prendre des mesures de droit d’urgence en 
                        cas de danger imminent. Le droit d’urgence de ce type est toujours limité à six mois. Si les 
                        mesures prises directement sur la base de la Constitution doivent durer plus longtemps, le 
                        Conseil fédéral est tenu de soumettre un projet de loi au Parlement. C’est ce qu’il a fait 
                        avec la loi COVID-19.
                        </p>

                        <h3>Décision et référendum</h3>
                        <hr>
                        <p class="uk-text-justify" style="padding-bottom: 30%">Le Parlement a adopté la loi en septembre 2020 et l’a déclarée urgente 
                        pour qu’elle entre en vigueur immédiatement. La validité de la loi est elle aussi limitée dans 
                        le temps : la quasi-totalité de ses dispositions ont effet jusqu’à la fin de l’année 2021. 
                        On vote parce que le référendum lancé contre la loi a abouti.
                        </p>

                        <h3>Aides financières</h3>
                        <hr>
                        <p class="uk-text-justify">Le Conseil fédéral a pris de vastes mesures depuis le début de 
                        la pandémie afin d’en atténuer les conséquences économiques pour les personnes et les entreprises. 
                        La loi COVID-19 constitue ainsi la base légale pour l’octroi des indemnités en cas de réduction 
                        de l’horaire de travail (RHT), des allocations pour perte de gain COVID-19, des aides pour les 
                        cas de rigueur destinées aux restaurants, aux hôtels, aux agences de voyage ou au secteur de 
                        l’événementiel, ainsi que pour les mesures de soutien à la culture, au sport et aux média.
                        </p>

                        <p class="uk-text-justify">Plus d’une centaine de milliers d’entreprises et plus d’un million 
                        de personnes ont eu besoin et dépendent toujours des aides financières de la Confédération. 
                        Les aides financières devraient s’élever à environ 30 milliards de francs.</p>
                    </div>

                    <h3>La question qui vous est posée : </h3>
                    <hr>
                    <b><p class="uk-text-justify">Acceptez-vous la Loi fédérale
                    sur les bases légales des ordonnances du Conseil fédéral visant à surmonter l'épidémie
                    de COVID-19 ?</p></b>
                </li>

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_Loi COVID-19 2021" aria-label="chart" id="datawrapper-chart-Faj4S" src="https://datawrapper.dwcdn.net/Faj4S/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU Loi COVID19 2021" aria-label="chart" id="datawrapper-chart-2wDG8" src="https://datawrapper.dwcdn.net/2wDG8/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="AutoritesCH_IP Eau Potable 2021 (Copy)" aria-label="chart" id="datawrapper-chart-xhCQv" src="https://datawrapper.dwcdn.net/xhCQv/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>       
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi est nécessaire pour surmonter la plus grave crise que nous ayons connue depuis 
                                la Seconde Guerre mondiale. Elle permet de soutenir financièrement des centaines de 
                                milliers de personnes et d’entreprises qui sont dans une situation de détresse, et donc 
                                d’atténuer les souffrances et de préserver emplois et salaires.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi covid-19 est essentielle pour maîtriser la 
                                pandémie due au coronavirus et ses répercussions.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Cette loi permet de prendre les mesures 
                                indispensables en matière d’aide, comme pour les cas de rigueur ou 
                                l’extension des indemnités de chômage partiel.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Cette loi covid-19 représente une avancée démocratique. 
                                Elle règle et précise les compétences du Conseil fédéral ainsi que l’implication 
                                des cantons et du Parlement fédéral pour maîtriser la pandémie du covid-19.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En cas de non, toutes les mesures de soutien 
                                durement acquises et indispensables dans la situation actuelle tomberaient à l’eau.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Loi COVID-19 enté­rine essen­tiel­le­ment les mesures 
                                visant à atté­nuer l'impact de la pan­dé­mie de Covid sur la société et l'économie. 
                                Un NON à cette loi ne ferait que péna­li­ser une fois de plus tous ceux qui doivent 
                                déjà sup­por­ter les conséquences éco­no­miques pénibles des fer­me­tures. Les impor­tantes 
                                mesures d'aide sup­plé­men­taires que le Par­le­ment a adop­tées depuis lors dans le cadre 
                                des révi­sions de la loi seraient alors éga­le­ment anéan­ties. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Cette loi vise notamment à encadrer les compétences 
                                particulières du Conseil fédéral liées à la lutte contre l’épidémie de COVID-19 
                                et à surmonter les conséquences des mesures de lutte sur la société, l’économie 
                                et les autorités. L’octroi des aides aux secteurs et aux travailleurs les plus 
                                touchés par les restrictions imposées par le Conseil fédéral seraient également 
                                régies par la loi. Cette loi et ses effets sont limités dans le temps, jusqu’au 
                                31 décembre 2021. Les préoccupations fondamentales des libéraux-radicaux de vivre 
                                librement et de manière responsable restent d’actualité, tout en tenant compte non 
                                seulement de la situation épidémiologique, mais aussi des conséquences économiques 
                                et sociales de celle-ci.</p>
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
                                <p class="uk-text-justify">La loi a été élaborée dans la précipitation et mise en vigueur en contournant le peuple. 
                                Le comité lui reconnaît des éléments positifs, mais y voit des éléments dommageables 
                                tels que les subventions aux médias. Selon lui, le Conseil fédéral peut aider autrement 
                                les personnes lésées par les mesures de lutte contre la pandémie.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi Covid-19 autoriserait l’usage de vaccins génétiques dont les tests de 
                                validation peuvent être sensiblement raccourcis. Combinée à la loi sur les épidémies, 
                                elle permettrait l’utilisation de vaccins génétiques jusqu’à présent jamais testés sur 
                                l’être humain et dont les effets à long terme sont inconnus. Le tragique épisode du 
                                Thalidomide se répètera-t-il ?</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le Conseil fédéral demande une prolongation du droit d’urgence alors que l’existence 
                                même de la pandémie est contestée. Pourtant, le Conseil fédéral pourrait remplacer 80 % 
                                de la loi Covid-19 par des lois urgentes soumises à l’Assemblée fédérale et le reste par 
                                de nouvelles ordonnances, si nécessaire.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi urgente Covid-19 porte atteinte à la démocratie directe. En raison de l’urgence 
                                de cette loi, un référendum n’aurait pas d’effet suspensif. Le peuple ne pourrait se 
                                prononcer que plus tard et il serait ainsi mis devant un fait accompli, ce qui est 
                                inacceptable !</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Loi Covid-19 est superflue. Le Conseil fédéral pourrait
                                très bien s'en passer. Il dispose déjà de tous les outils nécessaires pour faire face
                                à une hypothétique résurgence de la pandémie.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Il deviendrait possible de rendre obligatoire la vaccination
                                avec une vaccin génétique insuffisament testé.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi Covid-19 prévoit des subventions pour les médias. 
                                Les principaux bénéficiaires seraient ceux qui sèment la peur, par exemple en 
                                diffusant systématiquement le nombre de cas sans mentionner le nombre exponentiel 
                                des tests.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La "deuxième vague" est une projection erronée. Sur la 
                                base d’hypothèses erronées, un conseiller scientifique du Conseil fédéral a prédit 
                                jusqu’à dix fois plus de décès en été que lors de la vague du printemps.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En réalité, la pandémie est déjà terminée. Seule 
                                l’augmentation du nombre de tests et, par conséquent, de « cas » continue à 
                                donner l’illusion de son existence.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le Conseil fédéral s'arroge des pouvoirs extraordinaires
                                qui n'ont pas lieu d'être. La loi Covid-19 marque une nouvelle phase dans la gestion 
                                de la crise : il s’agit de faire face par l’endettement aux dommages qu’ont causés 
                                les mesures du Conseil fédéral. Les banques et les grandes entreprises en bénéficieraient 
                                avant tout.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les mesures contre la pandémie ne doivent pas pouvoir être
                                prolongées et étendues sans examen. Sans enquête parlementaire ni débat public, les 
                                mesures urgentes ne doivent pas être élevées au rang de loi.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La légitimation rétroactive des mesures est inadmissible.
                                Les mesures prises dans une « situation extraordinaire » doivent rester extraordinaires.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La gestion des crises contre l'avis du people ne fonctionne
                                pas en Suisse. Les situations difficiles ne peuvent être maîtrisées que par la 
                                coopération entre le gouvernement et le peuple.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi fédérale d'urgence est un affront au peuple souverain.
                                Le Conseil fédéral tente, sans nécessité, d’accroître son pouvoir aux dépens du peuple.</p>
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