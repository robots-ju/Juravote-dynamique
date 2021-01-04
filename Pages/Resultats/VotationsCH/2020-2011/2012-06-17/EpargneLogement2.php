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
                        <p><b>Objet : </b>Initiative populaire du 23.01.2009 'Accéder à la propriété grâce à l'épargne-logement'</p>
                        <p><b>Participation : </b>38.53 %</p>
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
                            <h2>Résultats</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div id="chartEpargneLogement2" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatEpargneLogement2 = am4core.create("chartEpargneLogement2", am4charts.PieChart);

                            // Add data
                            resultatEpargneLogement2.data = [{
                                "votes": "OUI",
                                "suffrages": 601449
                            }, {
                                "votes": "NON",
                                "suffrages": 1332839
                            }];

                            // Add and configure Series
                            var dataEpargneLogement2 = resultatEpargneLogement2.series.push(new am4charts.PieSeries());
                            dataEpargneLogement2.dataFields.value = "suffrages";
                            dataEpargneLogement2.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatEpargneLogement2.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataEpargneLogement2.labels.template.disabled = true;
                            dataEpargneLogement2.ticks.template.disabled = true;

                            // Disable tooltips
                            dataEpargneLogement2.slices.template.tooltipText = "";

                            // Add a legend
                            resultatEpargneLogement2.legend = new am4charts.Legend();
                            resultatEpargneLogement2.legend.position = "right";

                            dataEpargneLogement2.colors.list = [
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
                        <div class="uk-align-right" id="chartEpargneLogement2CH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsEpargneLogement2CH = am4core.create("chartEpargneLogement2CH", am4maps.MapChart);

                            // Set map definition
                            resultatsEpargneLogement2CH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsEpargneLogement2CH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsEpargneLogement2CH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                    
                            var série20to30 = resultatsEpargneLogement2CH.series.push(new am4maps.MapPolygonSeries());
                            série20to30.name = "20 à 30 %";
                            série20to30.value = "20 à 30 %";
                            série20to30.title = "Oui en %";
                            série20to30.useGeodata = true;
                            série20to30.include = [ "CH-ZH", "CH-BE", "CH-LU", "CH-UR", "CH-OW", "CH-NW", "CH-GL", "CH-FR", "CH-SO", "CH-BS", "CH-AI", "CH-SG", "CH-TG", "CH-JU"];
                            série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série20to30.fill = am4core.color("#ca2f2f")
                            série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                            var série30to40 = resultatsEpargneLogement2CH.series.push(new am4maps.MapPolygonSeries());
                            série30to40.name = "30 à 40 %";
                            série30to40.value = "30 à 40 %";
                            série30to40.title = "Oui en %";
                            série30to40.useGeodata = true;
                            série30to40.include = ["CH-SZ", "CH-ZG", "CH-SH", "CH-AR", "CH-GR", "CH-AG", "CH-VD", "CH-VS", "CH-NE",];
                            série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série30to40.fill = am4core.color("#e74545")
                            série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                            var série40to50 = resultatsEpargneLogement2CH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-BL", "CH-TI", "CH-GE"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                            resultatsEpargneLogement2CH.legend = new am4maps.Legend();
                            resultatsEpargneLogement2CH.legend.position = "left";

                            
                                                
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