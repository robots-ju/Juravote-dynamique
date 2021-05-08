<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Référendum contre la Loi sur les mesures policières de lutte contre le terrorisme</title>
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
            <h1 class="uk-heading-large">Loi sur les mesures policières de lutte contre le terrorisme</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis et autorités</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>Contexte</h3>
                        <hr>
                        <p class="uk-text-justify">Depuis les attentats de Paris en 2015, des dizaines d’autres 
                        attaques à motivation terroriste ont été menées en Europe. Pour le Service de renseignement 
                        de la Confédération (SRC), la menace terroriste reste, en Suisse aussi, élevée. Aujourd’hui, 
                        la police ne peut en principe intervenir que si une infraction a déjà été commise. Pour 
                        empêcher les attaques terroristes, le Conseil fédéral et le Parlement ont créé avec la loi 
                        fédérale sur les mesures policières de lutte contre le terrorisme (MPT) une base légale 
                        permettant à la police d’agir plus facilement à titre préventif. Le référendum a été demandé 
                        contre la loi et la votation aura lieu le 13 juin 2021.
                        </p>

                        <h3>Principes</h3>
                        <hr>
                        <p class="uk-text-justify">La nouvelle loi permet à la police d’agir plus tôt, et donc 
                        à titre préventif, lorsque des indices concrets et actuels laissent penser qu’une personne 
                        représente une menace terroriste. À la demande d’un canton, du SRC ou d’une commune, l’Office 
                        fédéral de la police (fedpol) peut obliger un terroriste potentiel à participer à des entretiens 
                        et à se présenter régulièrement auprès de la police. 
                        </p>
                    </div>

                    <h3>Aperçu des différentes mesures</h3>
                    <hr>
                    <div class="uk-column-1-4@m uk-column-1-1@s" style="padding-bottom: 2%">
                        <h5>Obligation de participer à des entretiens</h5>
                        <hr>
                        <p class="uk-text-justify">La personne doit se présenter régulièrement à des entretiens. 
                        Le but est de déterminer si elle représente une menace et, le cas échéant, l’amener à 
                        changer de comportement.
                        </p>

                        <h5>Obligation de présenter</h5>
                        <hr>
                        <p class="uk-text-justify">La personne doit se présenter régulièrement auprès d’une autorité. 
                        Il est ainsi possible de vérifier, par exemple, si une interdiction de quitter le territoire 
                        est respectée.
                        </p>

                        <h5>Interdiction de contact</h5>
                        <hr>                                              
                        <p class="uk-text-justify">La personne a l’interdiction d’avoir des contacts avec 
                        d’autres personnes proches des milieux terroristes, soutenant leurs activités ou favorisant 
                        la propagande de leurs idées. Le but est d’éviter tout contact direct ou indirect entre 
                        personnes radicalisées.
                        </p>

                        <h5>Interdiction de quitter le territoire</h5>
                        <hr>
                        <p class="uk-text-justify">Une personne soupçonnée de vouloir mener 
                        des activités terroristes à l’étranger peut se voir interdire de quitter la Suisse.
                        </p>
                    </div>

                    <div class="uk-column-1-4@m uk-column-1-1@s">
                        <h5>Interdiction géographique</h5>
                        <hr>
                        <p class="uk-text-justify" style="padding-bottom: 40%">La personne a l’interdiction de se rendre à certains endroits 
                        ou de quitter un certain périmètre.
                        </p>

                        <h5>Assignation à résidence</h5>
                        <hr>
                        <p class="uk-text-justify">La personne a l’interdiction de quitter son lieu de résidence. 
                        Cette mesure ne peut être ordonnée que si des indices concrets et actuels suggèrent qu’elle 
                        représente une menace considérable pour la vie ou l’intégrité corporelle d’autrui et si elle 
                        n’a pas respecté les mesures policières ordonnées préalablement. L’assignation à résidence 
                        doit toujours être approuvée par le tribunal des mesures de contrainte du canton de Berne.
                        </p>

                        <h5>Détention en vue de l'expulsion</h5>
                        <hr>
                        <p class="uk-text-justify" style="padding-bottom: 40%">Un terroriste potentiel de nationalité étrangère peut être mis 
                        en détention si l’on craint qu’il ne se soustraie à son expulsion.
                        </p>

                        <h5>Dispositions</h5>
                        <hr>                        
                        <p class="uk-text-justify">La nouvelle loi contient une série de dispositions visant à 
                        empêcher une application disproportionnée et arbitraire : toutes les mesures sont limitées 
                        dans le temps et peuvent être contestées auprès du Tribunal administratif fédéral. De plus, 
                        les assignations à résidence doivent être approuvées par le tribunal des mesures de contrainte. 
                        Les nouvelles mesures doivent être appliquées de manière proportionnée.
                        </p>
                    </div> 

                    <h3>La question qui vous est posée : </h3>
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 10%">Acceptez-vous la Loi fédérale
                    sur les mesures policières de lutte contre le terrorisme ?</p></b>
                </li>

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_LoiMPT2021" aria-label="chart" id="datawrapper-chart-EAX4d" src="https://datawrapper.dwcdn.net/EAX4d/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>   

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU Loi MPT 2021" aria-label="Anneau de choix" id="datawrapper-chart-lpQhJ" src="https://datawrapper.dwcdn.net/lpQhJ/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_LoiMPT" aria-label="chart" id="datawrapper-chart-Od6H6" src="https://datawrapper.dwcdn.net/Od6H6/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="211"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                    </div>
                </li>  
                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En Suisse aussi, certaines personnes représentent une menace terroriste, mais 
                                les mesures et les instruments utilisés aujourd’hui, comme les programmes de 
                                déradicalisation, sont insuffisants. C’est pourquoi les autorités cantonales 
                                veulent des mesures complémentaires dans le domaine de la prévention. La nouvelle 
                                loi répond à cette demande : elle permet à la police d’agir dès que des indices 
                                concrets et actuels laissent penser que quelqu’un commettra un acte terroriste. 
                                La population est ainsi mieux protégée. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le Conseil fédéral et le Parlement considèrent que les nouvelles mesures sont 
                                compatibles avec les droits fondamentaux, la Convention européenne des droits de 
                                l’homme et les traités de l’ONU relatifs à ces questions. Les tribunaux veillent 
                                à la bonne application des mesures : l’assignation à résidence doit être approuvée 
                                par un tribunal et toutes les mesures peuvent faire l’objet d’un recours auprès 
                                du Tribunal administratif fédéral. L’état de droit est donc garanti.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les mesures sont chaque fois prises en fonction de la situation. Les mesures légères, 
                                comme des programmes d’occupation ou un suivi psychologique, restent en principe 
                                privilégiées. Des mesures plus strictes ne sont prises que si ces premières mesures ne 
                                fonctionnent pas ou ne sont pas respectées. L’assignation à résidence, à n’utiliser qu’en 
                                dernier recours, doit toujours être approuvée par un tribunal. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La stratégie de la Confédération en matière de lutte contre le terrorisme est axée 
                                sur la prévention, la répression et la réintégration. Les nouvelles mesures policières 
                                la complètent en comblant les lacunes qu’elle présente dans le domaine de la prévention.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le terrorisme s’attaque non seulement aux personnes, mais aussi aux institutions et 
                                aux valeurs démocratiques. Pour garantir ces fondements, nous devons renforcer la 
                                prévention et lutter avec détermination contre le terrorisme. La nouvelle loi nous 
                                donne les moyens d’agir avant que des attentats ne soient commis.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi sur le terrorisme com­plète la lutte suisse contre le ter­ro­risme par des 
                                mesures poli­cières pré­ven­tives néces­saires pour se pro­té­ger contre les per­sonnes 
                                dan­ge­reuses.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le terrorisme islamiste ne s’arrête pas aux frontières de la Suisse comme le 
                                rappellent douloureusement les attentats commis l’an passé à Morges et Lugano. Or, 
                                les autorités judiciaires ont trop souvent les mains liées quand il s’agit de prévenir 
                                les crimes de l’islam politique radical. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La politique a l’obligation d’entreprendre tout ce qui est nécessaire pour 
                                protéger le mieux possible notre population contre des attentats terroristes.
                                Cette nouvelle loi est en accord avec le programme politique de notre parti. 
                                Elle est équilibrée et parfaitement ciblée.</p>
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
                                <p class="uk-text-justify">Les mesures prévues par la nouvelle loi ne sont pas ordonnées par un tribunal, 
                                mais par l’office fédéral de la police Fedpol, sur la base de simples soupçons 
                                (aucune preuve requise). Il manque un organe judiciaire de contrôle : il s’agit 
                                d’une atteinte à la séparation des pouvoirs. De plus, ces mesures violent clairement 
                                les droits fondamentaux et les droits de l’homme. Une cinquantaine de professeurs de 
                                droit suisses ont communiqué leurs inquiétudes au Conseil fédéral.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La nouvelle loi prévoit la possibilité d’appliquer une assignation à résidence. 
                                Il s’agit de la seule mesure qui doit être ordonnée par un tribunal. Elle peut tout 
                                de même être appliquée sans qu’il y ait effectivement un crime et ne nécessite pas 
                                d’éléments de preuve tels que le lieu ou la date du supposé crime. Chacun peut être 
                                sanctionné par cette mesure, pendant six mois et sans besoin de preuve. Cette 
                                privation de liberté représente une violation de la Convention européenne des 
                                droits de l’homme. L’article 5 de la Convention européenne des droits de l’homme 
                                interdit la privation de liberté arbitraire sur l’unique base de soupçons. La Suisse 
                                serait ainsi la seule démocratie occidentale permettant l’emprisonnement de citoyens 
                                sans aucune raison. Les seules exceptions sont les États-Unis avec les camps à 
                                Guantanamo.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Ces mesures peuvent s’appliquer à des enfants dès l’âge de 12 ans, 
                                respectivement 15 ans pour l’assignation à résidence, toujours sans 
                                ordonnance judiciaire. Comme certain.e.s expert.e.s universitaires en 
                                droit l’ont écrit dans leur lettre ouverte «la philosophie sous-jacente 
                                aux MPT – préventive-répressive visant la mise à l’écart – apparaît en 
                                contradiction avec la Convention internationale relative aux droits de 
                                l’enfant, car ces mesures sont difficilement compatibles avec l’intérêt 
                                supérieur de l’enfant». Il s’agit donc, d’une violation de la Convention 
                                des Nations Unies relative aux droits de l’enfant, ce qui nous a également 
                                valu de vives critiques de la part de l’ONU.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour être considéré comme un terroriste, il n’est pas nécessaire d’exécuter ou 
                                même de planifier un acte de nature terroriste. En effet, il suffit que la police 
                                soupçonne cette éventualité, augmentant ainsi le risque d’erreurs judiciaires. Ces 
                                erreurs peuvent avoir des conséquences désastreuses et même détruire des vies. Ce 
                                type d’erreur s’est déjà produit en Suisse comme nous le montre l’exemple de Sami A. 
                                Les personnes assignées à résidence pendant plus de six mois et qualifiées de surcroît 
                                de terroristes feront face à de grandes difficultés de réinsertion. Cette nouvelle 
                                définition du terrorisme suscite de vives critiques de la part de l’ONU.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous soutenons un renforcement du code pénal pour les terroristes avérés. 
                                Des resserrements du code pénal permettent un contrôle judiciaire ainsi que le 
                                respect des principes d’un État de droit. Par ce référendum, nous ne faisons que 
                                défendre les points mentionnés ci-dessus. En outre, le code pénal fournit déjà une 
                                base juridique pour la poursuite préventive et la condamnation de personnes sur la 
                                seule base de la participation à un acte terroriste.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi contre le terrorisme permet de sanctionner des personnes avant qu’elles 
                                aient commis le moindre délit : il suffit aux autorités de les considérer comme « 
                                personnes dangereuses ». Fort d’une vague définition du terrorisme, l’État peut 
                                prendre des mesures préventives contre elles, qu’aucun tribunal ne doit examiner. 
                                De surcroît, la loi n’offre aucun instrument apte à combattre véritablement le 
                                terrorisme, tel qu’une prévention efficace de la radicalisation.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Ses mesures sont autant d’atteintes graves aux droits fondamentaux : en font 
                                partie l’obligation de s’annoncer, l’interdiction de périmètre, l’assignation à 
                                résidence. Que les autorités puissent prendre arbitrairement de telles mesures 
                                est digne d’un pays sans État de droit fort et fait l’objet de vives critiques 
                                de la part des organisations internationales, telles que l’ONU.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Des mesures touchent des enfants : l’âge-limite pour prendre de telles mesures 
                                est de 12 ou 15 ans (pour l’assignation à résidence), ce qui enfreint les 
                                droits des enfants. Dans sa lutte contre le terrorisme, la Suisse franchit 
                                plusieurs fois la ligne rouge des droits humains.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi abolit la présomption d'innocence. On peut être placé en résidence 
                                surveillée jusqu'à 9 mois sans preuve sur de simples soupçons. Cela ferait de 
                                nous le premier et le seul pays occidental à connaître une telle privation 
                                arbitraire de liberté. Seule exception : Les États-Unis avec leurs camps à 
                                Guantanamo.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La loi viole les droits humains. Les mesures prévues par la loi ne sont pas 
                                ordonnées par un tribunal, mais par la police sur simple soupçon (aucune preuve 
                                requise). Cela viole, entre autres, la Convention européenne des droits de l'homme. 
                                Plus de 50 professeur-e-s de droit suisses ont adressé un avertissement urgent au 
                                Conseil fédéral concernant ces violations de la loi.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Emprisonnement des enfants : les mesures peuvent être imposées aux enfants 
                                à partir de 12 ans (ou à partir de 15 ans en cas d'assignation à résidence) - 
                                sans décision de justice. Il s'agit d'une violation de la Convention des Nations 
                                unies sur les droits de l'enfant, qui a valu à la Suisse de sévères critiques de 
                                la part de l'ONU.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les régimes autoritaires ont la cote : avec cette loi, la Suisse crée 
                                un précédent et va beaucoup plus loin que de nombreux pays. La loi peut être 
                                prise par les régimes autoritaires comme un blanc-seing pour agir de manière 
                                plus répressive de leur côté. C'est pourquoi le Haut Commissaire des Nations 
                                Unies aux droits de l'homme est intervenu et a mis en garde contre cette loi.</p>
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