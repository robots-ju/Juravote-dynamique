<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Référendum contre le financement d'armes</title>
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
            <h1 class="uk-heading-large">texte</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h1>Description de la votation</h1>
                        <p>texte</p>
                
                    <h1>La question qui vous est posée :</h1>
                        <b><p>texte</p></b>
                </li>
                <li>
                    <h2>Partis fédéraux</h2>
                    <div id="chartdivCH"></div>
                    <script>
                        am4core.useTheme(am4themes_animated);

                        var chartCH = am4core.create("chartdivCH", am4charts.XYChart);
                        chartCH.hiddenState.properties.opacity = 0; // this creates initial fade-in

                        chartCH.paddingBottom = 30;

                        chartCH.data = [{
                            "name": "Verts",
                            "steps": 10
                        }, {
                            "name": "PS",
                            "steps": 10
                        }, {
                            "name": "PEV",
                            "steps": 5
                        }, {
                            "name": "PVL",
                            "steps": 5
                        }, {
                            "name": "PDC",
                            "steps": 5
                        }, {
                            "name": "PBD",
                            "steps": 5
                        }, {
                            "name": "PLR",
                            "steps": 5
                        }, {
                            "name": "UDC",
                            "steps": 5
                        }];

                        var categoryAxis = chartCH.xAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "name";
                        categoryAxis.renderer.grid.template.strokeOpacity = 0;
                        categoryAxis.renderer.minGridDistance = 10;
                        categoryAxis.renderer.labels.template.dy = 35;
                        categoryAxis.renderer.tooltip.dy = 35;

                        var valueAxis = chartCH.yAxes.push(new am4charts.ValueAxis());
                        valueAxis.renderer.inside = true;
                        valueAxis.renderer.labels.template.fillOpacity = 0.3;
                        valueAxis.renderer.grid.template.strokeOpacity = 0;
                        valueAxis.min = 0;
                        valueAxis.cursorTooltipEnabled = false;
                        valueAxis.renderer.baseGrid.strokeOpacity = 0;

                        var series = chartCH.series.push(new am4charts.ColumnSeries);
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
                        chartCH.cursor.events.on("cursorpositionchanged", function (event) {
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
                            "steps": 5
                        }, {
                            "name": "PSJ",
                            "steps": 5
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
                            "steps": 5
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
                <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative combat les déplacements forcés de populations</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative contribue à rendre le monde plus pacifique</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative protège la neutralité de la Suisse</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative est la condition sine qua non d’une politique de sécurité nationale et d’une politique extérieure crédible</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’initiative pousse la Suisse à avoir une politique de sécurité nationale et une politique extérieure crédible et cohérente</p>
                        </div>
                    </div>


                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pbd uk-border-rounded">PBD</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>
                </li>
                <li>
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>                        
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>texte</p>
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