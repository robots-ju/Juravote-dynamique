<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire "Désignation des juges fédéraux par tirage au sort"</title>
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
            <h1 class="uk-heading-large">Initiative populaire "Désignation des juges fédéraux par tirage au sort"</h1>
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
                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 5%">
                        <p class="uk-text-justify" style="padding-bottom: 1%">L'initiative demande à ce que les juges fédéraux
                        soient tirés au sort et non plus élus par le Parlement fédéral. Selon le comité d'initiative, les juges fédéraux
                        doivent pouvoir prendre leurs décisions sans être gênés par des conflits d'intérêts et des influences politiques.
                        C'est pourquoi il faut permettre à des juristes de devenir juges fédéraux sur le seul fondement de leurs
                        compétences - même s'ils n'ont aucun réseau de relations dans la politique ou dans l'administration.
                        </p>

                        <p class="uk-text-justify">Une fois devenues juges, il est également important que ces personnes ne 
                            craignent pas d’être désavantagées lorsqu’elles prennent des décisions délicates et qu’elles ne 
                            puissent pas être révoquées. Les candidates et les candidats aux postes de juges ne peuvent participer 
                            au tirage au sort que sur la base de leurs qualifications professionnelles et personnelles. Cette 
                            procédure garantit une composition équitable du Tribunal fédéral sans tenir compte d’une éventuelle 
                            appartenance à un parti. Les juges fédéraux désignés par tirage au sort restent en fonction jusqu’à 
                            leur retraite.
                        </p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 4%">
                        <h3>Modifications de la Constitution</h3>
                        <hr>
                        <div class="uk-column-1-2@m uk-column-1-1@s">
                            <h4>Avant</h4>              
                            <h4>Après</h4>
                        </div>

                        <h5>Art. 145 Durée de fonction</h5>
                        <hr>
                        <div class="uk-column-1-2@m uk-column-1-1@s">
                            <p class="uk-text-justify" style="padding-bottom: 45%">Les membres du Conseil national et du Conseil fédéral, ainsi que le
                                chancelier ou la chancelière de la Confédération sont élus pour quatre ans. Les juges au
                                Tribunal fédéral sont élus pour 4 ans.
                            </p>

                            <p class="uk-text-justify">1. Les membres du Conseil national et du Conseil fédéral ainsi que le 
                                chancelier ou la chancelière de la Confédération sont élus pour quatre ans. La durée de 
                                fonction des juges au Tribunal fédéral prend fin cinq ans après qu’ils ont atteint l’âge 
                                ordinaire de la retraite.
                            </p>

                            <p class="uk-text-justify">2. L’Assemblée fédérale siégeant en conseils réunis peut, sur 
                                proposition du Conseil fédéral, révoquer à la majorité des votants un juge au Tribunal 
                                fédéral si le juge:
                                <ul>
                                    <li>a violé gravement ses devoirs de fonction ;</li>
                                    <li>a durablement perdu la capacité d'exercer sa fonction.</li>
                                </ul>
                            </p>
                        </div>

                        <h5>Art. 168 al. 1 Elections</h5>
                        <hr>
                        <div class="uk-column-1-2@m uk-column-1-1@s">
                            <p class="uk-text-justify">L'Assemblée fédérale élit les membres du Conseil fédéral, le chancelier
                                ou la chancelière de la Confédération, les juges au Tribunal fédéral et le général.
                            </p>

                            <p class="uk-text-justify">L’Assemblée fédérale élit les membres du Conseil fédéral, le chancelier 
                                ou la chancelière de la Confédération et le général.
                            </p>
                        </div>

                        <h5>Art. 188a Désignation des juges au Tribunal fédéral</h5>
                        <hr>
                        <div class="uk-column-1-2@m uk-column-1-1@s">
                            <p class="uk-text-justify" style="padding-bottom: 80%">Cet article n'existe pas actuellement.
                            </p>

                            <p class="uk-text-justify">1. Les juges au Tribunal fédéral sont désignés par tirage au sort. 
                                Celui-ci est organisé de manière à ce que les langues officielles soient équitablement 
                                représentées au Tribunal fédéral.
                            </p>

                            <p class="uk-text-justify">2. L’admission au tirage au sort est régie exclusivement par des 
                                critères objectifs d’aptitude professionnelle et personnelle à exercer la fonction de juge 
                                au Tribunal fédéral.
                            </p>

                            <p class="uk-text-justify">3. Une commission spécialisée décide de l’admission au tirage au sort. 
                                Les membres de la commission sont nommés par le Conseil fédéral pour un mandat unique de 12 ans. 
                                Ils sont indépendants des autorités et des organisations politiques dans l’exercice de leur activité.
                            </p>
                        </div>

                        <h5>Art. 197 ch. 12 Dispositions transitoire</h5>
                        <hr>
                        <div class="uk-column-1-2@m uk-column-1-1@s">
                            <p class="uk-text-justify" style="padding-bottom: 10%">Cet article n'existe pas actuellement. 
                            </p>

                            <p class="uk-text-justify">Les juges ordinaires au Tribunal fédéral qui sont en fonction à l’entrée 
                                en vigueur des art. 145, 168, al. 1, et 188a peuvent le rester jusqu’à la fin de l’année où ils 
                                atteignent l’âge de 68 ans.
                            </p>
                        </div>

                        <h3>Procédure de tirage au sort envisagée</h3>
                        <hr>
                        <h5>Désignation d'une commission d'experts</h5>
                        <p class="uk-text-justify">Le Conseil fédéral nomme une commission spécialisée indépendante pour un
                            mandat d'une durée limitée. Cela permet de garantir que cette commission d'experts ne se mette pas
                            en position de force.
                        </p>

                        <h5>Etablissement des conditions-cadres</h5>
                        <p class="uk-text-justify">Le Parlement fixe, avec le Conseil fédéral et la Présidence du Tribunal fédéral,
                            les nombre minimum et maximum de postes de juges fédéraux qui doivent et peuvent être occupés. Cette
                            fourchette est déterminée au niveau fédéral et indique le nombre minimum de juges par région linguistique.
                        </p>

                        <h5>Détermination des besoins en personnel</h5>
                        <p class="uk-text-justify">Le Tribunal fédéral planifie ses besoins en personnel à moyen terme.
                            Il prévoit les mises au concours de postes de juges fédéraux nécessaires.
                        </p>

                        <h5>Procédure de sélection</h5>
                        <p class="uk-text-justify">Les postes de juges fédéraux sont mis au concours. La commission spécialisée examine
                            les candidatures reçues. Les candidatures des personnes qui remplissent les critères
                            personnels, professionnels et linguistiques requis sont mises dans une urne pour être
                            tirées au sort.
                        </p>

                        <h5>Tirage au sort</h5>
                        <p class="uk-text-justify" style="padding-bottom: 70%">Chaque fois qu’il faut attribuer un poste de juge, un tirage au sort public a lieu, au cours
                            duquel les candidatures de l’ensemble des candidates et des candidats qui satisfont aux
                            exigences personnelles, professionnelles et linguistiques requises sont déposées dans
                            l’urne adéquate.
                            Le public peut voir combien de juges fédéraux doivent être désignés, comment la répartition
                            linguistique des postes a été calculée et quels sont les résultats du tirage au sort.
                        </p>
                    </div>

                    <h3>La question qui vous est posée : </h3>        
                    <hr>
                    <b><p class="uk-text-justify">Acceptez-vous l'initiave populaire 
                    "Désignation des juges fédéraux par tirage au sort" ?</p></b>
                </li>        

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_InitiativeJustice" aria-label="Anneau de choix" id="datawrapper-chart-vxQXS" src="https://datawrapper.dwcdn.net/vxQXS/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU-initiativeJustice" aria-label="Anneau de choix" id="datawrapper-chart-Xykuh" src="https://datawrapper.dwcdn.net/Xykuh/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_InitiativeJustice" aria-label="chart" id="datawrapper-chart-C4YMV" src="https://datawrapper.dwcdn.net/C4YMV/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="200"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>
                </li>  

                <li>       
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour améliorer la confiance envers le Tribunal fédéral. Car seules les aptitudes 
                                    professionnelles et personnelles sont décisives, et non l'appartenance à un parti.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour renforcer notre système démocratique. Parce que seule la procédure de tirage au 
                                    sort pour nommer les juges fédéraux garantit l'égalité des chances.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour une séparation stricte des pouvoirs. Afin que le Tribunal fédéral juge de manière impartiale.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La désignation des juges fédéraux par tirage au sort place leurs aptitudes, leurs connaissances 
                                    spécialisées et leur expérience professionnelle au premier plan.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le tirage au sort est une méthode de sélection plus démocratique que les élections, car il 
                                    garantit l’égalité des chances à toute personne qualifiée.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La façon dont les juges fédéraux sont actuellement élus ne respecte pas entièrement la 
                                    séparation des pouvoirs, et le risque que des intérêts partisans interférent avec la 
                                    bonne marche de la justice est réel.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les juges fédéraux doivent être nommés sur la base de leurs aptitudes professionnelles et 
                                    personnelles et non de leur carte de parti.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La séparation des pouvoirs est le fondement de notre démocratie.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La nomination des juges fédéraux par une procédure de tirage au sort améliora la séparation 
                                    de pouvoir et par conséquence la qualité de la jurisprudence.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’indépendance de notre juridiction suprême est l’un des éléments centraux de la séparation 
                                    des pouvoirs, et donc de la démocratie directe. La désignation des juges fédéraux par tirage 
                                    au sort est la meilleure garantie de cette indépendance.</p>
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
                                <p class="uk-text-justify">La désignation des juges au Tribunal fédéral par tirage au sort constituerait un élément étranger 
                                    à l'ordre juridique suisse. En Suisse, les juges sont élus par le peuple ou par le parlement, au 
                                    niveau cantonal comme au niveau fédéral. L'élection des juges au Tribunal fédéral est une 
                                    prérogative de l'Assemblée fédérale. En cas d'acceptation de l'initiatiative, ce mécanisme 
                                    démocratique serait remplacé par une sélection aléatoire. Les vainqueurs ne seraient pas les 
                                    meilleurs candidats en lice, mais les plus chanceux. La légitimité démocratique du Tribunal 
                                    fédéral s'en trouverait aussi affaiblie.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le système actuel de nomination et d'élection des juges au Tribunal 
                                    fédéral par l'Assemblée fédérale, qui jouit d'une légitimité démocratique, a fait ses preuves. 
                                    Il permet de prendre en considération, en plus des aptitudes professionnelles, des critères liés 
                                    à la langue et à la représentation régionale. L'Assemblée fédérale tient en outre 
                                    traditionnellement compte des prétentions des grands partis à être représentés de façon 
                                    proportionnelle au Tribunal fédéral. Ces mécanismes garantissent une composition du tribunal qui 
                                    soit représentative de la société et accroisse aussi l'acceptation par la population des arrêts 
                                    rendus par le Tribunal fédéral.</p>
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