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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 24 septembre 2017</h1>
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
                        <p><b>Objet : </b>Arrêté fédéral du 14.03.2017 sur la sécurité alimentaire
                            (contre-projet direct à l'initiative populaire «Pour la sécurité alimentaire»)</p>
                        <p><b>Participation : </b>47.11 %</p>
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
                            <h2>Résultats</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div id="chartSécuritéA" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatSécuritéA = am4core.create("chartSécuritéA", am4charts.PieChart);

                            // Add data
                            resultatSécuritéA.data = [{
                                "votes": "OUI",
                                "suffrages": 1943180
                            }, {
                                "votes": "NON",
                                "suffrages": 524919
                            }];

                            // Add and configure Series
                            var dataSécuritéA = resultatSécuritéA.series.push(new am4charts.PieSeries());
                            dataSécuritéA.dataFields.value = "suffrages";
                            dataSécuritéA.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatSécuritéA.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataSécuritéA.labels.template.disabled = true;
                            dataSécuritéA.ticks.template.disabled = true;

                            // Disable tooltips
                            dataSécuritéA.slices.template.tooltipText = "";

                            // Add a legend
                            resultatSécuritéA.legend = new am4charts.Legend();
                            resultatSécuritéA.legend.position = "right";

                            dataSécuritéA.colors.list = [
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
                        <div class="uk-align-right" id="chartSécuritéAch" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsSécuritéACH = am4core.create("chartSécuritéAch", am4maps.MapChart);

                            // Set map definition
                            resultatsSécuritéACH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsSécuritéACH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsSécuritéACH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série60to70 = resultatsSécuritéACH.series.push(new am4maps.MapPolygonSeries());
                            série60to70.name = "60 à 70 %";
                            série60to70.value = "60 à 70 %";
                            série60to70.title = "Oui en %";
                            série60to70.useGeodata = true;
                            série60to70.include = ["CH-SZ", "CH-GL"];
                            série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série60to70.fill = am4core.color("#63cf46")
                            série60to70.mapPolygons.template.fill = am4core.color("#63cf46")

                            var série70to80 = resultatsSécuritéACH.series.push(new am4maps.MapPolygonSeries());
                            série70to80.name = "70 à 80 %";
                            série70to80.value = "70 à 80 %";
                            série70to80.title = "Oui en %";
                            série70to80.useGeodata = true;
                            série70to80.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-UR", "CH-OW", "CH-NW", "CH-ZG",
                            "CH-SO", "CH-BS", "CH-BL", "CH-SH", "CH-AR", "CH-AI", "CH-SG", "CH-GR", "CH-AG", "CH-TG"];
                            série70to80.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série70to80.fill = am4core.color("#42c121")
                            série70to80.mapPolygons.template.fill = am4core.color("#42c121")

                            var série80to90 = resultatsSécuritéACH.series.push(new am4maps.MapPolygonSeries());
                            série80to90.name = "80 à 90 %";
                            série80to90.value = "80 à 90 %";
                            série80to90.title = "Oui en %";
                            série80to90.useGeodata = true;
                            série80to90.include = ["CH-FR", "CH-TI", "CH-VS", "CH-NE", "CH-GE", "CH-JU"];
                            série80to90.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série80to90.fill = am4core.color("#33d708")
                            série80to90.mapPolygons.template.fill = am4core.color("#33d708")  

                            var série90to100 = resultatsSécuritéACH.series.push(new am4maps.MapPolygonSeries());
                            série90to100.name = "90 à 100 %";
                            série90to100.value = "90 à 100 %";
                            série90to100.title = "Oui en %";
                            série90to100.useGeodata = true;
                            série90to100.include = ["CH-VD"];
                            série90to100.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série90to100.fill = am4core.color("#35ff00")
                            série90to100.mapPolygons.template.fill = am4core.color("#35ff00")                              
                            
                            resultatsSécuritéACH.legend = new am4maps.Legend();
                            resultatsSécuritéACH.legend.position = "left";
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