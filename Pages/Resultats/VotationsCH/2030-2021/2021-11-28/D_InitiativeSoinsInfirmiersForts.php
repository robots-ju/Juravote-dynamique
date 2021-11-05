<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
        </div>

        <div>
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
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

                        <p class="uk-text-justify" style="padding-bottom: 15%">2 Ils garantissent qu’il y ait un nombre suffisant d’infirmiers diplômés 
                            pour couvrir les besoins croissants et que l’affectation des personnes exerçant dans le domaine 
                            des soins infirmiers corresponde à leur formation et à leurs compétences. 
                        </p>
                            
                        <h3>Contre-projet des autorités</h3>
                        <hr>
                        <p class="uk-text-justify">Les autorités fédérales présentent un contre-projet indirect pour renforcer
                            davantage les professions des soins, car elles estiment que l'initiative va trop loin au niveau des
                            conditions de travail et de la rémunération.
                        </p>

                        <p class="uk-text-justify">Le contre-projet reprend les principales demandes de l'initiative et permettrait
                            une mise en oeuvre plus rapide. Un milliard de francs sera à disposition pendant 8 ans pour la promotion
                            des formations :
                            <ul>
                                <li>Aides financières pour les étudiants infirmiers en hautes écoles (HES) ou en écoles supérieures (ES).</li>
                                <li>Les institutions (Hôpitaux, homes, etc...) recevront des contributions de soutien pour la formation
                                    pratique d'infirmiers diplômés.</li>
                                <li>Les HES et les ES recevront des subventions si les places de formation augmentent.</li>
                            </ul>
                        </p>

                        <p>Le contre-projet permettra aussi aux infirmiers de facturer certains soins à l'assurance maladie obligatoire.
                            Il entrera en vigueur si l'initiative est rejetée le 28 novembre et si un éventuel référendum déposé contre
                            le contre-projet n'aboutit pas.</p>
                    </div>

                    
                    <h3>La question qui vous est posée : </h3>        
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 20%">Acceptez-vous l'initiave populaire 
                    "Pour des soins infirmiers forts" ?</p></b>
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
                                <p class="uk-text-justify">Le contre-projet du Parlement se concentre sur des investissements
                                dans la formation qui sont sans effet sur les abandons
                                de carrière précoces. Il ne prévoit pas assez de mesures pour
                                garantir la qualité des soins et améliorer les conditions de travail.
                                Les investissements prévus par le Parlement dans la formation
                                seraient du gaspillage d’argent.
                                </p>
                            </div>
                        </div>
                    
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
                                <p class="uk-text-justify">
                                L'initiative sur les soins infirmiers permet de garder plus longtemps 
                                le personnel dans la profession. Ces professionnels n’ont pas d’incitations ni d’avantages et, 
                                surtout, aucune ressource pour fournir des prestations qui ne sont pas objectivement justifiées.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour des soins compétents et humains! Oui à l'initiative sur les 
                                    soins infirmiers. Pour la qualité des soins, aussi à l'avenir! Oui à l'initiative sur les 
                                    soins infirmiers.
                                </p>
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
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le manque en personnel soignant est criant : 10’000 postes sont
                                actuellement vacants et d’ici 2029 nous aurons besoin de 70’000 soignant-e-s supplémentaires.
                                Pour y remédier, il faut que davantage de personnes embrassent le métier. Car la Suisse ne forme
                                aujourd’hui que la moitié de son besoin annuel en personnel. Or, cette pénurie ne peut pas être
                                résorbée à volonté par une main d’œuvre étrangère qualifiée. En effet, d’autres pays manquent
                                également de main d’œuvre qualifiée et s’efforcent de devenir plus attrayants pour le personnel
                                soignant. Conséquence : moins de soignant-e-s provenant de l’étranger arrivent en Suisse.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3> <p class="uk-text-justify">L’initiative permettra à la Confédération et aux cantons de participer
                                au financement de la formation initiale et continue, et donc d’augmenter rapidement le nombre
                                de soignant-e-s. Elle relève enfin les indemnisations de formation, actuellement souvent
                                inférieures à 1’500 francs. En améliorant les conditions de travail, on pourra attirer des
                                personnes venant d’autres horizons professionnels.</p>

                                <p class="uk-text-justify">Le contre-projet indirect du Parlement prévoit également une offensive
                                de formation, mais rien pour que les personnes formées restent dans la profession. C’est pourquoi
                                les VERT‑E‑S lui préfèrent l’initiative.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Environ 50% des personnes formées quittent la profession durant leur vie
                                    active. Par conséquent, il ne suffit pas de former davantage de personnel pour remédier à la
                                    pénurie. Les conditions de travail dans les soins doivent être également améliorées pour que
                                    la main d’œuvre qualifiée continue à exercer. Il s’agit d’une part de relever les salaires car,
                                    comparativement, rares sont les pays où le personnel soignant gagne en moyenne moins qu’en Suisse.
                                    Il s’agit d’autre part d’améliorer les conditions de travail : le personnel soignant est
                                    aujourd’hui à 90% féminin et un tiers des personnes quittant le métier ont moins de 35 ans.
                                    Si l’on veut que la main d’œuvre qualifiée exerce plus longtemps – et ne la quitte pas après
                                    la naissance des enfants, il faut rendre les horaires fiables et les structures favorables aux
                                    familles, comme le veut l’initiative, car elle permet de mieux concilier les vies professionnelle
                                    et familiale. Ce qui réduit le nombre d’abandons de la profession tout en permettant aux jeunes
                                    parents de continuer à exercer après la naissance d’un enfant.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La pandémie due au COVID-19 a révélé crûment ce qu’on savait déjà depuis
                                longtemps : la sécurité des patient-e-s et la qualité des soins dépendent largement du nombre
                                de patient‑e‑s par soignant-e. Si par exemple un établissement médico-social dispose de
                                suffisamment de personnes formées, elles peuvent réagir rapidement à une aggravation de l’état
                                de santé, ce qui évite complications et admissions à l’hôpital.</p>

                                <p class="uk-text-justify">L’initiative sur les soins infirmiers mettra suffisamment de personnel
                                soignant diplômé à disposition pour s’occuper des patient-e-s. Chaque soignant-e devra s’occuper
                                de moins de patient-e-s, ce qui améliorera leur sécurité.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous dépendons toutes et tous de soins de qualité. C’est pourquoi la
                                société doit prendre soin de celles et ceux qui prennent soin de nous. Applaudir ne suffit pas.
                                Il faut maintenant voter pour l’initiative sur les soins infirmiers.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le personnel des soins et de la santé travaille à la limite de ses capacités.
                                Avec la pandémie de coronavirus, la pression sur ce secteur a encore augmenté. Environ un tiers du
                                personnel infirmier présente des symptômes d’épuisement professionnel, de dépression ou de troubles
                                anxieux. Le stress est si important que plus de 40 % des infirmières et infirmiers quittent leur
                                profession prématurément.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Si la profession d’infirmier/ère est si peu considérée aujourd’hui,
                                c’est notamment parce qu’il s’agit d’un métier majoritairement exercé par des femmes. Trop longtemps,
                                l’idée que celles-ci sont naturellement prédisposées au travail du « care » (« des soins ») a conduit
                                à une dévalorisation de tout un secteur où l’on attend des employé-e-s un sens inné du sacrifice.
                                Pourtant, les infirmier-ère-s sont des travailleuses et travailleurs essentiel-le-s et, à ce titre,
                                doivent avoir des conditions de travail décentes. Si ce métier peut être une vocation, c’est avant
                                tout une profession qui mérite le même respect que les autres.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le contre-projet du Par­le­ment ne change rien à la sur­charge chro­nique des infir­mières qui tra­vaillent
                                    déjà actuel­le­ment, à leurs condi­tions de tra­vail extrê­me­ment dif­fi­ciles et aux nom­breux départs pré­coces dans la pro­fes­sion.
                                    C'est pourquoi l'initiative sur les soins infir­miers est néces­saire, puisque, à côté des dis­po­si­tions incon­tes­tées sur la
                                    for­ma­tion du per­son­nel infir­mier, elle exige aussi un nombre maxi­mal de patients par infir­mière pour garan­tir la qua­lité des
                                    soins infir­miers dont ceux-ci béné­fi­cient, ainsi que de meilleures condi­tions de tra­vail pour le per­son­nel.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le contre-projet indirect à l’initiative sur les soins infirmiers présenté par le Parlement ne reflète
                                    ni l’ampleur ni l’urgence du problème dans le domaine des soins. Contrairement à l’initiative, le contre-projet n’aborde pas
                                    le problème de fond et ne prévoit pas de mesures visant à augmenter le nombre de longues carrières dans le domaine des soins et
                                    ni de mesures garantissant la qualité des soins. L’amélioration des conditions de travail et de la qualité passe notamment par
                                    une dotation en personnel adaptée aux besoins spécifiques des patients et garantissant leur sécurité. Il s’agit ici d’établir
                                    des normes de qualité et d’éliminer les manquements du système de tarification, comme le demande l’initiative sur les soins
                                    infirmiers.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Que ce soient nos parents, nos enfants ou nous-mêmes, lorsque nous
                                avons besoin de soins, nous savons combien nous apprécions de pouvoir compter sur du personnel
                                infirmier compétent, motivé et disponible. Malheureusement nous savons aussi que la situation
                                actuelle est loin d’être aussi idyllique: trop peu de personnel, soignants surchargés, conditions
                                salariales et de travail qui ne sont pas à la hauteur de l’importance et des exigences de la
                                profession, paperasse lourde et improductive, vie privée chahutée par des tableaux de service
                                chargés, hachés et en perpétuel changement, etc.Résultat: un nombre important de professionnels
                                de la santé quittent leur profession bien trop tôt, ce qui aggrave encore le manque de personnel
                                infirmier.Pour des ressources accrues au niveau de la formation et des conditions salariales du
                                personnel infirmier,pour une limitation du nombre de patients qui doivent être pris en charge par
                                chaque soignant et pour une réduction des tâches administratives des infirmières indépendantes,
                                votez OUI à l’initiative sur les soins infirmiers. Le PEV Suisse et le PEV Jura vous le demandent
                                unanimement.</p>
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

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>L’attrait de la profession infirmière et le maintien des
                                soignants dans leur profession dépendent de bonnes conditions
                                de travail et de salaires corrects. Il appartient aux hôpitaux,
                                aux homes et aux organisations d’aide et de soins à domicile,
                                ainsi qu’aux cantons et aux partenaires sociaux, d’y veiller
                                conjointement. En effet, ce sont ces acteurs qui connaissent
                                le mieux les conditions sur le terrain. Ce n’est pas à la Confédération
                                de réglementer les salaires et les conditions de travail.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Les soins infirmiers sont un élément important des soins
                                médicaux de base, qui sont déjà inscrits dans la Constitution.
                                Le Conseil fédéral et le Parlement ne veulent pas en plus y
                                mentionner séparément les soins infirmiers, car cela conduirait
                                à octroyer dans la Constitution un statut privilégié à une
                                catégorie professionnelle en particulier.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le contre-projet reprend une exigence de l’initiative
                                concernant la facturation directe, en prévoyant toutefois un
                                mécanisme de contrôle des coûts. Le Conseil fédéral s’efforce
                                depuis quelques années de freiner la hausse des coûts de la
                                santé. Ainsi, ceux-ci ne doivent augmenter que dans la mesure
                                où ils sont médicalement justifiés. Sans mécanisme de contrôle,
                                la facturation directe pourrait entraîner une hausse des coûts
                                de la santé et donc des primes d’assurance-maladie.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le plus grand défi réside dans la pénurie de personnel
                                infirmier. Le Conseil fédéral et le Parlement ont donc adopté
                                un contre-projet qui prévoit de mettre à disposition rapidement
                                un milliard de francs environ pour une campagne de
                                formation. Celle-ci permettra de créer les places de formation
                                en soins infirmiers urgemment requises et de soutenir financièrement
                                la formation et la formation continue.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p>Le Conseil fédéral et le Parlement veulent renforcer les
                                soins infirmiers de manière rapide et efficace. Leur contre-projet
                                reprend dans une large mesure les exigences de l’initiative.
                                Il prévoit également des mesures concrètes qui ont déjà été
                                adoptées par le Parlement et qui peuvent donc être appliquées
                                rapidement. Le contre-projet n’entrera pas en vigueur si
                                l’initiative est acceptée. Le Conseil fédéral et le Parlement
                                devraient alors préparer une nouvelle loi qui ne pourra entrer
                                en vigueur que bien plus tard, au terme de la procédure
                                parlementaire.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le contre-projet contient déjà tous les éléments de l’initiative sur les soins qui peuvent être mis
                                en œuvre au niveau fédéral. Il constitue de facto une loi d’application de l’initiative sur les soins infirmiers. Par exemple,
                                environ 1 milliard de fonds de soutien pour la formation et le perfectionnement du personnel infirmier sont prévus : c'est
                                extrêmement généreux. D'autre part, les demandes de meilleures conditions de travail ne relèvent pas des compétences de la
                                Confédération et ne peuvent donc pas être réglementées par le Parlement.</p>

                                <p class="uk-text-justify">En effets le contre-projet prévoit une reprise des revendications applicables au niveau fédéral :
                                investissement de CHF 469 millions par la Confédération pour la formation (> 1 milliard avec la contribution des cantons).
                                Les cantons devront subvenir aux besoins des jeunes en formation. Il y aura ensuite une extension des compétences du personnel
                                infirmier, avec la possibilité de facturer certaines prestations directement à la charge de la LAMal. Finalement le contre-projet
                                met en place des mesures correctrices en cas d’augmentation injustifiée des coûts.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Si l'initiative est acceptée, le Parlement devra rédiger une loi d'application et cela prendrait
                                    plusieurs années. Il serait plus rapide de rejeter l'initiative sur les soins infirmiers : le contre-projet indirect
                                    entrerait alors automatiquement et immédiatement en vigueur. Il est dans l'intérêt du personnel infirmiers, mais aussi
                                    des patients, qu'ils ne doivent pas attendre plusieurs années de plus pour une amélioration ».</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Une hausse des salaires, telle qu'envisagée par l'initiative sur les soins, signifie une hausse des
                                coûts. La facturation directe avec l'assurance maladie conduit à un plus grand catalogue des prestations et donc à des coûts
                                de santé et d'assurance maladie encore plus élevés. En outre, la Confédération ne réglemente pas les salaires : ce sont les
                                partenaires sociaux qui négocient entre eux les conditions de travail et les salaires. Une réglementation des salaires au
                                niveau fédéral constituerait un dangereux précédent d'ingérence dans un système qui fonctionne. Cela pourra susciter des
                                désirs dangereux dans d'autres professions.</p>
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