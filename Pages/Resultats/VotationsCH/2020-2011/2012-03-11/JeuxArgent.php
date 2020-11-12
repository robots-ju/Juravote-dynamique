<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 11 mars 2012</h1>
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
                        <p><b>Objet : </b>Arrêté fédéral du 29.09.2011 concernant la réglementation des jeux d’argent
                            en faveur de l’utilité publique (Contre-projet à l’initiative 'Pour des jeux d’argent au service du bien commun')</p>
                        <p><b>Participation : </b>44.77 %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Initiative populaire</p>
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
                        <div id="chartJeuxArgent" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatJeuxArgent = am4core.create("chartJeuxArgent", am4charts.PieChart);

                            // Add data
                            resultatJeuxArgent.data = [{
                                "votes": "OUI",
                                "suffrages": 1916182
                            }, {
                                "votes": "NON",
                                "suffrages": 284108
                            }];

                            // Add and configure Series
                            var dataJeuxArgent = resultatJeuxArgent.series.push(new am4charts.PieSeries());
                            dataJeuxArgent.dataFields.value = "suffrages";
                            dataJeuxArgent.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatJeuxArgent.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataJeuxArgent.labels.template.disabled = true;
                            dataJeuxArgent.ticks.template.disabled = true;

                            // Disable tooltips
                            dataJeuxArgent.slices.template.tooltipText = "";

                            // Add a legend
                            resultatJeuxArgent.legend = new am4charts.Legend();
                            resultatJeuxArgent.legend.position = "right";

                            dataJeuxArgent.colors.list = [
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
                        <div class="uk-align-right" id="chartJeuxArgentCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsJeuxArgentCH = am4core.create("chartJeuxArgentCH", am4maps.MapChart);

                            // Set map definition
                            resultatsJeuxArgentCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsJeuxArgentCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsJeuxArgentCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            
                            var série70to80 = resultatsJeuxArgentCH.series.push(new am4maps.MapPolygonSeries());
                            série70to80.name = "70 à 80 %";
                            série70to80.value = "70 à 80 %";
                            série70to80.title = "Oui en %";
                            série70to80.useGeodata = true;
                            série70to80.include = ["CH-UR", "CH-SZ", ];
                            série70to80.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série70to80.fill = am4core.color("#42c121")
                            série70to80.mapPolygons.template.fill = am4core.color("#42c121")

                            var série80to90 = resultatsJeuxArgentCH.series.push(new am4maps.MapPolygonSeries());
                            série80to90.name = "80 à 90 %";
                            série80to90.value = "80 à 90 %";
                            série80to90.title = "Oui en %";
                            série80to90.useGeodata = true;
                            série80to90.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-OW", "CH-NW", "CH-GL", "CH-ZG", "CH-FR", "CH-SO", "CH-BS", "CH-BL", "CH-SH", "CH-AR", "CH-AI", "CH-SG", "CH-GR", 
                                                    "CH-AG", "CH-TG", "CH-TI", "CH-VS", "CH-NE", "CH-JU"]
                            série80to90.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série80to90.fill = am4core.color("#33d708")
                            série80to90.mapPolygons.template.fill = am4core.color("#33d708")

                            var série90to100 = resultatsJeuxArgentCH.series.push(new am4maps.MapPolygonSeries());
                            série90to100.name = "90 à 100 %";
                            série90to100.value = "90 à 100 %";
                            série90to100.title = "Oui en %";
                            série90to100.useGeodata = true;
                            série90to100.include = ["CH-GE", "CH-VD", ];
                            série90to100.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série90to100.fill = am4core.color("#35ff00")
                            série90to100.mapPolygons.template.fill = am4core.color("#35ff00")

                            resultatsJeuxArgentCH.legend = new am4maps.Legend();
                            resultatsJeuxArgentCH.legend.position = "left";

                            
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