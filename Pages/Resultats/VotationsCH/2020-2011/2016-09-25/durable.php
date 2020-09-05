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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 25 septembre 2016</h1>
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
                        <p><b>Objet : </b>Initiative populaire du 06.09.2012 «Pour économie durable et fondée sur une gestion efficiente des ressources (économie verte)»</p>
                        <p><b>Participation : </b>43,00 %</p>
                        <p><b>Résultat : </b>Refusé</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Initiative</p>
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
                        <div id="chartDurable" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatDurable = am4core.create("chartDurable", am4charts.PieChart);

                            // Add data
                            resultatDurable.data = [{
                                "votes": "OUI",
                                "suffrages": 819770
                            }, {
                                "votes": "NON",
                                "suffrages": 1430273
                            }];

                            // Add and configure Series
                            var dataDurable = resultatDurable.series.push(new am4charts.PieSeries());
                            dataDurable.dataFields.value = "suffrages";
                            dataDurable.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatDurable.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataDurable.labels.template.disabled = true;
                            dataDurable.ticks.template.disabled = true;

                            // Disable tooltips
                            dataDurable.slices.template.tooltipText = "";

                            // Add a legend
                            resultatDurable.legend = new am4charts.Legend();
                            resultatDurable.legend.position = "right";

                            dataDurable.colors.list = [
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
                        <div class="uk-align-right" id="chartDurablech" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsDurableCH = am4core.create("chartDurablech", am4maps.MapChart);

                            // Set map definition
                            resultatsDurableCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsDurableCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsDurableCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            
                            var série20to30 = resultatsDurableCH.series.push(new am4maps.MapPolygonSeries());
                            série20to30.name = "20 à 30 %";
                            série20to30.value = "20 à 30 %";
                            série20to30.title = "Oui en %";
                            série20to30.useGeodata = true;
                            série20to30.include = ["CH-UR","CH-SZ","CH-OW","CH-NW","CH-ZG","CH-AI","CH-VS"];
                            série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série20to30.fill = am4core.color("#ca2f2f")
                            série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                            var série30to40 = resultatsDurableCH.series.push(new am4maps.MapPolygonSeries());
                            série30to40.name = "30 à 40 %";
                            série30to40.value = "30 à 40 %";
                            série30to40.title = "Oui en %";
                            série30to40.useGeodata = true;
                            série30to40.include = ["CH-ZH","CH-BE","CH-LU","CH-GL","CH-FR","CH-SO","CH-BL","CH-SH",
                            "CH-AR","CH-SG","CH-GR","CH-AG","CH-TG"];
                            série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série30to40.fill = am4core.color("#e74545")
                            série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                            var série40to50 = resultatsDurableCH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-BS","CH-TI","CH-VD","CH-NE","CH-JU"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                            var série50to60 = resultatsDurableCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-GE"];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")
                    
                            resultatsDurableCH.legend = new am4maps.Legend();
                            resultatsDurableCH.legend.position = "left";
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