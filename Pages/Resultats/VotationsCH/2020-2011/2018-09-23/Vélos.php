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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 23 septembre 2018</h1>
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
                        <p><b>Objet : </b>Arrêté fédéral du 13.03.2018 concernant les voies cyclables et les chemins et sentiers pédestres
                            (contre-projet direct à l'initiative populaire «Pour la promotion des voies cyclables et des
                            chemins et sentiers pédestres [initiative vélo]») </p>
                        <p><b>Participation : </b>37.48 %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Contre-projet à l'initiative populaire</p>
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
                        <div id="chartVelos" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatVelos = am4core.create("chartVelos", am4charts.PieChart);

                            // Add data
                            resultatVelos.data = [{
                                "votes": "OUI",
                                "suffrages": 1475000
                            }, {
                                "votes": "NON",
                                "suffrages": 529253
                            }];

                            // Add and configure Series
                            var dataVelos = resultatVelos.series.push(new am4charts.PieSeries());
                            dataVelos.dataFields.value = "suffrages";
                            dataVelos.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatVelos.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataVelos.labels.template.disabled = true;
                            dataVelos.ticks.template.disabled = true;

                            // Disable tooltips
                            dataVelos.slices.template.tooltipText = "";

                            // Add a legend
                            resultatVelos.legend = new am4charts.Legend();
                            resultatVelos.legend.position = "right";

                            dataVelos.colors.list = [
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
                        <div class="uk-align-right" id="chartVelosch" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsVelosCH = am4core.create("chartVelosch", am4maps.MapChart);

                            // Set map definition
                            resultatsVelosCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsVelosCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsVelosCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série50to60 = resultatsVelosCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-OW"];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

                            var série60to70 = resultatsVelosCH.series.push(new am4maps.MapPolygonSeries());
                            série60to70.name = "60 à 70 %";
                            série60to70.value = "60 à 70 %";
                            série60to70.title = "Oui en %";
                            série60to70.useGeodata = true;
                            série60to70.include = ["CH-LU", "CH-UR", "CH-SZ", "CH-NW", "CH-GL", "CH-SH", "CH-AR", "CH-AI"];
                            série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série60to70.fill = am4core.color("#63cf46")
                            série60to70.mapPolygons.template.fill = am4core.color("#63cf46")
                            
                            var série70to80 = resultatsVelosCH.series.push(new am4maps.MapPolygonSeries());
                            série70to80.name = "70 à 80 %";
                            série70to80.value = "70 à 80 %";
                            série70to80.title = "Oui en %";
                            série70to80.useGeodata = true;
                            série70to80.include = ["CH-ZH", "CH-BE", "CH-ZG", "CH-FR", "CH-SO", "CH-BS", "CH-BL", "CH-SG",
                            "CH-GR", "CH-AG", "CH-TG", "CH-TI", "CH-VS"];
                            série70to80.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série70to80.fill = am4core.color("#42c121")
                            série70to80.mapPolygons.template.fill = am4core.color("#42c121")

                            var série80to90 = resultatsVelosCH.series.push(new am4maps.MapPolygonSeries());
                            série80to90.name = "80 à 90 %";
                            série80to90.value = "80 à 90 %";
                            série80to90.title = "Oui en %";
                            série80to90.useGeodata = true;
                            série80to90.include = ["CH-VD", "CH-NE", "CH-GE", "CH-JU"];
                            série80to90.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série80to90.fill = am4core.color("#33d708")
                            série80to90.mapPolygons.template.fill = am4core.color("#33d708")

                            resultatsVelosCH.legend = new am4maps.Legend();
                            resultatsVelosCH.legend.position = "left";
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