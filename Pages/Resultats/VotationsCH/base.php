<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations fédérales</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>


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
        <!-- Barre de navigation -->
        <header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
        <main>
            <section style="padding: 2%">
                <h1 class="uk-heading-large">Résultats de la votation fédérale du XX xxxxxxx XXXX</h1>
                <hr>
                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <h2>Informations de la votation</h2>
                                </div>
                            </div>
                            <div class="uk-card-body uk-text-left">
                                <p><b>Objet : </b>[Nom de la votation]</p>
                                <p><b>Participation : </b>[Paritcipation]</p>
                                <p><b>Résultat : </b>[Résultat]</p>
                                <p><b>Type de la votation : </b>Votation fédérale</p>
                                <p><b>Mode de votation : </b>[Mode de votation]</p>
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
                                <div id="chartNomCourt" style="width: 100%; height: 250px;"></div>
                                <script>
                                    // Create chart instance
                                    var resultatNomCourt = am4core.create("chartNomCourt", am4charts.PieChart);

                                    // Add data
                                    resultatNomCourt.data = [{
                                        "votes": "OUI",
                                        "suffrages": [suffrages]
                                    }, {
                                        "votes": "NON",
                                        "suffrages": [suffrages]
                                    }];

                                    // Add and configure Series
                                    var dataNomCourt = resultatNomCourt.series.push(new am4charts.PieSeries());
                                    dataNomCourt.dataFields.value = "suffrages";
                                    dataNomCourt.dataFields.category = "votes";

                                    // Let's cut a hole in our Pie chart the size of 40% the radius
                                    resultatNomCourt.innerRadius = am4core.percent(40);

                                    // Disable ticks and labels
                                    dataNomCourt.labels.template.disabled = true;
                                    dataNomCourt.ticks.template.disabled = true;

                                    // Disable tooltips
                                    dataNomCourt.slices.template.tooltipText = "";

                                    // Add a legend
                                    resultatNomCourt.legend = new am4charts.Legend();
                                    resultatNomCourt.legend.position = "right";

                                    dataNomCourt.colors.list = [
                                    am4core.color("#89ff6a"),
                                    am4core.color("#ff4242"),
                                    ]
                                </script>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <h2>Analyse du résultat</h2>
                                </div>
                            </div>
                            <div class="uk-card-body uk-text-left">
                                
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column" uk-grid>
                                    <h2>Résultats détaillés</h2>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-align-right" id="chartNomCourtCH" style="width: 100%; height: 300px;"></div>
                                <script>
                                    // Create map instance
                                    var resultatsNomCourtCH = am4core.create("chartNomCourtCH", am4maps.MapChart);

                                    // Set map definition
                                    resultatsNomCourtCH.geodata = am4geodata_switzerlandHigh;

                                    // Set projection
                                    resultatsNomCourtCH.projection = new am4maps.projections.Miller();

                                    // Create map polygon series
                                    var polygonSeries = resultatsNomCourtCH.series.push


                                    // Make map load polygon (like country names) data from GeoJSON
                                    polygonSeries.useGeodata = true;

                                    //Create data series
                                    var série0to10 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série0to10.name = "0 à 10 %";
                                    série0to10.value = "0 à 10 %";
                                    série0to10.title = "Oui en %";
                                    série0to10.useGeodata = true;
                                    série0to10.include = [];
                                    série0to10.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série0to10.fill = am4core.color("#a00000")
                                    série0to10.mapPolygons.template.fill = am4core.color("#a00000")

                                    var série10to20 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série10to20.name = "10 à 20 %";
                                    série10to20.value = "10 à 20 %";
                                    série10to20.title = "Oui en %";
                                    série10to20.useGeodata = true;
                                    série10to20.include = [];
                                    série10to20.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série10to20.fill = am4core.color("#db0000")
                                    série10to20.mapPolygons.template.fill = am4core.color("#db0000")

                                    var série20to30 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série20to30.name = "20 à 30 %";
                                    série20to30.value = "20 à 30 %";
                                    série20to30.title = "Oui en %";
                                    série20to30.useGeodata = true;
                                    série20to30.include = [];
                                    série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série20to30.fill = am4core.color("#ca2f2f")
                                    série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                                    var série30to40 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série30to40.name = "30 à 40 %";
                                    série30to40.value = "30 à 40 %";
                                    série30to40.title = "Oui en %";
                                    série30to40.useGeodata = true;
                                    série30to40.include = [];
                                    série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série30to40.fill = am4core.color("#e74545")
                                    série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                                    var série40to50 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série40to50.name = "40 à 50 %";
                                    série40to50.value = "40 à 50 %";
                                    série40to50.title = "Oui en %";
                                    série40to50.useGeodata = true;
                                    série40to50.include = [];
                                    série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série40to50.fill = am4core.color("#fd7272")
                                    série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                                    var série50to60 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série50to60.name = "50 à 60 %";
                                    série50to60.value = "50 à 60 %";
                                    série50to60.title = "Oui en %";
                                    série50to60.useGeodata = true;
                                    série50to60.include = [];
                                    série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série50to60.fill = am4core.color("#88e56f")
                                    série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

                                    var série60to70 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série60to70.name = "60 à 70 %";
                                    série60to70.value = "60 à 70 %";
                                    série60to70.title = "Oui en %";
                                    série60to70.useGeodata = true;
                                    série60to70.include = [];
                                    série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série60to70.fill = am4core.color("#63cf46")
                                    série60to70.mapPolygons.template.fill = am4core.color("#63cf46")

                                    var série70to80 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série70to80.name = "70 à 80 %";
                                    série70to80.value = "70 à 80 %";
                                    série70to80.title = "Oui en %";
                                    série70to80.useGeodata = true;
                                    série70to80.include = [];
                                    série70to80.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série70to80.fill = am4core.color("#42c121")
                                    série70to80.mapPolygons.template.fill = am4core.color("#42c121")

                                    var série80to90 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série80to90.name = "80 à 90 %";
                                    série80to90.value = "80 à 90 %";
                                    série80to90.title = "Oui en %";
                                    série80to90.useGeodata = true;
                                    série80to90.include = [];
                                    série80to90.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série80to90.fill = am4core.color("#33d708")
                                    série80to90.mapPolygons.template.fill = am4core.color("#33d708")

                                    var série90to100 = resultatsNomCourtCH.series.push(new am4maps.MapPolygonSeries());
                                    série90to100.name = "90 à 100 %";
                                    série90to100.value = "90 à 100 %";
                                    série90to100.title = "Oui en %";
                                    série90to100.useGeodata = true;
                                    série90to100.include = [];
                                    série90to100.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                                    série90to100.fill = am4core.color("#35ff00")
                                    série90to100.mapPolygons.template.fill = am4core.color("#35ff00")

                                    resultatsNomCourtCH.legend = new am4maps.Legend();
                                    resultatsNomCourtCH.legend.position = "left";
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
    </body>
</html>