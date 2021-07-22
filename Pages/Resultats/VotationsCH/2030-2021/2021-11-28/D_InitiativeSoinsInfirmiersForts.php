<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative populaire "Pour des soins infirmiers forts"</title>
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
            <h1 class="uk-heading-large">Initiative populaire "Pour des soins infirmiers forts"</h1>
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
                        <p class="uk-text-justify">Dans les années à venir, le nombre de personnes ayant
                        besoin de soins va augmenter fortement. En effet, l'espérance de vie augmente grâce à de meilleures conditions
                        de vie et grâce au développement de la médecine. L'Office fédéral de la statistique prévoit que 2.7 millions
                        de personnes auront plus de 65 ans en Suisse dans les 30 ans à venir.
                        </p>

                        <p class="uk-text-justify">A l'inverse, il y a une pénurie d'infirmières et d'infirmiers.
                        Selon la Confértence des directeurs de la santé, la Suisse a formé 56 % du personnel infirmier nécessaire.
                        En ce qui concerne les infirmières et les infirmiers HES, ce chiffre se monte à 43 %. En conséquence, la Suisse
                        aura besoin de 65'000 soignants supplémentaires d'ici 2030.
                        </p>

                        <p class="uk-text-justify">Ce manque de personnel ne pourra être compensé en recrutant du personne étranger.
                            Selon l'OFS, la Suisse est le pays occidental qui emploie le plus de personne infirmier formé à l'étranger
                            (36 %). En Allemagne, mais également dans de nombreux Etats, la situation professionnelle des infirmières
                            et des infirmiers veut être améliorée et bénéficie d'une forte volonté politique, ceci pour que le personnel
                            formé dans le pays y reste.
                        </p>

                        <p class="uk-text-justify">La pénurie du personnel infirmier est une réalité dans le terrain. En juillet 2020,
                            il y avait 7'900 postes d'infirmiers vacants en Suisse (source : comité d'initiative). Cette situation
                            empêche les infirmiers de soigner les patients de manière correcte et, en raison de contraintes de temps,
                            ils ne peuvent plus effectuer des activités importantes pour la santé des patients.
                        </p>

                        <iframe title="Population résidente permanente selon l'âge (1981-2019)" aria-label="Interactive line chart" id="datawrapper-chart-ojn6K" src="https://datawrapper.dwcdn.net/ojn6K/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="600"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>

                    <h3>Que demande l'initiative ?</h3>
                    <hr>
                    <div class="uk-column-1-5@m uk-column-1-1@s" style="padding-bottom: 4%">
                        <h5>Promouvoir la formation et la formation continue</h5>
                        <p class="uk-text-justify" style="padding-bottom: 10%">Un soutien financier doit être accordé à la formation et à la formation 
                            continue en soins infirmiers. Le salaire de formation des infirmières et infirmiers (ES/HES) 
                            doit être relevé afin d’augmenter le nombre d’étudiants. Ce salaire permettrait aussi aux assistants 
                            en soins de santé communautaires de suivre la formation d’infirmière et infirmier s’ils le souhaitent 
                            tout en parvenant à subvenir à leurs besoins.
                        </p>
                        
                        <h5>Garantir la qualité des soins infirmiers et la sécurité des patients</h5>
                        <p class="uk-text-justify" style="padding-bottom: 20%">Une infirmière devrait être responsable d’un nombre maximal de patients, en 
                            fonction du domaine dans lequel elle exerce. En plus d’assurer la qualité des soins infirmiers et la 
                            sécurité des patients, cela constituerait aussi une utilisation efficace des ressources. Le maintien du 
                            personnel au sein de la profession serait favorisé grâce à une plus grande satisfaction au travail.
                        </p>

                        <h5>Des prestations rémunérées de manière appropriée</h5>
                        <p class="uk-text-justify" style="padding-bottom: 35%">Le financement des prestations de soins doit correspondre aux dépenses réelles 
                            dans les soins infirmiers. Cela signifie que les tarifs et les contributions devraient couvrir les 
                            dépenses de façon adéquate, afin de pouvoir employer suffisamment de personnel qualifié.
                        </p>

                        <h5>La reconnaissance d'un domaine de responsabilités propre aux soins infirmiers</h5>
                        <p class="uk-text-justify">Les prestations infirmières sont déterminées par une ordonnance 
                            médicale ou de manière indépendante par l’infirmier. Or, la reconnaissance d’un domaine 
                            de responsabilités propre aux infirmiers n’implique pas de changement dans l’évaluation des besoins et 
                            dans les tâches de contrôle des assureurs. Cette reconnaissance permettrait de réduire l’effort 
                            administratif et d’économiser les dépenses liées aux prescriptions médicales. Cela revaloriserait 
                            la profession.
                        </p>

                        <h5>L'amélioration des conditions de travail</h5>
                        <p class="uk-text-justify" style="padding-bottom: 10%">Il est très important que les horaires et la planification du travail soient fiables. 
                            Cela afin de parvenir à concilier vie professionnelle et familiale. Les conditions de travail devraient être 
                            réglementées dans une CCT ou au moins correspondre à une norme CCT. Cela favoriserait le maintien dans la 
                            profession des infirmières et infirmiers, et le retour dans la profession des personnes avec une famille.
                        </p>
                    </div>

                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>Nouvel article dans la Constitution</h3>
                        <hr>
                        <h5>Art. 117c Soins infirmiers</h5>
                        <p class="uk-text-justify">1 La Confédération et les cantons reconnaissent les soins infirmiers comme 
                            une composante importante des soins et les encouragent; ils veillent à ce que chacun ait accès à 
                            des soins infirmiers suffisants et de qualité. 
                        </p>

                        <p class="uk-text-justify">2 Ils garantissent qu’il y ait un nombre suffisant d’infirmiers diplômés 
                            pour couvrir les besoins croissants et que l’affectation des personnes exerçant dans le domaine 
                            des soins infirmiers corresponde à leur formation et à leurs compétences. 
                        </p>
                            
                        <h3>La question qui vous est posée : </h3>        
                        <hr>
                        <b><p class="uk-text-justify" style="padding-bottom: 20%">Acceptez-vous l'initiave populaire 
                        "Pour des soins infirmiers forts" ?</p></b>
                    </div>
                </li>        

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_InitiativeSoinsInfirmiersForts" aria-label="Anneau de choix" id="datawrapper-chart-ipjzN" src="https://datawrapper.dwcdn.net/ipjzN/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>  

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU-initiativeSoinsInfirmiersForts" aria-label="Anneau de choix" id="datawrapper-chart-FOuiw" src="https://datawrapper.dwcdn.net/FOuiw/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_InitiativeJustice (Copy)" aria-label="chart" id="datawrapper-chart-0xFUp" src="https://datawrapper.dwcdn.net/0xFUp/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="200"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>
                </li>  

                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L'initiative sur les soins infirmiers garantit que suffisamment d'infirmières
                                    et d'infirmiers sont formés, car le nombre de personnes ayant besoin de soins va croitre massivement
                                    dans les années à venir et il y a une pénurie d'infirmières et d'infimrmiers.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L'initiative sur les soins infirmiers garantit la qualité des soins et la 
                                    sécurité du patient. Pour la Suisse, deux analyses réalisées en automne 2019 par Prof. Dr Michael 
                                    Simon et son équipe de chercheurs démontrent les effets positifs d’une dotation suffisante en 
                                    personnel infirmier: des centaines de décès et d’hospitalisations inutiles peuvent être évitées 
                                    dans les hôpitaux et les établissements médico-sociaux (EMS) grâce à une dotation suffisante en 
                                    personnel infirmier. Des coûts considérables et beaucoup de souffrances peuvent ainsi être évités.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L'initiative sur les soins infirmiers permet de garder plus longtemps 
                                    le personnel dans la profession. Ces professionnels n’ont pas d’incitations ni d’avantages et, 
                                    surtout, aucune ressource pour fournir des prestations qui ne sont pas objectivement justifiées.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le nombre d’animaux élevés pour la production de viande et d’œufs en Suisse est aujourd’hui 
                                artificiellement augmenté par l’importation massive de 1,2 million de tonnes de fourrage par an.
                                Il en résulte un excédent de lisier, qui entraîne la présence de nitrates cancérigènes dans
                                l’eau potable.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Seule l’augmentation du nombre de professionnels garantira que des soins 
                                    pourront continuer d’être prodigués à tous.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Il est nécessaire d'avoir davantage de jeunes professionnels pour assurer la 
                                    fourniture de soins.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L'afflux de personnel infirmier étranger est en baisse.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La pénurie de soignants est une réalité dans de nombreux endroits - 
                                    chaque année, plusieurs milliers d'emplois ne sont pas repourvus.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Suisse forme moins de la moitié de son besoin annuel en personnel 
                                    infirmier.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour des soins compétents et humains! Oui à l'initiative sur les 
                                    soins infirmiers. Pour la qualité des soins, aussi à l'avenir! Oui à l'initiative sur les 
                                    soins infirmiers.</p>
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
                                <p>Le Conseil fédéral refuse d’accorder un traitement particulier à un nouveau groupe professionnel dans la 
                                    Constitution. En outre, le personnel infirmier ne doit facturer aucune prestation directement. 
                                    Le Conseil fédéral redoute également des frais supplémentaires dus à l’augmentation du volume 
                                    des prestations si le personnel infirmier peut fournir et facturer des prestations sans 
                                    prescription médicale.</p>
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