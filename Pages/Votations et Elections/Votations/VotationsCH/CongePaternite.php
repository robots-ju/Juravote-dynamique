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
                <div id="chartdiv"></div>
                <script>
                    am4core.useTheme(am4themes_animated);

                    var chart = am4core.create("chartdiv", am4charts.XYChart);
                    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                    chart.paddingBottom = 30;

                    chart.data = [{
                        "name": "Verts",
                        "steps": 40
                    }, {
                        "name": "PS",
                        "steps": 40
                    }, {
                        "name": "PEV",
                        "steps": 40
                    }, {
                        "name": "PVL",
                        "steps": 40
                    }, {
                        "name": "PDC",
                        "steps": 40
                    }, {
                        "name": "PBD",
                        "steps": 40
                    }, {
                        "name": "PLR",
                        "steps": 10
                    }, {
                        "name": "UDC",
                        "steps": 10
                    }];

                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = "name";
                    categoryAxis.renderer.grid.template.strokeOpacity = 0;
                    categoryAxis.renderer.minGridDistance = 10;
                    categoryAxis.renderer.labels.template.dy = 35;
                    categoryAxis.renderer.tooltip.dy = 35;

                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                    valueAxis.renderer.inside = true;
                    valueAxis.renderer.labels.template.fillOpacity = 0.3;
                    valueAxis.renderer.grid.template.strokeOpacity = 0;
                    valueAxis.min = 0;
                    valueAxis.cursorTooltipEnabled = false;
                    valueAxis.renderer.baseGrid.strokeOpacity = 0;

                    var series = chart.series.push(new am4charts.ColumnSeries);
                    series.dataFields.valueY = "steps";
                    series.dataFields.categoryX = "name";
                    series.tooltipText = "{valueY.value}";
                    series.tooltip.pointerOrientation = "vertical";
                    series.tooltip.dy = - 6;
                    series.columnsContainer.zIndex = 100;

                    var columnTemplate = series.columns.template;
                    columnTemplate.width = am4core.percent(50);
                    columnTemplate.maxWidth = 66;
                    columnTemplate.column.cornerRadius(60, 60, 10, 10);
                    columnTemplate.strokeOpacity = 0;

                    series.heatRules.push({ target: columnTemplate, property: "fill", dataField: "valueY", min: am4core.color("#a00000"), max: am4core.color("#35ff00") });
                    series.mainContainer.mask = undefined;

                    var bullet = columnTemplate.createChild(am4charts.CircleBullet);
                    bullet.circle.radius = 30;
                    bullet.valign = "bottom";
                    bullet.align = "center";
                    bullet.isMeasured = true;
                    bullet.mouseEnabled = false;
                    bullet.verticalCenter = "bottom";

                    var hoverState = bullet.states.create("hover");
                    var outlineCircle = bullet.createChild(am4core.Circle);
                    outlineCircle.adapter.add("radius", function (radius, target) {
                        var circleBullet = target.parent;
                        return circleBullet.circle.pixelRadius + 10;
                    })                    

                    image.adapter.add("href", function (href, target) {
                        var dataItem = target.dataItem;
                        if (dataItem) {
                            return "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/" + dataItem.categoryX.toLowerCase() + ".jpg";
                        }
                    })                    

                    var previousBullet;
                    chart.cursor.events.on("cursorpositionchanged", function (event) {
                        var dataItem = series.tooltipDataItem;

                        if (dataItem.column) {
                            var bullet = dataItem.column.children.getIndex(1);

                            if (previousBullet && previousBullet != bullet) {
                                previousBullet.isHover = false;
                            }

                            if (previousBullet != bullet) {

                                var hs = bullet.states.getKey("hover");
                                hs.properties.dy = -bullet.parent.pixelHeight + 30;
                                bullet.isHover = true;

                                previousBullet = bullet;
                            }
                        }
                    })
                </script>

                    <h2>Partis jurassiens</h2>
                    <div id="chartdivJU"></div>
                    <script>
                        am4core.useTheme(am4themes_animated);

                        var chartJU = am4core.create("chartdivJU", am4charts.XYChart);
                        chartJU.hiddenState.properties.opacity = 0; // this creates initial fade-in

                        chartJU.paddingBottom = 30;

                        chartJU.data = [{
                            "name": "CS-POP Jura",
                            "steps": 10
                        }, {
                            "name": "Verts Jurassiens",
                            "steps": 10
                        }, {
                            "name": "PSJ",
                            "steps": 10
                        }, {
                            "name": "PEV Jura",
                            "steps": 5
                        }, {
                            "name": "PVL",
                            "steps": 5
                        }, {
                            "name": "PDC Jura",
                            "steps": 10
                        }, {
                            "name": "PCSI Jura",
                            "steps": 5
                        }, {
                            "name": "PLRJ",
                            "steps": 10
                        }, {
                            "name": "UDC Jura",
                            "steps": 5
                        }];

                        var categoryAxis = chartJU.xAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "name";
                        categoryAxis.renderer.grid.template.strokeOpacity = 0;
                        categoryAxis.renderer.minGridDistance = 10;
                        categoryAxis.renderer.labels.template.dy = 35;
                        categoryAxis.renderer.tooltip.dy = 35;

                        var valueAxis = chartJU.yAxes.push(new am4charts.ValueAxis());
                        valueAxis.renderer.inside = true;
                        valueAxis.renderer.labels.template.fillOpacity = 0.3;
                        valueAxis.renderer.grid.template.strokeOpacity = 0;
                        valueAxis.min = 0;
                        valueAxis.cursorTooltipEnabled = false;
                        valueAxis.renderer.baseGrid.strokeOpacity = 0;

                        var series = chartJU.series.push(new am4charts.ColumnSeries);
                        series.dataFields.valueY = "steps";
                        series.dataFields.categoryX = "name";
                        series.tooltipText = "{valueY.value}";
                        series.tooltip.pointerOrientation = "vertical";
                        series.tooltip.dy = - 6;
                        series.columnsContainer.zIndex = 100;

                        var columnTemplate = series.columns.template;
                        columnTemplate.width = am4core.percent(50);
                        columnTemplate.maxWidth = 66;
                        columnTemplate.column.cornerRadius(60, 60, 10, 10);
                        columnTemplate.strokeOpacity = 0;

                        series.heatRules.push({ target: columnTemplate, property: "fill", dataField: "valueY", min: am4core.color("#D3D3D3"), max: am4core.color("#35ff00") });
                        series.mainContainer.mask = undefined;

                        var bullet = columnTemplate.createChild(am4charts.CircleBullet);
                        bullet.circle.radius = 30;
                        bullet.valign = "bottom";
                        bullet.align = "center";
                        bullet.isMeasured = true;
                        bullet.mouseEnabled = false;
                        bullet.verticalCenter = "bottom";

                        var hoverState = bullet.states.create("hover");
                        var outlineCircle = bullet.createChild(am4core.Circle);
                        outlineCircle.adapter.add("radius", function (radius, target) {
                            var circleBullet = target.parent;
                            return circleBullet.circle.pixelRadius + 10;
                        })                    

                        image.adapter.add("href", function (href, target) {
                            var dataItem = target.dataItem;
                            if (dataItem) {
                                return "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/" + dataItem.categoryX.toLowerCase() + ".jpg";
                            }
                        })                    

                        var previousBullet;
                        chartJU.cursor.events.on("cursorpositionchanged", function (event) {
                            var dataItem = series.tooltipDataItem;

                            if (dataItem.column) {
                                var bullet = dataItem.column.children.getIndex(1);

                                if (previousBullet && previousBullet != bullet) {
                                    previousBullet.isHover = false;
                                }

                                if (previousBullet != bullet) {

                                    var hs = bullet.states.getKey("hover");
                                    hs.properties.dy = -bullet.parent.pixelHeight + 30;
                                    bullet.isHover = true;

                                    previousBullet = bullet;
                                }
                            }
                        })
                    </script>
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