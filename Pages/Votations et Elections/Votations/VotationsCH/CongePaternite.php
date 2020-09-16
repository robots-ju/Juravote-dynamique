<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Introduction d'un congé paternité</title>
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
        <h1 class="uk-heading-large">Introduction d'une loi sur le congé paternité</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <h1>Description de la votation</h1>
                    <p>Actuellement, à la naissance d’un enfant, les mères qui travaillent ont droit à un congé payé de 14 semaines, 
                    tandis que les pères n’ont droit qu’à un ou deux jours.</p>

                    <p>À l’initiative populaire « Pour un congé de paternité raisonnable – en faveur de toute la famille »,
                    qui prévoit un congé de quatre semaines pour tous les pères qui travaillent, le Conseil fédéral et le
                    Parlement ont présenté un contre-projet qui prévoit un congé de paternité de deux semaines pour permettre
                    à tous les pères de participer à l’éducation des enfants et de décharger les mères.</p>

                    <p>Le contre-projet soumis à votation prévoit d’introduire un congé de paternité de deux semaines à
                    prendre dans les six mois suivant la naissance de l’enfant. Comme pour le congé de maternité, l’allocation
                    pour perte de gain correspondra à 80 % du revenu (au maximum 196 francs par jour), à condition que le père ait
                    travaillé au moins cinq mois pendant les neuf mois précédant la naissance. Les indépendants en profiteront également.</p>

                    <p>Dans la foulée, l’initiative populaire « Pour un congé de paternité raisonnable – en faveur de toute la famille »
                    a été retirée à la condition que le contre-projet soumis à votation le 27 septembre entre en vigueur.</p>

                    <p>Un comité référendaire s’oppose au contre-projet indirect du Conseil fédéral et du Parlement en avançant que
                    cette nouvelle assurance sociale est trop chère et qu’elle fait augmenter les déductions sociales, réduisant ainsi
                    le salaire de tous les travailleurs.</p>

                    <p>Le Conseil fédéral et le Parlement sont d’avis que le congé de paternité est financièrement supportable, même
                    pour les petites et moyennes entreprises.</p>                    

                <h1>La question qui vous est posée :</h1>
                    <b><p>Acceptez-vous la modification du 27 septembre 2019 de la loi fédérale sur les allocations pour
                    perte de gain en cas de service et de maternité (loi sur les allocations pour perte de gain, LAPG) ?</p></b>
            </li>
            <li>
                <h2>Partis fédéraux</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PBD</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Partis jurassiens</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">CS-POP</th>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PCSI</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">LIBRE</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">LIBRE</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">LIBRE</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Autorités</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Conseil fédéral</th>
                            <th class="uk-text-center">Conseil des Etats</th>
                            <th class="uk-text-center">Conseil national</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        </tr>
                    </tbody>
                </table> 
            </li>  
            <li>            
            <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Aujourd'hui, les pères veulent prendre leurs responsabilités</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Une société est aussi forte que ses familles - le coronavirus l'a montré</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé paternité est du temps de travail, pas des vacances.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé paternité est une solution abordable.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé paternité est largement soutenu.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La Suisse est un pays en développement en matière de politique familiale.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé paternité facilite le retour au travail des femmes.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé paternité est un petit pas vers l'égalité.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>De nos jours, les pères doivent être présents dès la sortie de l'hôpital.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Un moment central pour la répartition des rôles dans la famille.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé paternité est particulièrement bénéfique pour les bébés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé de paternité comme un droit pour tous (!) les salariés.</p>
                    </div>
                </div>
            </li>
            <li>
            <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>NON à la hausse constante des ponctions sur les salaires!</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>NON pour éviter que les grands groupes déplacent leurs coûts sur les petits!</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>NON à de nouvelles charges pour les PME, les arts et métiers!</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>NON à de nouvelles charges imposées à nos institutions sociales endettées!</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>NON parce qu’il n’est pas tolérable que tous paient pour un petit nombre!</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>NON parce que l’Etat n’a pas à se mêler encore plus des affaires des familles!</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le congé paternité de deux semaines imposé par l’État n’est pas la solution souhaitée par le PLR.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>En outre, les coûts induits auraient constitué un défi supplémentaire pour les PME dans le cadre de la
                        crise actuelle.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Ce qu’il faut maintenant c’est un congé parental qui permette aux couples de s’organiser
                        comme ils l’entendent, de manière flexible.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Un congé parental de 16 semaines offre une solution flexible et ne bétonne pas les anciens modèles.</p>
                    </div>
                </div>
            </li>
        </ul>
</main>
</body>

<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>