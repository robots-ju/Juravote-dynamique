<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include './variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        
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
<!-- Barre de navigation -->
<header>
            <div class="navbar-normal">
                <?php include "./Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "./Includes/Navbar/navbar-mobile.php"; ?>
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
                        <p><b>Objet : </b>Initiative populaire du 02.11.2012
                            «Halte à la surpopulation – Oui à la préservation durable des ressources naturelles»</p>
                        <p><b>Participation : </b>49.98 %</p>
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
                        <div id="chartSurpopulation" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatSurpopulation = am4core.create("chartSurpopulation", am4charts.PieChart);

                            // Add data
                            resultatSurpopulation.data = [{
                                "votes": "OUI",
                                "suffrages": 671099
                            }, {
                                "votes": "NON",
                                "suffrages": 1920454
                            }];

                            // Add and configure Series
                            var dataSurpopulation = resultatSurpopulation.series.push(new am4charts.PieSeries());
                            dataSurpopulation.dataFields.value = "suffrages";
                            dataSurpopulation.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatSurpopulation.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataSurpopulation.labels.template.disabled = true;
                            dataSurpopulation.ticks.template.disabled = true;

                            // Disable tooltips
                            dataSurpopulation.slices.template.tooltipText = "";

                            // Add a legend
                            resultatSurpopulation.legend = new am4charts.Legend();
                            resultatSurpopulation.legend.position = "right";

                            dataSurpopulation.colors.list = [
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
                        <div class="uk-align-right" id="chartSurpopulationCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsSurpopulationCH = am4core.create("chartSurpopulationCH", am4maps.MapChart);

                            // Set map definition
                            resultatsSurpopulationCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsSurpopulationCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsSurpopulationCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série10to20 = resultatsSurpopulationCH.series.push(new am4maps.MapPolygonSeries());
                            série10to20.name = "10 à 20 %";
                            série10to20.value = "10 à 20 %";
                            série10to20.title = "Oui en %";
                            série10to20.useGeodata = true;
                            série10to20.include = ["CH-VD"];
                            série10to20.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série10to20.fill = am4core.color("#db0000")
                            série10to20.mapPolygons.template.fill = am4core.color("#db0000")

                            var série20to30 = resultatsSurpopulationCH.series.push(new am4maps.MapPolygonSeries());
                            série20to30.name = "20 à 30 %";
                            série20to30.value = "20 à 30 %";
                            série20to30.title = "Oui en %";
                            série20to30.useGeodata = true;
                            série20to30.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-NW", "CH-ZG", "CH-FR",
                            "CH-BS", "CH-BL", "CH-GR", "CH-AG", "CH-VD", "CH-NE", "CH-GE", "CH-JU"];
                            série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série20to30.fill = am4core.color("#ca2f2f")
                            série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                            var série30to40 = resultatsSurpopulationCH.series.push(new am4maps.MapPolygonSeries());
                            série30to40.name = "30 à 40 %";
                            série30to40.value = "30 à 40 %";
                            série30to40.title = "Oui en %";
                            série30to40.useGeodata = true;
                            série30to40.include = ["CH-UR", "CH-SZ", "CH-OW", "CH-GL", "CH-SO", "CH-SH",
                            "CH-AR", "CH-AI", "CH-SG", "CH-TG", "CH-TI"];
                            série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série30to40.fill = am4core.color("#e74545")
                            série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                            resultatsSurpopulationCH.legend = new am4maps.Legend();
                            resultatsSurpopulationCH.legend.position = "left";
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>