<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 30 novembre 2014</h1>
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
                        <p><b>Objet : </b>Initiative populaire du 20.03.2013 «Sauvez l'or de la Suisse (Initiative sur l'or)»</p>
                        <p><b>Participation : </b>49.81 %</p>
                        <p><b>Résultat : </b>Refusé</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Initiative populaire</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats nationaux</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div id="chartOr" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatOr = am4core.create("chartOr", am4charts.PieChart);

                            // Add data
                            resultatOr.data = [{
                                "votes": "OUI",
                                "suffrages": 580528
                            }, {
                                "votes": "NON",
                                "suffrages": 1974137
                            }];

                            // Add and configure Series
                            var dataOr = resultatOr.series.push(new am4charts.PieSeries());
                            dataOr.dataFields.value = "suffrages";
                            dataOr.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatOr.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataOr.labels.template.disabled = true;
                            dataOr.ticks.template.disabled = true;

                            // Disable tooltips
                            dataOr.slices.template.tooltipText = "";

                            // Add a legend
                            resultatOr.legend = new am4charts.Legend();
                            resultatOr.legend.position = "right";

                            dataOr.colors.list = [
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
                        <div class="uk-align-right" id="chartOrCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsOrCH = am4core.create("chartOrCH", am4maps.MapChart);

                            // Set map definition
                            resultatsOrCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsOrCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsOrCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série10to20 = resultatsOrCH.series.push(new am4maps.MapPolygonSeries());
                            série10to20.name = "10 à 20 %";
                            série10to20.value = "10 à 20 %";
                            série10to20.title = "Oui en %";
                            série10to20.useGeodata = true;
                            série10to20.include = ["CH-VD", "CH-JU"];
                            série10to20.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série10to20.fill = am4core.color("#db0000")
                            série10to20.mapPolygons.template.fill = am4core.color("#db0000")

                            var série20to30 = resultatsOrCH.series.push(new am4maps.MapPolygonSeries());
                            série20to30.name = "20 à 30 %";
                            série20to30.value = "20 à 30 %";
                            série20to30.title = "Oui en %";
                            série20to30.useGeodata = true;
                            série20to30.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-UR", "CH-SZ", "CH-OW",
                            "CH-NW", "CH-GL", "CH-ZG", "CH-FR", "CH-SO", "CH-BS", "CH-BL", "CH-SH",
                            "CH-AR", "CH-AI", "CH-SG", "CH-GR", "CH-AG", "CH-TG", "CH-VS", "CH-NE", "CH-GE"];
                            série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série20to30.fill = am4core.color("#ca2f2f")
                            série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                            var série30to40 = resultatsOrCH.series.push(new am4maps.MapPolygonSeries());
                            série30to40.name = "30 à 40 %";
                            série30to40.value = "30 à 40 %";
                            série30to40.title = "Oui en %";
                            série30to40.useGeodata = true;
                            série30to40.include = ["CH-TI"];
                            série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série30to40.fill = am4core.color("#e74545")
                            série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                            resultatsOrCH.legend = new am4maps.Legend();
                            resultatsOrCH.legend.position = "left";
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>