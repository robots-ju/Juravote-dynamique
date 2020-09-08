<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Modification de la loi sur la chasse</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        <script src="//cdn.amcharts.com/lib/4/core.js"></script>
        <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>


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
        <h1 class="uk-heading-large">Modification de la loi sur la chasse</h1>
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
                    <p>La loi actuelle remonte à 1985 et la situation a évolué depuis cette année-là. La loi révisée sur la chasse permet de mieux
                    protéger différents animaux sauvages et leurs biotopes. Elle offre par ailleurs une solution pragmatique pour gérer la cohabitation
                    avec le loup, de retour en Suisse depuis 1995. La loi révisée a pour objectif d'atténuer les conflits liés à la population de
                    loups en expansion.</p>
                    <p>Pour les opposants, cette révision a suscité un débat sans fin et des oppositions dans tous les partis. Ce que cela signifie
                    qu'elle ne satisfait à peu près personne. La révision initialement prévue devait être modérée et ne porter que sur quelques
                    points de la loi. Or, elle compromet l'ensemble du dispositif de protection des espèces.</p>
                <h1>La question qui vous est posée :</h1>
                    <b><p>Acceptez-vous la modification du 27 septembre 2019 de la loi fédérale sur la chasse et la protection des
                    mammifères et oiseaux sauvages (loi sur la chasse, LChP) ?</p></b>
            </li>
            <li>
                <div id="chartdiv"></div>
                <script>
                    am4core.useTheme(am4themes_animated);

                    var chart = am4core.create("chartdiv", am4charts.XYChart);
                    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                    chart.paddingBottom = 30;

                    chart.data = [{
                        "name": "Verts",
                        "steps": 10
                    }, {
                        "name": "PS",
                        "steps": 10
                    }, {
                        "name": "PEV",
                        "steps": 10
                    }, {
                        "name": "PVL",
                        "steps": 10
                    }, {
                        "name": "PDC",
                        "steps": 40
                    }, {
                        "name": "PBD",
                        "steps": 40
                    }, {
                        "name": "PLR",
                        "steps": 40
                    }, {
                        "name": "UDC",
                        "steps": 40
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
                            "steps": 5
                        }, {
                            "name": "Verts Jurassiens",
                            "steps": 0
                        }, {
                            "name": "PSJ",
                            "steps": 0
                        }, {
                            "name": "PEV Jura",
                            "steps": 5
                        }, {
                            "name": "PVL",
                            "steps": 5
                        }, {
                            "name": "PDC Jura",
                            "steps": 5
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
            <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les animaux sauvages seront mieux protégés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La Confédération apporte un soutien financier aux cantons pur la valorisation des biotopes d'animaux sauvages.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Certaines espèces sauvages d'animaux ne pourront plus être chassées.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La loi imposera aux cantons et aux paysans de construire des clotûres respectueuses afin d'éviter les accidents
                        et les blessures d'animaux.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil fédéral</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les mesures contribuent à la cohabitation à long terme de l'homme et du loup.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La loi garantir équilibre et sécurité entre les animaux, les paysages et l'humain.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Elle promeut la diversité des espèces.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Elle protège le paysage rural.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Elle permet le maintien de pratiques nécessaires.</p>
                    </div>
                </div>               
            </li>
            <li>
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Il serait désormais possible de tuer des animaux protégés considérés
                        comme indésirables avant même qu’ils n’aient causé le moindre dommage.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les cantons pourraient dorénavant ordonner des tirs sans avoir à en référer à quiconque.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le Conseil fédéral serait en droit d’élargir à tout moment la liste des animaux protégés
                        qui peuvent être régulés, sans avoir à obtenir l’aval du Parlement ou du peuple.</p>
                    </div>
                </div>                

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La bécasse des bois, le lièvre brun et le tétras lyre peuvent ainsi être chassés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La révision de loi est inutile et compliquée.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le lynx et le loup empêchent un abroutissement excessif des jeunes arbres par les cerfs et les chevreuils.
                        Ils font partie de l’écosystème et contribuent à l’existence de forêts de protection diversifiées et stables.
                        Une régulation préventive de ces animaux porte atteinte à la forêt et s’avère contreproductive du point de
                        vue de la gestion forestière.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Un NON à la loi révisée garantit la protection des espèces et permet d’éviter que l’on assiste à un
                        foisonnement de solutions cantonales entraînant une gestion disparate et incohérente de la faune sauvage.</p>
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