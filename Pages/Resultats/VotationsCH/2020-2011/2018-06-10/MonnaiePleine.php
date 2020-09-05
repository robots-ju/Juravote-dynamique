<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '/Juravote-dynamique/variables.php'; ?>

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
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 10 juin 2018</h1>
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
                        <p><b>Objet : </b>Initiative populaire du 01.12.2015 «Pour une monnaie à l'abri des crises:
                            émission monétaire uniquement par la Banque nationale! (Initiative Monnaie pleine)»</p>
                        <p><b>Participation : </b>34.55 %</p>
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
                        <div id="chartMonnaiePleine" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatMonnaiePleine = am4core.create("chartMonnaiePleine", am4charts.PieChart);

                            // Add data
                            resultatMonnaiePleine.data = [{
                                "votes": "OUI",
                                "suffrages": 442387
                            }, {
                                "votes": "NON",
                                "suffrages": 1379540
                            }];

                            // Add and configure Series
                            var dataMonnaiePleine = resultatMonnaiePleine.series.push(new am4charts.PieSeries());
                            dataMonnaiePleine.dataFields.value = "suffrages";
                            dataMonnaiePleine.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatMonnaiePleine.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataMonnaiePleine.labels.template.disabled = true;
                            dataMonnaiePleine.ticks.template.disabled = true;

                            // Disable tooltips
                            dataMonnaiePleine.slices.template.tooltipText = "";

                            // Add a legend
                            resultatMonnaiePleine.legend = new am4charts.Legend();
                            resultatMonnaiePleine.legend.position = "right";

                            dataMonnaiePleine.colors.list = [
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
                        <div class="uk-align-right" id="chartMonnaiePleinech" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsMonnaiePleineCH = am4core.create("chartMonnaiePleinech", am4maps.MapChart);

                            // Set map definition
                            resultatsMonnaiePleineCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsMonnaiePleineCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsMonnaiePleineCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série10to20 = resultatsMonnaiePleineCH.series.push(new am4maps.MapPolygonSeries());
                            série10to20.name = "10 à 20 %";
                            série10to20.value = "10 à 20 %";
                            série10to20.title = "Oui en %";
                            série10to20.useGeodata = true;
                            série10to20.include = ["CH-SZ", "CH-OW", "CH-NW"];
                            série10to20.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série10to20.fill = am4core.color("#db0000")
                            série10to20.mapPolygons.template.fill = am4core.color("#db0000")

                            var série20to30 = resultatsMonnaiePleineCH.series.push(new am4maps.MapPolygonSeries());
                            série20to30.name = "20 à 30 %";
                            série20to30.value = "20 à 30 %";
                            série20to30.title = "Oui en %";
                            série20to30.useGeodata = true;
                            série20to30.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-UR", "CH-GL", "CH-ZG", "CH-FR",
                            "CH-SO", "CH-BS", "CH-BL", "CH-SH", "CH-AR", "CH-AI", "CH-SG", "CH-GR", "CH-AG",
                            "CH-TG", "CH-TI", "CH-VS", "CH-VD", "CH-NE", "CH-JU"];
                            série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série20to30.fill = am4core.color("#ca2f2f")
                            série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                            var série40to50 = resultatsMonnaiePleineCH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-GE"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")                            
                            
                            resultatsMonnaiePleineCH.legend = new am4maps.Legend();
                            resultatsMonnaiePleineCH.legend.position = "left";
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