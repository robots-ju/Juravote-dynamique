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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 18 mai 2014</h1>
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
                        <p><b>Objet : </b>Arrêté fédéral du 19.09.2013 concernant les soins médicaux de base
                            (Contre-projet direct à l'initiative populaire «Oui à la médecine de famille»)</p>
                        <p><b>Participation : </b>55.85 %</p>
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
                        <div id="chartMédecine" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatMédecine = am4core.create("chartMédecine", am4charts.PieChart);

                            // Add data
                            resultatMédecine.data = [{
                                "votes": "OUI",
                                "suffrages": 2480870
                            }, {
                                "votes": "NON",
                                "suffrages": 336196
                            }];

                            // Add and configure Series
                            var dataMédecine = resultatMédecine.series.push(new am4charts.PieSeries());
                            dataMédecine.dataFields.value = "suffrages";
                            dataMédecine.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatMédecine.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataMédecine.labels.template.disabled = true;
                            dataMédecine.ticks.template.disabled = true;

                            // Disable tooltips
                            dataMédecine.slices.template.tooltipText = "";

                            // Add a legend
                            resultatMédecine.legend = new am4charts.Legend();
                            resultatMédecine.legend.position = "right";

                            dataMédecine.colors.list = [
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
                        <div class="uk-align-right" id="chartMédecineCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsMédecineCH = am4core.create("chartMédecineCH", am4maps.MapChart);

                            // Set map definition
                            resultatsMédecineCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsMédecineCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsMédecineCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série80to90 = resultatsMédecineCH.series.push(new am4maps.MapPolygonSeries());
                            série80to90.name = "80 à 90 %";
                            série80to90.value = "80 à 90 %";
                            série80to90.title = "Oui en %";
                            série80to90.useGeodata = true;
                            série80to90.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-UR", "CH-SZ", "CH-OW",
                            "CH-NW", "CH-GL", "CH-ZG", "CH-SO", "CH-BS", "CH-BL", "CH-SH", "CH-AR",
                            "CH-AI", "CH-SG", "CH-GR", "CH-AG", "CH-TG", "CH-TI", "CH-VS"];
                            série80to90.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série80to90.fill = am4core.color("#33d708")
                            série80to90.mapPolygons.template.fill = am4core.color("#33d708")

                            var série90to100 = resultatsMédecineCH.series.push(new am4maps.MapPolygonSeries());
                            série90to100.name = "90 à 100 %";
                            série90to100.value = "90 à 100 %";
                            série90to100.title = "Oui en %";
                            série90to100.useGeodata = true;
                            série90to100.include = ["CH-FR", "CH-VD", "CH-NE", "CH-GE", "CH-JU"];
                            série90to100.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série90to100.fill = am4core.color("#35ff00")
                            série90to100.mapPolygons.template.fill = am4core.color("#35ff00")

                            resultatsMédecineCH.legend = new am4maps.Legend();
                            resultatsMédecineCH.legend.position = "left";
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