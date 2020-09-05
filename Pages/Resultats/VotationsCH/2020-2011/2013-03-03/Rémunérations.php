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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 03 mars 2013</h1>
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
                        <p><b>Objet : </b>Initiative populaire du 26.02.2008 'contre les rémunérations abusives'</p>
                        <p><b>Participation : </b>46.74 %</p>
                        <p><b>Résultat : </b>Acepté</p>
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
                        <div id="chartRemunerations" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatRemunerations = am4core.create("chartRemunerations", am4charts.PieChart);

                            // Add data
                            resultatRemunerations.data = [{
                                "votes": "OUI",
                                "suffrages": 1616184
                            }, {
                                "votes": "NON",
                                "suffrages": 761975
                            }];

                            // Add and configure Series
                            var dataRemunerations = resultatRemunerations.series.push(new am4charts.PieSeries());
                            dataRemunerations.dataFields.value = "suffrages";
                            dataRemunerations.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatRemunerations.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataRemunerations.labels.template.disabled = true;
                            dataRemunerations.ticks.template.disabled = true;

                            // Disable tooltips
                            dataRemunerations.slices.template.tooltipText = "";

                            // Add a legend
                            resultatRemunerations.legend = new am4charts.Legend();
                            resultatRemunerations.legend.position = "right";

                            dataRemunerations.colors.list = [
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
                        <div class="uk-align-right" id="chartRemunerationsCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsRemunerationsCH = am4core.create("chartRemunerationsCH", am4maps.MapChart);

                            // Set map definition
                            resultatsRemunerationsCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsRemunerationsCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsRemunerationsCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series                           
                            var série50to60 = resultatsRemunerationsCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-OW", "CH-NW", "CH-ZG"];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

                            var série60to70 = resultatsRemunerationsCH.series.push(new am4maps.MapPolygonSeries());
                            série60to70.name = "60 à 70 %";
                            série60to70.value = "60 à 70 %";
                            série60to70.title = "Oui en %";
                            série60to70.useGeodata = true;
                            série60to70.include = ["CH-LU", "CH-UR", "CH-SZ", "CH-GL", "CH-SO", "CH-BS", "CH-BL",
                            "CH-AR", "CH-AI", "CH-SG", "CH-GR", "CH-AG", "CH-VS", "CH-VD", "CH-GE"];
                            série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série60to70.fill = am4core.color("#63cf46")
                            série60to70.mapPolygons.template.fill = am4core.color("#63cf46")

                            var série70to80 = resultatsRemunerationsCH.series.push(new am4maps.MapPolygonSeries());
                            série70to80.name = "70 à 80 %";
                            série70to80.value = "70 à 80 %";
                            série70to80.title = "Oui en %";
                            série70to80.useGeodata = true;
                            série70to80.include = ["CH-ZH", "CH-BE", "CH-FR", "CH-SH", "CH-TG", "CH-TI", "CH-NE", "CH-JU"];
                            série70to80.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série70to80.fill = am4core.color("#42c121")
                            série70to80.mapPolygons.template.fill = am4core.color("#42c121")

                            resultatsRemunerationsCH.legend = new am4maps.Legend();
                            resultatsRemunerationsCH.legend.position = "left";
                                                                
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