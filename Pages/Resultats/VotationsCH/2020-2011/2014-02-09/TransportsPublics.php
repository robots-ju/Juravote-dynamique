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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 09 février 2014</h1>
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
                        <p><b>Objet : </b>Arrêté fédéral du 20.06.2013 portant règlement du financement
                            et de l’aménagement de l’infrastructure ferroviaire (contre-projet direct à
                            l’initiative populaire «Pour les transports publics»)</p>
                        <p><b>Participation : </b>56.24 %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Référendum</p>
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
                        <div id="chartTransportsPublics" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatTransportsPublics = am4core.create("chartTransportsPublics", am4charts.PieChart);

                            // Add data
                            resultatTransportsPublics.data = [{
                                "votes": "OUI",
                                "suffrages": 1776878
                            }, {
                                "votes": "NON",
                                "suffrages": 1088176
                            }];

                            // Add and configure Series
                            var dataTransportsPublics = resultatTransportsPublics.series.push(new am4charts.PieSeries());
                            dataTransportsPublics.dataFields.value = "suffrages";
                            dataTransportsPublics.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatTransportsPublics.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataTransportsPublics.labels.template.disabled = true;
                            dataTransportsPublics.ticks.template.disabled = true;

                            // Disable tooltips
                            dataTransportsPublics.slices.template.tooltipText = "";

                            // Add a legend
                            resultatTransportsPublics.legend = new am4charts.Legend();
                            resultatTransportsPublics.legend.position = "right";

                            dataTransportsPublics.colors.list = [
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
                        <div class="uk-align-right" id="chartTransportsPublicsCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsTransportsPublicsCH = am4core.create("chartTransportsPublicsCH", am4maps.MapChart);

                            // Set map definition
                            resultatsTransportsPublicsCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsTransportsPublicsCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsTransportsPublicsCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série40to50 = resultatsTransportsPublicsCH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-SZ"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                            var série50to60 = resultatsTransportsPublicsCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-BE", "CH-UR", "CH-OW", "CH-NW", "CH-GL", "CH-FR", "CH-SO",
                            "CH-SH", "CH-AR", "CH-AI", "CH-SG", "CH-AG", "CH-TG"];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

                            var série60to70 = resultatsTransportsPublicsCH.series.push(new am4maps.MapPolygonSeries());
                            série60to70.name = "60 à 70 %";
                            série60to70.value = "60 à 70 %";
                            série60to70.title = "Oui en %";
                            série60to70.useGeodata = true;
                            série60to70.include = ["CH-ZH", "CH-LU", "CH-ZG", "CH-BL", "CH-GR", "CH-VS", "CH-NE", "CH-JU"];
                            série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série60to70.fill = am4core.color("#63cf46")
                            série60to70.mapPolygons.template.fill = am4core.color("#63cf46")

                            var série70to80 = resultatsTransportsPublicsCH.series.push(new am4maps.MapPolygonSeries());
                            série70to80.name = "70 à 80 %";
                            série70to80.value = "70 à 80 %";
                            série70to80.title = "Oui en %";
                            série70to80.useGeodata = true;
                            série70to80.include = ["CH-BS", "CH-TI", "CH-VD", "CH-GE"];
                            série70to80.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série70to80.fill = am4core.color("#42c121")
                            série70to80.mapPolygons.template.fill = am4core.color("#42c121")

                            resultatsTransportsPublicsCH.legend = new am4maps.Legend();
                            resultatsTransportsPublicsCH.legend.position = "left";
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