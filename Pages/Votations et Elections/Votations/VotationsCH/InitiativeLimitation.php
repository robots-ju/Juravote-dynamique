<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include '../../../../variables.php'; ?>

    <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
    <title>JuraVote | Votations fédérales du 27 septembre 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
    <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
    <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
    <link rel="stylesheet" href="../../../../index.css"/>
    <link rel="stylesheet" href="../../../../badges.css"/>
    
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
        <?php include "../../../../Includes/Navbar/navbar.php"; ?>
    </div>

    <div>
    <?php include "../../../../Includes/Navbar/navbar-mobile.php"; ?>
    </div>
</header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Initiative populaire "de limitation"</h1>
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
                <p>L'initiative veut mettre un termee à la libre circulation des personnes avec l'UE. Si elle est acceptée, le Conseil fédéral
                devra mettre fin à l'ALCP dans les douze mois en menant des négociations avec l'UE.
                </p>
                <p>S'il n'y parvient pas, il devra dénoncer unilatéralement l'ALCP dans un délai supplémentaire de 30 jours.
                </p>
                <p>Dans ce cas, la clause guillotine s'appliquera et les six autres accords des Bilatérales I s'éteindront automatiquement.
                    L'initiative interdit par ailleurs à la Suisse de contracter de nouvelles obligations de droit international qui
                    accorderaient un régime de libre circulation des personnes à des ressortissants étrangers.
                </p>
                <p><a href="https://www.ejpd.admin.ch/ejpd/fr/home/aktuell/abstimmungen/begrenzungsinitiative/faq.html" target="_blank">
                    Plus d'infos sur le site de la Confédération suisse</a> (ouvre une nouvelle page)</p>
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
                        "steps": 10
                    }, {
                        "name": "PBD",
                        "steps": 10
                    }, {
                        "name": "PLR",
                        "steps": 10
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
            </li>            
                <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les Suisses décideront enfin eux-mêmes qui ils veulent admettre dans leur pays.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Le Conseil fédéral devra enfin respecter la volonté du peuple.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>L'afflux d'immigrants mal formé diminuera.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Les entreprises suisses pourront recruter du personnel hautement qualifié.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>La main d'oeuvre bon marché de l'UE n'évincera plus les travailleurs suisses.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Nous protégeons les institutions sociales contre le pillage par les étrangers.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Nous pourrons de nouveau aller de l'avant en Suisse.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>L'école pourra à nouveau former sérieusement les enfants.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>La Suisse sera plus sûre, notamment pour les femmes.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Le prix du logement baissera.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Nous autres Suisses, nous ne serons plus étrangers dans notre propre pays.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Les Suisses pourront à nouveau profiter de la prospérité, fruit de leur travail.</p>
                        </div>
                    </div>
                </div>
            <li>
            <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Non à une attaque frontale contre les accords bilatéraux</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une résiliation sans alternatives crédibles</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une résiliation qui nous plonger dans l'incertitude</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une politique européenne isolationniste</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à un cavalier seul hostile à la formation et à la recherche</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non au dumping salarial</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une détérioration massive de nos relations avec l'Europe</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à la limitation de notre liberté</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Contre la pénurie de main-d'oeuvre</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Les Suisses bénéficient eux-aussi de la libre-circulation des personnes</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Déstabilisation en cas de période difficile</p>
                        </div>
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