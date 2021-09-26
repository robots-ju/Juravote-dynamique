<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Mariage pour tous</title>
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
            <h1 class="uk-heading-large">Modification du Code civil suisse</h1>
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
                                    <p><b>Objet : </b>Modification du Code civil suisse</p>
                                    <p><b>Participation : </b>44.00</p>
                                    <p><b>Résultat : </b>Accepté (provisoire)</p>
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
                                    <iframe title="Mariagepourtous_GLOBAL" aria-label="chart" id="datawrapper-chart-CtWvA" src="https://datawrapper.dwcdn.net/CtWvA/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="323"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
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
                                    <iframe title="Mariagepourtous_Suisse" aria-label="map" id="datawrapper-chart-LJuMC" src="https://datawrapper.dwcdn.net/LJuMC/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="426"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
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
                                    <iframe title="Mariagepourtous_JURA" aria-label="map" id="datawrapper-chart-glzTH" src="https://datawrapper.dwcdn.net/glzTH/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="433"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
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
                        <p class="uk-text-justify">Chaque année, 700 couples de même sexe concluent
                        un partenariat enregistré, qui ressemble au mariage, mais n'y est pas équivalent sur le plan symbolique
                        et le plan du droit. Des différences existent d'un point de vue, notamment, de la naturalisation, l'adoption
                        et l'accès à la procréation médicalement assistée.
                        </p>

                        <p class="uk-text-justify">Les Autorités fédérales souhaitent "mettre un terme
                        à ces inégalités de traitement" avec le projet de loi du mariage pour tous. Un référendum, muni de plus de
                        50'000 signatures, a été déposé, raison pour laquelle le peuple suisse vote sur ce projet de loi.
                        </p>

                        <h3>Principales modifications juridiques</h3>
                        <hr>
                        <h5>Naturalisation facilitée</h5>
                        <p class="uk-text-justify">Le droit à la naturalisation facilitée sera accordée à tous les couples mariés, si
                            la loi est acceptée le 26 septembre 2021.
                        </p>

                        <h5>Adoption</h5>
                        <p class="uk-text-justify">Les couples de même sexe pourront adopter conjointement un enfant (ce qui est
                            déjà le cas pour les personnes liées par un partenariat enregistré).
                        </p>

                        <h5>Procréation médicalement assistée</h5>
                        <p class="uk-text-justify">L'ouverture du mariage pour tous permettra aussi aux femmes mariées de recourir
                            à un don de sperme en Suisse, dans les conditions prévues par la loi : le donneur doit être inscrit dans
                            le registre des donneurs de sperme et le don de sperme, tout comme le don d'ovules et la gestation
                            par autrui, ne peut pas être anonyme.
                        </p>

                        <h5>Conversion d'un partenariat enregistré existant en mariage</h5>
                        <p class="uk-text-justify">Dès l'adoption de la loi, il ne sera plus possible de conclure des partenariats
                            enregistrés. En revanche, les couples ayant déjà conclu un partenariat pourront le maintenir ou le
                            convertir en mariage.
                        </p>

                        <iframe title="Pays autorisant le mariage aux couples de même sexe" aria-label="map" id="datawrapper-chart-JF4qB" src="https://datawrapper.dwcdn.net/JF4qB/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="632"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>

                    
                    <h3>Modifications du Code civil suisse</h3>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h4>Avant</h4>
                        <h4>Après</h4>
                    </div>                    
                    
                    <h5>Art. 94 Capacité</h5>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify">Pour pouvoir contracter mariage, l'homme et la femme doivent être âgés
                            de 18 ans révolus et capables de discernement.
                        </p>

                        <p class="uk-text-justify">Le mariage peut être contracté par deux personnes âgées de 18 ans révolus
                            et capables de discernement.
                        </p>
                    </div>

                    <h5>Art. 96 Mariage ou partenariat enregistré antérieur</h5>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify" style="padding-bottom: 1%">Toute personne qui veut se remarier doit tablir que son précédent
                            mariage a été annulé ou dissous.
                        </p>

                        <p class="uk-text-justify">Toute personne qui veut se marier doit établir que son partenariat
                            enregistré avec une tierce personne ou son précédent mariage a été
                            annulé ou dissous.
                        </p>
                    </div>

                    <h5>Art. 102 al. 2 Forme de la célébration du mariage</h5>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify">L'officier de l'état civil demande séparément à la fiancée et au fiancé s'ils
                            veulent s'unir par les liens du mariage.
                        </p>

                        <p class="uk-text-justify">L’officier de l’état civil demande séparément aux fiancés s’ils veulent
                            s’unir par les liens du mariage.
                        </p>
                    </div>

                    <h5>Art. 105 ch. 1 Cas de l'annulation du mariage</h5>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify">Le mariage doit être annulé:
                            <ol>
                                <li><p>lorsqu'un des époux était déjà marié au moment de la célébration et que le précédent
                                    mariage n'a pas été dissous par le divorce ou par le décès de son conjoint.
                                </p></li>
                            </ol>
                        </p>

                        <p class="uk-text-justify">Le mariage doit être annulé:
                            <ol>
                                <li><p>lorsqu’un des époux était déjà lié par un partenariat enregistré
                                    avec une tierce personne ou marié au moment de la célébration
                                    et que le précédent mariage ou partenariat enregistré n’a
                                    pas été dissous;
                                </p></li>
                            </ol>
                        </p>
                    </div>

                    <h5>Art. 163 al. 1 Entretien de la famille</h5>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify">Mari et femme contribuent, chacun selon selon ses facultés, à l'entretien
                            convenable de la famille.
                        </p>

                        <p class="uk-text-justify">Les époux contribuent, chacun selon ses facultés, à l’entretien convenable
                            de la famille.
                        </p>
                    </div>

                    <h5>Art. 252 al. 2 Etablissement de la filiation en général</h5>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify" style="padding-bottom: 5%">À l’égard du père, elle est établie par son mariage avec la mère, par
                            reconnaissance ou par jugement.
                        </p>

                        <p class="uk-text-justify">À l’égard de l’autre parent, elle est établie par son mariage avec la
                            mère ou, pour autant que cela soit prévu par la loi, par reconnaissance
                            ou par jugement.
                        </p>
                    </div>

                    <h5>Art. 255a De la parentalité de l'épouse</h5>
                    <hr>
                    <div class="uk-column-1-2@m uk-column-1-1@s">                        
                        <p class="uk-text-justify" style="padding-bottom: 20%">Cet article n'existe pas actuellement.
                        </p>

                        <ol>
                            <li><p class="uk-text-justify">Si la mère est mariée à une femme au moment de la naissance et si
                                l’enfant a été conçu au moyen d’un don de sperme conformément aux
                                dispositions de la loi fédérale du 18 décembre 1998 sur la procréation
                                médicalement assistée, l’épouse de la mère est l’autre parent de
                                l’enfant.
                            </p></li>

                            <li><p class="uk-text-justify">Si l’épouse de la mère décède ou est déclarée disparue, elle est
                                considérée comme parent de l’enfant si l’insémination a eu lieu avant
                                son décès ou avant le moment où elle était en danger de mort ou avant
                                celui de la réception des dernières nouvelles la concernant.
                            </p></li>
                        </ol>
                    </div>

                    <h3>La question qui vous est posée : </h3>        
                    <hr>
                    <b><p class="uk-text-justify" style="padding-bottom: 10%">Acceptez-vous la modification du 18 décembre 2020 du 
                    code civil suisse (mariage pour tous) ? </p></b>
                </li>        

                <li>
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Recommendations de vote des partis fédéraux</h3>
                        <hr>
                        <iframe title="PartisCH_Mariagepourtous" aria-label="Anneau de choix" id="datawrapper-chart-JO9k0" src="https://datawrapper.dwcdn.net/JO9k0/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des partis jurassiens</h3>
                        <hr>
                        <iframe title="PartisJU-mariagepourtous" aria-label="Anneau de choix" id="datawrapper-chart-MUW8d" src="https://datawrapper.dwcdn.net/MUW8d/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>

                        <h3>Recommendations de vote des autorités</h3>
                        <hr>
                        <iframe title="VotesAutorités_mariagepourtous" aria-label="chart" id="datawrapper-chart-oGZVi" src="https://datawrapper.dwcdn.net/oGZVi/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="200"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                        </script>
                    </div>
                </li>  

                <li>       
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le Conseil fédéral et le Parlement veulent ouvrir le mariage aux couples 
                                    e même sexe. Ainsi, l’inégalité de traitement qui existe aujourd’hui sera éliminée. Tous les 
                                    couples mariés auront les mêmes droits et devoirs. Le projet répond à un besoin ressenti par 
                                    de nombreuses personnes.</p>
                            </div>
                        </div>    
                    
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’État ne doit pas dicter aux gens de quelle manière organiser leur vie privée et familiale. 
                                    Un couple doit être libre de choisir s’il veut donner un cadre légal à sa relation et de 
                                    quelle manière il souhaite le faire. Aujourd'hui, les couples de même sexe n'ont pas la 
                                    possibilité de se marier, ils peuvent uniquement conclure un partenariat enregistré. L’ouverture 
                                    du mariage permettra donc de mettre fin à cette inégalité de traitement sans désavantager qui que 
                                    ce soit.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Aujourd'hui déjà, des enfants grandissent, en Suisse, avec deux mères ou 
                                    avec deux pères. Les soins et l'attention que les parents accordent à leurs enfants ne dépendent 
                                    pas de la constellation familiale. C'est pourquoi il est juste que des couples de même sexe 
                                    puissent adopter conjointement et que les couples de femmes aient accès au don de sperme.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Toute personne a le droit de connaître son ascendance. En Suisse, 
                                    la loi n’autorise le don de sperme qu’aux couples mariés, raison pour laquelle certains 
                                    couples de femmes décident de se rendre à l’étranger pour bénéficier de cette possibilité. 
                                    Toutefois, dans les pays autorisant cette pratique, l’enfant n’a pas toujours la garantie 
                                    de pouvoir connaître l'identité de son père biologique. L’ouverture du mariage et l’accès 
                                    au don de sperme préserveront le droit de l’enfant à connaître son ascendance.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le mariage pour tous ne prévoit pas d’autres modifications de lois 
                                    concernant l'accès à la procréation médicalement assistée. Le don de sperme anonyme, le 
                                    don d’ovules et la gestation pour autrui restent interdits à tous les couples. Ainsi, tous 
                                    les couples mariés auront les mêmes droits dans le domaine de la médecine reproductive.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Autorités fédérales</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour le Conseil fédéral et le Parlement, il n’y a aucune raison d’interdire 
                                    le mariage aux couples de même sexe. Ils estiment que l’ouverture du mariage 
                                    ne requiert aucune modification de la Constitution, car cette dernière ne définit 
                                    pas le mariage comme l’union d’un homme et d’une femme.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Au cœur du libéralisme se trouve la conviction que chacun doit pouvoir façonner sa vie 
                                    comme il l'entend. Cela vaut aussi et surtout pour la vie privée. Le mariage pour tous 
                                    est un pas important vers l'égalité des droits pour les couples de même sexe.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les gens se marient parce qu'ils désirent pérenniser leur union, 
                                    régler leur communauté de vie à l’aide de la loi ou encore clairement exprimer leur amour 
                                    envers la société. À ce jour, une partie de la société s'est vue refuser le droit au mariage 
                                    civil, le partenariat enregistré ne donnant accès qu’à ce qui peut être qualifié de « mariage 
                                    de seconde zone ». Cette situation est pour le moins indigne d'un État de droit moderne : 
                                    l'état n'a pas à évaluer les préférences sexuelles ou les projets de vie de ses citoyens et 
                                    citoyennes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les VERT-E-S veulent vivre dans une société où les couples de même sexe ont les mêmes droits 
                                    que les couples hétérosexuels. L’orientation sexuelle n’a rien à voir avec le droit au mariage. 
                                    Pour les VERT-E-S, c’est une question d’égalité et de non-discrimination. Ces principes sont 
                                    inscrits dans la Constitution. Les VERT-E-S sont heureux que la nouvelle loi donne également 
                                    aux couples de femmes l’accès à la procréation médicalement assistée. L’égalité des droits pour 
                                    toutes et tous devrait s’appliquer au mariage, mais aussi à la parentalité.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En tant que parti progressiste, les VERT-E-S font campagne, depuis leur création, pour l’ouverture 
                                    de la société et l’égalité des droits de toutes et tous, quelque soit leur mode de vie. Les VERT-E-S 
                                    sont  convaincu-e-s que l’égalité, la tolérance, la diversité et le respect mutuel sont les 
                                    fondements du vivre-ensemble.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">VERTS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Il est grand temps que le mariage soit possible pour tous les couples, 
                                    peu importe leur sexe. De plus, être de bons parents n’a rien à voir avec leur sexe. Les enfants 
                                    ont avant tout besoin d’amour et de stabilité. C’est pourquoi il est juste que la procréation 
                                    médicalement assistée devienne accessible aux couples de femmes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les personnes du même genre qui s’aiment ne sont aujourd’hui pas égales sur le plan juridique 
                                    dans notre pays, car elles ne sont pas autorisées à se marier et se voient ainsi refuser des 
                                    droits importants. Un OUI clair au mariage pour toutes et tous serait un signal important pour 
                                    notre société, le monde du travail et surtout les jeunes. Les pays qui ont introduit le mariage
                                    pour toutes et tous ont réussi à réduire le taux de suicide chez les personnes LGBT. Les préjugés 
                                    à l'égard des personnes non hétérosexuelles ont également diminué. C’est ce que montrent les 
                                    expériences de pays comme le Danemark, la Suède et les États-Unis. Avec un OUI au mariage pour 
                                    toutes et tous, nous renforçons ainsi l’égalité pour tout le monde en Suisse.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les différentes conceptions et modèles familiaux sont depuis longtemps une réalité et font 
                                    partie intégrante de notre société actuelle. Les couples homosexuels sont d’aussi bons 
                                    parents que les couples hétérosexuels. Le mariage pour toutes et tous permet aux couples 
                                    de femmes mariées d’avoir accès à des banques de sperme en Suisse et, dans ce cas, à la 
                                    double affiliation. Cela signifie que les enfants ont deux parents dès la naissance. Il 
                                    s’agit d’une avancée majeure : cette réglementation place l’intérêt supérieur de l'enfant 
                                    au centre, car les enfants sont ainsi juridiquement protégés même en cas de décès d’un parent. 
                                    Avec un OUI au mariage pour toutes et tous, nous renforçons ainsi la tolérance et le bien-être 
                                    en Suisse.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La Suisse est l’un des deux derniers pays en Europe à n’avoir pas autorisé le mariage pour 
                                    les personnes de même genre. Il est grand temps de prendre enfin en compte ce changement 
                                    sociétal !</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le mariage pour toutes et tous est un pas historique dans 
                                    le sens de l’égalité.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le mariage pour toutes et tous offre une meilleure protection pour 
                                    les familles et les enfants.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le mariage pour toutes et tous est un développement logique du mariage.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La réinterprétation de la stérilité en un désir inassouvi d’avoir 
                                    des enfants, qui ressort du projet de loi, est contraire à la Constitution. À l’avenir, 
                                    elle permettra à d’autres groupes (les célibataires, les couples d’hommes) de se fonder 
                                    également sur ce désir inassouvi d’avoir des enfants. Le don d’ovules ainsi que la 
                                    gestation pour autrui, laquelle est discutable du point de vue éthique, pourraient 
                                    constituer les prochaines revendications.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le mariage entre un homme et une femme est un « privilège » qui repose 
                                    entre autres sur la biologie. Il ne s’agit pas d’une discrimination. Le principe de l’égalité 
                                    de traitement signifie que ce qui est égal doit être traité de manière égale ; et ce qui est 
                                    différent, de manière différente. De plus, il serait disproportionné de redéfinir le mariage : 
                                    en 2020, on a recensé en Suisse 35 160 mariages et seulement 651 partenariats enregistrés.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le Tribunal fédéral et le Conseil fédéral ont toujours interprété le 
                                    droit au mariage comme une communauté de vie durable entre un homme et une femme (art. 14 de 
                                    la Constitution fédérale). Seule l’union d’un homme et d’une femme permet de donner la vie, 
                                    c’est pourquoi il faut protéger cette composante essentielle de la société et de l’État. 
                                    Instaurer le mariage pour tous par une simple modification de loi est donc clairement contraire 
                                    à la Constitution.  
                            </div>                               
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La réinterprétation de la stérilité en un désir inassouvi d’avoir des 
                                    enfants, qui ressort du projet de loi, est contraire à la Constitution. À l’avenir, elle 
                                    permettra à d’autres groupes (les célibataires, les couples d’hommes) de se fonder également 
                                    sur ce désir inassouvi d’avoir des enfants. Le don d’ovules ainsi que la gestation pour autrui, 
                                    laquelle est discutable du point de vue éthique, pourraient constituer les prochaines 
                                    revendications.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le don de sperme ne sera plus une exception médicale mais une règle 
                                    prévue dans la loi, quelles que soient les conséquences pour les enfants. Ainsi, jusqu’à 
                                    l’âge de 18 ans, l’enfant se verra refuser le droit de connaître un de ses parents biologiques 
                                    et d’être pris en charge par ce dernier, alors que tisser un lien étroit avec sa famille 
                                    d’origine est essentiel à sa construction identitaire. De plus, un enfant a besoin d’avoir 
                                    comme modèle parental un homme et une femme : en autorisant le don de sperme pour les couples 
                                    de lesbiennes, la loi prive l’enfant d’un père. Le don de sperme doit dès lors rester une 
                                    exception.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au don de sperme pour
                                    les couples de même sexe"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les conséquences pratiques de l‘absence de père s’ajoutent au fait que 
                                    l’enfant ne peut connaître son identité biologique. C’est problématique pour l’affirmation de 
                                    son identité. Et pourtant c‘est ce que prévoit juridiquement la modification de la loi. En 
                                    règle générale, l‘enfant est confronté à une réalité brutale : il est autorisé à connaître 
                                    le nom de son père biologique seulement lorsqu‘il atteint sa majorité, à un moment où, trop 
                                    souvent, le père ne veut rien savoir de lui.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au don de sperme pour
                                    les couples de même sexe"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Les enfants ont droit à un père et à une mère. En cas de don de sperme 
                                    à un couple de même sexe, le père de l‘enfant est délibérément écarté de la loi et même exclu 
                                    du Code civil lorsqu’il s’agit d’établir la filiation de l’enfant (CC, art. 252).</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au don de sperme pour
                                    les couples de même sexe"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Selon la Constitution fédérale, les procédures de procréation 
                                    médicalement assistée ne peuvent être utilisées que lorsque l‘infertilité est constatée 
                                    et seulement en dernier recours. L‘infertilité est un terme médical clairement défini 
                                    par l‘OMS : elle ne peut pas exister chez les couples de même sexe ou chez les personnes 
                                    seules. Par conséquent, la reformulation de l‘infertilité comme „désir inassouvi d‘avoir 
                                    des enfants“ est anticonstitutionnelle et ouvre la porte à d‘autres revendications.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au don de sperme pour
                                    les couples de même sexe"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le don de sperme pour les femmes lesbiennes crée une discrimination 
                                    entre les femmes lesbiennes et les hommes homosexuels au sens de l‘article 8 de la Constitution 
                                    fédérale. Afin d‘éliminer cette discrimination, il faudrait légaliser le don d‘ovules pour les 
                                    hommes homosexuels et, par la suite, la pratique controversée des mères porteuses.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage et à la PMA pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Deux femmes ne peuvent pas procréer ensemble naturellement, ni deux hommes. 
                                    Ce n’est pas une injustice, c’est tout simplement la réalité biologique. C’est la nature elle-même 
                                    qui le dit. A l'heure des grandes théories sur le respect de la nature, pourquoi refuser de la 
                                    respecter quand il s'agit de la vie humaine ?</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage et à la PMA pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Cette loi suisse intitulée faussement "Mariage pour tous" car elle va 
                                    largement au-delà, réduit l’enfant à un objet et à un produit de consommation qui peut être 
                                    commandé sur catalogue pour satisfaire les désirs égoïstes de quelques adultes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage et à la PMA pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Pour satisfaire aux exigences des lesbiennes, les élus ont consenti à effacer 
                                    le père du Code civil. Si cette loi passe en Suisse, vous ne serez plus le père de vos enfants, mais 
                                    un vague parent interchangeable. Lors de la PMA, les couples de femmes seront présentées comme 
                                    "mères", alors qu'il y a un père, dont l'existence sera niée.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage et à la PMA pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Avec une goutte de sperme par-ci, un ovule par-là et, bientôt la location 
                                    d’utérus, cette loi veut créer des familles génétiquement modifiées avec, au final, des enfants 
                                    sans père, sans mère et sans filiation.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "Non au mariage et à la PMA pour tous"</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">En ouvrant largement les portes de la procréation médicalement assistée 
                                    (PMA), par l'adoption du texte sur le "mariage pour tous", ce sont des coûts qui vont venir 
                                    alourdir les primes d'assurance maladie. Toutes les familles suisses vont passer à la caisse 
                                    pour satisfaire aux désirs de quelques unes.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Le mariage en lui-même serait une ques­tion de droit civil entre 
                                    deux per­sonnes qui s’aiment. Le don de sperme pour les couples de même sexe, en revanche, 
                                    fran­chit une ligne rouge pour le PEV. De plus, la consti­tu­tion n'autorise la méde­cine 
                                    repro­duc­tive que pour les couples hété­ro­sexuels et seule­ment en der­nier recours, en cas 
                                    d'infertilité médi­ca­le­ment confir­mée.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Il est évident que des modi­fi­ca­tions doivent être appor­tées au sta­tut 
                                    actuel du Par­te­na­riat enre­gis­tré dans le Droit civil de manière à ce que les couples homo­sexuels 
                                    ne soient pas pré­té­ri­tés par rap­port aux couples hété­ro­sexuels. Tou­te­fois, nous consi­dé­rons que 
                                    le projet de loi qui nous est sou­mis va trop loin en matière de droits des couples de même sexe.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Indé­pen­dam­ment des convic­tions reli­gieuses, cette loi sou­lève des pro­blèmes 
                                    éthiques. Il n’est pas seule­ment ques­tion de l’union de deux per­sonnes de même sexe qui s’aiment, 
                                    car nous ne dou­tons pas que c’est le cas ou qu’ils sont capables d’éduquer des enfants, mais nous 
                                    déplo­rons une modi­fi­ca­tion fon­da­men­tale dans la concep­tion du couple, de la famille et 
                                    par­ti­cu­liè­re­ment de la paren­ta­lité.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous dénonçons une renon­cia­tion au rôle des pères qui deviennent de 
                                    simples pour­voyeurs de sperme (PMA) pour les couples de les­biennes. Il faut savoir éga­le­ment 
                                    que cette loi, au nom de l’égalité des droits, crée une autre inéga­lité puisque les gays 
                                    n’auront pas les mêmes droits que les les­biennes (puisque la Ges­ta­tion pour autrui reste 
                                    inter­dite). Ceci dit, mal­gré les déné­ga­tions des par­ti­sans de la loi, on peut s’attendre à 
                                    de nou­velles exi­gences dans un ave­nir proche pour intro­duire cette pos­si­bi­lité pour les 
                                    couples gays en ins­tau­rant un mar­ché de mères por­teuses rému­né­rées en Suisse. Nous ne pou­vons 
                                    approu­ver cette concep­tion de la pro­créa­tion entre per­sonnes de même sexe.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV Jura</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">Nous ne fai­sons pas de dis­cri­mi­na­tion, mais de la dif­fé­ren­cia­tion. 
                                    Nous savons que les enfants adop­tés connaissent sou­vent de fortes crises iden­ti­taires et 
                                    sou­haitent connaître leur ori­gine. Il ne sera pas aisé de leur expliquer d’où ils viennent, 
                                    avant leur 18° anni­ver­saire. Sont-ce les atti­rances sexuelles et les sen­ti­ments, ou bien la 
                                    « science », qui doivent dic­ter notre éthique sociale ? </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">UDF</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’introduction du « mariage pour tous » reviendrait à ouvrir une brèche 
                                    sociale et politique qui évacue la définition historique du mariage, compris comme l’union 
                                    durable d’un homme et d’une femme, jusqu’à présent soutenue par le Tribunal fédéral et par le 
                                    Conseil fédéral. Des piliers centraux de la stabilité de notre société sont donc en jeu. Nous 
                                    sommes d’avis que le mariage est et doit rester l’union naturelle d’un homme et d’une femme, 
                                    qu’il s’agit de protéger. Seule cette union donne naissance à des enfants, lesquels assurent 
                                    l’avenir de la société. Il est donc dans l’intérêt même de l’État d’améliorer la situation de 
                                    la famille traditionnelle avec des pères et des mères unis par les liens du mariage. </p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">UDF</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">C’est surtout l’intérêt supérieur de l’enfant, en particulier son 
                                    droit de connaître ses propres origines, qui est sacrifié avec ce projet de loi. La 
                                    distinction proposée entre les dons de sperme nationaux et les dons de sperme étrangers 
                                    n’offre pas de protection suffisante sur ce point et ne fera en pratique qu’engendrer de 
                                    nouvelles inégalités et discriminations. En parlant de discrimination : si déjà les 
                                    lesbiennes sont censées avoir droit au don de sperme, pourquoi les hommes homosexuels 
                                    ne devraient-ils pas aussi avoir le droit d’avoir des enfants ?</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge uk-border-rounded">UDF</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’accès à la procréation médicalement assistée décidé de manière 
                                    inconstitutionnelle pour les couples de lesbiennes débouchera tôt ou tard sur la légalisation 
                                    de la gestation pour autrui, qui réduit l’enfant à un produit sur catalogue et dégrade la 
                                    femme au rang de « machine reproductrice à vendre ». Si ces projets de société deviennent la 
                                    norme, les conséquences funestes sont déjà prévisibles : les enfants « spoliés » de leur mère 
                                    ou de leur père biologique souffriront de crises d’identité.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">La famille, donc le mariage, est un des piliers porteurs de notre société. 
                                    Il est donc évident, pour l’UDC, que le mariage doit être réservé aux couples formés d’un homme 
                                    et d’une femme. Les partisans du projet « mariage pour tous » cherchent à miner cette institution. 
                                    Pour l’UDC, il est intolérable de vouloir placer sur un pied d’égalité le mariage avec n’importe 
                                    quelle forme de cohabitation. Elle refuse aussi bien l’absolue égalité du mariage avec un 
                                    partenariat homosexuel que l’adoption d’enfants par des couples homosexuels ou par des dites 
                                    familles monoparentales.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">L’opposition stricte de l’UDC tient aussi au fait que les partisans 
                                    du mariage pour tous pratiquent une « tactique du salami »: leur but final est de permettre 
                                    aux couples lesbiens d’accéder aux techniques de la procréation médicalement assistée, par 
                                    exemple en permettant à des couples mariés lesbiens de recevoir un don de sperme.</p>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <h3 class="uk-card-title"></h3>                            
                                <p class="uk-text-justify">D’un point de vue légal, l’extension du mariage aux partenaires 
                                    homosexuels est de surcroît inutile: depuis l’introduction en 2007 du partenariat enregistré 
                                    en Suisse, deux personnes du même sexe ont la possibilité de fonder légalement leur relation. 
                                    Le partenariat enregistré est relevé par l’office d’état civil et constitue une communauté de 
                                    vie semblable au mariage avec les droits et les obligations que cela implique.</p>
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