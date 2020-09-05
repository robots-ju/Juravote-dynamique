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
                        <p><b>Objet : </b>Modification du 30.09.2011 de la loi fédérale sur l’assurance-maladie (LAMal) (Réseaux de soins)</p>
                        <p><b>Participation : </b>38.65 %</p>
                        <p><b>Résultat : </b>Refusé</p>
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
                        <div id="chartLAMal" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatLAMal = am4core.create("chartLAMal", am4charts.PieChart);

                            // Add data
                            resultatLAMal.data = [{
                                "votes": "OUI",
                                "suffrages": 466993
                            }, {
                                "votes": "NON",
                                "suffrages": 1482536
                            }];

                            // Add and configure Series
                            var dataLAMal = resultatLAMal.series.push(new am4charts.PieSeries());
                            dataLAMal.dataFields.value = "suffrages";
                            dataLAMal.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatLAMal.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataLAMal.labels.template.disabled = true;
                            dataLAMal.ticks.template.disabled = true;

                            // Disable tooltips
                            dataLAMal.slices.template.tooltipText = "";

                            // Add a legend
                            resultatLAMal.legend = new am4charts.Legend();
                            resultatLAMal.legend.position = "right";

                            dataLAMal.colors.list = [
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
                        <div class="uk-align-right" id="chartLAMalCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsLAMalCH = am4core.create("chartLAMalCH", am4maps.MapChart);

                            // Set map definition
                            resultatsLAMalCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsLAMalCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsLAMalCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                                                        //Create data series
                                                        var série0to10 = resultatsLAMalCH.series.push(new am4maps.MapPolygonSeries());
                            série0to10.name = "0 à 10 %";
                            série0to10.value = "0 à 10 %";
                            série0to10.title = "Oui en %";
                            série0to10.useGeodata = true;
                            série0to10.include = ["CH-VD"];
                            série0to10.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série0to10.fill = am4core.color("#a00000")
                            série0to10.mapPolygons.template.fill = am4core.color("#a00000")

                            var série10to20 = resultatsLAMalCH.series.push(new am4maps.MapPolygonSeries());
                            série10to20.name = "10 à 20 %";
                            série10to20.value = "10 à 20 %";
                            série10to20.title = "Oui en %";
                            série10to20.useGeodata = true;
                            série10to20.include = ["CH-BL", "CH-TI", "CH-VS", "CH-NE", "CH-GE", "CH-JU",];
                            série10to20.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série10to20.fill = am4core.color("#db0000")
                            série10to20.mapPolygons.template.fill = am4core.color("#db0000")

                            var série20to30 = resultatsLAMalCH.series.push(new am4maps.MapPolygonSeries());
                            série20to30.name = "20 à 30 %";
                            série20to30.value = "20 à 30 %";
                            série20to30.title = "Oui en %";
                            série20to30.useGeodata = true;
                            série20to30.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-UR", "CH-SZ", "CH-OW", "CH-NW", "CH-GL", "CH-ZG", "CH-FR", "CH-SO", "CH-BS", "CH-SH", "CH-GR"];
                            série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série20to30.fill = am4core.color("#ca2f2f")
                            série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                            var série30to40 = resultatsLAMalCH.series.push(new am4maps.MapPolygonSeries());
                            série30to40.name = "30 à 40 %";
                            série30to40.value = "30 à 40 %";
                            série30to40.title = "Oui en %";
                            série30to40.useGeodata = true;
                            série30to40.include = ["CH-AI", "CH-AR", "CH-SG", "CH-AG", "CH-TG",];
                            série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série30to40.fill = am4core.color("#e74545")
                            série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                            resultatsLAMalCH.legend = new am4maps.Legend();
                            resultatsLAMalCH.legend.position = "left";

                            
                                                                
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